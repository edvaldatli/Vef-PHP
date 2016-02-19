<!DOCTYPE html>
<?php
    include "include/include.php";
    include "include/menu.php";
?>
<html>
<body>
<div class="container" id="content">
    <div class="row">
<<<<<<< HEAD
        <form class="col s4">
            <div class="row">
                <div class="input-field col s12">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s12">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
=======
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s12 m6"><a href="#test1">Register</a></li>
                <li class="tab col s12 m6"><a href="#test2">Login</a></li>
            </ul>
        </div>
        <div id="test1" class="col s12">
            <form class="col s12" onsubmit="return validateForm()" method="POST" >
                <div class="row">
                    <div class="input-field col s12">
                        <input id="Username_reg" type="text" class="validate">
                        <label for="Username_reg">Username</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="Name_reg" type="text" class="validate">
                        <label for="Name_reg" class="right-align">Name</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="Password_reg" type="password" class="validate">
                        <label for="Password_reg">Password</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="action">Register
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
        <div id="test2" class="col s12">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="username" type="text" class="validate">
                            <label for="username">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Login
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
    </div>
    <div class="row">

    </div>
</div>
</body>

<script>
    function validateForm(){
        var passwordInput = document.getElementById("Password_reg").value;
        var patt = /^(?=.*[0-9])^(?=.*[A-Z])[a-zA-Z0-9!@#$%^&*]{6,32}$/.test(passwordInput);

        if(patt == true){
            Materialize.toast('Password correct!', 4000);
            console.log(patt);
        }
        else{
            Materialize.toast('Password incorrect', 4000);
            console.log(patt);
        }



    };
</script>
>>>>>>> 5f1678dd6b24ca262f456178a9acf02cde8bfd60
</html>
