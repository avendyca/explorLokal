function handleLogin() {
    // Simulate a successful login (replace this with actual authentication logic)
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Replace the condition with your actual authentication logic
    if (username === 'admin' && password === 'password') {
        // Redirect to the index.php page upon successful login
        window.location.href = 'index.php';
        return false; // Prevent the form from submitting (you're handling the redirection with JavaScript)
    } else {
        // Replace this with your actual error handling logic
        alert('Invalid username or password');
        return false; // Prevent the form from submitting
    }
}
