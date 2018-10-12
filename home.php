<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM konten where id=1");
$result2 = mysqli_query($mysqli, "SELECT * FROM konten where id=2");
$result4 = mysqli_query($mysqli, "SELECT * FROM konten where id=4");
$result6 = mysqli_query($mysqli, "SELECT * FROM konten where id=6");
?>
 
<html>
<head>    
    <title>Home</title>
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

.container img {vertical-align: middle;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    text-align: 
}

.pagination a.active {
    background-color: dodgerblue;
    color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}


  </style>
</head>
<body>

<div class="container" style="background-color: #F8F8FF;">
<h1>Vini Anggraini
  	<img src="img/instagram.jpg" style="margin-left: 600px; height: 40px;">
  	<img src="img/twitter.png" style="height: 40px;">
  	<img src="img/facebook.png" style="height: 40px;">
  	<img src="img/whatsap.jpg" style="height: 40px;">
  	<img src="img/email.jpg" style="height: 40px;"></h1>
<div class="topnav" style='background-color: #FFB6C1;'>
  <a class="active" href="#home">Home</a>
  <a href="#Kegiatan">Kegiatan</a>
  <a href="#Family">Family</a>
  <a href="#Photo">Photo</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>

<br>
<div class="w3-display-container w3-text-white">
  <img src="img/work.jpg" alt="Notebook" style="width:100%; height: 400px">
  <marquee style="text-align: center;"><i>“The man who does more than he is paid for will soon be paid more than he does” -  Napoleon Hill</i></marquee>

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
        echo "<td>".$user_data['nama']." ".$user_data['tanggal']." ".$user_data['comment']."<br></td></tr>";
        echo "<tr>";
        echo "<td colspan='2'><br></td></tr>"; 
        echo '<tr>';
        echo "<td style='width: 380px'> <img src='img/kopi.jpeg' style='width: 350px;'>&nbsp &nbsp &nbsp &nbsp &nbsp</td>"; 
        echo "<td style='vertical-align: top;text-align: justify;font-size: 25px; font-family: Goudy Old Style;'>".$user_data['sub_artikel']."<a href='artikel1.php'> baca selengkapnya </a></td></tr>";        
	    }
	    ?>

	    <?php
    	while($user_data = mysqli_fetch_array($result2)) {         
        echo "<tr>";
        echo "<td colspan='2'; style='font-size: 25px; color: #FFA07A; font-family: AR JULIAN;'>".$user_data['judul']."</td></tr>";
        echo "<tr>";
        echo "<td>".$user_data['nama']." ".$user_data['tanggal']." ".$user_data['comment']."<br></td></tr>";
        echo "<tr>";
        echo "<td colspan='2'><br></td></tr>"; 
        echo '<tr>';
        echo "<td style='width: 380px'> <img src='img/asus.jpeg' style='width: 350px;'>&nbsp &nbsp &nbsp &nbsp &nbsp</td>"; 
        echo "<td style='vertical-align: top;text-align: justify;font-size: 25px; font-family: Goudy Old Style;'>".$user_data['sub_artikel']."<a href='artikel2.php'> baca selengkapnya </a></td></tr>";        
	    }
	    ?>

	     <?php
    	while($user_data = mysqli_fetch_array($result4)) {         
        echo "<tr>";
        echo "<td colspan='2'; style='font-size: 25px; color: #FFA07A; font-family: AR JULIAN;'>".$user_data['judul']."</td></tr>";
        echo "<tr>";
        echo "<td>".$user_data['nama']." ".$user_data['tanggal']." ".$user_data['comment']."<br></td></tr>";
        echo "<tr>";
        echo "<td colspan='2'><br></td></tr>"; 
        echo '<tr>';
        echo "<td style='width: 380px'> <img src='img/memahami.jpg' style='width: 350px;'>&nbsp &nbsp &nbsp &nbsp &nbsp</td>"; 
        echo "<td style='vertical-align: top;text-align: justify;font-size: 25px; font-family: Goudy Old Style;'>".$user_data['sub_artikel']."<a href='artikel3.php'> baca selengkapnya </a></td></tr>";        
	    }
	    ?>

	    <?php
    	while($user_data = mysqli_fetch_array($result6)) {         
        echo "<tr>";
        echo "<td colspan='2'; style='font-size: 25px; color: #FFA07A; font-family: AR JULIAN;'>".$user_data['judul']."</td></tr>";
        echo "<tr>";
        echo "<td>".$user_data['nama']." ".$user_data['tanggal']." ".$user_data['comment']."<br></td></tr>";
        echo "<tr>";
        echo "<td colspan='2'><br></td></tr>"; 
        echo '<tr>';
        echo "<td style='width: 380px'> <img src='img/gambar.jpg' style='width: 350px;'>&nbsp &nbsp &nbsp &nbsp &nbsp</td>"; 
        echo "<td style='vertical-align: top;text-align: justify;font-size: 25px; font-family: Goudy Old Style;'>".$user_data['sub_artikel']."<a href='artikel4.php'> baca selengkapnya </a></td></tr>";        
	    }
	    ?>
	    </table>

  <br>
  <div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a class="active" href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>
</div>
	</div>
</div>
</div>
</div>
</div>




<br>
<div class="container">
<div class="row">
	<div class="col-sm-12" style="background-color: #FFB6C1; text-align: center; min-height: 30px;">
		<h4>@2018 Web Blogger Vini Anggraini </h4>
	</div>
</div>
</div>
</body>
</html>