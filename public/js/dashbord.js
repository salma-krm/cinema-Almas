/******/ (() => { // webpackBootstrap
/*!**********************************!*\
  !*** ./resources/js/dashbord.js ***!
  \**********************************/
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
document.querySelectorAll('.sidebar-link').forEach(function (link) {
  link.addEventListener('click', function (e) {
    document.querySelectorAll('.sidebar-link').forEach(function (l) {
      return l.classList.remove('active');
    });
    e.currentTarget.classList.add('active');
  });
});

// Delete confirmation modal
var roomIdToDelete = null;
function confirmDelete(id, name) {
  roomIdToDelete = id;
  document.getElementById('roomToDelete').textContent = name;
  document.getElementById('deleteModal').classList.remove('hidden');
}
function closeDeleteModal() {
  document.getElementById('deleteModal').classList.add('hidden');
}
document.getElementById('confirmDeleteBtn').addEventListener('click', function () {
  // In a real application, you would send a request to delete the room
  console.log("Deleting room with ID: ".concat(roomIdToDelete));

  // For demo purposes, we'll just remove the element from the DOM
  var roomElement = document.querySelector("[onclick=\"confirmDelete(".concat(roomIdToDelete, ", '").concat(document.getElementById('roomToDelete').textContent, "')\"]")).closest('.bg-[#1a1c1e]');
  roomElement.remove();
  closeDeleteModal();

  // Show a success message
  alert('Salle supprimée avec succès!');
});

// Add Room Modal
var addRoomModal = document.getElementById('addRoomModal');
var openAddRoomModalBtn = document.getElementById('open-add-room-modal');
var closeModalBtn = document.getElementById('close-modal');
var cancelAddRoomBtn = document.getElementById('cancel-add-room');
var addRoomForm = document.getElementById('add-room-form');

// Open modal
openAddRoomModalBtn.addEventListener('click', function () {
  addRoomModal.classList.remove('hidden');
  document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
});

// Close modal functions
function closeAddRoomModal() {
  addRoomModal.classList.add('hidden');
  document.body.style.overflow = ''; // Re-enable scrolling
  addRoomForm.reset(); // Reset form
}
closeModalBtn.addEventListener('click', closeAddRoomModal);
cancelAddRoomBtn.addEventListener('click', closeAddRoomModal);

// Close modal when clicking outside
addRoomModal.addEventListener('click', function (e) {
  if (e.target === addRoomModal) {
    closeAddRoomModal();
  }
});

// Handle form submission
addRoomForm.addEventListener('submit', function (e) {
  e.preventDefault();

  // Get form values
  var name = document.getElementById('room-name').value;
  var type = document.getElementById('room-type').value;
  var capacity = document.getElementById('room-capacity').value;
  var status = document.getElementById('room-status').value;

  // Get selected equipment
  var equipment = [];
  document.querySelectorAll('input[name="equipment[]"]:checked').forEach(function (checkbox) {
    equipment.push(checkbox.value);
  });

  // In a real application, you would send this data to your server
  console.log({
    name: name,
    type: type,
    capacity: capacity,
    status: status,
    equipment: equipment
  });

  // For demo purposes, we'll just show a success message
  alert('Salle ajoutée avec succès!');
  closeAddRoomModal();
});
/******/ })()
;