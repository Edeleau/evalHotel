let inputForm = document.getElementsByClassName('form-control');

for (let i = 0; i < inputForm.length; i++) {
    // écoute de focus sur les input et gestion de la classe input-not-empty
    inputForm[i].addEventListener("focus", function () {
        // reggex qui va tester la date et renvoyer une autre valeur que null si ça match
        let essai = RegExp("([0-9]{2})/([0-9]{2})/([0-9]{4})");
        let checkDate = this.value.match(essai);
        console.log(this.name);
        if (checkDate != null && this.name == 'range-start') {
            inputForm[i + 1].parentElement.classList.add('input-not-empty');
        }else if (checkDate != null && this.name == 'range-end') {
            inputForm[i - 1].parentElement.classList.add('input-not-empty');
        }else if (this.value != '' | this.value != 0) {
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
}
