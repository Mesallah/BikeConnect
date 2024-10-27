<h2 class="text-center mt-5 mb-3"><?php echo $title;?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-outline-info float-right" href="<?php echo base_url('asset/');?>"> 
            View All Assets
        </a>
    </div>
    <div class="card-body">
       <b class="text-muted">Asset_no:</b>
       <p><?php echo $asset->asset_no;?></p>
       <b class="text-muted">Asset_name:</b>
       <p><?php echo $asset->asset_name;?></p>
	   
	    <b class="text-muted">Asset_type:</b>
       <p><?php echo $asset->asset_type;?></p>
	    <b class="text-muted">Asset_weight:</b>
       <p><?php echo $asset->asset_weight;?></p>
	    <b class="text-muted">Asset_desc:</b>
       <p><?php echo $asset->asset_desc;?></p>
	    <b class="text-muted">Asset_acquired:</b>
       <p><?php echo $asset->asset_acquired;?></p>
	   
	   <b class="text-muted">Active:</b>
       <p><?php echo $asset->active;?></p>
	   
    </div>
</div> 