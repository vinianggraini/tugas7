<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result2 = mysqli_query($mysqli, "SELECT * FROM konten where id=2");
$result3 = mysqli_query($mysqli, "SELECT * FROM komentar where id");
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
<div class="container-fluid">
<div class="row content">
<div class="col-sm-12">
<table width="100%" border="0">    
    	<?php
    	while($user_data = mysqli_fetch_array($result2)) { 

        echo "<tr>";
        echo "<td colspan='2'; style='font-size: 25px; color: #FFA07A; font-family: AR JULIAN;'>".$user_data['judul']."</td></tr>";

        echo "<tr>";
       	echo "<td style='text-align: justify; font-size: 25px; font-family: Goudy Old Style;'>".$user_data['artikel']."</td></tr>";

       	echo "<tr>";
       	echo "<td>&nbsp</td></tr>";
       	echo "<tr>";
       	echo "<td style='text-align: center;'><img src='img/asus.jpg' style='width: 45%; height: 400px;'></td></tr>";
       	echo "<tr>";
       	echo "<td style='text-align: center; font-size: 20px; font-family: Book Antiqua;'><p>Laptop asus bantu kerja bangeeeet</p></td></tr>";
	    }
	    ?>	 
</table>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["nama"]);
  $email = test_input($_POST["email"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Silahkan Komentar disini ya !!!</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Komentar:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

<!-- <br><br>
<p>Silahkan Komentar dibawah ini</p>

<br>
<form action="" method="post" name="form1">
<table width="50%" border="0">
      <tr> 
        <td>Commentar</td>
        <td><input type="text" name="comment"></td>
      </tr>
      <tr>
        <td><br></td>
      </tr>
      <tr> 
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td><br></td>
      </tr>
      <tr> 
        <td>Email</td>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <td><br></td>
      </tr>
      <tr> 
        <td></td>
        <td><input type="submit" name="Submit" value="Post Comment"></td>
      </tr>
    </table>
</form>
<?php
 
  // Check If form submitted, insert form data into users table.
  if(isset($_POST['Submit'])) {
    $commant = $_POST['commant'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    
    // include database connection file
    include_once("config.php");
        
    // Insert user data into table
    $result3 = mysqli_query($mysqli, "INSERT INTO users(commant,nama,email) VALUES('$commant','$nama','$email')");
    
    // Show message when user added
    echo "User added successfully";
  }
  ?>

<br><br>
<table width='80%' border=1>
 
    <tr>
        <th>Comment</th> 
        <th>Nama</th> 
        <th>Email</th> 
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result3)) {         
        echo "<tr>";
        echo "<td>".$user_data['comment']."</td></tr>";
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td></tr>";
        echo "<tr>";
        echo "<td>".$user_data['email']."</td></tr>";    
        // // echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";   
    
    }
    ?>     -->
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
