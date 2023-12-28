let inputEmail = document.getElementById('input_email');
let inputPassword = document.getElementById('input_password');
let inputPassword2 = document.getElementById('input_password2');

// let emailValue = inputEmail.getAttribute('value');

function emailValidate() {
    if (!(this.value.includes('@') && this.value.includes('.'))) {
        this.classList.add('input--error');
        alert("Emailová adresa musí obsahovat @ a \".\".");
    } else {
        this.classList.remove('input--error');
    }
}

function passValidate() {
    if(this.value.length < 8) {
        alert("Heslo musí být alespoň 8 znaků dlouhé.");
        this.classList.add('input--error');}
    }// else {
//         this.classList.remove('input--error');
//     }
// }

function pass2Validate() {
    if(this.value !== inputPassword.value) {
        alert("Zadejte stejné heslo, pro potvrzení.");
        this.classList.add('input--error');
    } else {
        this.classList.remove('input--error');
    }
}


inputEmail.addEventListener("change", emailValidate);
inputPassword.addEventListener("change", passValidate);
inputPassword2.addEventListener("change", pass2Validate);