<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
include("connection.php");
$query="select * from tbl_commitee";
$res=mysqli_query($dbCon,$query);
$query_dep="select * from tbl_department";
$res_dep=mysqli_query($dbCon,$query_dep);

if(isset($_POST['commiteesubmit']))
{
    $commitee=$_POST['committee'];
    $query3="insert into tbl_commitee(committee_name,created_at) values('$commitee',now())";
   
    if(mysqli_query($dbCon,$query3)){
        header("location:addcell.php?msg='Commitee Added'");
    }
    else
    {
        header("location:addcell.php?msg='Commitee not added at this time'");
    }
   

}





?>

	<?php include 'header.php';?>


<style>
    .clcl {
        font-size: 15pt;
        font-weight: bold;
        color: red;
    }
</style>

<div class="page-header page-header-light">

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

    </div>
</div>
<!-- /page header -->
<div class="content">

    <!-- Main charts -->

    <div class="row">
        <div class="col-xl-12">

            <!-- Traffic sources -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    
                    <h5 class="card-title">Add Commitee</h5>
                    <h5 class="card-title" id="msg" style="color:orangered;"><?php echo $msg; ?></h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload" onclick="formrest()"></a>
                            
                        </div>
                    </div>
                </div>
               
                    <div class="card-body">

                        <div class="form-group">
                        <form  id="adcommitee" method="post">
                            <div class="row">
                            
                                <div class="col-1">
                                    
                                    <label>Commitee<span class="clcl"> * </span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Enter Commitee" name="committee" required />
                                    
                                </div>
                                <div class="col-4">
                                    
                                    
                                    <button type="submit" class="btn btn-primary" name="commiteesubmit">Add Commitee</button>
                                </div>

                               

                                </div>
                                </form>
                           
                       
                       

                </div>
               

                <table class="table datatable-button-init-basic datatable-reorder">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Commitee and Cell</th>
                            
                           
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query3="select * from tbl_commitee";
                    $res3=mysqli_query($dbCon,$query3);
					$a=1;
					while($row3=mysqli_fetch_array($res3))
					{
					?>
                        <tr>
                            <td><?php echo $a;$a++;?></td>
                            <td><?php echo $row3['committee_name'];?></td>
                          
                           
                            <td><a href="#" onclick="delcell(this)">Delete</a><span style="display: none;"><?php echo $row3['cc_id'];?></span></td>
							</tr>
				    <?php
					}
				    ?>           

                    </tbody>
                </table>
                <!-- /traffic sources -->
            </div>
        </div>


    </div>
    <!-- /main charts -->
    <!-- Dashboard content -->
    <!-- /dashboard content -->

</div>
<script>

    

    jQuery(document).ready(function () {

        jQuery("#msg").fadeIn("fast");
        jQuery("#msg").fadeOut(20000);

 

    });
    
  

       
</script>
<script>
    function delcell(p) {
        var id = jQuery(p).next().text();
       
        var status = confirm("Do you want to delete cell ?");
        if (status == true) {
          window.location.href = '../admin/del_cell.php?id=' + id;
       //  alert(id);
        }
    }
</script>

	<?php include 'footer.php';?>