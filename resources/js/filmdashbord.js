
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

// Handle sidebar navigation
document.addEventListener('DOMContentLoaded', function() {
  // Sidebar navigation
  document.querySelectorAll('.sidebar-link').forEach(link => {
    link.addEventListener('click', (e) => {
      document.querySelectorAll('.sidebar-link').forEach(l => l.classList.remove('active'));
      e.currentTarget.classList.add('active');
    });
  });

  // Mobile menu toggle
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  
  if (mobileMenuButton && mobileMenu) {
    const closeMenuButton = document.getElementById('close-menu-button');
    
    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.remove('-translate-x-full');
    });
    
    if (closeMenuButton) {
      closeMenuButton.addEventListener('click', () => {
        mobileMenu.classList.add('-translate-x-full');
      });
    }
  }

  // Modal functionality
  const addMovieModal = document.getElementById('add-movie-modal');
  const openAddMovieModalBtn = document.getElementById('open-add-movie-modal');
  const closeModalBtn = document.getElementById('close-modal');
  const cancelAddMovieBtn = document.getElementById('cancel-add-movie');
  const addMovieForm = document.getElementById('add-movie-form');
  
  if (addMovieModal && openAddMovieModalBtn && closeModalBtn && cancelAddMovieBtn && addMovieForm) {
    // Open modal
    openAddMovieModalBtn.addEventListener('click', () => {
      console.log('Opening modal');
      addMovieModal.classList.remove('hidden');
      document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
    });
    
    // Close modal functions
    function closeModal() {
      console.log('Closing modal');
      addMovieModal.classList.add('hidden');
      document.body.style.overflow = ''; // Re-enable scrolling
      addMovieForm.reset(); // Reset form
      const posterPreview = document.getElementById('poster-preview');
      if (posterPreview) {
        posterPreview.classList.add('hidden');
      }
    }
    
    closeModalBtn.addEventListener('click', closeModal);
    cancelAddMovieBtn.addEventListener('click', closeModal);
    
    // Close modal when clicking outside
    addMovieModal.addEventListener('click', (e) => {
      if (e.target === addMovieModal) {
        closeModal();
      }
    });
    
    // Handle form submission
    addMovieForm.addEventListener('submit', (e) => {
      e.preventDefault();
      // Here you would normally send the data to your server
      alert('Film ajouté avec succès!');
      closeModal();
    });
    
    // Handle poster image preview
    const posterUpload = document.getElementById('poster-upload');
    const posterPreview = document.getElementById('poster-preview');
    const posterImage = document.getElementById('poster-image');
    
    if (posterUpload && posterPreview && posterImage) {
      posterUpload.addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = (e) => {
            posterImage.src = e.target.result;
            posterPreview.classList.remove('hidden');
          };
          reader.readAsDataURL(file);
        }
      });
    }
  } else {
    console.error('Un ou plusieurs éléments du modal sont manquants:',
      {addMovieModal, openAddMovieModalBtn, closeModalBtn, cancelAddMovieBtn, addMovieForm});
  }
});
