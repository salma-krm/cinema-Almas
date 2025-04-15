require('./bootstrap');
tailwind.config = {
  theme: {
    extend: {
      colors: {
        'cinema-gold': '#F5C518',
        'cinema-dark': '#121212',
        'cinema-white': '#FFFFFF',
        
      }
    }
  }
}
    
function validateForm(event) {

  document.getElementById('first-name-error').innerText = '';
  document.getElementById('last-name-error').innerText = '';
  document.getElementById('email-error').innerText = '';
  document.getElementById('password-error').innerText = '';
  document.getElementById('confirm-password-error').innerText = '';
  document.getElementById('first-name').style.borderColor = '#4b5563'; 
  document.getElementById('last-name').style.borderColor = '#4b5563'; 
  document.getElementById('email').style.borderColor = '#4b5563';
  document.getElementById('password').style.borderColor = '#4b5563'; 
  document.getElementById('confirm-password').style.borderColor = '#4b5563'; 

  const firstName = document.getElementById('first-name').value.trim();
  const lastName = document.getElementById('last-name').value.trim();
  const email = document.getElementById('email').value.trim();
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirm-password').value;

  let isValid = true;

  const nameRegex = /^[a-zA-ZÀ-ÖØ-öø-ÿ]+$/; 
  const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; 
  const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$/;


  if (!firstName || !nameRegex.test(firstName)) {
    document.getElementById('first-name-error').innerText = 'Le prénom est invalide (lettres uniquement)';
    document.getElementById('first-name').style.borderColor = 'red'; 
    isValid = false;
  }

  if (!lastName || !nameRegex.test(lastName)) {
    document.getElementById('last-name-error').innerText = 'Le nom est invalide (lettres uniquement)';
    document.getElementById('last-name').style.borderColor = 'red';
    isValid = false;
  }

  
  if (!email || !emailRegex.test(email)) {
    document.getElementById('email-error').innerText = 'Adresse email invalide';
    document.getElementById('email').style.borderColor = 'red'; 
    isValid = false;
  }

  if (!password || !passwordRegex.test(password)) {
    document.getElementById('password-error').innerText = 'Le mot de passe doit contenir au moins 8 caractères, 1 lettre et 1 chiffre';
    document.getElementById('password').style.borderColor = 'red'; 
    isValid = false;
  }

 
  if (password !== confirmPassword) {
    document.getElementById('confirm-password-error').innerText = 'Les mots de passe ne correspondent pas';
    document.getElementById('confirm-password').style.borderColor = 'red'; 
    isValid = false;
  }


  if (!isValid) {
    event.preventDefault(); 
  }
}

document.getElementById('user-form').addEventListener('submit', validateForm);




