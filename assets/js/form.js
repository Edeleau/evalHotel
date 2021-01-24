let inputForm = document.getElementsByClassName('form-control');
let textArea = document.getElementById('textArea');


for (let i = 0; i < inputForm.length; i++) {
    // écoute de focus sur les input et gestion de la classe input-not-empty
    inputForm[i].addEventListener("click", function () {
        if ((this.name == "chambre" || this.name == "personnes" || this.name == "categorie") && this.value != '') {
            this.parentElement.classList.add('input-not-empty');
        }else{
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
        }else{
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
console.log();
if (RegUrl[last] === 'recrutement.php') {
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
}



