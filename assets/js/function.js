
function imgMouseOver() {
    this.children[0].classList.add('linkButtonOn');
    this.children[0].classList.remove('linkButton');
    this.children[1].classList.add('imgOn');
    this.children[1].classList.remove('imgOut');
    this.children[2].classList.add('legendOn');
    this.children[2].classList.remove('legendOut');
    lineUpRoom1.classList.add("lineColored");
    lineUpRoom1.classList.remove("lineWhite");
    console.log(this.children[0].classList)
    console.log(this.children[0])
    console.log(this.children[1].classList)
    console.log(this.children[1])
    console.log(this.children[2].classList)
    console.log(this.children[2])
};
function imgMouseOut() {
    this.children[0].classList.add('linkButton');
    this.children[0].classList.remove('linkButtonOn');
    this.children[1].classList.add('imgOut');
    this.children[1].classList.remove('imgOn');
    this.children[2].classList.add('legendOut');
    this.children[2].classList.remove('legendOn');

    lineUpRoom1.classList.remove("lineColored");
    lineUpRoom1.classList.add("lineWhite");
};
function imgMouseOver2() {
    this.classList.add('imgOn');
    this.classList.remove('imgOut');
};
function imgMouseOut2() {
    this.classList.add('imgOut');
    this.classList.remove('imgOn');
};


