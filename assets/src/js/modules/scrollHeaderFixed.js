export default function scrollHeaderFixed() {
    const observeObj = document.querySelector('.js-observe-obj');
    const el = document.querySelector('.header');
    const cb = function(entries, observer) {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                el.classList.remove('_fixed');
            } else {
                el.classList.add('_fixed');
            }

        });
    }
    const options = {
        root: null,
        rootMargin: "0px 0px 0px 0px",
    };
    const io = new IntersectionObserver(cb, options);
    io.observe(observeObj);
}