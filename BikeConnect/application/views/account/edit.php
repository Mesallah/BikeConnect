<h2 class="text-center mt-5 mb-3"><?php echo $title; ?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-outline-info float-right" href="<?php echo base_url('account');?>"> 
            View All Accounts
        </a>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('errors')) {?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('errors'); ?>
            </div>
        <?php } ?>
        <form action="<?php echo base_url('account/update/' . $account->id);?>" method="POST">
            <div class="form-group">
                <label for="uname">Uname</label>
                <input type="text" class="form-control" id="uname" name="uname"
				 value="<?php echo $account->uname;?>"
				>
            </div>
            <div class="form-group">
                <label for="pass">Pass</label>
                <textarea class="form-control" id="pass" rows="3" name="pass"><?php echo $account->pass;?></textarea>
            </div>
			
			<div class="form-group">
                <label for="fname">Fname</label>
                <textarea class="form-control" id="fname" rows="3" name="fname"><?php echo $account->fname;?></textarea>
            </div>
			
			<div class="form-group">
                <label for="mname">Mname</label>
                <textarea class="form-control" id="mname" rows="3" name="mname">
				<?php echo $account->mname;?>
				</textarea>
            </div>
			
			<div class="form-group">
                <label for="lname">Lname</label>
                <textarea class="form-control" id="lname" rows="3" name="lname">
				<?php echo $account->lname;?>
				</textarea>
            </div>
			
		
          
            <button type="submit" class="btn btn-outline-primary">Save Account</button>
        </form>
       
    </div>
</div>