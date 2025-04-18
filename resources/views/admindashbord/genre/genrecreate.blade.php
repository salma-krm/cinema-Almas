@extends('admindashbord.asidbar')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-[#1a1c1e]">
    <div class="w-full max-w-4xl bg-[#1a1c1e] rounded-xl p-10 shadow-lg">
        <h2 class="text-3xl font-bold text-cinema-light mb-8 text-center">Ajouter une Nouvelle Genre</h2>

        <form method="POST" action="{{ route('genre.create') }}">
            @csrf

            <div class="space-y-6">
                
                    
                        <label for="genre-name" class="block text-sm font-medium mb-2 text-white">Nom de la Genre *</label>
                        <input type="text" name="name"  required
                        class="w-full bg-[#131416] border border-gray-700 rounded-lg py-3 px-4 text-white">
                        @error('name')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    
               
            </div>

            <div class="pt-6 flex justify-center">
                <button type="submit"
                    class="px-8 py-3 bg-cinema-gold hover:bg-yellow-500 text-black font-semibold rounded-lg text-lg w-full sm:w-1/2">
                    Ajouter la Genre
                </button>
            </div>
        </form>
    </div>
</div>

<script src="{{ asset('js/dashbordsalle.js') }}"></script>
@endsection
