<!DOCTYPE html>
<html>
<head>
    <style>
      p { font-family: Helvetica, Arial, Sans-Serif; font-size: 16px; }
    </style>
<link rel="stylesheet" href="ArmStyle.css">
<title>ROBOT-ARM</title>
</head>
<body>

<center>
    <img src="SMP.JPG" width="150" height="150">

  <h2>--ROBOT ARM CONTROLLER--</h2>
<div>
<form id="attr" action= "data.php" method="POST">
<label for="Mot1">Motor 1:</label><br>
  <input type="range" name="Mot1" min="0" max="100"><br>
<label for="Mot2">Motor 2:</label><br>
  <input type="range" name="Mot2"  min="0" max="100"><br>
<label for="Mot3">Motor 3:</label><br>
  <input type="range" name="Mot3"  min="0" max="100"><br>
<label for="Mot4">Motor 4:</label><br>
  <input type="range" name="Mot4"  min="0" max="100"><br>
<label for="Mot5">Motor 5:</label><br>
  <input type="range" name="Mot5"  min="0" max="100"><br>
<label for="Mot6">Motor 6:</label><br>
  <input type="range" name="Mot6"  min="0" max="100"><br>

<br>

  <button type="submit" value="save" name="save">SAVE</button>
  <button type="submit" value="run" name="run">RUN</button>
  <br><br>
</div>


    <div class ="btn">
        <form action= "data.php" method="POST" background-color:whitesmoke;>
            <button type="submit" style="margin-bottom:1% ;" value="f" name="forward"> <p>&#8613;</p></button><br>
            <button type="submit" style="margin-left:1% ;" value="l" name="lift1"><p>&#8612;</p></button>
            <button type="submit" style="margin-left:20% ;" value="r" name="right1" ><p>&#8614;</p></button> <br>
            <button type="submit" style="margin-top:1% ;" value="b" name="back"><p>&#8615;</p></button>
        </form>
    </div>
    <br>

</form>

</center>
</body>
</html>