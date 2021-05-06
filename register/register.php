<!DOCTYPE html>
<html>
    <head>
        <title>HiVolunteer | Home</title>
        <link rel="icon" href="poze/icon.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="register.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <noscript><meta http-equiv="refresh" content="0;url=http://nojs.hivolunteer.com"></noscript>    
    </head>
    <body>
        <div class="page">
            <div class="logo">
                <img src="../poze/LOGO.png">
            </div>
            <div class="register">  
                <div class="div">
                    <button class = "leftbutton" id = "left" onclick = "alertuser();">Voluntar</button>
                    <button class = "rightbutton" id = "right" onclick = "alertuser();">Organizatie</button>
                    <p class="form"></p>
                </div>
            </div>
        <div class="buttom">
        </div>
        </div>
        
        <script>
           // window.addEventListener('load', () => {
           // vol();
           // });
			//function org (){
			//	document.getElementById("left").style.backgroundColor = "orange";
			//	document.getElementById("right").style.backgroundColor = "green";
            //    $(".form").load("formreg.php",{
            //        formres:"0"
            //    });
			//}
			//function vol (){
			//	document.getElementById("left").style.backgroundColor = "green";
			//	document.getElementById("right").style.backgroundColor = "orange";
            //    $(".form").load("formreg.php",{
            //         formres:"1"
            //    });
			//}
            function alertuser(){
                alert("test");
                document.getElementById('alert').innerHTML = '<button>test</button>';
            }
		</script>   
    </body>
</html>