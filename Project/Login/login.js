// --- TOGGLE FUNCTIONS ---

function showSignup() {
    document.getElementById('login-box').classList.add('hidden');
    document.getElementById('signup-box').classList.remove('hidden');
}

function showLogin() {
    document.getElementById('signup-box').classList.add('hidden');
    document.getElementById('login-box').classList.remove('hidden');
}

// --- HANDLE LOGIN LOGIC ---

function handleLogin(event) {
    event.preventDefault(); // Stop form from reloading page

    // Get the selected role
    const role = document.getElementById('loginRole').value;

    // Simulate redirection based on role
    // IMPORTANT: Make sure your dashboard HTML files are named exactly like this:
    
    if (role === 'admin') {
        window.location.href = 'admin_dashboard.html'; // Or whatever you named your admin file
    } 
    else if (role === 'doctor') {
        window.location.href = 'doctor-dashboard.html';
    } 
    else if (role === 'patient') {
        window.location.href = 'patient-dashboard.html';
    }
}

// --- HANDLE SIGNUP LOGIC ---

function handleSignup(event) {
    event.preventDefault();
    
    const role = document.getElementById('signupRole').value;
    
    alert("Account created successfully! Please login.");
    
    // Switch back to login screen
    showLogin();
    
    // Pre-select the role in the login form for convenience
    document.getElementById('loginRole').value = role;
}