import menu      from './modules/menu';
import anchor    from './modules/anchor';
import animation from './modules/animation';
import slider    from './modules/slider';
import inputMask from './modules/inputMask';
import form 	 from './modules/form';
window.addEventListener('DOMContentLoaded', function(){  
	slider();
	menu();
	anchor();
	inputMask();
	animation();
	form();
})