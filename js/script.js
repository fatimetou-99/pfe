const form = document.getElementById('form');
const username = document.getElementById('nom');
const phone = document.getElementById('tel');


form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});



function checkInputs() {
	// trim to remove the whitespaces
	const usernameValue = username.value.trim();
	const phoneValue = phone.value.trim();
	
	if(usernameValue === '') {
    setErrorFor(username, 'Le champ doit etre remplis');
    return false;
    }
     else {
    setSuccessFor(username);
    username = $('#nom').val();
	}
		
    if(phoneValue === '') {
		setErrorFor(phone, 'Le champ doit etre remplis');
		} else if( phoneValue.length <8 ){
            setErrorFor(phone, 'Numero de telephone incorrect');
            return false;
		} else{
        setSuccessFor(phone);
        phone = $('#tel').val();

		}
		
	
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
    

function ret(){
	window.location.href="rtr.php";
}



n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML = m + "-" + d + "-" + y;
document.getElementById("date2").innerHTML = m + "-" + d + "-" + y;
document.getElementById("date3").innerHTML = m + "-" + d + "-" + y;




  /*


   function rtCounter() {
    	if(typeof(Storage) !== "undefined") {
	    if (localStorage.count) {
		 localStorage.count = Number(localStorage.count)+1;
	  } else {
		localStorage.count = 1;
	  }
	  localStorage.setItem("rtr", localStorage.count);
  
	} else {
	  document.getElementById("result").innerHTML = "Dsl, votre navigateur ne support pas web storage...";
	}
  
  }



var b =localStorage.getItem("myValue");
document.getElementById("rsl").innerHTML =b;
*/