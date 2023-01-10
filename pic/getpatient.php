<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Patient Information</title>
<style>
    h1{
      color: black;
      font-size: 60px;
    }

    body{
      background: url("back.jpg");
      background-repeat:no-repeat;
			background-size: COVER;
      font-size: 30px;
      font-style: Roboto;
    }


    input {
      width: 15%;
      height: 5%;
      border: 1px;
      border-radius: 05px;
      padding: 8px 15px 8px 15px;
      margin: 10px 0px 15px 0px;
      box-shadow: 1px 1px 2px 1px grey;
      font-size: 80%;
    }

    button {
      background-color: grey;
      border: none;
      color: white;
      padding: 9px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 25px;
      margin: 4px 2px;
      cursor: pointer;
    }
</style>
</head>
<body>
<center>
<h1>Patient Information System</h1>

<?php
$OHIP="";
$FirstName="";
$LastName="";
$DOB="";
?>


<?php
   if ((isset($_POST["search"]))){
       include "connectdb.php";
       $OHIP = $_POST['OHIP'];
       $query = "SELECT * FROM Patient WHERE Patient.OHIP =:OHIP";
       $result = $connection->prepare($query);
       $executerecord = $result-> execute(array(":OHIP"=>$OHIP));

       if ($executerecord) {
        if($result->rowCount()>0) {
          
            foreach ($result as $row) {
                ?>
                <form action="" method="POST">
                  <?php
                  echo '<div><table border=1>';
                  echo '<thead><tr><th>OHIP</th><th>First Name</th><th>Last Name</th><th>Date of Birth</th></tr></thead>';
                  echo '<tbody>';
                  echo "<tr><td>{$row['OHIP']}</td><td>{$row['FirstName']}</td><td>{$row['LastName']}</td><td>{$row['DOB']}</td></tr>";
                  ?>
                  </form>
                  <form action="vaccinationdata.php" method="POST">
                  <label></label>
                  <button type="next" name="next" value="next">Next</button><br><br>
                  </form>
                <?php
            } 
        } else {
            ?>
            The OHIP is not exist, please click next to add your information.<br><br>
            <button onclick="location.href='addpatient.php'">Next</button>
			<?php
        
        }
       }
    }
?>

<?php
   $connection = NULL;
?>


</center>
</body>
</html>