let loginBtn = document.querySelector('.form-title-login');
let loginForm = document.querySelector('.auth-form-login');

let signBtn = document.querySelector('.form-title-signup');
let signForm = document.querySelector('.auth-form-sign');

loginBtn.addEventListener('click', () => {
    if (Array.from(signForm.classList).includes('active')) {
        signForm.classList.remove('active');
        signBtn.classList.remove('active');
    }
    if (!Array.from(loginForm.classList).includes('active')) {
        loginForm.classList.add('active');
        loginBtn.classList.add('active');
        console.log('true, loginBtn');
    }
})

signBtn.addEventListener('click', () => {
    if (Array.from(loginForm.classList).includes('active')) {
        console.log('loginForm include');
        loginForm.classList.remove('active');
        loginBtn.classList.remove('active');
    }
    if (!Array.from(signForm.classList).includes('active')) {
        signForm.classList.add('active');
        signBtn.classList.add('active');
    }
})