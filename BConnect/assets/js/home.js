let wrapper = document.querySelector('.wrapper');
let popupLogin = document.querySelector('.login-link');
let popupRegister = document.querySelector('.register-link');

popupRegister.addEventListener('click', () => {
  wrapper.classList.add('active');
});

popupLogin.addEventListener('click', () => {
  wrapper.classList.remove('active');
});

function togglePasswordRegisterVisibility() {
  const toggleButtonRegister = document.getElementById('toggle-btn-register');
  const passwordRegister = document.getElementById('registerPassword');

  //formulaire d'enregistrement
  if (passwordRegister.type === 'password') {
    passwordRegister.type = 'text';
    toggleButtonRegister.innerHTML = '<i class="fas fa-eye-slash"></i>';
  } else {
    passwordRegister.type = 'password';
    toggleButtonRegister.innerHTML = '<i class="fas fa-eye"></i>';
  }

}

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

document.addEventListener("DOMContentLoaded", function() {
    const inputFile = document.getElementById("input-file");
    const imgChoosed = document.getElementById("img-choosed");

    inputFile.addEventListener("change", function(event) {
        const selectedFile = event.target.files[0];

        if (selectedFile) {
          imgChoosed.style.display = 'block';
            const imageURL = URL.createObjectURL(selectedFile);
            imgChoosed.src = imageURL;
        }
    });
});
