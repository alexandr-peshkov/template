
// TODO мобильное меню js
    $(document).ready(function () {
    $("#phone").mask(" +7 (999)-999-99-99");
});


var $btn = document.getElementById('show');
var $nav = document.getElementById('nav');

$btn.addEventListener('click', function() {
    $nav.classList.toggle('active');
});