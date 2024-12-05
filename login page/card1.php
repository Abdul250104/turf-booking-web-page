<?php 
include 'connect.php';
 ?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>cards</title>
    <link rel="stylesheet" href="turf.css">
	
</head>
<body>
	<div class="header">
		<a href="homepage.php">      <img id="logo" src="turflogo%20.png" alt="turf logo"></a>
		<nav>
			<ul>
				<li><a href="homepage.php">home</a></li>
                <li><a href="cards.php">Book turf</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="conntect.php">Contact</a></li>
				
			</ul>
		</nav>
		<!-- HTML !-->
         <a href="logout.php"> <button class="button-5" role="button" style="margin-right: 5%; width: 50px;height: 10px;">log out</button>  </a>
	</div>
	<div class="fakeheader"></div>
    <div id="contener">
        <div class="enquri"><h1>enquri compalsory</h1></div>     
    <form action="#" method="post">
      <div class="form_elemnt">
                <label for="First Name">Name</label>
                <input type="text" id="First Name"  name="fName">
            </div>
            <div class="form_elemnt">
                <label for="date">date</label>
                <input type="datetime-local" id="date" name="date" >
            </div>
            
            <div class="form_elemnt">
                <label for="phone">Phone No</label>
                <input type="text" name="country code" value ="+91" size="10" name="phone">

            <div class="form_elemnt">
                <label for="chekbox" >choose the oppyion</label>
                <select name="feld" id="">
                    <option value="circket">circket</option>
                    <option value="football">football</option>
                </select>
            </div>
            <div class="form_elemnt">
                <input type="submit" value="book" class="button-5" name="register">
                
            </div>
            <br>
    </form>
    </div>
		
	

	
    	
    
    </div>
    <br><br><br><br><br><br><br><br><br>

    <footer class="footer2">
        
            <h4>Copyright @ 2024 Disign by Abdul Rehman Gori</h4>
        
        
    </footer>
	
	
	
</body>
</html>
<?php 
 if (isset($_POST['register'])) {
    $f_name = $_POST['fName'];
    $date = $_POST['date'];
   
    $phone = $_POST['phone'];
    $fild = $_POST['fild'];
    

    $query =  "INSERT INTO book_turf values( '$f_name','$date','$phone',$fild')";

    $data = mysql_query($conn, $query);
    if($data){
        echo "data";
    }
    else{
        echo "faild";
    }
 }
 
 ?>