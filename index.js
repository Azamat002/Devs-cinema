
var state = false;

function showPass() {
    if (state) {
        document.getElementById("password").setAttribute("type", "password");
        document.getElementById("eye").style.color='#c10f0f'
        state = false;
    } else {
        document.getElementById("password").setAttribute("type", "text");
        state = true;
    }
}

$(document).ready(function(){
    $('#icon').click(function(){
        $('ul').toggleClass('show');
    });
});