let wrapper = document.querySelector('.wrapper');
let popupLogin = document.querySelector('.login-link');
let popupRegister = document.querySelector('.register-link');

popupRegister.addEventListener('click', () => {
  wrapper.classList.add('active');
});

popupLogin.addEventListener('click', () => {
  wrapper.classList.remove('active');
});

function togglePasswordVisibility() {
  const passwordInput = document.getElementById('password');
  const toggleButton = document.getElementById('toggle-btn');

  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    toggleButton.innerHTML = '<i class="fas fa-eye-slash"></i>';
  } else {
    passwordInput.type = 'password';
    toggleButton.innerHTML = '<i class="fas fa-eye"></i>';
  }
}
