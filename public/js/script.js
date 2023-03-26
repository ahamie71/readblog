e = true;

function changer() {
    if (e) {
        document.getElementById("pass").setAttribute("type", "text");
        document.getElementById("eye").src = "./public/image/green.png";
        e = false;
    } else {
        document.getElementById("pass").setAttribute("type", "password");
        document.getElementById("eye").src = "./public/image/red.png";
        e = true;
         

    }

}