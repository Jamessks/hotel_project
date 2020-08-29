window.addEventListener('DOMContentLoaded', (event) => {
	const $reg_username = document.querySelector('#reg_username');
	const $reg_email = document.querySelector('#reg_email');
	const $reg_password = document.querySelector('#reg_password');
	const $reg_confirm_pass = document.querySelector('#reg_confirm_pass');
	const $reg_username_err = document.querySelector('#reg_username_err');
	const $reg_email_err = document.querySelector('#reg_email_err');
	const $reg_password_err = document.querySelector('#reg_password_err');
	const $reg_confirm_pass_err = document.querySelector('#reg_confirm_pass_err');

	$reg_username.addEventListener("input",(e) => {
		const referred = $reg_username_err;
		const value = e.target.value;

		if(value.length != 0){
			if(value.length < 4){
				showElement(referred)
			} else if(value.length >= 4){
				hideElement(referred)
			}
		} else {
			hideElement(referred)
		}
	});

	$reg_email.addEventListener("input",(e) => {
		const referred = $reg_email_err;
		const value = e.target.value;
		const emailRegEx = RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);

		if(value.length != 0){
			if(!emailRegEx.test(value)){
				showElement(referred);
			} else {
				hideElement(referred);
			}
		} else {
			hideElement(referred);
		}
	});

	$reg_password.addEventListener("input",(e) => {
		const referred = $reg_password_err;
		const value = e.target.value;

		if(value.length != 0){
			if(value.length < 8){
				showElement(referred);
			} else if(value.length >= 8){
				hideElement(referred);
			}
		} else {
			hideElement(referred);
		}
	});

	$reg_confirm_pass.addEventListener("input",(e) => {
		const referred = $reg_confirm_pass_err;
		const value = e.target.value;
		const valuePassword = $reg_password.value;

		if(value.length != 0){
			if(value != valuePassword){
				showElement(referred);
			} else {
				hideElement(referred);
			}
		} else {
			hideElement(referred);
		}
	});


	function showElement(referred) {
		referred.classList.remove("hidden");
		referred.classList.add("block");
	}

	function hideElement(referred) {
		referred.classList.add("hidden");
		referred.classList.remove("block");
	}
});
