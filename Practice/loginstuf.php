<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
      echo "Welcome " . $_POST["pass"]." ".$_POST["password"];  
    }

?>