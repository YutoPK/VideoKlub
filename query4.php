<?php
include_once 'dbconfig.php';

$con=mysqli_connect("$host","$username","$password","projekatdjurisic");

if($con!=true)
{
    mysql_close($con);
    echo "greska";
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
       <h1 id="header-title" class="white-text">Radnje Nis</h1>
   </div>
</a>


<div id="body">
    <div id="content">
        <table align="center">
            <tr>
            <th>idRadnje</th>
            <th>idFirma</th>
            <th>nazivUlice</th>
            <th>brojUlice</th>
            <th>nazivGrada</th>
            <th>velicina</th>
            </tr>
            <?php
                $sql_query="SELECT * FROM radnjafirme WHERE nazivGrada = \"Nis\"";
                $result_set=mysqli_query($con,$sql_query);
                while($row=mysqli_fetch_row($result_set))
                {
                    ?>
                    <tr>
                    <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                    <td><?php echo $row[5]; ?></td>
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