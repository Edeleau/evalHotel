
        /************************* Img Animations ***************************/


    let imgRoom1 = document.getElementById('imgRoom1');
    let imgRoom2 = document.getElementById('imgRoom2');
    let imgRoom3 = document.getElementById('imgRoom3');
    let imgExperience1 = document.getElementById('imgExperience1');
    let imgExperience2 = document.getElementById('imgExperience2');
    let lineUpRoom1 = document.getElementById('lineUpRoom1');

    imgRoom1.addEventListener('mouseover', imgMouseOver1);
    imgRoom1.addEventListener('mouseout', imgMouseOut1);
    
    imgRoom2.children[0].addEventListener('mouseover', imgMouseOver2);
    imgRoom2.children[0].addEventListener('mouseout', imgMouseOut2);
    imgRoom2.children[0].addEventListener('click', changeImg);

    console.log(imgRoom2.children[0]);
    imgRoom3.children[0].addEventListener('mouseover', imgMouseOver2);
    imgRoom3.children[0].addEventListener('mouseout', imgMouseOut2);
    imgRoom3.children[0].addEventListener('click', changeImg);

    imgExperience1.addEventListener('mouseover', imgMouseOver);
    imgExperience1.addEventListener('mouseout', imgMouseOut);

    imgExperience2.addEventListener('mouseover', imgMouseOver);
    imgExperience2.addEventListener('mouseout', imgMouseOut);
        

    function changeImg(){
        let imgSrc = this.getAttribute('src');
        let imgAlt = this.getAttribute('alt');
        let img1Src = imgRoom1.children[1].getAttribute('src');
        let img1Alt = imgRoom1.children[1].getAttribute('alt');
        imgRoom1.children[1].setAttribute('src', imgSrc);
        imgRoom1.children[1].setAttribute('alt', imgAlt);
        this.setAttribute('src', img1Src);
        this.setAttribute('alt', img1Alt);
    };

/************************* FadeIn/Out Bouton "Reservez" ***************************/

    let logoNavBar = document.getElementById('logoNavBar');
    let reserveBtn = document.getElementById('reserveButton');
    window.addEventListener('scroll', fadeBtn);
    fadeBtn();
    function fadeBtn(){
            if (document.body.scrollTop > 70 || document.documentElement.scrollTop > 70) {
                reserveBtn.classList.add('fadeOut');
                reserveBtn.classList.remove('fadeIn');

            } else if (document.body.scrollTop < 70 || document.documentElement.scrollTop < 70) {
                reserveBtn.classList.add('fadeIn');
                reserveBtn.classList.remove('fadeOut');
            }
            if (document.body.scrollTop > 350 || document.documentElement.scrollTop > 350) {
                logoNavBar.classList.remove('fadeOut');
                logoNavBar.classList.add('fadeIn');

            } else if (document.body.scrollTop < 350 || document.documentElement.scrollTop < 350) {
                logoNavBar.classList.add('fadeOut');
                logoNavBar.classList.remove('fadeIn');

            }
    }

    let emailNewsletter = document.getElementById("newsletterIndex");
    let submitNewsletter = document.getElementsByClassName("newsletterIndexSubmit");
    console.log(emailNewsletter);
    emailNewsletter.addEventListener('keyup', function(){
        let regex = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;

        let emailCheck = regex.test(emailNewsletter.value);
        if (emailCheck == false) {
            console.log(emailCheck);
            // submitNewsletter[0].setAttribute("disabled", "");
        } else {
            console.log(emailCheck);
        }
    })

   
