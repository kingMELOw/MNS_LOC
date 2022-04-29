let allImg = document.querySelectorAll('img')
let allSpan = document.querySelectorAll('span')
let allLigne = document.querySelectorAll('.ligne div')
// la saisie nom user 
let inpUtilisateur = document.querySelector('#utilisateur')
// ecoute un evenement sur le compte utilisateur
inpUtilisateur.addEventListener('input', (e) => {
    // controle taille de la saisie 
    if (e.target.value.length >= 3) {
        // ok

        // comment aller chercher l'image 
        // et modifier sa propriete css display
        allImg[0].style.display = "inline"
        // mettre la bonne image
        allImg[0].src = "ressources/check.svg"
        // masquer le message d'erreur
        allSpan[0].style.display = "none"
    }

    else {
        allImg[0].style.display = "inline"
        allImg[0].src = "ressources/error.svg"
        allSpan[0].style.display = "inline"
    }

})

// controler le champ mail
let inpMail = document.querySelector('#email')
// ecoute d'un evenement mail
inpMail.addEventListener('input', (e) => {
    // controler par regex
    const regexMail = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    if (e.target.value.search(regexMail) === 0) {
        // le controle et ok 
        allImg[1].src = "ressources/check.svg"
        allImg[1].style.display = "inline"
        allSpan[1].style.display = "none"
    }
    else {
        allImg[1].src = "ressources/error.svg"
        allImg[1].style.display = "inline"
        allSpan[1].style.display = "inline"
    }

})

// le mot de passe , test de la complexiter
let inpMdp = document.querySelector('#mdp')
inpMdp.addEventListener('input', (e) => {
    let coeff = 0
    // definir des expression reguliere pour chaque cas
    const alphabet = /[a-z]/
    const ALPHABET = /[A-Z]/
    const chiffre = /[0-9]/
    const carspe = /[^a - zA - Z0 - 9] /
    // tester chaque cas 
    valeurInp = e.target.value
    if (valeurInp.search(alphabet) !== -1) {
        coeff++
    }
    if (valeurInp.search(ALPHABET) !== -1) {
        coeff++
    }
    if (valeurInp.search(chiffre) !== -1) {
        coeff++
    }
    if (valeurInp.search(carspe) !== -1) {
        coeff++
    }
    console.log(coeff)

    // afficher la barre de progression
    allSpan[2].style.display = "inline"
    allLigne[0].style.display = "none"
    allLigne[1].style.display = "none"
    allLigne[2].style.display = "none"
    allImg[2].style.display = "none"
    
    switch (coeff) {
        case 1:
            // afficher le premier
            allLigne[0].style.display = "inline"
            allImg[2].src = "ressources/error.svg"
            allImg[2].style.display = "inline"
            break
        case 2:
            allLigne[0].style.display = "inline"
            allLigne[1].style.display = "inline"
            allImg[2].src = "ressources/error.svg"
            allImg[2].style.display = "inline"
            break
        case 3:
            allLigne[0].style.display = "inline"
            allLigne[1].style.display = "inline"
            allImg[2].src = "ressources/error.svg"
            allImg[2].style.display = "inline"
            break
        case 4:
            allSpan[2].style.display = "none"
            allLigne[0].style.display = "inline"
            allLigne[1].style.display = "inline"
            allLigne[2].style.display = "inline"
            allImg[2].src = "ressources/check.svg"
            allImg[2].style.display = "inline"
            break
        default:
            allSpan[2].style.display = "none"
            allSpan[3].style.display = "none"
            allSpan[4].style.display = "none"
            allSpan[5].style.display = "none"
            allImg[2].style.display = "none"
    }

})

// confirmation 
let inpConfirme = document.querySelector('#mdpconf')
inpConfirme.addEventListener('input', (e) => {
    if (e.target.value === valeurInp) {
        // mot de passe sont identique 
        allImg[3].style.display = 'inline'
        allImg[3].src = "ressource/error.svg"
    }
    else
    {
        allImg[3].style.display = 'inline'
        allImg[3].src = "ressource/error.svg"
    }

})