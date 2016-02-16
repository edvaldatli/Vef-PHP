<?php
    include 'title.php';
?>

<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="css/component.css" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title><?php echo "{$title}"; ?></title>
</head>



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

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
