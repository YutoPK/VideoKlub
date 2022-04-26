<?php
include_once 'dbconfig.php';

$con=mysqli_connect("$host","$username","$password","projekatdjurisic");

if($con!=true)
{
    mysql_close($con);
    echo "greska";
}

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM proizvodjac WHERE idProizvodjaca=".$_GET['delete_id'];
 mysqli_query($con,$sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<html>
<head>
<title>Video Klub</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <script type="text/javascript">
        function edt_id(id){
            if(confirm('Sigurni ste da zelite promenu podataka ?')){
                window.location.href='proizvodjac_editdata.php?edit_id='+id;
            }
        }
        function delete_id(id){
            if(confirm('Da li sigurno zelite da obrisete podatak ?')){
                window.location.href='proizvodjac.php?delete_id='+id;
            }
        }
    </script>
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
        <table align="center">
            <tr>
            <th colspan="5"><a class="orangeColor"href="proizvodjac_adddata.php">Dodaj podatak</a></th>
            </tr>
            <th>idProizvodjaca</th>
            <th>netovrednost</th>
            <th>nazivKompanije</th>
            <th colspan="2">Operacija</th>
            </tr>
            <?php
                $sql_query="SELECT * FROM proizvodjac";
                $result_set=mysqli_query($con,$sql_query);
                while($row=mysqli_fetch_row($result_set))
                {
                    ?>
                    <tr>
                    <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
                    <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </div>
</div>

</center>
</body>
</html>