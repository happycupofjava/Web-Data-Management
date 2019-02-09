<HTML>
    <HEAD>
        <TITLE> CONTACT US
        </TITLE>
        <link rel="stylesheet" href = "CSS/pet.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </HEAD>
    <BODY id = "wrapper1">
        <div id="wrapper">
        <h1> Pet Store</h1>
        <div id = "mains">
            <div id = "nav">
        <a href="http://localhost:88888/index.html" class = "navi">Home</a><br>
        <a href="http://localhost:88888/aboutus.html" class = "navi">About Us</a><br>
        <a href="http://localhost:88888/contactus.php" class = "navi">Contact Us</a><br>
        <a href="http://localhost:88888/client.php" class = "navi">Client</a><br>
        <a href="http://localhost:88888/service.php" class = "navi">Service</a><br>
        <a href="http://localhost:88888/login.php" class = "navi">Login</a>
        </div>
        <div id = "bod">
        <img src="images/pet store banner 7 png.png" width= 100%>
        <h2> Contact Us</h2>
        <p>Required Information is marked with an asterick(*)</p>
        <form method="post" id = "form1" action="">
        <table id="tableform">
        <tr>    
            <td>*First Name:</td>
            <td><input type="text" name = "firstName" id = "first" required></td>
        </tr>
        <tr>
            <td>*Last Name:</td>
            <td><input type="text" name = "lastName" id = "last" required></td>
        </tr>
        <tr>
            <td>*E-mail:</td>
            <td><input type="email" name = "email" id = "email" required></td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td><input type="tel" name = "phone" id = "phone"></td>
        </tr>
        <tr>
            <td>Comments:</td>
            <td><textarea rows = "3" name = "comments" id = "comments"></textarea></td>
        </tr>
        
        <tr>
            <td><input type="submit" name = "submit"></td>
            <td></td>
        </tr>
            </table>
            
        </form>
        <?php
include 'conn.php' ; 
$firstName = "";
$lastName = "";
$email = "";
$phone = "";
$comments ="";
$id = 0000;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName=$_POST["firstName"];
    $lastName=$_POST["lastName"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $comments=$_POST["comments"];
    
    if($firstName=="" || $lastName=="" || email=="")
    {
    echo "<p>Please enter required fields</p>";
    }
    else{
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<p>Invalid email format<p>"; 
    }
    else
    {
    if (mysqli_connect_error()) {
    die("<p>Connection failed: " . mysqli_connect_error()."</p>");
    } 
    echo "<p>YAAAY...Connected to the database successfully <br></p>";
    
    $sql = "INSERT INTO CONTACT VALUES(?,?,?,?,?,?);";
    
    $statement = mysqli_prepare($conn,$sql);
    
    mysqli_stmt_bind_param($statement,'isssss',$id,$firstName,$lastName,$email,$phone, $comments);
    
    if (mysqli_stmt_execute($statement) === TRUE) {

    echo "<p>Thank you, your data has been recorded successfully!</p>";
    } else {
    echo "<p>Error: " . $sql . "<br>" . mysqli_connect_error() . "</p>";       
    }
    mysqli_stmt_close($statement);
    mysqli_close($conn);
    }
}
}
?>

            
        <footer>
            <p><i> Copyright &copy; Pet Store</i></p>
            <a href = "mail://vrushali@kadam.com">vrushali@kadam.com</a>
        </footer>
        </div>
            </div>
        </div>
    </BODY>
</HTML>