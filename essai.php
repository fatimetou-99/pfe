<html>
    <head>
        <title>Tutoriel Ajax (XHTML + JavaScript + XML)</title>
        <script type='text/JavaScript'>
 
             function getXhr(){
                                var xhr = null; 
                if(window.XMLHttpRequest) // Firefox et autres
                   xhr = new XMLHttpRequest(); 
                else if(window.ActiveXObject){ // Internet Explorer 
                   try {
                            xhr = new ActiveXObject("Msxml2.XMLHTTP");
                        } catch (e) {
                            xhr = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                }
                else { // XMLHttpRequest non supporté par le navigateur 
                   alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
                   xhr = false; 
                } 
                                return xhr
            }
 
            /**
            * Méthode qui sera appelée sur le clic du bouton
            */
            function go(){
                var xhr = getXhr()
                // On définit ce qu'on va faire quand on aura la réponse
                xhr.onreadystatechange = function(){
                    // On ne fait quelque chose que si on a tout reçu et que le serveur est OK
                    if(xhr.readyState == 4 && xhr.status == 200){
                        alert(xhr.responseText);
                    }
                }
                xhr.open("GET","insert-r.php",true);
                xhr.send(null);
            }

            
        </script>
    </head>
    <body>
        <input type='button' value='Dis quelque chose !' onclick='go()' />
        <p id ="demo">
    </body>
</html>
