
<HTML>
    <HEAD>
        <TITLE> CLIENT
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
        
        <div id = "bod"><img src="images/pet store banner 5 png (1).png" width= 100%>
        <h2> Client</h2>
        <p>Required Information is marked with an asterick(*)</p>
        <form method="post" id = "form1" action = "">
        <table id="tableform">
        <tr>    
            <td>*First Name:</td>
            <td><input type="text" required name = "firstName"></td>
            <td><?php echo form_error('firstName'); ?></td>
        </tr>
        <tr>
            <td>*Last Name:</td>
            <td><input type="text" required name = "lastName"></td>
            <td><?php echo form_error('lastName'); ?></td>
        </tr>
        <tr>
            <td>*E-mail:</td>
            <td><input type="email" required name = "email"></td>
            <td><?php echo form_error('email'); ?></td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td><input type="tel" name = "phone"></td>
            <td><?php echo form_error('phone'); ?></td>
        </tr>
        <tr>
            <td>Business Name:</td>
            <td><input type="text" name = "bname"></td>
            <td><?php echo form_error('bname'); ?></td>
        </tr>
        
        <tr>
            <td><input type="submit" name = "submit"></td>
            <td><?php echo $this->session->flashdata('response'); ?><br> <?php echo $this->session->flashdata('response1'); ?></td>
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