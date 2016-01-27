<?php
/**
 * Created by PhpStorm.
 * User: 0105982499
 * Date: 26.1.2016
 * Time: 14:13
 */

?>

<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</head>

<ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li class="divider"></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li class="divider"></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
</ul>

<nav>
    <div class="nav-wrapper">
        <div class="container">
        <a href="#" class="brand-logo"><img class="logo" src="img/logo.png"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">Explore</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="#">Javascript</a></li>
            <li><a href="#">Mobile</a></li>
        </ul>
        </div>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="#">Sass</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="#">Javascript</a></li>
            <li><a href="#">Mobile</a></li>
        </ul>
    </div>
</nav>

<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Upload</h4>
        <form action="#">
            <div class="file-field input-field">
                <div class="btn">
                    <span>File</span>
                    <input type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>

            <div class="input-field col s12">
                <select multiple>
                    <option value="" disabled selected>Select categories</option>
                    <option value="1">Anime</option>
                    <option value="2">Art</option>
                    <option value="3">Black and White</option>
                    <option value="4">Cute</option>
                    <option value="5">Dark</option>
                    <option value="6">Fashion</option>
                    <option value="7">Humor</option>
                    <option value="8">Luxury</option>
                    <option value="9">Nature</option>
                    <option value="10">Pale</option>
                    <option value="11">Photography</option>
                    <option value="12">Quality</option>
                    <option value="13">Urban</option>
                    <option value="14">Vintage</option>
                    <option value="15">Other</option>

                </select>
            </div>
            <p>
                <input type="checkbox" id="test5" />
                <label for="test5">Make private</label>
            </p>
        </form>

    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
    </div>
</div>
    <a class="btn btn-floating btn-large waves-effect waves-light red modal-trigger" data-target="modal1"><i class="material-icons">add</i></a>
