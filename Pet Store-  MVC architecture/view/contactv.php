<HTML>
    <HEAD>
        <TITLE> CONTACT US
        </TITLE>
        <link rel="stylesheet" href = "<?php echo base_url(); ?>css/pet.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </HEAD>
    <BODY id = "wrapper1">
        <div id="wrapper">
        <h1> Pet Store</h1>
        <div id = "mains">
            <div id = "nav">
        <a href="<?php echo base_url(); ?>index1" class = "navi">Home</a><br>
        <a href="<?php echo base_url(); ?>aboutc" class = "navi">About Us</a><br>
        <a href="<?php echo base_url(); ?>contactc" class = "navi">Contact Us</a><br>
        <a href="<?php echo base_url(); ?>clientc" class = "navi">Client</a><br>
        <a href="<?php echo base_url(); ?>servicec" class = "navi">Service</a><br>
        <a href="<?php echo base_url(); ?>loginc" class = "navi">Login</a></div>
        <div id = "bod">
        <img src="images/pet store banner 7 png.png" width= 100%>
        <h2> Contact Us</h2>
        <p>Required Information is marked with an asterick(*)</p>
        <form method="post" id = "form1" name = "form1" action="">
        <table id="tableform">
        <tr>    
            <td>*First Name:</td>
            <td><input type="text" name = "firstName" id = "first"></td>
            <td><?php echo form_error('firstName'); ?></td>
        </tr>
        <tr>
            <td>*Last Name:</td>
            <td><input type="text" name = "lastName" id = "last"></td>
            <td><?php echo form_error('lastName'); ?></td>
        </tr>
        <tr>
            <td>*E-mail:</td>
            <td><input type="text" name = "email" id = "email"></td>
            <td><?php echo form_error('email'); ?></td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td><input type="text" name = "phone" id = "phone"></td>
            <td><?php echo form_error('phone'); ?></td>
        </tr>
        <tr>
            <td>Comments:</td>
            <td><textarea rows = "3" name = "comments" id = "comments"></textarea></td>
            <td><?php echo form_error('comments'); ?></td>
        </tr>
        
        <tr>
            <td><input type="submit" name = "submit" ></td>
            <td><?php echo $this->session->flashdata('response'); ?></td>
            <td><?php echo form_error('submit'); ?></td>
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