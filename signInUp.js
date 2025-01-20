toggleForm('signInForm');
function toggleForm(formToShow) {
    const signInForm = document.getElementById('signInForm');
    const signUpForm = document.getElementById('signUpForm');

    if (formToShow === 'signInForm') {
        signInForm.classList.remove('d-none');
        signUpForm.classList.add('d-none');
    } else {
        signUpForm.classList.remove('d-none');
        signInForm.classList.add('d-none');
    }
}

function toggleFormReset(formToShow) {
    const signInForm = document.getElementById('signInForm');
    const step1 = document.getElementById('step1Form');
    const step2 = document.getElementById('step2Form');
    const step3 = document.getElementById('step3Form');

    if (formToShow === 'signInForm') {
        signInForm.classList.remove('d-none');
        step1.classList.add('d-none');
        step2.classList.add('d-none');
        step3.classList.add('d-none');
    } else if (formToShow === 'step1Form') {
        signInForm.classList.add('d-none');
        step1.classList.remove('d-none');
        step2.classList.add('d-none');
        step3.classList.add('d-none');
    } else if (formToShow === 'step2Form') {
        signInForm.classList.add('d-none');
        step1.classList.add('d-none');
        step2.classList.remove('d-none');
        step3.classList.add('d-none');
    } else if (formToShow === 'step3Form') {
        signInForm.classList.add('d-none');
        step1.classList.add('d-none');
        step2.classList.add('d-none');
        step3.classList.remove('d-none');
    }
}

function togglePasswordVisibility(fieldId) {
    const passwordField = document.getElementById(fieldId);
    const toggleIcon = passwordField.nextElementSibling.querySelector('i');

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleIcon.classList.remove('bi-eye');
        toggleIcon.classList.add('bi-eye-slash');
    } else {
        passwordField.type = 'password';
        toggleIcon.classList.remove('bi-eye-slash');
        toggleIcon.classList.add('bi-eye');
    }
}
