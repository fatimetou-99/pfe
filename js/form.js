
//form
const form = document.getElementById('form');
const username = document.getElementById('username');
const phone = document.getElementById('phone');


form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
	
});


function checkInputs() {
	// trim to remove the whitespaces
	const usernameValue = username.value.trim();
	const phoneValue = phone.value.trim();
	
	var valid = false;

	if(usernameValue === '') {
	setErrorFor(username, 'Le champ doit etre remplis');
	} else {
	setSuccessFor(username);
	return valid =true;
	}
	
	
	if(phoneValue === '') {
		setErrorFor(phone, 'Le champ doit etre remplis');
		} else if( phoneValue.length <8 ){
			setErrorFor(phone, 'Numero de telephone incorrect');
		} else{
		setSuccessFor(phone);
		return valid =true;
		}
		
		return valid ;
	
	function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'frm-control error';
	small.innerText = message;
	}
	
	function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'frm-control success';
	}

}
	