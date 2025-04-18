@extends('admindashbord.asidbar')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-[#1a1c1e]">
    <div class="w-full max-w-4xl bg-[#1a1c1e] rounded-xl p-10 shadow-lg">
        <h2 class="text-3xl font-bold text-cinema-light mb-8 text-center">Modifier une Salle</h2>

        <form method="POST" action="/updatedSalle">
            @csrf
            <input type="hidden" name="id" value="{{ $Salles->id }}">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8"> 
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium mb-2 text-white">Nom de la Salle *</label>
                        <input type="text" name="name" value="{{ $Salles->name }}" required
                            class="w-full bg-[#131416] border border-gray-700 rounded-lg py-3 px-4 text-white">
                        @error('name')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2 text-white">Type de Salle *</label>
                        <select name="type" required
                            class="w-full bg-[#131416] border border-gray-700 rounded-lg py-3 px-4 text-white">
                            <option value="">Sélectionner un type</option>
                            <option value="standard" {{ $Salles->type == 'standard' ? 'selected' : '' }}>Standard</option>
                            <option value="imax" {{ $Salles->type == 'imax' ? 'selected' : '' }}>IMAX</option>
                            <option value="3d" {{ $Salles->type == '3d' ? 'selected' : '' }}>3D</option>
                            <option value="premium" {{ $Salles->type == 'premium' ? 'selected' : '' }}>Premium/VIP</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2 text-white">Capacité (places) *</label>
                        <input type="number" name="capacite" value="{{ $Salles->capacite }}" min="1" max="500" required
                            class="w-full bg-[#131416] border border-gray-700 rounded-lg py-3 px-4 text-white">
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2 text-white">Statut *</label>
                        <select name="status" required
                            class="w-full bg-[#131416] border border-gray-700 rounded-lg py-3 px-4 text-white">
                            <option value="disponible" {{ $Salles->status == 'disponible' ? 'selected' : '' }}>Disponible</option>
                            <option value="en seance" {{ $Salles->status == 'en seance' ? 'selected' : '' }}>En séance</option>
                            <option value="maitenance" {{ $Salles->status == 'maitenance' ? 'selected' : '' }}>Maintenance</option>
                        </select>
                    </div>
                </div>

                <!-- Colonne droite -->
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium mb-2 text-white">Équipement principal *</label>
                        <div class="space-y-2 text-white">
                            @foreach (['3d' => 'Projecteur 3D', 'dolby' => 'Dolby Atmos', 'surround' => 'Son Surround', 'reclining' => 'Sièges inclinables'] as $value => $label)
                            <label class="flex items-center">
                                <input type="radio" name="equipment" value="{{ $value }}" {{ $Salles->equipment == $value ? 'checked' : '' }} class="mr-2"> {{ $label }}
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2 text-white">Description</label>
                        <input type="text" name="description" value="{{ $Salles->description }}"
                            class="w-full bg-[#131416] border border-gray-700 rounded-lg py-3 px-4 text-white"
                            placeholder="Brève description">
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2 text-white">Notes de maintenance</label>
                        <input type="text" name="maintenance_notes" value="{{ $Salles->maintenance_notes }}"
                            class="w-full bg-[#131416] border border-gray-700 rounded-lg py-3 px-4 text-white"
                            placeholder="Laisser vide si aucune maintenance">
                    </div>
                </div>
            </div>

            <div class="pt-6 flex justify-center">
                <button type="submit"
                    class="px-8 py-3 bg-cinema-gold hover:bg-yellow-500 text-black font-semibold rounded-lg text-lg w-full sm:w-1/2">
                    Mettre à jour la Salle
                </button>
            </div>
        </form>
    </div>
</div>

<script src="{{ asset('js/dashbordsalle.js') }}"></script>
@endsection
