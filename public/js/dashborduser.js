/******/ (() => { // webpackBootstrap
/*!**************************************!*\
  !*** ./resources/js/dashborduser.js ***!
  \**************************************/
tailwind.config = {
  theme: {
    extend: {
      colors: {
        'cinema-gold': '#F5C518',
        'cinema-dark': '#131416',
        'cinema-light': '#F7F7F7'
      }
    }
  }
};
// Configuration des couleurs pour les graphiques
var chartColors = {
  gold: '#F5C518',
  blue: '#3B82F6',
  green: '#10B981',
  purple: '#8B5CF6',
  red: '#EF4444',
  yellow: '#F59E0B',
  gray: '#4B5563',
  darkBlue: '#1E40AF',
  darkGreen: '#065F46',
  darkPurple: '#5B21B6',
  darkRed: '#B91C1C',
  darkYellow: '#B45309',
  darkGray: '#1F2937'
};

// Configuration commune pour les graphiques
Chart.defaults.color = '#F7F7F7';
Chart.defaults.borderColor = 'rgba(75, 85, 99, 0.3)';
Chart.defaults.font.family = 'Inter, sans-serif';

// Données pour le graphique d'inscriptions
var registrationsData = {
  labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'],
  datasets: [{
    label: 'Inscriptions',
    data: [65, 78, 90, 85, 92, 110, 120, 115, 130, 142, 135, 150],
    backgroundColor: chartColors.gold,
    borderColor: chartColors.gold,
    tension: 0.3,
    pointBackgroundColor: chartColors.gold,
    pointBorderColor: '#fff',
    pointRadius: 4,
    pointHoverRadius: 6
  }]
};

// Données pour le graphique de distribution des rôles
var rolesData = {
  labels: ['Client', 'Manager', 'Admin', 'Employé', 'Autre'],
  datasets: [{
    label: 'Nombre d\'utilisateurs',
    data: [980, 120, 15, 85, 48],
    backgroundColor: [chartColors.blue, chartColors.green, chartColors.purple, chartColors.yellow, chartColors.gray],
    borderWidth: 0,
    hoverOffset: 15
  }]
};

// Données pour le graphique d'activité
var activityData = {
  labels: ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'],
  datasets: [{
    label: 'Connexions',
    data: [320, 280, 300, 340, 380, 420, 390],
    backgroundColor: 'rgba(59, 130, 246, 0.5)',
    borderColor: chartColors.blue,
    borderWidth: 2,
    tension: 0.3,
    pointBackgroundColor: chartColors.blue,
    pointBorderColor: '#fff',
    pointRadius: 4,
    pointHoverRadius: 6
  }, {
    label: 'Réservations',
    data: [120, 150, 140, 160, 180, 210, 190],
    backgroundColor: 'rgba(16, 185, 129, 0.5)',
    borderColor: chartColors.green,
    borderWidth: 2,
    tension: 0.3,
    pointBackgroundColor: chartColors.green,
    pointBorderColor: '#fff',
    pointRadius: 4,
    pointHoverRadius: 6
  }]
};

// Initialiser les graphiques
document.addEventListener('DOMContentLoaded', function () {
  // Graphique d'inscriptions
  var registrationsCtx = document.getElementById('registrationsChart').getContext('2d');
  var registrationsChart = new Chart(registrationsCtx, {
    type: 'line',
    data: registrationsData,
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          backgroundColor: '#1F2937',
          titleColor: '#F7F7F7',
          bodyColor: '#F7F7F7',
          borderColor: '#4B5563',
          borderWidth: 1,
          padding: 10,
          displayColors: false
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          grid: {
            color: 'rgba(75, 85, 99, 0.2)'
          }
        },
        x: {
          grid: {
            display: false
          }
        }
      }
    }
  });

  // Graphique de distribution des rôles
  var rolesCtx = document.getElementById('rolesChart').getContext('2d');
  var rolesChart = new Chart(rolesCtx, {
    type: 'doughnut',
    data: rolesData,
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          position: 'right',
          labels: {
            padding: 20,
            boxWidth: 12,
            font: {
              size: 12
            }
          }
        },
        tooltip: {
          backgroundColor: '#1F2937',
          titleColor: '#F7F7F7',
          bodyColor: '#F7F7F7',
          borderColor: '#4B5563',
          borderWidth: 1,
          padding: 10
        }
      },
      cutout: '65%'
    }
  });

  // Graphique d'activité
  var activityCtx = document.getElementById('activityChart').getContext('2d');
  var activityChart = new Chart(activityCtx, {
    type: 'line',
    data: activityData,
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          position: 'top',
          align: 'end',
          labels: {
            boxWidth: 12,
            font: {
              size: 12
            }
          }
        },
        tooltip: {
          backgroundColor: '#1F2937',
          titleColor: '#F7F7F7',
          bodyColor: '#F7F7F7',
          borderColor: '#4B5563',
          borderWidth: 1,
          padding: 10
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          grid: {
            color: 'rgba(75, 85, 99, 0.2)'
          }
        },
        x: {
          grid: {
            display: false
          }
        }
      }
    }
  });

  // Gestion du sélecteur de période
  document.getElementById('period-selector').addEventListener('change', function (e) {
    var period = parseInt(e.target.value);

    // Simuler un changement de données en fonction de la période
    var newData;
    if (period === 7) {
      newData = [120, 130, 125, 140, 150, 145, 160];
    } else if (period === 30) {
      newData = [320, 280, 300, 340, 380, 420, 390];
    } else if (period === 90) {
      newData = [520, 480, 500, 540, 580, 620, 590];
    } else {
      newData = [720, 680, 700, 740, 780, 820, 790];
    }

    // Mettre à jour les données du graphique d'activité
    activityChart.data.datasets[0].data = newData;
    activityChart.data.datasets[1].data = newData.map(function (val) {
      return val * 0.5;
    });
    activityChart.update();
  });

  // Gestion du bouton d'exportation
  document.getElementById('export-stats').addEventListener('click', function () {
    alert('Exportation des statistiques en cours...');
    // Dans une application réelle, vous implémenteriez ici la logique d'exportation
  });
});
/******/ })()
;