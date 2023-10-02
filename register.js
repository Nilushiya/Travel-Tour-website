const form = document.getElementById("form");
const username = document.getElementById("username");
const email = document.getElementById("email");
const password = document.getElementById("password");
const password2 = document.getElementById("password2");

let Success = true;

let confirmPasswordSuccess
let mailSuccess 
let alphaSuccess
let usernameSuccess
let passwordLengthSuccess
let usernameLengthSuccess

  

/*function checkRequired(inputs){
    
    inputs.forEach((input) => {
        if(input.value.trim() === ""){
            errorInput(input , `${input.id} is Required`);
            blankSuccess = false
        }
        else{
            successInput(input);
            blankSuccess = true
        }
        return Success;
    });
}*/

function errorInput(input , message){
    const formGroup = input.parentElement;
    formGroup.className = 'form-group error';
    const p = formGroup.querySelector("p");
    p.innerHTML = message;
}

function successInput(input){
    const formGroup = input.parentElement;
    formGroup.className = 'form-group success';
    const p = formGroup.querySelector("p");
    p.innerHTML = "";
}
String.prototype.isAlphabets = function() {
    return !!this.match(/^[A-Za-z]+$/);
} 
function checkAlphabets(input){
    
    if(!input.value.trim().isAlphabets()){
        errorInput(input,`Username must be Alphabets`);
        alphaSuccess = false;
    }
    else{
        alphaSuccess = true;
    }
    return alphaSuccess
}
function checkUserName(input){
    if(input.value.trim() === ""){
        errorInput(input,`Username is requried`);
        usernameSuccess = false;
    }
    else{
        checkLength(input,5,20)
        checkAlphabets(input)
        usernameSuccess = true;
    }
    
}
function checkLength(input ,min ,max){
    if(input.value.trim().length < 5){
        errorInput(input, `${input.id} must be atleast greater than ${min} characters`);
        if(input === password){
            passwordLengthSuccess = false;
        }
        else{
            usernameLengthSuccess = false;
        }
    }
    else if(input.value.trim().length > 10){
        errorInput(input, `${input.id} must be atleast lesser than ${max} characters`);
        if(input === password){
            passwordLengthSuccess = false;
        }
        else{
            usernameLengthSuccess = false;
        }
    }
    else{
        successInput(input);
        if(input === password){
            passwordLengthSuccess = true;
        }
        else{
            usernameLengthSuccess = true;
        }
    }
    
}
/*function checkPasswords(password,password2){
    if(password.value.trim() === ""){
        errorInput(password, `password is requried`);
        passwordSuccess = false;
    }
    if(password2.value.trim() === ""){
        errorInput(password2, `confirm password is requried`);
        passwordSuccess = false;
    }
   
}*/
function checkConfirmPassword(password,password2){
    if(password.value.trim() === "" && password2.value.trim() === ""){
        //checkPasswords(password,password2);
        errorInput(password, `password is requried`);
        errorInput(password2, `confirmation password is requried`);
        confirmPasswordSuccess = false
    }
    
    else if(password.value.trim() != ""){
        checkLength(password,5,10)
        if(password2.value.trim() === ""){
            errorInput(password2 ,`confirmation password is requried`);
            confirmPasswordSuccess = false;
        }
        else if(password.value.trim() != password2.value.trim()){
            errorInput(password2,`Confirm password does not match`);
            confirmPasswordSuccess = false;
        }
        else{
            successInput(password2);
            confirmPasswordSuccess = true;
        }
    }
    else{
        errorInput(password2 ,`Enter you password first`);
        confirmPasswordSuccess = false;
    }
   
}
function validMail(mail)
{
    return /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+([^<>()\.,;:\s@\"]{2,}|[\d\.]+))$/.test(mail);
}
function checkEmail(input){
    if(input.value.trim() === ""){
        errorInput(input,`Email is requried`);
        mailSuccess = false;
    }
    else if(!validMail(input.value.trim())){
        errorInput(input,`Email is not valid`);
        mailSuccess = false;
    }
    else{
        successInput(input);
        mailSuccess = true;
    }
    
}


function validated(){
    let validatedSuccess;

    //checkRequired([username,email,password])
    //checkLength(username,5,10)
    checkConfirmPassword(password,password2);
    checkEmail(email);
    //checkLength(password,5,10)
    
    checkUserName(username);

    if(usernameSuccess && usernameLengthSuccess && passwordLengthSuccess &&
        mailSuccess && confirmPasswordSuccess && alphaSuccess === true){
            validatedSuccess = true;
    }
    else{
        validatedSuccess = false;
    }
    return validatedSuccess;
}
form.addEventListener("submit",(e) => {
    if(!validated()){
        e.preventDefault();
    }
});