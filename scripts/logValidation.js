const formLog = document.getElementById('log-form');
const nameLog = document.getElementById('log-name');
const passLog = document.getElementById('log-pass');

// Listener, waiting for form submit
formLog.addEventListener('submit', (e) => {
    // If the data is incorrect, the form will not be submitted
    if(!validateInputsLog())
        e.preventDefault()
});

// Validating function
const validateInputsLog = () => {
    // Delete whitespaces and other symbols that we do not need
    const nameValueLog = nameLog.value.trim();
    const passValueLog = passLog.value.trim();

    if(nameValueLog === '') {
        alert('Name is required');
        return false;
    }

    if(passValueLog === '') {
        alert('Password is required');
        return false;
    }

    return true;
};