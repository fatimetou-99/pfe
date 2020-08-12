<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
   
   
    <link rel="stylesheet" type="text/css" href="css/info.css">
  <title>Document</title>
</head>
<body>
<h1>votre numero est :</h1>
    <p id="numr"></p>

<script>
var b =localStorage.getItem("rtr");
document.getElementById("numr").innerHTML =b;
</script>
</body>
</html>

