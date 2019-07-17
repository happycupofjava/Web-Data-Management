<?php
ob_start();
?>
<HTML>
    <HEAD>
        <TITLE> BUSINESS'S PET STORE
        </TITLE>
        <link rel="stylesheet" href = "<?php echo base_url(); ?>css/pet.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </HEAD>
    <BODY id = "wrapper1">
        <div id="wrapper">
        <h1>Business's Pet Store</h1>
           <div id = "mains">
            <div id = "nav">
        <a href="<?php echo base_url(); ?>index1" class = "navi">Home</a><br>
        <a href="<?php echo base_url(); ?>aboutc" class = "navi">About Us</a><br>
        <a href="<?php echo base_url(); ?>contactc" class = "navi">Contact Us</a><br>
        <a href="<?php echo base_url(); ?>clientc" class = "navi">Client</a><br>
        <a href="<?php echo base_url(); ?>servicec" class = "navi">Service</a><br>
        <a href="<?php echo base_url(); ?>logout" class = "navi">Logout</a>
               </div>
        <div id = "bod"><img src="images/pet store banner 5 png (1).png" width= 100%>
        <h2> My Business</h2>
        <p>Required Information is marked with an asterick(*)</p>
        <form method="post" id = "form1" action = "">
        <table id="tableform">
        <tr>    
            <td>Business Name:</td>
            <td><input type="text"  name = "bname"></td>   
        </tr>
        <tr>
            <td>*Service:</td>
            <td><input type="text" required name = "serv"></td>
        </tr>
        <tr>
            <td><input type="submit" name = "submit" value = "Add New One"></td>
            <td></td>
        </tr>
            </table>
        </form>
                           <footer>
            <p><i> Copyright &copy; Pet Store</i></p>
            <a href = "mail://vrushali@kadam.com">vrushali@kadam.com</a>
        </footer>
        </div>
        </div>
        </div>
    </BODY>
</HTML>
