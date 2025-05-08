

document.addEventListener('DOMContentLoaded', function() {
    // Date selection
    const dateButtons = document.querySelectorAll('.date-button');
    
    dateButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            dateButtons.forEach(btn => {
                btn.classList.remove('active', 'bg-cinema-gold', 'text-cinema-dark');
                btn.classList.add('bg-transparent', 'text-white');
            });
            
            // Add active class to clicked button
            this.classList.add('active', 'bg-cinema-gold', 'text-cinema-dark');
            this.classList.remove('bg-transparent', 'text-white');
        });
    });
    
    // Initialize the first date button as active
    if (dateButtons.length > 0) {
        dateButtons[0].classList.add('bg-cinema-gold', 'text-cinema-dark');
        dateButtons[0].classList.remove('bg-transparent', 'text-white');
    }
});

