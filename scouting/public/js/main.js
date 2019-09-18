function popUp() {
    document.getElementById('info').style.display = "none";
}

function authorise() {
    //zet op de body -> onload="authorise()"
    //geef je body de id body

    let body = document.getElementById('body');

    // body.style.display = "none";

    let auth = prompt('fill in the password', '');

    if (auth !== "PaSsWoRd") {
        window.location = "/";
    }
    else{
        body.style.display = "block";
    }
}