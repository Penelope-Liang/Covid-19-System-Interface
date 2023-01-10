<!doctype html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<title>Covid Information System</title>
<style>

    h1{
      font-size: 200%;
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



    * {
  box-sizing: border-box;
}

.row {
  display: flex;
    flex-direction: row;
    align-items: center;
    /* width: 100%; */
    margin: 100px 50px;
}

/* Create three equal columns that sits next to each other */
.column {
  flex: 1;
  padding: 5px;
  position: relative;
}
.column span {
  position: absolute;
  width: 100%;
  text-align: center;
  margin-left:100px;
  top: 40%;
}

.column img {
  width: 150px;
  height:150px;
}

.logo {
  width: 100%;
  position: relative;
  height: 600px;
}
.logo img{
  height: 110%;
  width: 120%;
}
.title {
  color: black;
  font-size: 75px;
  position: absolute;
  width: 100%;
  text-align: center;
  margin-left:100px;
  top: 40%;
}
.column-title {
  margin-bottom : 40px;
  font-size: 40px;
}

    </style>
</head>

<body>  
<?php
include 'connectdb.php';
?>
<center>
  <div class="logo">
    <img src="./pic.jpg" />
    <h1 class="title">Covid Information System</h1>
  </div>


<div class="row">
<div class="column">
<div class="column-title">Record of Patient</div>
<a href="next.php" method="POST">
<img id = "image-one" src="1.png" style="width = 20 height=20">
</a> 
</div>

<div class="column">
<div class="column-title">Vaccine Type</div>
<a href="type.php" method="POST">
<img id = "image-two" src="2.png" style="width = 150 height=150">
</a>
</div>

<div class="column">
<div class="column-title">Search for Patient</div>
<a href="askpatient.php" method="POST">
<img id = "image-three" src="3.png" style="width = 150 height=150">
</a>
</div>

<div class="column">
<div class="column-title">Information of Workers</div>
<a href="worker.php" method="POST">
<img id = "image-four" src="4.png" style="width = 150 height=150">
</a>
</div>
</div>

<?php
$connection = NULL;
?>
</center>
</body>
</html>