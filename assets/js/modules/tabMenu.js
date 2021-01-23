function tabMenu() {
    let el = document.querySelectorAll('.service__item');
    for (let i = 0; i < el.length; i++) {
      el[i].onclick = function() {
        let c = 0;
        while (c < el.length) {
          el[c++].className = 'service__item';
        }
        el[i].className = 'service__item active';
      };
    }
}
export default tabMenu;