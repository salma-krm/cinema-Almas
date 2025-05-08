
function previewImage(event) {
  const file = event.target.files[0];
  const reader = new FileReader();

  reader.onload = function(e) {
    const preview = document.getElementById('poster-preview');
    const image = document.getElementById('poster-image');

    preview.classList.remove('hidden');
    image.src = e.target.result;
  };

  if (file) {
    reader.readAsDataURL(file);
  }
}
