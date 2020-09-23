function ret(){
	window.location.href="rtr.php";
}





  /*
   echo '<script>';
              echo '   
              clickCounter();
              function clickCounter() {
              if(typeof(Storage) !== "undefined") {
              if (localStorage.clickcount) {
                 localStorage.clickcount = Number(localStorage.clickcount)+1;
              } else {
              localStorage.clickcount = 1;
              }
                            
              localStorage.setItem("myValue2", localStorage.clickcount);
              } else {
              document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
              }
              }';
			  echo ' </script>';
			  

   echo '<script>';
              echo '   
              clickCounte();
              function clickCounte() {
              if(typeof(Storage) !== "undefined") {
              if (localStorage.clickcoun) {
              x= localStorage.clickcoun = Number(localStorage.clickcoun)+1;
              } else {
              localStorage.clickcoun = 1;
              }
              
              //document.getElementById("result").innerHTML = "You have clicked the button " + localStorage.clickcount + " time(s).";
              
              localStorage.setItem("myValue", localStorage.clickcoun);
              } else {
              document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
              }
              }';
			  echo ' </script>';
			  

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

	
n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();

document.getElementById("date").innerHTML = d + " - " + m + " - " + y;
document.getElementById("date2").innerHTML = d + " - " + m + " - " + y;
document.getElementById("date3").innerHTML = d + " - " + m + " - " + y;


var b =localStorage.getItem("myValue");
document.getElementById("rsl").innerHTML =b;





if( (c-d) >0){
  document.getElementById('Rattente').innerHTML = c-d ;
  document.getElementById('r-act').innerHTML = localStorage.getItem("r-suiv", localStorage.vsv);
}
else{
  document.getElementById('Rattente').innerHTML = 0;
  document.getElementById('r-act').innerHTML = c;
*/