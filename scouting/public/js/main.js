function popUp() {
    document.getElementById('info').style.display = "none";
}

function authorise() {
    //zet op de body -> onload="authorise()"
    //geef je body de id body

    let body = document.getElementById('body');
    let auth = prompt('fill in the password', '');

        window.location = "/";
    body.style.display = "none";

    if (auth !== "PaSsWoRd") {
        window.location = "/";
    }
    else{
        body.style.display = "block";
    }
}