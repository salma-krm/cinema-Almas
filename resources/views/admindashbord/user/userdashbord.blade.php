@extends('admindashbord.asidbar')
@section('content')
<div class="p-8">
  <div class="flex justify-between items-center mb-8">
    <h1 class="text-3xl font-bold">gestion Utilisateurs</h1>
    <div class="flex space-x-2">
      <select id="period-selector" class="bg-[#1a1c1e] border border-gray-700 rounded-lg py-2 px-4 text-sm">
        <option value="7">7 derniers jours</option>
        <option value="30" selected>30 derniers jours</option>
        <option value="90">3 derniers mois</option>
        <option value="365">Année en cours</option>
      </select>
      <button id="export-stats" class="bg-cinema-gold text-black px-4 py-2 rounded-lg flex items-center hover:bg-yellow-400 transition-colors">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
        </svg>
        Exporter
      </button>
    </div>
  </div>

  <!-- Cartes de statistiques -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Utilisateurs -->
    <div class="bg-[#1a1c1e] rounded-xl p-6">
      <div class="flex justify-between items-start">
        <div>
          <p class="text-gray-400 text-sm">Total Utilisateurs</p>
          <h3 class="text-3xl font-bold mt-1">1,248</h3>
          <p class="text-green-400 text-sm mt-2 flex items-center">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
            +12.5% <span class="text-gray-400 ml-1">vs mois précédent</span>
          </p>
        </div>
        <div class="bg-blue-900 bg-opacity-30 p-3 rounded-lg">
          <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
        </div>
      </div>
    </div>

    <!-- Utilisateurs Actifs -->
    <div class="bg-[#1a1c1e] rounded-xl p-6">
      <div class="flex justify-between items-start">
        <div>
          <p class="text-gray-400 text-sm">Utilisateurs Actifs</p>
          <h3 class="text-3xl font-bold mt-1">876</h3>
          <p class="text-green-400 text-sm mt-2 flex items-center">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
            +8.2% <span class="text-gray-400 ml-1">vs mois précédent</span>
          </p>
        </div>
        <div class="bg-green-900 bg-opacity-30 p-3 rounded-lg">
          <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
      </div>
    </div>

    <!-- Nouveaux Utilisateurs -->
    <div class="bg-[#1a1c1e] rounded-xl p-6">
      <div class="flex justify-between items-start">
        <div>
          <p class="text-gray-400 text-sm">Nouveaux Utilisateurs</p>
          <h3 class="text-3xl font-bold mt-1">142</h3>
          <p class="text-green-400 text-sm mt-2 flex items-center">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
            +24.8% <span class="text-gray-400 ml-1">vs mois précédent</span>
          </p>
        </div>
        <div class="bg-purple-900 bg-opacity-30 p-3 rounded-lg">
          <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
          </svg>
        </div>
      </div>
    </div>

    <!-- Taux de Conversion -->
    <div class="bg-[#1a1c1e] rounded-xl p-6">
      <div class="flex justify-between items-start">
        <div>
          <p class="text-gray-400 text-sm">Taux de Conversion</p>
          <h3 class="text-3xl font-bold mt-1">68.4%</h3>
          <p class="text-red-400 text-sm mt-2 flex items-center">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
            -3.2% <span class="text-gray-400 ml-1">vs mois précédent</span>
          </p>
        </div>
        <div class="bg-yellow-900 bg-opacity-30 p-3 rounded-lg">
          <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
          </svg>
        </div>
      </div>
    </div>
  </div>

  <!-- Graphiques -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
    <!-- Graphique d'Inscriptions -->
    <div class="bg-[#1a1c1e] rounded-xl p-6">
      <h3 class="text-lg font-bold mb-4">Inscriptions Utilisateurs</h3>
      <div class="h-80">
        <canvas id="registrationsChart"></canvas>
      </div>
    </div>

    <!-- Graphique de Distribution des Rôles -->
    <div class="bg-[#1a1c1e] rounded-xl p-6">
      <h3 class="text-lg font-bold mb-4">Distribution des Rôles</h3>
      <div class="h-80">
        <canvas id="rolesChart"></canvas>
      </div>
    </div>
  </div>

  <!-- Activité Utilisateurs -->
  <div class="grid grid-cols-1 gap-6 mb-8">
    <div class="bg-[#1a1c1e] rounded-xl p-6">
      <h3 class="text-lg font-bold mb-4">Activité Utilisateurs</h3>
      <div class="h-80">
        <canvas id="activityChart"></canvas>
      </div>
    </div>
  </div>

  <!-- Utilisateurs Récents -->
  <div class="bg-[#1a1c1e] rounded-xl p-6">
    <div class="flex justify-between items-center mb-6">
      <h3 class="text-lg font-bold">Utilisateurs Récemment Inscrits</h3>
      <a href="#" class="text-cinema-gold hover:underline text-sm">Voir tous</a>
    </div>
    <div class="overflow-x-auto">

    <table class="w-full">
      <thead>
        <tr class="text-left border-b border-gray-700">
          <th class="pb-3 font-medium">Utilisateur</th>
          <th class="pb-3 font-medium">Email</th>
          <th class="pb-3 font-medium">Rôle</th>
          <th class="pb-3 font-medium">Date d'inscription</th>
          <th class="pb-3 font-medium">Statut</th>
          <th class="pb-3 font-medium">Actions</th> 
        </tr>
      </thead>
      @foreach ($users as $user)
      <tbody class="text-gray-300">
        <tr class="border-b border-gray-700">
          <td class="py-3 flex items-center">
            <img src="{{url('storage/' . $user->photo )}}"
            alt="Profile Picture" 
            class="w-8 h-8 rounded-full border-2 border-cinema-gold object-cover" />
                {{$user->name}}
          </td>
          <td class="py-3">{{$user->email}}</td>
          <td class="py-3">
            <form action="{{ route('user.updateRole', $user->id) }}" method="POST">
              @csrf
              @method('POST')
              <select name="role" class="bg-gray-800 text-gray-300 border border-gray-700 rounded-md py-1 px-2" onchange="this.form.submit()">
                  <option value="{{ $user->roles->name }}" selected>{{ $user->roles->name }}</option>
                  @foreach ($roles as $role)
                      @if ($role->name !== $user->roles->name)
                          <option value="{{ $role->name }}">{{ $role->name }}</option>
                      @endif
                  @endforeach
              </select>
          </form>
          
          </td>
          <td class="py-3">{{$user->created_at}}</td>
          <td class="py-3">
            <span class="px-2 py-1 bg-green-900 text-green-200 rounded-full text-xs">Actif</span>
          </td>
          <td class="py-3">
            <div class="flex gap-2">
              <a href="{{ route('user.delete', $user->id) }}" class="px-3 py-2 border border-gray-700 rounded-lg hover:bg-gray-800 hover:text-red-400 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
              </a>
            </div>
            
          </td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
</div>
</div>


<!-- Inclure Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src= "{{asset('js/dashborduser.js')}}"></script> 
@endsection