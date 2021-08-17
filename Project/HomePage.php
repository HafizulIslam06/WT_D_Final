<?php
  include 'header.php';

    if( isset($_POST["Button_GetStartedNow"]) )
    {
        header("Location:sign_up.php");
    }    
?>

<html>
  <head>
    <title>E-Cell</title>
    <link rel="stylesheet" href="style/header.css">
  </head>
  <body background="Homepage.png" style="background-size: 100% 100%">    
    <form action="" method="POST">
      <br /><br /><br /><br /><br />
      <br /><br /><br /><br /><br />
      <br /><br /><br /><br /><br />
      <h1 class="h" align="center">WELCOME TO OUR WEBSITE<br/></h1>
      <h3 class="h" align="center">Our clients are our first priority<br/><br/><br/>
        <input class="commonButton" type="submit" value="GET STARTED NOW" name="Button_GetStartedNow"/>
      </h3>
    <form>
  </body>
</html>
