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
