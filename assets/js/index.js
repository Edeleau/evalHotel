
        /************************* Img Animations ***************************/


    let imgRoom1 = document.getElementById('imgRoom1');
    let imgRoom2 = document.getElementById('imgRoom2');
    let imgRoom3 = document.getElementById('imgRoom3');
    let imgExperience1 = document.getElementById('imgExperience1');
    let imgExperience2 = document.getElementById('imgExperience2');
    let lineUpRoom1 = document.getElementById('lineUpRoom1');

    imgRoom1.addEventListener('mouseover', imgMouseOver);
    imgRoom1.addEventListener('mouseout', imgMouseOut);
    
    imgRoom2.addEventListener('mouseover', imgMouseOver2);
    imgRoom2.addEventListener('mouseout', imgMouseOut2);
    imgRoom2.addEventListener('click', changeImg);

    imgRoom3.addEventListener('mouseover', imgMouseOver2);
    imgRoom3.addEventListener('mouseout', imgMouseOut2);
    imgRoom3.addEventListener('click', changeImg);

    imgExperience1.addEventListener('mouseover', imgMouseOver);
    imgExperience1.addEventListener('mouseout', imgMouseOut);

    imgExperience2.addEventListener('mouseover', imgMouseOver);
    imgExperience2.addEventListener('mouseout', imgMouseOut);
        

    function changeImg(){
        let imgSrc = this.children[0].getAttribute('src');
        let imgAlt = this.children[0].getAttribute('alt');
        let img1Src = imgRoom1.children[1].getAttribute('src');
        let img1Alt = imgRoom1.children[1].getAttribute('alt');
        imgRoom1.children[1].setAttribute('src', imgSrc);
        imgRoom1.children[1].setAttribute('alt', imgAlt);
        this.children[0].setAttribute('src', img1Src);
        this.children[0].setAttribute('alt', img1Alt);
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

    // const landingPage2 = document.querySelector('#landingPage2');
    // const topPos2 = landingPage2.getBoundingClientRect().top + window.pageYOffset;

    // const landingPage3 = document.querySelector('#landingPage3');
    // const topPos3 = landingPage3.getBoundingClientRect().top + window.pageYOffset;

    // const landingPage4 = document.querySelector('#landingPage4');
    // const topPos4 = landingPage4.getBoundingClientRect().top + window.pageYOffset;

    // window.addEventListener('scroll', fScrollTo);

    // function fScrollTo() {
    //     if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100 && document.body.scrollTop < 1000 || document.documentElement.scrollTop < 1000) {
    //         window.scrollTo({
    //             top: topPos2,
    //             behavior: 'smooth'
    //             })
    //     } else if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
    //         window.scrollTo({
    //             top: topPos3,
    //             behavior: 'smooth'
    //             })
    //         }
    // }
    
//     let anchorlinks = document.querySelectorAll('a[href^="#"]')
 
// for (let item of anchorlinks) { // relitere 
//     item.addEventListener('click', (e)=> {
//         let hashval = item.getAttribute('href')
//         let target = document.querySelector(hashval)
//         target.scrollIntoView({
//             behavior: 'smooth',
//             block: 'start'
//         })
//         history.pushState(null, null, hashval)
//         e.preventDefault()
//     })
// }
