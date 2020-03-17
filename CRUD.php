<?php

 function diklogin(){
    if((($_POST['email']=="edwin@hotmail.com")&&($_POST['password']=="1234"))||(($_POST['email']=="lisbeth")&&($_POST['password']=="1234")))
    {
      header('Location: administrador.php');
    
    }
	}
	

