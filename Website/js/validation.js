var password1 = null;
var password2 = null;
var PasswordIsOkay = false;
var PasswordSecIsOkay = false
var EmailIsOkay = false

$('#Name_reg').blur(function (){
   var input = document.getElementById('Name_reg').value.trim();

    if(input == null || input == ""){
        Materialize.toast('You must type your name', 4000);
        $('#Name_reg').addClass('invalid');
    }
    else if(input.length == 1){
        Materialize.toast('Is that really your name?', 4000);
        $('#Name_reg').addClass('invalid');
    }
});

$('#Email_reg').blur(function (){
    var input = document.getElementById('Email_reg').value.trim();
    var patt = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(input);

    if(input == null || input == ""){
        Materialize.toast('You must type your email', 4000);
        $('#Email_reg').addClass('invalid');
    }
    else if (patt == false){
        Materialize.toast("Your email is not valid", 4000);
        EmailIsOkay = false;
    }
    else{
        EmailIsOkay = true;
    }
});

$('#Password_reg').blur(function (){
    password1 = document.getElementById("Password_reg").value.trim();
    var patt = /^(?=.*[0-9])^(?=.*[A-Z])[a-zA-Z0-9!@#$%^&*]{6,100}$/.test(password1);

    if(password1 == null || password1 == ""){
        Materialize.toast('You must type your password', 4000);
        $('#Password_reg').addClass('invalid');
    }
    else if(password2 != null){
        if(password1 != password2){
            Materialize.toast('Your passwords do not match', 6000);
            PasswordSecIsOkay = false;
        }
    }
    else if(patt == false){
        Materialize.toast('Your password has to contain at least 1 uppercase, 1 lowercase, 1 number and be 6 characters long', 6000);
        PasswordIsOkay = false;
    }
    else{
        PasswordIsOkay = true;
    }
});

$('#Password_reg_retype').blur(function (){
    password2 = document.getElementById("Password_reg_retype").value.trim();

    if(password1 != password2){
        Materialize.toast('Your passwords do not match', 6000);
        PasswordSecIsOkay = false;
    }
    else{
        PasswordSecIsOkay = true;
    }
});

$('#Username_reg').blur(function (){
    var input = document.getElementById('Username_reg').value.trim();
    var patt = /^[a-zA-Z0-9_-]*$/.test(input);

    if(input == null || input == ""){
        Materialize.toast('You must type your username', 4000);
        $('#Username_reg').addClass('invalid');
    }
    else if(input.length < 5){
        Materialize.toast('Username has to be longer than 5 characters', 4000);
        $('#Username_reg').addClass('invalid');
    }
    else if(patt == false){
        Materialize.toast('Username can only contain letters, numbers, dash and underscore', 4000);
        isOkay = false;
    }
    else{
        isOkay = true;
    }
});


$('input').keyup(function(){
    if($( "#Name_reg" ).hasClass("valid") && $( "#Username_reg" ).hasClass("valid") && $( "#Password_reg" ).hasClass("valid") && $( "#Password_reg_retype" ).hasClass("valid") && $( "#Email_reg" ).hasClass("valid")
        && PasswordIsOkay == true && PasswordSecIsOkay == true && EmailIsOkay == true){
        $( "#signupSubmit" ).prop( "disabled", false );
    }
});
