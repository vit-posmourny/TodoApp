let email = document.getElementById('id_input_email');
let pass = document.getElementById('id_input_pass');
let pass2 = document.getElementById('id_input_pass2');
let form = document.getElementById('id_form');
console.log(form);

let emailValidState = false;
let passValidState = false;
let pass2ValidState = false;


email.addEventListener("change", emailValidate);
pass.addEventListener("change", passValidate);
// pass2.addEventListener("change", pass2Validate);
form.addEventListener("submit", checkAllStates);

function checkAllStates() {
    
    if ((emailValidState && passValidState) || (emailValidState && pass2ValidState)) {
        
        document.getElementById("test").innerHTML = 'byl tu check all states <br>';
        form.action = "../controllers/checkUserInDatabase.php";
        
    } else {
        
        form.action = "";
        
    }
    
}
function emailValidate()
{
    if (!(this.value.includes('@') && this.value.includes('.')))
    {
        this.classList.add('input--error');
        alert("Emailová adresa musí obsahovat @ a \".\".");
        form.action = "../controllers/checkUserInDatabase.php";
        document.getElementById("test").innerHTML = 'byl tu emailVAlidate <br>';
        
        emailValidState = false;
    } else
    {
        this.classList.remove('input--error');
        emailValidState = true;
    }

}
function passValidate()
{
    
    if(this.value.length < 8) {
        alert("Heslo musí být alespoň 8 znaků dlouhé.");
        this.classList.add('input--error');
        form.action = "";
        
        passValidState = false;
        
    } else {
        this.classList.remove('input--error');
        passValidState = true;
    }

}

function pass2Validate() {
    
    if(this.value !== name_pass.value) {
        console.log(name_pass.value);
        alert("Zadejte stejné heslo, pro potvrzení.");
        this.classList.add('input--error');
        
        pass2ValidState = false;
        
    } else {
        
        this.classList.remove('input--error');
        pass2ValidState = true;
    }


}