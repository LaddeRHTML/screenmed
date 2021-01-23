function anchor() {    
    let link = 'https://my-works.kz/',
    inst = 'https://www.instagram.com/roma.psh/';
    console.log(`Developed by ${link}, with love ❤️`);
    console.log(`My inst - ${inst}`);
    const anchors = document.querySelectorAll('a[href*="#"]');
    anchors.forEach(anchor =>{
        anchor.addEventListener('click', (e) => {
        e.preventDefault;
        const blockID = anchor.getAttribute('href').substr(1),
            menu = document.querySelector('.header__inner'),
            overlay = document.querySelector('.header__overlay');
            
        menu.classList.remove('active');
        overlay.style.display = 'none';
        document.getElementById(blockID).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
        });
        
    });
}
export default anchor;