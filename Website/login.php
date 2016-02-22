<!DOCTYPE html>
<?php
    require "include/include.php";
    include "include/menu.php";
?>
<html>
<body>
<div class="container" id="content">
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s12 m6"><a href="#registerform">Register</a></li>
                <li class="tab col s12 m6"><a class="active" href="#loginform">Login</a></li>
            </ul>
        </div>
        <div id="register" class="col s12">
            <form class="col s12" id="registerform" onsubmit="return validateForm()" method="POST" action="">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="Name_reg" type="text" class="validate">
                        <label for="Name_reg" class="">Full Name</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="Username_reg" type="text" class="validate">
                        <label for="Username_reg">Username</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="Password_reg" type="password" class="validate">
                        <label for="Password_reg">Password</label>
                    <div class="input-field col s12">
                        <input id="Password_reg_retype" type="password" class="validate">
                        <label for="Password_reg_retype">Password again</label>
                    </div>
                    </div>
                    <div class="input-field col s12">
                        <input id="Email_reg" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col s12">
                        <select>
                            <option id="defaultSecQuestion" value="0" disabled selected>Select a security question</option>
                            <option value="1">What was your first pet's name?</option>
                            <option value="2">What school did you first attend to?</option>
                            <option value="3">What is your fathers last name?</option>
                            <option value="4">What was your first car?</option>
                        </select>
                        <label><i class="material-icons">question_answer</i></label>
                        <div class="input-field col s12">
                            <input id="sec_answer" type="text" class="validate">
                            <label for="sec_answer">Security answer</label>
                        </div>
                    </div>
                </div>
                <button class="btn waves-effect waves-light" id="signupSubmit" disabled type="submit" name="action">Register
                    <i class="material-icons right">send</i>
                </button>

            </form>
        </div>
        <div id="loginform" class="col s12">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="username" type="text" class="validate">
                            <label for="username">Username</label>
                        </div>
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

<script src="js/validation.js"></script>

</html>
