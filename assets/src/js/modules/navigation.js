export default class Navigation {
    constructor() {
        this.DOM = {};
        this.DOM.btn = document.querySelector('#menuBtn');
        this.DOM.nav = document.querySelector('#menu');
        this.DOM.circle = document.querySelector('.circleBg');
        this._bgEvent();
        this._navEvent();
    }
    _animateNavBg() {
        this.DOM.circle.style.transform = '';
        const hidden = document.querySelector('.circleBg').getAttribute('aria-hidden');
        if(hidden == 'true') {
            this.DOM.circle.setAttribute('aria-hidden', 'false');
            this.DOM.circle.style.transform = 'scale(0)';
            this.DOM.circle.style.animationName = 'spread';
        } else {
            this.DOM.circle.setAttribute('aria-hidden', 'true');
            this.DOM.circle.style.transform = 'scale(15)';
            this.DOM.circle.style.animationName = 'narrow';
        }
    }
    _bgEvent() {
        this.DOM.btn.addEventListener('click', this._animateNavBg.bind(this));
    }
    _setNav() {
        const expanded = document.querySelector('.menuBtn').getAttribute('aria-expanded');
        const targetElement = document.querySelector('#menu');
        if(expanded == 'false') {
            this.DOM.btn.setAttribute('aria-label', 'メニューを閉じる');
            this.DOM.btn.setAttribute('aria-expanded', 'true');
            document.querySelector('.menuBtn__text').innerHTML = 'close';
            this.DOM.nav.setAttribute('aria-hidden', 'false');
            bodyScrollLock.disableBodyScroll(targetElement);
        }else {
            this.DOM.btn.setAttribute('aria-label', 'メニューを開く');
            this.DOM.btn.setAttribute('aria-expanded', 'false');
            document.querySelector('.menuBtn__text').innerHTML = 'menu';
            this.DOM.nav.setAttribute('aria-hidden', 'true');
            bodyScrollLock.enableBodyScroll(targetElement);
        }
    }
    _navEvent() {
        this.DOM.btn.addEventListener('click', this._setNav.bind(this));
    }
}