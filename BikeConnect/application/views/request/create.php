<h2 class="text-center mt-5 mb-3"><?php echo $title; ?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-outline-info float-right" href="<?php echo base_url('request');?>"> 
            View All Requests
        </a>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('errors')) {?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('errors'); ?>
            </div>
        <?php } ?>
        <form action="<?php echo base_url('request/store');?>" method="POST">
            <div class="form-group">
                <label for="requestid">RequestId</label>
                <input type="text" class="form-control" id="requestid" name="requestid">
            </div>
            <div class="form-group">
                <label for="reqservice">RequestService</label>
                <textarea class="form-control" id="reqservice" rows="3" name="reqservice"></textarea>
            </div>
			
			<div class="form-group">
                <label for="reqdate">RequestDate</label>
                <textarea class="form-control" id="reqdate" rows="3" name="reqdate"></textarea>
            </div>
			
			<div class="form-group">
                <label for="status">Status</label>
                <textarea class="form-control" id="status" rows="3" name="status"></textarea>
            </div>
			
			<div class="form-group">
                <label for="etc">Etc</label>
                <textarea class="form-control" id="etc" rows="3" name="etc"></textarea>
            </div>
			
			<div class="form-group">
                <label for="userid">UserId</label>
                <textarea class="form-control" id="userid" rows="3" name="userid"></textarea>
            </div>
			
			<div class="form-group">
                <label for="active">Active</label>
                <textarea class="form-control" id="active" rows="3" name="active"></textarea>
            </div>
          
            <button type="submit" class="btn btn-outline-primary">Save Request</button>
        </form>
       
    </div>
</div>