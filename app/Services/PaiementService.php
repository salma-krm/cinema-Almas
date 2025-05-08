<?php

namespace App\Services;

use App\Exceptions\CustomException\InCompleteProcess;
use App\Models\Paiement;
use App\Models\Reservation;
use App\Repositories\Interfaces\IFilm;
use App\Repositories\Interfaces\IReservation;
use App\Repositories\Interfaces\ISalle;
use App\Repositories\Interfaces\ISeance;
use App\Services\Interfaces\IPaiementService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class PaiementService implements IPaiementService
{
    private IReservation $reservationRepo;
    private ISeance $seanceRepo;
    private ISalle $salleRepo;
    private IFilm $filmRepo;

    public function __construct(IReservation $reservationRepo, IFilm $filmRepo, ISeance $seanceRepo, ISalle $salleRepo)
    {
        $this->reservationRepo = $reservationRepo;
        $this->seanceRepo = $seanceRepo;
        $this->salleRepo = $salleRepo;
        $this->filmRepo = $filmRepo;
    }
    public function getPanier()
    {
        
      $panier = session()->get('ticket');
      return $panier;
    }

    public function session()
    {
    $user = auth()->user();
    if (!$user) {
        return redirect('login')->with('error', 'Veuillez vous connecter pour continuer.');
    }
        try {
            Stripe::setApiKey(config('services.stripe.secret'));

            $ticket = session()->get('ticket');

            if (empty($ticket)) {
                throw new InCompleteProcess('Aucun ticket trouvé dans la session');
            }
            $productName = $ticket->title ?? 'Billet Cinéma';
            $quantite = $ticket->quantity ?? 1;
            $prixUnitaire = $ticket->prix_unite ?? 100;

            $checkoutSession = Session::create([
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'eur',
                        'product_data' => [
                            'name' => $productName,
                            'description' => 'Billet pour ' . $productName,
                        ],
                        'unit_amount' => $prixUnitaire * 100, 
                    ],
                    'quantity' => $quantite,
                ]],
                'mode' => 'payment',
                'success_url' => route('success'),
                'cancel_url' => route('checkout'),
                'metadata' => [
                    'ticket_id' => $ticket->id,
                    'user_id' => auth()->id() ?? 'guest',
                ],
            ]);
            return redirect()->away($checkoutSession->url);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erreur lors du paiement : ' . $e->getMessage());
        }
    }

   
 

    public function success()
    {
        DB::beginTransaction();
        try {
            $ticket = session()->get('ticket');
            $user = auth()->user();
            if (empty($ticket)) {
                throw new InCompleteProcess('Aucun ticket trouvé dans votre reservation');
            }
            if (!$user) {
                throw new InCompleteProcess('Veuillez vous connecter');
            }
            $seance = $this->seanceRepo->getById($ticket->id);
            if (!$seance) {
                throw new InCompleteProcess('Séance non trouvée');
            }
            $reservedCount = $this->reservationRepo->getReservedCount($seance->id);
            $salle = $this->salleRepo->findById($seance->salle_id);
            $availableSeats = $salle->capacite - $reservedCount;
    
            if ($availableSeats < $ticket->quantity) {
                throw new InCompleteProcess('Plus assez de places disponibles');
            }
    
            $reservation = new Reservation();
            $reservation->quantite = $ticket->quantity;
            $reservation->seance()->associate($seance);
            $reservation->user()->associate($user);
            $this->reservationRepo->create($reservation);
    
            $paiement = new Paiement();
            $montant = $ticket->quantity * $ticket->prix_unite;
            $paiement->montant = $montant;
            $paiement->reservation()->associate($reservation);
            $this->reservationRepo->create($paiement);
            session()->forget('ticket');
    
            DB::commit();
    
            return view('success', [
                'message' => 'Merci pour votre achat ! Votre paiement a été effectué avec succès.',
                'ticket' => $ticket,
                'reservation' => $reservation,
                'reference' => 'CIN-' . strtoupper(uniqid())
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect('/show/panier')->with('error', 'Erreur lors de la réservation : ' . $e->getMessage());
        }
    }
    
    
    public function AjouterPanier($data)
    {
      $ticket = session()->get('ticket');
      $quantity = $data->get('quantity');
      $id = $data['id'];
      $seance = $this->seanceRepo->getById($id);
      if (!$seance) {
        throw new InCompleteProcess('seance non trouvable');
       }
      $reservedCount = $this->reservationRepo->getReservedCount($seance->id);
      $salle = $this->salleRepo->findById($seance->salle_id);
      $availableSeats = $salle->capacite - $reservedCount;

      if ($availableSeats < $quantity) {
        throw new InCompleteProcess('Il ne reste que ' . $availableSeats . ' places disponibles pour cette séance.');
    }
    
        $film = $this->filmRepo->findById($seance->film_id);
        $ticket = session()->get('ticket');
        $ticket = new \stdClass();
        $ticket->id = $id;
        $ticket->title = $film->title;
        $ticket->prix_unite = $film->budget;
        $ticket->date_sortie = $seance->horaire;
        $ticket->description = $film->resume;
        $ticket->photo = $film->photo;
        $ticket->duree = $film->duree;
        $ticket->age_restriction = $film->age_restriction;
        $ticket->quantity = $data['quantity'] ?? 1;
        $panier = session()->put('ticket', $ticket);
        return $panier;  
    }
    public function deletPanier($id)
    {
      $ticket = session()->get('ticket');
    
      if ($ticket && $ticket->id == $id) {
        session()->forget('ticket');
      }
    }

}
