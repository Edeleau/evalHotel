let inputForm = document.getElementsByClassName('form-control');
let textArea = document.getElementById('textArea');


for (let i = 0; i < inputForm.length; i++) {
    // écoute de focus sur les input et gestion de la classe input-not-empty
    inputForm[i].addEventListener("click", function () {
        if ((this.name == "chambre" || this.name == "personnes" || this.name == "categorie") && this.value != '') {
            this.parentElement.classList.add('input-not-empty');
        } else {
            this.parentElement.classList.remove('input-not-empty');
        }
    });
    inputForm[i].addEventListener("focus", function () {
        // reggex qui va tester la date et renvoyer une autre valeur que null si ça match
        let RegDate = RegExp("([0-9]{2})/([0-9]{2})/([0-9]{4})");
        let checkDate = this.value.match(RegDate);
        if (checkDate != null && this.name == 'range-start') {
            inputForm[i + 1].parentElement.classList.add('input-not-empty');
        } else if (checkDate != null && this.name == 'range-end') {
            inputForm[i - 1].parentElement.classList.add('input-not-empty');
        } else if (this.value != '' | this.value != 0) {
            this.parentElement.classList.add('input-not-empty');
        } else {
            this.parentElement.classList.remove('input-not-empty');
        }

    });
    inputForm[i].addEventListener("blur", function () {
        if (this.value != '' | this.value != 0) {
            this.parentElement.classList.add('input-not-empty');
        } else {
            this.parentElement.classList.remove('input-not-empty');
        }

    });
    if (textArea !== null) {
        textArea.addEventListener("keyup", function () {
            if (this.value != '' | this.value != 0) {
                this.parentElement.classList.add('input-not-empty');
            } else {
                this.parentElement.classList.remove('input-not-empty');
            }
        });
    };
}
if (textArea !== null) {
    textArea.addEventListener("keyup", function () {
        if (textArea.parentElement.classList.contains('input-not-empty')) {
            textArea.classList.add('textArea');
            document.getElementById('labelTextArea').classList.add('labelTextArea');
        } else {
            textArea.classList.remove('textArea');
            document.getElementById('labelTextArea').classList.remove('labelTextArea');
        }
    });
}

//Reggex pour connaitre la page courante
let RegUrl = new RegExp("[\\,;: _\\/\\\\]", "i");
let urlcourante = document.location.href;
RegUrl = urlcourante.split(RegUrl);
let last = RegUrl.length - 1;

