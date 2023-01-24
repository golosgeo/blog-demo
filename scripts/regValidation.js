const form = document.getElementById('reg-form');
const name = document.getElementById('reg-name');
const email = document.getElementById('reg-email');
const pass = document.getElementById('reg-pass');
const pass_again = document.getElementById('reg-pass-again');

// Listener, waiting for form submit
form.addEventListener('submit', (e) => {
    // If the data is incorrect, the form will not be submitted
    if(!validateInputsReg())
        e.preventDefault()
});

// Validating function
const validateInputsReg = () => {
    // Delete whitespaces and other symbols that we do not need
    const nameValue = name.value.trim();
    const emailValue = email.value.trim();
    const passValue = pass.value.trim();
    const pass_againValue = pass_again.value.trim();

    if(nameValue === '') {
        alert('Name is required');
        return false;
    }

    if(emailValue === '') {
        alert('Email is required');
        return false;
    }

    if(passValue === '') {
        alert('Password is required');
        return false;
    } else if (passValue.length < 4 ) {
        alert('Password must be at least 4 character.');
        return false;
    }

    if(pass_againValue === '') {
        alert('Please confirm your password');
        return false;
    } else if (pass_againValue !== passValue) {
        alert("Passwords doesn't match");
        return false;
    }

    return true;
};
