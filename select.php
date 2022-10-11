<html>

<body>
  <?php      
if(($_GET["lang"]=='en')){
            setcookie("lang","en",time()+3600*24);
        }
if(($_GET["lang"]=='th')){
            setcookie("lang","th",time()+3600*24);}
            
        
            ?>
    </body>

</html>