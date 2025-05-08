/******/ (() => { // webpackBootstrap
/*!***************************************!*\
  !*** ./resources/js/dashbordsalle.js ***!
  \***************************************/
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
function confirmDelete(id, name) {
  document.getElementById("roomToDelete").innerText = name;
  var formAction = '/delete/' + id + '/salle';
  document.getElementById("deleteForm").action = formAction;
  document.getElementById("deleteModal").classList.remove('hidden');
}
function closeDeleteModal() {
  document.getElementById("deleteModal").classList.add('hidden');
}
/******/ })()
;