

tailwind.config = {
    theme: {
      extend: {
        colors: {
          'cinema-gold': '#F5C518',
          'cinema-dark': '#131416',
          'cinema-light': '#F7F7F7',
  
        }
      }
    }
  }
// Ajoutez ce script
           
              // Fonction pour mettre à jour le statut
            //   function updateStatus(id, newStatus) {
            //     const statusBadge = document.getElementById(`status-badge-${id}`);
                
            //     // Mettre à jour l'apparence du badge
            //     if (newStatus === 'confirmed') {
            //       statusBadge.className = 'px-2 py-1 bg-green-900 text-green-200 rounded-full text-xs';
            //       statusBadge.textContent = 'Confirmée';
            //     } else if (newStatus === 'pending') {
            //       statusBadge.className = 'px-2 py-1 bg-yellow-900 text-yellow-200 rounded-full text-xs';
            //       statusBadge.textContent = 'En attente';
            //     } else if (newStatus === 'cancelled') {
            //       statusBadge.className = 'px-2 py-1 bg-red-900 text-red-200 rounded-full text-xs';
            //       statusBadge.textContent = 'Annulée';
            //     }
                
            //     // Afficher une notification
            //     showNotification('Statut mis à jour avec succès', 'success');
                
            //     // Log pour vérification
            //     console.log(`Réservation ${id} mise à jour: ${newStatus}`);
            //   }
              
            //   // Fonction pour afficher une notification
            //   function showNotification(message, type) {
            //     const notification = document.getElementById('notification');
            //     const messageElement = document.getElementById('notification-message');
                
            //     // Définir le style en fonction du type
            //     if (type === 'success') {
            //       notification.className = 'fixed bottom-4 right-4 px-6 py-3 rounded-lg shadow-lg z-50 bg-green-800 text-green-100 transition-all duration-300 transform';
            //     } else {
            //       notification.className = 'fixed bottom-4 right-4 px-6 py-3 rounded-lg shadow-lg z-50 bg-red-800 text-red-100 transition-all duration-300 transform';
            //     }
                
            //     // Définir le message
            //     messageElement.textContent = message;
                
            //     // Afficher la notification
            //     notification.classList.remove('hidden');
                
            //     // Animation d'entrée
            //     setTimeout(() => {
            //       notification.classList.remove('translate-y-16', 'opacity-0');
            //       notification.classList.add('translate-y-0', 'opacity-100');
            //     }, 10);
                
            //     // Masquer après 3 secondes
            //     setTimeout(() => {
            //       notification.classList.remove('translate-y-0', 'opacity-100');
            //       notification.classList.add('translate-y-16', 'opacity-0');
                  
            //       // Cacher complètement après la fin de l'animation
            //       setTimeout(() => {
            //         notification.classList.add('hidden');
            //       }, 300);
            //     }, 3000);
            //   }
           
