/******/ (() => { // webpackBootstrap
/*!**************************************!*\
  !*** ./resources/js/filmdashbord.js ***!
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

// Handle sidebar navigation
document.addEventListener('DOMContentLoaded', function () {
  // Sidebar navigation
  document.querySelectorAll('.sidebar-link').forEach(function (link) {
    link.addEventListener('click', function (e) {
      document.querySelectorAll('.sidebar-link').forEach(function (l) {
        return l.classList.remove('active');
      });
      e.currentTarget.classList.add('active');
    });
  });

  // Mobile menu toggle
  var mobileMenuButton = document.getElementById('mobile-menu-button');
  var mobileMenu = document.getElementById('mobile-menu');
  if (mobileMenuButton && mobileMenu) {
    var closeMenuButton = document.getElementById('close-menu-button');
    mobileMenuButton.addEventListener('click', function () {
      mobileMenu.classList.remove('-translate-x-full');
    });
    if (closeMenuButton) {
      closeMenuButton.addEventListener('click', function () {
        mobileMenu.classList.add('-translate-x-full');
      });
    }
  }

  // Modal functionality
  var addMovieModal = document.getElementById('add-movie-modal');
  var openAddMovieModalBtn = document.getElementById('open-add-movie-modal');
  var closeModalBtn = document.getElementById('close-modal');
  var cancelAddMovieBtn = document.getElementById('cancel-add-movie');
  var addMovieForm = document.getElementById('add-movie-form');
  if (addMovieModal && openAddMovieModalBtn && closeModalBtn && cancelAddMovieBtn && addMovieForm) {
    // Close modal functions
    var closeModal = function closeModal() {
      console.log('Closing modal');
      addMovieModal.classList.add('hidden');
      document.body.style.overflow = ''; // Re-enable scrolling
      addMovieForm.reset(); // Reset form
      var posterPreview = document.getElementById('poster-preview');
      if (posterPreview) {
        posterPreview.classList.add('hidden');
      }
    };
    // Open modal
    openAddMovieModalBtn.addEventListener('click', function () {
      console.log('Opening modal');
      addMovieModal.classList.remove('hidden');
      document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
    });

    closeModalBtn.addEventListener('click', closeModal);
    cancelAddMovieBtn.addEventListener('click', closeModal);

    // Close modal when clicking outside
    addMovieModal.addEventListener('click', function (e) {
      if (e.target === addMovieModal) {
        closeModal();
      }
    });

    // Handle form submission
    addMovieForm.addEventListener('submit', function (e) {
      e.preventDefault();
      // Here you would normally send the data to your server
      alert('Film ajouté avec succès!');
      closeModal();
    });

    // Handle poster image preview
    var posterUpload = document.getElementById('poster-upload');
    var posterPreview = document.getElementById('poster-preview');
    var posterImage = document.getElementById('poster-image');
    if (posterUpload && posterPreview && posterImage) {
      posterUpload.addEventListener('change', function (e) {
        var file = e.target.files[0];
        if (file) {
          var reader = new FileReader();
          reader.onload = function (e) {
            posterImage.src = e.target.result;
            posterPreview.classList.remove('hidden');
          };
          reader.readAsDataURL(file);
        }
      });
    }
  } else {
    console.error('Un ou plusieurs éléments du modal sont manquants:', {
      addMovieModal: addMovieModal,
      openAddMovieModalBtn: openAddMovieModalBtn,
      closeModalBtn: closeModalBtn,
      cancelAddMovieBtn: cancelAddMovieBtn,
      addMovieForm: addMovieForm
    });
  }
});
/******/ })()
;