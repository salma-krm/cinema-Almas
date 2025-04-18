@extends('admindashbord.asidbar')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-[#1a1c1e]">
    <div class="w-full max-w-4xl bg-[#1a1c1e] rounded-xl p-10 shadow-lg">
        <h2 class="text-3xl font-bold text-cinema-light mb-8 text-center">Ajouter une Nouvelle Salle</h2>
        

        <form method="POST" action="{{ route('Salle.create') }}">
            @csrf
        
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                
            
                <div class="space-y-6">
                    <div>
                        <label for="room-name" class="block text-sm font-medium mb-2 text-white">Nom de la Salle *</label>
                        <input type="text" id="room-name" name="name" required
                            class="w-full bg-[#131416] border border-gray-700 rounded-lg py-3 px-4 text-white">
                        @error('name')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
        
                    <div>
                        <label for="room-type" class="block text-sm font-medium mb-2 text-white">Type de Salle *</label>
                        <select id="room-type" name="type" required
                            class="w-full bg-[#131416] border border-gray-700 rounded-lg py-3 px-4 text-white">
                            <option value="">Sélectionner un type</option>
                            <option value="standard">Standard</option>
                            <option value="imax">IMAX</option>
                            <option value="3d">3D</option>
                            <option value="premium">Premium/VIP</option>
                        </select>
                    </div>
        
                    <div>
                        <label for="room-capacity" class="block text-sm font-medium mb-2 text-white">Capacité (places) *</label>
                        <input type="number" id="room-capacity" name="capacite" min="1" max="500" required
                            class="w-full bg-[#131416] border border-gray-700 rounded-lg py-3 px-4 text-white">
                    </div>
        
                    <div>
                        <label for="room-status" class="block text-sm font-medium mb-2 text-white">Statut *</label>
                        <select id="room-status" name="status" required
                            class="w-full bg-[#131416] border border-gray-700 rounded-lg py-3 px-4 text-white">
                            <option value="disponible">Disponible</option>
                            <option value="en seance">En séance</option>
                            <option value="maitenance">Maintenance</option>
                        </select>
                    </div>
                </div>
        
                <!-- Colonne droite -->
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium mb-2 text-white">Équipement principal *</label>
                        <div class="space-y-2 text-white">
                            <label class="flex items-center">
                                <input type="radio" name="equipment" value="3d" required class="mr-2"> Projecteur 3D
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="equipment" value="dolby" class="mr-2"> Dolby Atmos
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="equipment" value="surround" class="mr-2"> Son Surround
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="equipment" value="reclining" class="mr-2"> Sièges inclinables
                            </label>
                        </div>
                    </div>
        
                    <div>
                        <label for="room-description" class="block text-sm font-medium mb-2 text-white">Description</label>
                        <input type="text" id="room-description" name="description"
                            class="w-full bg-[#131416] border border-gray-700 rounded-lg py-3 px-4 text-white"
                            placeholder="Brève description">
                    </div>
        
                    <div>
                        <label for="room-maintenance-notes" class="block text-sm font-medium mb-2 text-white">Notes de maintenance</label>
                        <input type="text" id="room-maintenance-notes" name="maintenance_notes"
                            class="w-full bg-[#131416] border border-gray-700 rounded-lg py-3 px-4 text-white"
                            placeholder="Laisser vide si aucune maintenance">
                    </div>
                </div>
            </div>
        
            <div class="pt-6 flex justify-center">
                <button type="submit"
                    class="px-8 py-3 bg-cinema-gold hover:bg-yellow-500 text-black font-semibold rounded-lg text-lg w-full sm:w-1/2">
                    Ajouter la Salle
                </button>
            </div>
        </form>
        
        
        
        
    </div>
</div>

<script src= "{{asset('js/dashbordsalle.js')}}"></script> 
@endsection
