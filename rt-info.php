<?php 
require_once "cnx.php";

$sqlR = mysqli_query($con,"SELECT max(id_rt) as longR from temp_r");
if (mysqli_num_rows($sqlR)>0){
		 $rowR = mysqli_fetch_assoc($sqlR) ;
}

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta http-equiv="refresh" content="5;url=index.php">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/font.css">

	<style>
		
*{
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

body{
  background-color: seagreen;
  font-family: 'Nunito', sans-serif;
color:black;
}

.container{
  width: 80%;
  min-height: 100vh;  
 
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  
  margin-left: auto;
  margin-right: auto;
}

.center{
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.card{
  background-color: white;
  width: 250px;
  min-height: 250px * 1.618;
  
  display: -webkit-box;
  
  display: -ms-flexbox;
  
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  padding:  20px;
  margin: 5px;
  
  -webkit-box-shadow: -20px -20px 0px 0px lighten(green, 5%);
  
          box-shadow: -20px -20px 0px 0px lighten(green, 5%);
  border-radius: 10px;
  
  -webkit-animation-name: shadow-show; /* Safari 4.0 - 8.0 */
  -webkit-animation-duration: 1.5s; /* Safari 4.0 - 8.0 */
  animation-name: shadow-show;
  animation-duration: 1.5s;
  
  -webkit-transition-timing-function: cubic-bezier(0.795, 0.000, 0.165, 1.000);
  -o-transition-timing-function: cubic-bezier(0.795, 0.000, 0.165, 1.000);
  transition-timing-function: cubic-bezier(0.795, 0.000, 0.165, 1.000); /* custom */

  
  h1,h2,h3,h4,h5{
    margin: 0px;
    padding: 0px 0px 15px 0px;
    font-family: 'Noto Sans KR', sans-serif;
    font-size: 30px;
    color: #282828;
  }
  
  hr{
    display: block;
    border: none;
    height: 3px;
    background-color: seagreen;
    margin: 0px;
  
  }
  
  p{
    margin: 15px; 0px 0px 0px;
    font-family: 'Noto Sans KR', sans-serif;
    font-weight: 100;
    letter-spacing: -0.25px;
    line-height: 1.25;
    font-size: 16px;
    word-break: break-all;
    word-wrap: pre-wrap;
    color: #282828;
    
    -webkit-animation-name: p-show; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 1.5s; /* Safari 4.0 - 8.0 */
    animation-name: p-show;
    animation-duration: 1.5s;
  }
  
  
}

img{
	width:70%;
}
	</style>
</head>
<body>
<div class="container center">
  <div class="card">
	  <img src="images/logo.png"></img>
    <h2 ><?php echo $rowR['longR'];?></h2>
    <hr/>
	<p>Retrait</p>
	<p id="date"></p>
  </div>
</div>
<script>

n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();

document.getElementById("date").innerHTML = d + " - " + m + " - " + y;
	//window.print();
  
</script>
</body>
</html>