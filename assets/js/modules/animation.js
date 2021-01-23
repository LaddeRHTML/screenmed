const WOW = require('wowjs');
function animation() {
    window.wow = new WOW.WOW({
        live: false,
        mobile: false
    });
    
    window.wow.init();
}
export default animation;