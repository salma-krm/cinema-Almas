@extends('admindashbord.asidbar')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-[#1a1c1e]">
    <div class="w-full max-w-3xl bg-[#1a1c1e] rounded-xl p-10 shadow-lg">
        <h2 class="text-3xl font-bold text-cinema-light mb-8 text-center">Modifier un Rôle</h2>

        <form method="POST" action="/updaterole">
            @csrf
            <input type="hidden" name="id" value="{{ $role->id }}">

            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-medium mb-2 text-white">Nom du Rôle *</label>
                    <input type="text" name="name" value="{{ $role->name }}" required
                        class="w-full bg-[#131416] border border-gray-700 rounded-lg py-3 px-4 text-white">
                    @error('name')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pt-4 flex justify-center">
                    <button type="submit"
                        class="px-8 py-3 bg-cinema-gold hover:bg-yellow-500 text-black font-semibold rounded-lg text-lg w-full sm:w-1/2">
                        Mettre à jour le Rôle
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="{{ asset('js/dashbordsalle.js') }}"></script>
@endsection
