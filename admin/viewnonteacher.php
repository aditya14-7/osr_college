<?php
include("connection.php");
$query="select * from tbl_nonteacher";
$res=mysqli_query($dbCon,$query);
?>


		<?php include 'header.php';?>

	<div class="page-header page-header-light">
		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<a href="#" class="breadcrumb-item"><i class="icon-copy"></i> Manage Non-Teaching Staff</a>
					<span class="breadcrumb-item active">View Non-Teaching Staff</span>
				</div>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
		</div>
	</div>
	<!-- /page header -->
	<!-- Content area -->
	<div class="content">
	<!-- Basic initialization -->
	<div class="card">
		<div class="card-header header-elements-inline">
			<h5 class="card-title">Non-Teaching's Record</h5>
			<span id="msg" style="color:red;"><?php if(isset($_REQUEST['msg'])){ echo $_REQUEST['msg'];} ?></span>
			<div class="header-elements">
				<div class="list-icons">
					<a class="list-icons-item" data-action="collapse"></a>
					<a class="list-icons-item" data-action="reload" href="/Admin/ViewTeacher"></a>					
				</div>
			</div>
		</div>
    <div class="card-body">       
    </div>
    <table class="table datatable-button-init-basic datatable-reorder">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Pic</th>
                <th>Reg.Date</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Father's Name</th>
                <th>Mobile No.</th>
                <th>Designation</th>
                <th>Qualification</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
		<?php
		  $a=1;
		  while($row=mysqli_fetch_array($res))
		  {
	    ?>
            <tr>
                <td><?php echo $a; $a++; ?></td>
                <td><img height="100" width="100" src="staff/<?php echo $row['pic'];?>" /></td>
                <td><?php echo $row['dor'];?></td>
                <td><a href="#"><?php echo $row['name'];?></a></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['fname'];?></td>
                <td><?php echo $row['mobile'];?></td>
                <td><?php echo $row['designation'];?></td>
                <td><?php echo $row['qualification'];?></td>
                <td><?php echo $row['address'];?></td>
				<td><button href="#" value="<?php echo $row['non_id']; ?>" class="btn btn-primary"onclick="editmodal(this)" name="depedit">Edit</button></td>
               
                <td><a href="nontdel.php?id=<?php echo $row['0'];?>">Delete</a></td>
            </tr>
        <?php
		  }
		?>
        </tbody>
    </table>
	</div>
	<!-- /basic initialization -->
	<!-- /main charts -->
	<!-- Dashboard content -->
	<!-- /dashboard content -->
	</div>





	<!--   ====================Modal for editing non teacher staff  ================-->
	
<!-- Modal -->
<div class="modal fade" id="editnontechmodal" tabindex="-1" role="dialog" aria-labelledby="editnontechmodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Non-Teacher Staff Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="all.php" enctype="multipart/form-data">
		  <div class="modal-body">
		  				<input type="hidden" id="n_id" name="n_id"/>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Staff Name<span class="clcl"> *</span></label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Staff Name" autocomplete="off" required />
                                </div>
                                <div class="col-md-6">
                                    <label>Gender<span class="clcl"> *</span></label>
                                    <select name="gender" class="form-control" id="gender" required>
                                        
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">                                
                                <div class="col-md-6">
                                    <label>Father's Name<span class="clcl"> *</span> </label>
                                    <input type="text" placeholder="Father's Name" name="fname" id="fname" class="form-control" required />
                                </div>
								<div class="col-md-6">
                                    <label>Designation<span class="clcl"> *</span></label>
                                    <input type="text" placeholder="Designation" name="designation" id="designation" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Mobile No.<span class="clcl"> *</span></label>
                                    <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Mobile No." required />
                                </div>
                                <div class="col-md-6">
                                    <label>Highest Qualification<span class="clcl"> *</span></label>
                                    <input type="text" placeholder="Highest Qualification" name="quali" id="quali" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">                                
                                <div class="col-md-6">
                                    <label>Address<span class="clcl"> *</span></label>
                                    <input type="text" placeholder="Address" name="address" id="address" class="form-control" required />
                                </div>
								<div class="col-md-3">
                                    <label>Select  Pic<span class="clcl"> *</span></label>
                                    <input type="file"  name="file"  class="form-control" />
                                </div>
								<div class="col-md-3">
									<img id="oldpicn" style="height:100px; width:100px;"/>
								</div>
                            </div>
                        </div>
                     
                  
               
		  </div>
     <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
        <button type="Submit" class="btn btn-primary" name="Editnontech">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>





	<script>
		function deluser(p) {
			var id = jQuery(p).next().text();
			var status = confirm("Do you want to delete record?");
			if (status == true) {
				window.location.href = '../Admin/deluser?id=' + id;
			}
		}
	</script>
	

	
<script>


    jQuery(document).ready(function () {

        jQuery("#msg").fadeIn("fast");
        jQuery("#msg").fadeOut(20000);
    });
</script>




	<script>
    function editmodal(p){
    
      var a=p.value;
      // alert(a);
       jQuery.ajax({
           url:"fetchrecord.php",
           method:"post",
           data:{t:'nonteacher',id:a},
           
           beforeSend:function(){
               p.innerText="Please Wait....";
           },
           success:function(v){
			var a=JSON.parse(v);
               p.innerText="Edit";
              console.log(a);
            $('#n_id').val(a.non_id);
			$('#name').val(a.name);
		
			var gen="<option selected  hidden>"+a.gender+"</option>";
			$('#gender').append(gen);
			$('#fname').val(a.fname);
			$('#mobile').val(a.mobile);
		
		
			$('#designation').val(a.designation);
			$('#quali').val(a.qualification);
			$('#address').val(a.address);
			$("#oldpicn").attr("src","staff/"+a.pic);
             
              
               $('#editnontechmodal').modal('toggle');
           }
       });
    }
</script>





	<?php include 'footer.php';?>