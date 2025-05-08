@extends('admindashbord.asidbar')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-[#1a1c1e]">
    <div class="w-full max-w-3xl bg-[#1a1c1e] rounded-xl p-10 shadow-lg">
        <h2 class="text-3xl font-bold text-cinema-light mb-8 text-center">Modifier une Séance</h2>

        <form method="POST" action="/update/seance">
            @csrf
            <input type="hidden" name="id" value="{{ $seance->id }}">
            <div class="space-y-6">
                <!-- Horaire -->
                <div>
                    <label class="block text-sm font-medium mb-2 text-white">Horaire *</label>
                    <input type="datetime-local" name="horaire"
                        value="{{ \Carbon\Carbon::parse($seance->horaire)->format('Y-m-d\TH:i') }}" required
                        class="w-full bg-[#131416] border border-gray-700 rounded-lg py-3 px-4 text-white">
                    @error('horaire')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Film -->
                <div>
                    <label class="block text-sm font-medium mb-2 text-white">Film *</label>
                    <select name="film_id" class="w-full bg-[#131416] border border-gray-700 rounded-lg py-3 px-4 text-white" required>
                        @foreach($films as $film)
                            <option value="{{ $film->id }}" {{ $seance->film_id == $film->id ? 'selected' : '' }}>
                                {{ $film->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('film_id')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Salle -->
                <div>
                    <label class="block text-sm font-medium mb-2 text-white">Salle *</label>
                    <select name="salle_id" class="w-full bg-[#131416] border border-gray-700 rounded-lg py-3 px-4 text-white" required>
                        @foreach($salles as $salle)
                            <option value="{{ $salle->id }}" {{ $seance->salle_id == $salle->id ? 'selected' : '' }}>
                                {{ $salle->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('salle_id')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Bouton -->
                <div class="pt-4 flex justify-center">
                    <button type="submit"
                        class="px-8 py-3 bg-cinema-gold hover:bg-yellow-500 text-black font-semibold rounded-lg text-lg w-full sm:w-1/2">
                        Mettre à jour la séance
                    </button>
                </div>
            </div>
            <script src="{{ asset('js/dashbordsalle.js') }}"></script>
        </form>
    </div>
</div>
@endsection
