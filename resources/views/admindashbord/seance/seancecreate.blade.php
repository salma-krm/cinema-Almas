@extends('admindashbord.asidbar')

@section('content')
<div class="flex h-screen justify-center items-center">
  <main class="w-full max-w-2xl bg-[#1a1a1a] p-8 rounded-lg shadow-lg">
    <h1 class="text-2xl md:text-3xl font-bold text-white mb-6 text-center">Ajouter une Nouvelle Séance</h1>

    <form method="POST" action="/create/seance">
      @csrf
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

        <!-- Film -->
        <div>
          <label for="film_id" class="block text-sm font-medium text-white mb-2">Film *</label>
          <select name="film_id" id="film_id" required class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
            <option value="" disabled selected>Choisissez un film</option>
            @foreach($films as $film)
              <option value="{{ $film->id }}">{{ $film->title }}</option>
            @endforeach
          </select>
        </div>

        <!-- Salle -->
        <div>
          <label for="salle_id" class="block text-sm font-medium text-white mb-2">Salle *</label>
          <select name="salle_id" id="salle_id" required class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
            <option value="" disabled selected>Choisissez une salle</option>
            @foreach($salles as $salle)
              <option value="{{ $salle->id }}">{{ $salle->name }}</option>
            @endforeach
          </select>
        </div>

        <!-- Horaire -->
        <div class="col-span-2">
          <label for="date_heure" class="block text-sm font-medium text-white mb-2">Date & Heure de la Séance *</label>
          <input type="datetime-local" name="horaire" id="date_heure" required class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white">
        </div>

      </div>

      <div class="pt-4 flex justify-center">
        <button type="submit" class="px-6 py-2 bg-cinema-gold hover:bg-yellow-500 text-black font-medium rounded-lg">
          Ajouter la Séance
        </button>
      </div>
    </form>
  </main>
</div>

<script src="{{ asset('js/dashbordsalle.js') }}"></script>
@endsection
