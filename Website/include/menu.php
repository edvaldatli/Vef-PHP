<?php
/**
 * Created by PhpStorm.
 * User: klassy
 * Date: 28.1.2016
 * Time: 16:45
 */
?>

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
            <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php" <?php if ($currentPage == 'index.php') {echo 'id="here"';} ?> >Explore</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="profile.php" <?php if ($currentPage == 'profile.php') {echo 'id="here"';} ?> >Profile</a></li>
                <li><a href="#">Mobile</a></li>
            </ul>
        </div>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="index.php" <?php if ($currentPage == 'index.php') {echo 'id="here"';} ?> >Explore</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="profile.php" <?php if ($currentPage == 'profile.php') {echo 'id="here"';} ?> >Profile</a></li>
            <li><a href="#">Mobile</a></li>
        </ul>
    </div>
</nav>
