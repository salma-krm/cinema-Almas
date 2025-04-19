@extends('admindashbord.asidbar')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-[#1a1c1e]">
    <div class="w-full max-w-3xl bg-[#1a1c1e] rounded-xl p-10 shadow-lg">
        <h2 class="text-3xl font-bold text-cinema-light mb-8 text-center">Modifier un Acteur</h2>

        <form method="POST" action="/updateacteur" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $actor->id }}">

            <div class="space-y-6">
                <!-- Nom -->
                <div>
                    <label class="block text-sm font-medium mb-2 text-white">Nom de l’acteur *</label>
                    <input type="text" name="name" value="{{ $actor->name }}" required
                        class="w-full bg-[#131416] border border-gray-700 rounded-lg py-3 px-4 text-white">
                    @error('name')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-sm font-medium mb-2 text-white">Description</label>
                    <textarea name="description" rows="4"
                        class="w-full bg-[#131416] border border-gray-700 rounded-lg py-3 px-4 text-white">{{ $actor->description }}</textarea>
                    @error('description')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Photo actuelle -->
                <div>
                    <label class="block text-sm font-medium mb-2 text-white">Photo actuelle</label>
                    @php
                        $photo = Str::startsWith($actor->photo, ['http://', 'https://']) 
                                 ? $actor->photo 
                                 : asset('storage' . $actor->photo);
                    @endphp
                    <img src="{{ $photo }}" alt="{{ $actor->name }}" class="w-24 h-24 object-cover rounded-full border-2 border-cinema-gold shadow-md mb-3">
                </div>

                <!-- Nouvelle Photo -->
                <div>
                    <label class="block text-sm font-medium mb-2 text-white">Changer la photo</label>
                    <input type="file" name="photo"
                        class="w-full bg-[#131416] border border-gray-700 rounded-lg py-2 px-4 text-white file:bg-cinema-gold file:text-black file:rounded file:py-2 file:px-4">
                    @error('photo')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Bouton -->
                <div class="pt-4 flex justify-center">
                    <button type="submit"
                        class="px-8 py-3 bg-cinema-gold hover:bg-yellow-500 text-black font-semibold rounded-lg text-lg w-full sm:w-1/2">
                        Mettre à jour l’acteur
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="{{ asset('js/dashbordsalle.js') }}"></script>
@endsection
