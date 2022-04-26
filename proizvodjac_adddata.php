
<?php
include_once 'dbconfig.php';

$con=mysqli_connect("$host","$username","$password","projekatdjurisic");


if(isset($_POST['btn-save']))
{
 // promenljive za unos podataka
$sql_query="SELECT * FROM proizvodjac";
$result = mysqli_query($con,$sql_query);

 $idProizvodjaca = mysqli_num_rows($result) + 1;
 $netoVrednost = $_POST['netoVrednost'];
 $nazivKompanije = $_POST['nazivKompanije'];
 
 // sql query for inserting data into database
 $sql_query = "INSERT INTO proizvodjac(idProizvodjaca,netoVrednost,nazivKompanije) VALUES('$idProizvodjaca','$netoVrednost','$nazivKompanije')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Podatak je sacuvan ');
  window.location.href='proizvodjac.php';
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
       <h1 id="header-title" class="white-text">Proizvodjac</h1>
   </div>
</a>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="proizvodjac.php" class="orangeColor">Povratak na glavnu stranicu</a></td>
    </tr>
    <tr>
    <td><input type="text" name="netoVrednost" placeholder="netoVrednost" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nazivKompanije" placeholder="nazivKompanije" required /></td>
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