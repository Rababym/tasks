<?php



//connect database
$conn = mysqli_connect("localhost","root","","robotarm");

//check connection

if(!$conn)
{
    echo 'connect erorr'. mysqli_connect_error(); }


if ($_SERVER["REQUEST_METHOD"] == "POST"){

$Motor1 = $_POST['Mot1'];
$Motor2 = $_POST['Mot2'];
$Motor3 = $_POST['Mot3'];
$Motor4 = $_POST['Mot4'];
$Motor5 = $_POST['Mot5'];
$Motor6 = $_POST['Mot6'];




$sql = "INSERT INTO arm (Motor1,Motor2,Motor3,Motor4,Motor5,Motor6) VALUES('$Motor1','$Motor2','$Motor3','$Motor4','$Motor5','$Motor6')";
if (mysqli_query($conn,$sql)){

	echo $Motor1 ."has been added";}
	else{
echo "Error" . $sql . "<br>" . mysqli_error($conn);
	}
}

$back=$lift=$forward=$right="";


if(isset($_POST["lift1"]))
{$lift =mysqli_real_escape_string($conn, $_POST["lift1"]);
}

if(isset($_POST["right1"]))
{$right =mysqli_real_escape_string($conn, $_POST["right1"]);
}

if(isset($_POST["forward"]))
{$forward =mysqli_real_escape_string($conn, $_POST["forward"]);
}

if(isset($_POST["back"]))
{$back =mysqli_real_escape_string($conn, $_POST["back"]);
}

// insert data to database
$sql1 = "INSERT INTO control(back,forward,lift1,right1) VALUES('$back','$forward','$lift','$right')";
mysqli_query($conn,$sql1);

// sql query to fetch last one row 
$sql2 ='SELECT * FROM control ORDER BY ID desc LIMIT 1';

 // make query & get result
$result = mysqli_query($conn,$sql2);

// fetch data 
$dir = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($dir as $dirc){
if ($dirc['lift1'] == 'l')
        {
         echo "<h1>L</h1>";
        }
    elseif ($dirc['right1'] == 'r')
        {
         echo "<h1>R</h1>";
        }
    elseif ($dirc['forward'] == 'f')
        {
         echo "<h1>F</h1>";
        }
    elseif ($dirc['back'] == 'b')
        {
         echo "<h1>B</h1>";
        }

}

//free result from memory
mysqli_free_result($result);


mysqli_close($conn);



?>