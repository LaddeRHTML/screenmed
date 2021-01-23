function menu() {
    const hamburger = document.querySelector('.hamburger'),
        menu = document.querySelector('.header__inner'),
        close = document.querySelector('.header__close'),
        overlay = document.querySelector('.header__overlay');
    hamburger.addEventListener('click',()=>{
        menu.classList.add('active');
        overlay.style.display = 'block';
        document.body.style.overflow = 'hidden';
    });
    close.addEventListener('click',()=>{
        menu.classList.remove('active');
        overlay.style.display = 'none';
        document.body.style.overflow = 'auto';
    });
}
export default menu;