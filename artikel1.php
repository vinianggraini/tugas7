<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM konten where id=1");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <!--  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <style>
 	* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #FFB6C1;;
 
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
 </style>
</head>
<body>

<div class="container">
<h1>Vini Anggraini
  	<img src="img/instagram.jpg" style="margin-left: 600px; height: 40px;">
  	<img src="img/twitter.png" style="height: 40px;">
  	<img src="img/facebook.png" style="height: 40px;">
  	<img src="img/whatsap.jpg" style="height: 40px;">
  	<img src="img/email.jpg" style="height: 40px;"></h1>
<div class="topnav" style='background-color: #FFB6C1;'>
  <a class="active" href="home.php">Home</a>
  <a href="#kegiatan.php">Kegiatan</a>
  <a href="#family.php">Family</a>
  <a href="#photo.php">Photo</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>

<br>
<div class="container-fluid">
<div class="row content">
<div class="col-sm-12">
<table width="100%" border="0">    
    	<?php
    	while($user_data = mysqli_fetch_array($result)) {   
        echo "<tr>";
        echo "<td colspan='2'; style='font-size: 25px; color: #FFA07A; font-family: AR JULIAN;'>".$user_data['judul']."</td></tr>";

        echo "<tr>";
       	echo "<td style='text-align: justify; font-size: 25px; font-family: Goudy Old Style;'>".$user_data['artikel']."</td></tr>";

       	echo "<tr>";
       	echo "<td>&nbsp</td></tr>";
       	echo "<tr>";
       	echo "<td style='text-align: center;'><img src='img/secangkir.jpeg' style='width: 45%; height: 400px;'></td></tr>";
       	echo "<tr>";
       	echo "<td style='text-align: center; font-size: 20px; font-family: Book Antiqua;'><p>Santai Sejenak Sambil Minum Kopi hangat</p></td></tr>";
	    }
	    ?>	 
</table>

<h2>Silahkan Komentar disini ya !!!</h2>
<form method="post" action="artikel1.php" name="form1">  
  Nama: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Comment: <textarea name="commant" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php

if(isset($_POST['submit'])){
  $nama = $_POST['name'];
  $email = $_POST['email'];
  $commant = $_POST['commant'];
  $gender = $_POST['gender'];

  include_once("config.php");

  $result3 = mysqli_query($mysqli, "INSERT INTO komentar(nama,email,commant,gender) VALUES('$nama','$email','$commant','$gender')");
}
?>

<br>
<h2>Komentar:</h2>
<br>
<table width="100%" border="0">    
      <?php
      include_once("config.php"); 
      $result2 = mysqli_query($mysqli, "SELECT * FROM komentar ORDER BY id ASC");
      while($user_data = mysqli_fetch_array($result2)) {   
        echo "<tr>";
        echo "<td>".$user_data['nama']." ".$user_data['gender']." ".$user_data['tanggal']."<br></td></tr>";
        echo "<tr>";
        echo "<td style='text-align: justify; font-size: 20px; font-family: Time New Roman;'>".$user_data['email']."</td></tr>";
        echo "<tr>";
        echo "<td style='text-align: justify; font-size: 25px; font-family: Goudy Old Style;'>".$user_data['commant']."</td></tr>";
        echo "<tr>";
        echo "<td>&nbsp</td></tr>";
      }
      ?>   
</table>

<br><br><br>
<div class="container">
<div class="row">
  <div class="col-sm-12" style="background-color: #FFB6C1; text-align: center; min-height: 30px;">
    <h4>@2018 Web Blogger Vini Anggraini </h4>
  </div>
</div>
</div>

</div>
</div>
</div>
</div>
</body>
</html>
