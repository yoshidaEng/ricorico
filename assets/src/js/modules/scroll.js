export default () => {
    //監視対象を指定
    const targets = document.querySelectorAll('.js-scroll-animation-trigger');
    const cb = function (entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-fade_in--active');
                observer.unobserve(entry.target);
            } else {
                entry.target.classList.remove('is-fade_in--active');
            }
        });
    }
    const options = {
        root: null,
        //ブラウザ画面下から-20%の位置をターゲットと交差する位置に設定
        rootMargin: "0% 0% -5% 0%",
        //指定した要素が画面に20%入るとコールバックが発生
        threshold: 0.2,
    }
    const io = new IntersectionObserver(cb, options);
    targets.forEach(target => {
        io.observe(target);
    });
}
