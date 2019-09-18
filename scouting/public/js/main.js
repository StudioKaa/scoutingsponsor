
//de popup functie
function popUp() {
    //pakt de pop up uit de html en zet de style display op none
    document.getElementById('info').style.display = "none";
}


//het wachtwoord functie voor de admin
function authorise() {
    //maakt variable body aan die de body uit de html haalt
    let body = document.getElementById('body');

    //laat een alert met textvelt zien en haalt de text uit het textvelt en zet die in de variable auth
    let auth = prompt('fill in the password', '');

    //checkt of het ingevoerde wachtwoord klopt
    if (auth !== "PaSsWoRd") {
        //als hij niet klopt ga terug naar de home page
        window.location = "/";
    }
    else{
        //als hij wel klopt laat alle infor zien
        body.style.display = "block";
    }
}