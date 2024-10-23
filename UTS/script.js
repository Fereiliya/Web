document.getElementById('loginForm').addEventListener('submit', function(event) {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const errorMessage = document.getElementById('error-message');

    // Reset error message
    errorMessage.textContent = '';

    // Validation checks
    if (username === '' || password === '') {
        errorMessage.textContent = 'Username dan password harus terisi';
        event.preventDefault(); // Cegah form dari submit
    } else if (password.length < 6) { // Password minimal 6 karakter
        errorMessage.textContent = 'Password minimal 6 karakter';
        event.preventDefault();
    } else if (!(/[a-z]/.test(password) && /[A-Z]/.test(password))) {
        errorMessage.textContent = 'Password harus terdiri dari huruf besar dan kecil';
        event.preventDefault();
    }
});
