
function imgMouseOver() {
    this.children[0].classList.add('imgOn');
    this.children[0].classList.remove('imgOut');
    this.children[1].classList.add('imgOn');
    this.children[1].classList.remove('imgOut');
};
function imgMouseOut() {
    this.children[0].classList.add('imgOut');
    this.children[0].classList.remove('imgOn');
    this.children[1].classList.add('imgOut');
    this.children[1].classList.remove('imgOn');
};
function imgMouseOver2() {
    this.children[0].classList.add('imgOn');
    this.children[0].classList.remove('imgOut');
};
function imgMouseOut2() {
    this.children[0].classList.add('imgOut');
    this.children[0].classList.remove('imgOn');
};


