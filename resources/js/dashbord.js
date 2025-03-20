
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
document.querySelectorAll('.sidebar-link').forEach(link => {
  link.addEventListener('click', (e) => {
    document.querySelectorAll('.sidebar-link').forEach(l => l.classList.remove('active'));
    e.currentTarget.classList.add('active');
  });
});

// Delete confirmation modal
let roomIdToDelete = null;

function confirmDelete(id, name) {
  roomIdToDelete = id;
  document.getElementById('roomToDelete').textContent = name;
  document.getElementById('deleteModal').classList.remove('hidden');
}

function closeDeleteModal() {
  document.getElementById('deleteModal').classList.add('hidden');
}

document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
  // In a real application, you would send a request to delete the room
  console.log(`Deleting room with ID: ${roomIdToDelete}`);
  
  // For demo purposes, we'll just remove the element from the DOM
  const roomElement = document.querySelector(`[onclick="confirmDelete(${roomIdToDelete}, '${document.getElementById('roomToDelete').textContent}')"]`).closest('.bg-[#1a1c1e]');
  roomElement.remove();
  
  closeDeleteModal();
  
  // Show a success message
  alert('Salle supprimée avec succès!');
});

// Add Room Modal
const addRoomModal = document.getElementById('addRoomModal');
const openAddRoomModalBtn = document.getElementById('open-add-room-modal');
const closeModalBtn = document.getElementById('close-modal');
const cancelAddRoomBtn = document.getElementById('cancel-add-room');
const addRoomForm = document.getElementById('add-room-form');

// Open modal
openAddRoomModalBtn.addEventListener('click', () => {
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
addRoomModal.addEventListener('click', (e) => {
  if (e.target === addRoomModal) {
    closeAddRoomModal();
  }
});

// Handle form submission
addRoomForm.addEventListener('submit', (e) => {
  e.preventDefault();
  
  // Get form values
  const name = document.getElementById('room-name').value;
  const type = document.getElementById('room-type').value;
  const capacity = document.getElementById('room-capacity').value;
  const status = document.getElementById('room-status').value;
  
  // Get selected equipment
  const equipment = [];
  document.querySelectorAll('input[name="equipment[]"]:checked').forEach(checkbox => {
    equipment.push(checkbox.value);
  });
  
  // In a real application, you would send this data to your server
  console.log({
    name,
    type,
    capacity,
    status,
    equipment
  });
  
  // For demo purposes, we'll just show a success message
  alert('Salle ajoutée avec succès!');
  closeAddRoomModal();
});

