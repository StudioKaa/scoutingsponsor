function popUp() {
    document.getElementById('info').style.display = "none";
}

function authorise() {
    //zet op de body -> onload="authorise()"
    //geef je body de id body

    let body = document.getElementById('body');
    let auth = prompt('fill in the password', '');


    body.style.display = "none";

    if (auth !== "P") {
        window.location = "/";
    }
    else{
        body.style.display = "block";
    }
}