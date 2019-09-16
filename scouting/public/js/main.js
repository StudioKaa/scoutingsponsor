function popUp() {
    document.getElementById('info').style.display = "none";
}

function authorise() {
    //zet op de body -> onload="authorise()"

    let auth = prompt('fill in the password', '');

    if (auth !== "password") {
        window.location = "{{ route('zet hir de route naar de pagina als je een verkeerd wachtwoord invult') }}";
    }
}