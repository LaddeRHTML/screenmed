import IMask from 'imask';
function inputMask() {
    let element = document.getElementById('inputMask');
    let maskOptions = {
    mask: '8 (000) 000-00-00'
    };
    let mask = IMask(element, maskOptions);
}
export default inputMask;