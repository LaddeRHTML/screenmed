function form() {
    const form = document.querySelector('form');
    console.log(form);
	form.addEventListener('submit', formSend);

	async function formSend(e) {
		e.preventDefault();
		validator(form);
		async function validator(form) {
			let error = formValidate(form);
			let formData = new FormData(form);

			if(error === 0) {
				form.classList.add('_sending');
				let response = await fetch('./wp-content/themes/ScreenMed/smart.php', {
					method: 'POST',
					body: formData
				});
				if (response.ok) {
					alert('Данные отправлены!')
					form.reset();
					form.classList.remove('_sending');
				} else {
					alert('Ошибка');
					form.classList.remove('_sending');
				}
			} else {
				alert('Заполните обязательные поля!');
			}
		}
	}

	function formValidate(form) {
		let error = 0;
		let formReq = document.querySelectorAll('._req');
		formReq.forEach(input => {
			formRemoveError(input);
			if (input.value === '') {
				formAddError(input);
				error++;
			}
		});
		return error;
	}

	function formAddError(input) {
		input.classList.add('_error');
	}

	function formRemoveError(input) {
		input.classList.remove('_error');
	}
}
export default form;