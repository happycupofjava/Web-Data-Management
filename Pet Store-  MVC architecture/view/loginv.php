<!DOCTYPE html>
<HTML>
    <HEAD>
        <TITLE> LOGIN
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
        <a href="<?php echo base_url(); ?>loginc" class = "navi">Login</a>
        </div>
        <div id = "bod"><img src="images/pet store banner 5 png (1).png" width= 100%>
        <h2> Login</h2>
        <p>Required Information is marked with an asterick(*)</p>
        <?php
            if (isset($logout_message)) {
                
                echo $logout_message;
                
            }
        ?>
        <?php
            if (isset($message_display)) {
                
                echo $message_display;
                
            }
            ?>
            <form method="post" id = "form1" action = "">
        <table id="tableform">
        <tr>    
            <td>*Email:</td>
            <td><input type="email" name = "email" required></td>
            <td><?php echo form_error('email'); ?></td>
        </tr>
        <tr>
            <td>*Password:</td>
            <td><input type="password" name = "pass"required></td>
            <td><?php echo form_error('pass'); ?></td>
            </tr>
            <tr>
                <td><input type="submit" name = submit></td>
                <td><?php echo $this->session->flashdata('response'); ?>
                <?php echo $this->session->flashdata('response3'); ?></td>
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
    