if (urlcourante.includes('recrutement.php')) {
    // Fonction pour faire apparaitre le nom du fichier dans le formulaire
    document.getElementById('cv').addEventListener("change", function () {
        let fileName = $(this).val().split("\\").pop();
        document.getElementById('fakeInputCv').value = fileName;
        this.parentElement.classList.add('input-not-empty');

    });
    document.getElementById('motivation').addEventListener("change", function () {
        let fileName = $(this).val().split("\\").pop();
        document.getElementById('fakeInputMotivation').value = fileName;
        this.parentElement.classList.add('input-not-empty');
    });


    // Vérification des champs des formulaires 
    document.getElementById('submit').addEventListener('click', function (e) {
        let nom = document.getElementsByName('nom')[0].value;
        let prenom = document.getElementsByName('prenom')[0].value;
        let email = document.getElementsByName('email')[0].value;
        let cv = document.getElementsByName('cv')[0].value;
        let cvExtension = cv.substring(cv.lastIndexOf('.') + 1);
        let motivation = document.getElementsByName('motivation')[0].value;
        let motivationExtension = motivation.substring(motivation.lastIndexOf('.') + 1);

        let erreur = '';

        if (nom == '') {
            erreur += 'Entrez votre nom. ';
        }
        if (prenom == '') {
            erreur += 'Entrez votre prénom. ';
        }
        function checkEmail(email) {
            let re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
        if (checkEmail(email)) {
            console.log('Adresse e-mail valide');
        } else {
            erreur += 'Adresse e-mail non valide. ';
        }
        if (cvExtension == '' || motivationExtension == '') {
            erreur += 'Fichier pour le CV et la lettre de motivation obligatoire. ';
        } else if (cvExtension !== 'docx' && cvExtension !== 'pdf' || motivationExtension !== 'docx' && motivationExtension !== 'pdf') {
            erreur += 'Nous prenons que les fichiers PDF et DOCX. ';
        }
        if (erreur !== '') {
            e.preventDefault;
            return false;
        }
    })
}
// Verif formulaire page contact
if (urlcourante.includes('contact.php')) {
    document.getElementById('submit').addEventListener('click', function (e) {
        let nom = document.getElementsByName('nom')[0].value;
        let prenom = document.getElementsByName('prenom')[0].value;
        let entreprise = document.getElementsByName('entreprise')[0].value;
        let email = document.getElementsByName('email')[0].value;
        let pays = document.getElementsByName('pays')[0].value;
        let categorie = document.getElementsByName('categorie')[0].value;
        let sujet = document.getElementsByName('sujet')[0].value;
        let erreur = '';

        if (nom == '') {
            erreur += 'Entrez votre nom. ';
        }
        if (prenom == '') {
            erreur += 'Entrez votre prénom. ';
        }
        function checkEmail(email) {
            let re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
        if (checkEmail(email)) {
            console.log('Adresse e-mail valide');
        } else {
            erreur += 'Adresse e-mail non valide. ';
        }

        if (entreprise == '') {
            erreur += 'Entrez le nom de votre entreprise. ';
        }
        if (pays == '') {
            erreur += 'Entrez votre pays. ';
        }
        if (categorie == '') {
            erreur += 'Choisissez une categorie. ';
        }
        if (sujet == '') {
            erreur += 'Définissez un sujet pour votre message. ';
        }
        if (erreur !== '') {
            e.preventDefault;
            return false;
        }
    })
}

// Verif formulaire page reserve

if (urlcourante.includes('reserve.php')) {
    document.getElementById('submit').addEventListener('click', function (e) {
        let nom = document.getElementsByName('nom')[0].value;
        let email = document.getElementsByName('email')[0].value;
        let telephone = document.getElementsByName('telephone')[0].value;
        let chambre = document.getElementsByName('chambre')[0].value;
        let personnes = document.getElementsByName('personnes')[0].value;
        let rangeStart = document.getElementsByName('range-start')[0].value;
        let rangeEnd = document.getElementsByName('range-end')[0].value;

        let erreur = '';

        if (nom == '') {
            erreur += 'Entrez votre nom. ';
        }
        function checkEmail(email) {
            let re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
        if (checkEmail(email)) {
            console.log('Adresse e-mail valide');
        } else {
            erreur += 'Adresse e-mail non valide. ';
        }
        function checkTelephone(telephone) {
            // Definition du motif a matcher
            let regex = new RegExp(/^(01|02|03|04|05|06|08)[0-9]{8}/gi);

            // Definition de la variable booleene match
            let match = false;

            // Test sur le motif
            if (regex.test(telephone)) {
                match = true;
            }
            else {
                match = false;
            }

            // On renvoie match
            return match;
        }
        if (checkTelephone(telephone) == false) {
            erreur += ('Numéro incorrect !');
        }
        if (personnes == '') {
            erreur += 'Choisissez le nombre personnes. ';
        }
        if (chambre == '') {
            erreur += 'Choisissez une chambre. ';
        }
        if (rangeStart == '') {
            erreur += 'Définissez un date d\'arrivée. ';
        }
        if (rangeEnd == '') {
            erreur += 'Définissez un date de départ. ';
        }
        console.log(rangeEnd , rangeStart);
        if (erreur !== '') {
            e.preventDefault;
            return false;
        }
    })
}

