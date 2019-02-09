<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<HTML>
    <HEAD>
        <TITLE> LOGIN
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
        <h2> Login</h2>
        <p>Required Information is marked with an asterick(*)</p>
        <form method="post" id = "form1" action = "">
        <table id="tableform">
        <tr>    
            <td>*Email:</td>
            <td><input type="email" name = "email" required></td>
        </tr>
        <tr>
            <td>*Password:</td>
            <td><input type="password" name = "pass"required></td>
            </tr>
            <tr>
                <td><input type="submit" name = submit></td>
                <td></td>
                </tr>
            </table>
        </form>
<?php
$email = "";
$pass ="";
include 'conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    if($email=="" && $pass=="")
    {
    echo "Please enter required fields";
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
    echo "<p> YAAAYY...! Connected to the database successfully! <br></p>";
    
    $sql = "SELECT role FROM LOGIN WHERE EMAIL = ? and pass = ?";
    
    $statement = mysqli_prepare($conn,$sql);
    
    mysqli_stmt_bind_param($statement,'ss',$email, $pass);
    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $result);
    while (mysqli_stmt_fetch($statement)) {
        $r = $result;
    }
    if (mysqli_stmt_num_rows($statement))
    {
        if ($r == 1)
        {   
            $_SESSION['login_user'] = $email;
            header("location: C:/Users/Vrushali Kadam/Documents/Web_Data_ManagementProject4_cloud/Project4-PetStore/businessStore.php");
           
        }
        elseif($r == 2)
        {
            $_SESSION['login_user'] = $email;
            header("location: C:/Users/Vrushali Kadam/Documents/Web_Data_ManagementProject4_cloud/Project4-PetStore/clientStore.php");
        }
    
    }
    else
    {
        echo "<p>Ooops.....Email Id And Password did not match</p>";
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
