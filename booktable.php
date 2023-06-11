
<php

$servername= "localhost";
$username= "root";
$password= "";
$database="booking";

    $conn = new mysqli($servername, $username, $password,$database);


$nom=$_POST['nom'];
$email=$_POST['email'];
$howMuchPeople=$_POST['howMuchPeople'];
$Time=$_POST['Time'];
$date=$_POST['date'];
$number=$_POST['number'];

$req = "INSERT INTO booking(name,email,howMuchPeople,Time,date,number values('$nom','$email','$howMuchPeople','$Time','$date','$number')";

$resultat=mysqli_query($conn,$rep);

??>