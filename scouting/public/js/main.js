function popUp() {
    document.getElementById('info').style.display = "none";
}

function authorise() {
    //zet op de body -> onload="authorise()"
    //geef je body de id body

    let body = document.getElementById('body');
    let auth = prompt('fill in the password', '');

    body.style.display = "none";

    if (auth !== "PaSsWoRd") {
        window.location = "{{ route('zet hir de route naar de pagina als je een verkeerd wachtwoord invult') }}";
    }
    else{
        body.style.display = "block";
    }
}