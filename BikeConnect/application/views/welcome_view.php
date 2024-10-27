<!DOCTYPE html>  
<html>  
<head>  
    <title></title>  
</head>  
<body>  
    Welcome <?php echo $this->session->userdata('user'); ?>   
<br>  

    <a href="<?php echo base_url() . 'Mydb/logout'; ?>">Logout</a>

    <?php //echo anchor('Mydb/logout', 'Logout'); ?>  
  
  
</body>  
</html>  