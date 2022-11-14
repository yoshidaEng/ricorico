export default class TextAnimation {
    constructor(els) {
        this.target = document.querySelector('.menu__list');
        this.btn = document.querySelector('#menuBtn');
        this.els = [...document.querySelectorAll(els)];
        this._splitText();
        this._addEvent();
    }
    _splitText() {
        let text = {};
        this.els.forEach((el) => {
            text = el.innerHTML.trim().split('').reduce((acc, curr) => {
                curr =  curr.replace(/\s+/, '&nbsp;');
                return `${acc}<span class="char">${curr}</span>`;
            }, "");
            el.innerHTML = text;
        })
    }
    _animate() {
        this.target.classList.toggle('_inview');
    }
    _addEvent() {
        this.btn.addEventListener('click', this._animate.bind(this));
    }

}
