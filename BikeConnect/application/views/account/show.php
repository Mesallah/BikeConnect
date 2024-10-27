<h2 class="text-center mt-5 mb-3"><?php echo $title;?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-outline-info float-right" href="<?php echo base_url('account/');?>"> 
            View All Accounts
        </a>
    </div>

    <div class="card-body">
       <b class="text-muted">Username:</b>
       <p><?php echo $account->uname;?></p>
	    <b class="text-muted">Password:</b>
       <p><?php echo $account->pass;?></p>
	    <b class="text-muted">First name:</b>
       <p><?php echo $account->fname;?></p>
	    <b class="text-muted">Middle name:</b>
       <p><?php echo $account->mname;?></p>
	    <b class="text-muted">Last name:</b>
       <p><?php echo $account->lname;?></p>
	 
    </div>
</div> 