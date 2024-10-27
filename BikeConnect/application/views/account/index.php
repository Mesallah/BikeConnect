<h2 class="text-center mt-5 mb-3"><?php echo $title; ?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-outline-primary" href="<?php echo base_url('account/create/');?>"> 
            Create New Account
        </a>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('success')) {?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>
 
        <table class="table table-bordered">
            <tr>
			
                <th>uname</th>
				<th>pass</th>
				<th>fname</th>
				<th>mname</th>
				<th>lname</th>
				
                <th width="240px">Action</th>
            </tr>
 
            <?php foreach ($accounts as $account) { ?>      
            <tr>
                <td><?php echo $account->uname; ?></td>
                <td><?php echo $account->pass; ?></td>  
				<td><?php echo $account->fname; ?></td>
                <td><?php echo $account->mname; ?></td>  
				<td><?php echo $account->lname; ?></td>
            
           
                <td>
                    <a
                        class="btn btn-outline-info"
                        href="<?php echo base_url('account/show/'. $account->id) ?>"> 
                        Show
                    </a>
                    
					<a
                        class="btn btn-outline-success"
                        href="<?php echo base_url('account/edit/'.$account->id) ?>"> 
                        Edit
                    </a>
					
                    <a
                        class="btn btn-outline-danger"
                        href="<?php echo base_url('account/delete/'.$account->id) ?>"> 
                        Delete
                    </a>
					
                </td>     
            </tr>
            <?php } ?>
        </table>
    </div>
</div>