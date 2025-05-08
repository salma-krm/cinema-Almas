
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

function confirmFilmDelete(id, title) {
  document.getElementById('filmToDelete').innerText = title;
  document.getElementById('filmDeleteForm').action ="/film/{id}/delete";
  document.getElementById('filmDeleteModal').classList.remove('hidden');
}

function closeFilmDeleteModal() {
  document.getElementById('filmDeleteModal').classList.add('hidden');
}


