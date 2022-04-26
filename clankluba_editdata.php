<?php
include_once 'dbconfig.php';
$con=mysqli_connect("$host","$username","$password","projekatdjurisic");


if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM clankluba WHERE idClanaKluba=".$_GET['edit_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $idFirma = $_POST['idFirma'];
 $ime = $_POST['ime'];
 $prezime = $_POST['prezime'];
 $datumRodjenja = $_POST['datumRodjenja'];
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE clankluba SET idFirma='$idFirma',ime='$ime',prezime='$prezime',datumRodjenja='$datumRodjenja'  WHERE idClanaKluba=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Promena je uspesno sacuvana!');
  window.location.href='clankluba.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: clankluba.php");
}
?>
<html>
<head>
<title>Video Klub</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<a href="index.php">
   <div id="header-not-mainpage">
       <h1 id="header-title" class="white-text">Clan Kluba</h1>
   </div>
</a>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="idFirma" placeholder="idFirma" value="<?php echo $fetched_row['idFirma']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="ime" placeholder="ime" value="<?php echo $fetched_row['ime']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="prezime" placeholder="prezime" value="<?php echo $fetched_row['prezime']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="datumRodjenja" placeholder="datumRodjenja" value="<?php echo $fetched_row['datumRodjenja']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update" class="backOrangeColor"><strong>PROMENI</strong></button>
    <button type="submit" name="btn-cancel" class="backOrangeColor"><strong>Odustani</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>