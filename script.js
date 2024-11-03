function redirectToLogin() {
    window.location.href = "login.php";
}

function validateAndRegister() {
    const username = document.getElementById("username").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const repeatPassword = document.getElementById("repeatPassword").value;
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    // Validate the fields
    if (!username || !email || !password || !repeatPassword) {
        alert("Please fill in dddall fields.");
        return;
    }

    if (password !== repeatPassword) {
        alert("Passwords do not match.");
        return;
    }

    if (!emailRegex.test(email)) {
        alert('Invalid email.');
        return;
    }

    if (username.length < 6) {
        alert('Username must longer than 5 characters.')
        return;
    }

    if (password.length < 6) {
        alert('Password must longer than 5 characters.')
        return;
    }

    console.log({
        registration: 'registration',
        username: username,
        email: email,
        password: password
    });
    
    // Add the new user to db
    $.ajax({
        url: 'backend.php',
        type: 'post',
        data: {
            registration: 'registration',
            username: username,
            email: email,
            password: password,
            table: 'Users'
        },
        success: function (response) {
            console.log("Response from backend:", response);
            window.location.href = "logged.php";
        },
        error: function () {
            console.error('Error occurred during AJAX request');
        }
    });

}

function validateLogin() {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    if (username.length < 6) {
        alert('Username must longer than 5 characters.')
        return;
    }

    if (password.length < 6) {
        alert('Password must longer than 5 characters.')
        return;
    }

    $.ajax({
        url: 'backend.php',
        type: 'post',
        data: {
            login: 'login',
            username: username,
            password: password,
            table: 'Users'
        },
        success: function (response) {
            console.log("Response from backend:", response);
            window.location.href = "logged.php";
        },
        error: function () {
            console.error('Error occurred during AJAX request');
        }
    });
}

function logout() {
    window.location.href = "login.php";
}

function goToRegister() {
    window.location.href = 'index.php';
}
