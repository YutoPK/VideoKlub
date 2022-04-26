<?php
include_once 'dbconfig.php';
$con=mysqli_connect("$host","$username","$password","projekatdjurisic");


if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM radnjafirme WHERE idRadnje=".$_GET['edit_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $idFirma = $_POST['idFirma'];
 $nazivUlice = $_POST['nazivUlice'];
 $brojUlice = $_POST['brojUlice'];
 $nazivGrada = $_POST['nazivGrada'];
 $velicina = $_POST['velicina'];
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE radnjafirme SET idFirma='$idFirma',nazivUlice='$nazivUlice',brojUlice='$brojUlice',nazivGrada='$nazivGrada',velicina='$velicina' WHERE idRadnje=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Promena je uspesno sacuvana!');
  window.location.href='radnjafirme.php';
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
 header("Location: radnjafirme.php");
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
       <h1 id="header-title" class="white-text">Radnja Firme</h1>
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
    <td><input type="text" name="nazivUlice" placeholder="nazivUlice" value="<?php echo $fetched_row['nazivUlice']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="brojUlice" placeholder="brojUlice" value="<?php echo $fetched_row['brojUlice']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nazivGrada" placeholder="nazivGrada" value="<?php echo $fetched_row['nazivGrada']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="velicina" placeholder="velicina" value="<?php echo $fetched_row['velicina']; ?>" required /></td>
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