<h2 class="text-center mt-5 mb-3"><?php echo $title; ?></h2>
<div class="card">
    <div class="card-header">
    <a class="btn btn-outline-primary" href="<?php echo base_url('request/export_request/');?>"> 
            Export CSV
        </a>
        <a class="btn btn-outline-primary" href="<?php echo base_url('request/create/');?>"> 
            Create New Request
        </a>

        <br><br>
      <label for="request">Request_type:</label>
			<select id="request" name="request" >
				<option value="1">construction</option>
				<option value="2">cleaning</option>
				<option value="3">venue management</option>
				<option value="4">venue setup</option>
				<option value="5">transportation</option>
				<option value="6">repairs</option>
				<option value="7">landscaping</option>
				<option value="8">test control</option>
				<option value="9">parking lot management</option>
				<option value="10">security</option>
			</select>
      <br><br>

</div>


    

    

    <div class="card-body">
        <?php if ($this->session->flashdata('success')) {?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>
 
        <table class="table table-bordered" id='transactionsList'>

        <thead>
            <tr>
                <th>requestid</th>
                <th>reqservice</th>
                <th>reqdate</th>
                <th>status</th>
                <th>etc</th>
                <th>userid</th>
                <th>active</th>
                <th width="240px">Action</th>
            </tr>
        </thead>
            <tbody></tbody> 
           
        </table>

        <div style="width: fit-content; margin: auto;" id='pagination2' >
        </div>

    </div>
</div>

<script type='text/javascript'>


$(document).ready(function(){
       
  $('#request').on('change', function(e) {
      //alert( this.value );
       e.preventDefault(); 
       var pageno = $(this).attr('data-ci-pagination-page');
       loadPagination(pageno);
   
      
    });

     
       
 
       $('#pagination2').on('click','a',function(e){
         e.preventDefault(); 
         var pageno = $(this).attr('data-ci-pagination-page');
         loadPagination(pageno);
       });
  
       loadPagination(0);
   
       function loadPagination(pagno){

          var request = $("#request").val();  
          request.replace("T", " ");


         $.ajax({
           url: 'request/loadRecord2/'+pagno,
           type: 'get',
           dataType: 'json',

           data: {
              request: request,

          },

           success: function(response){
              $('#pagination2').html(response.pagination);
              createTable(response.result,response.row);
           }
         });
       }
   
       function createTable(result,sno){
         sno = Number(sno);
         $('#transactionsList tbody').empty();
         for(index in result){
            var requestid = result[index].requestid;
            var reqservice = result[index].reqservice;
            var reqdate = result[index].reqdate;
            var status = result[index].status;
            var etc = result[index].etc;
            var userid = result[index].userid;
            var active = result[index].active;
  
  
            sno+=1;
            
            //var title = result[index].title;
            //var content = result[index].slug;
            //content = content.substr(0, 60) + " ...";
            //var link = result[index].slug;
            //sno+=1;
   
   
            var tr = "<tr>";
            tr += "<td>"+ requestid +"</td>";
            tr += "<td>"+ reqservice +"</td>";
            tr += "<td>"+ reqdate +"</td>";
            tr += "<td>"+ status +"</td>";
            tr += "<td>"+ etc +"</td>";
            tr += "<td>"+ userid +"</td>";
            tr += "<td>"+ active +"</td>";
          
          
            // Adding buttons
            tr += "<td>";
            tr += "<a class='btn btn-outline-info' href='<?php echo base_url('request/show/" + result[index].id + "') ?>'>Show</a> ";
            tr += "<a class='btn btn-outline-success' href='<?php echo base_url('request/edit/" + result[index].id + "') ?>'>Edit</a> ";
            tr += "<a class='btn btn-outline-danger' href='<?php echo base_url('request/delete/" + result[index].id + "') ?>'>Delete</a>";
            tr += "</td>";
            
            //tr += "<td><a href='"+ link +"' target='_blank' >"+ title +"</a></td>";
            tr += "</tr>";
            $('#transactionsList tbody').append(tr);
    
          }
        }


</script>