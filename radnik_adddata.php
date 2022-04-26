
<?php
include_once 'dbconfig.php';

$con=mysqli_connect("$host","$username","$password","projekatdjurisic");


if(isset($_POST['btn-save']))
{
 // promenljive za unos podataka
$sql_query="SELECT * FROM radnik";
$result = mysqli_query($con,$sql_query);

 $idRadnika = mysqli_num_rows($result) + 1;
 $idFirma = $_POST['idFirma'];
 $idPozicije = $_POST['idPozicije'];
 $ime = $_POST['ime'];
 $prezime = $_POST['prezime'];
 $plata = $_POST['plata'];
 $pol = $_POST['pol'];
 
 // sql query for inserting data into database
 $sql_query = "INSERT INTO radnik(idRadnika,idFirma,idPozicije, ime, prezime, plata, pol) VALUES('$idRadnika','$idFirma','$idPozicije','$ime','$prezime','$plata','$pol')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Podatak je sacuvan ');
  window.location.href='radnik.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('Greska! Podatak nije dodat! ');
  </script>
  <?php
 }
 // sql query execution function
}
?>
<html>
<head>
<title>VideoKlub</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
<a href="index.php">
   <div id="header-not-mainpage">
       <h1 id="header-title" class="white-text">Radnik</h1>
   </div>
</a>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="radnik.php" class="orangeColor">Povratak na glavnu stranicu</a></td>
    </tr>
    <tr>
    <td><input type="text" name="idFirma" placeholder="idFirma" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="idPozicije" placeholder="idPozicije" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="ime" placeholder="ime" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="prezime" placeholder="prezime" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="plata" placeholder="plata" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="pol" placeholder="pol" required /></td>
    </tr>
    <tr>
    <td><center><button type="submit" name="btn-save" class="backOrangeColor"><strong>Sacuvaj</strong></button></center></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>