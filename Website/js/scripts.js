$( document ).ready(function(){
    $(".button-collapse").sideNav();
    $('select').material_select();
    $('.modal-trigger').leanModal();

    if (top.location.href === 'http://localhost:63342/Vef-PHP/Website/' || top.location.href === 'http://localhost:63342/Vef-PHP/Website/index.php') {
        Materialize.toast('Upload with this button <i class="material-icons">fast_forward</i>', 4000);
    }

    document.getElementById('here').style.backgroundColor = "rgba (255, 255 ,255 , 0.2)";
    document.getElementById('here').style.color = "rgba (0, 0 ,0 , 1)";
});


(function buttonReminder(){
    var randSeconds = Math.ceil(Math.random()*5)+2; // max 7 sec, min 3 sec
    var randDelay = randSeconds*1000;

    $(document).delay(randDelay), function(){

    }
}());

