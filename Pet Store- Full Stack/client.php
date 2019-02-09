
<HTML>
    <HEAD>
        <TITLE> CLIENT
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
        <div id = "bod"><img src="images/pet store banner 5 png (1).png" width= 100%>
        <h2> Client</h2>
        <p>Required Information is marked with an asterick(*)</p>
        <form method="post" id = "form1" action = "client.php">
        <table id="tableform">
        <tr>    
            <td>*First Name:</td>
            <td><input type="text" required name = "firstName"></td>   
        </tr>
        <tr>
            <td>*Last Name:</td>
            <td><input type="text" required name = "lastName"></td>
        </tr>
        <tr>
            <td>*E-mail:</td>
            <td><input type="email" required name = "email"></td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td><input type="tel" name = "phone"></td>
        </tr>
        <tr>
            <td>Business Name:</td>
            <td><input type="text" name = "bname"></td>
        </tr>
        
        <tr>
            <td><input type="submit" name = "submit"></td>
            <td></td>
        </tr>
            </table>
        </form>
        <?php
$firstName = "";
$lastName = "";
$email = "";
$phone = "";
$bname ="";
$id = 0;
$port = 8889;
$roleid = 2 ;
$pass = "";
include 'conn.php';
function getPass() {
    $length = 8;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $randomString;
}
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName=$_POST["firstName"];
    $lastName=$_POST["lastName"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $bname=$_POST["bname"];
    
    if($firstName=="" && $lastName=="" && email=="")
    {
    echo "<p>Kindly enter the required information</p>";
    }
    else{
    
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<p>Incorrect email format<p>"; 
    }
    else
    {
    
    if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
    } 
    echo "<p>YAAAAY....Connected to the database successfully</p>";
        
    $sql2 = "SELECT EMAIL FROM CLIENT WHERE EMAIL = ? UNION SELECT EMAIL FROM SERVICE WHERE EMAIL = ?;";
    $prep2 = mysqli_prepare($conn, $sql2);
    mysqli_stmt_bind_param($prep2,'ss', $email, $email);
    mysqli_stmt_execute($prep2);
    mysqli_stmt_store_result($prep2);
    if (mysqli_stmt_num_rows($prep2))
    {
    echo "<p>The entered email id already exists. Kindly use a new one to register</p>";
    exit();
    }
    else
    {
    mysqli_stmt_close($prep2);
    
    $sql = "INSERT INTO CLIENT VALUES(?,?,?,?,?,?,?);";
    
    $statement = mysqli_prepare($conn,$sql);
    
    mysqli_stmt_bind_param($statement,'iisssss',$id,$roleid,$firstName,$lastName,$email,$phone,$bname);
    
    if (mysqli_stmt_execute($statement) === TRUE) 
    {
        echo "<p>Data recorded for client successfully</p>";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . mysqli_connect_error();       
    }
    
    mysqli_stmt_close($statement);
    
        $pass = getPass();
        $sql3 = "INSERT INTO LOGIN VALUES(?,?,?);";
    $prep3 = mysqli_prepare($conn, $sql3);
    mysqli_stmt_bind_param($prep3, 'ssi', $email, $pass, $roleid);
    
    if (mysqli_stmt_execute($prep3) === TRUE) {

    echo "<p>Data has been recorded for login successfully</p>";
    } else {
    echo "Error: " . $sql3 . "<br>" . mysqli_connect_error();       
    }
       mysqli_stmt_close($prep3); 
    mail($email,"Thank you for registering with our PetStore. Kindly find the password in the mail for successfully logging in",$pass);
   
    }
    
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