function popUp() {
    document.getElementById('info').style.display = "none";
}

function authorise() {
    //zet op de body -> onload="authorise()"

    let auth = prompt('fill in the password', '');

    if (auth !== "PaSsWoRd") {
        window.location = "/";
    }
}