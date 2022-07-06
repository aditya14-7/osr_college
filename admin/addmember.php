<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
include("connection.php");
$query="select * from tbl_commitee";
$res=mysqli_query($dbCon,$query);
$query_dep="select * from tbl_department";
$res_dep=mysqli_query($dbCon,$query_dep);


if(isset($_POST['memsubmit']))
{
   $mm=$_POST["mem_name"];
   $md=$_POST["mem_deg"];
   $c=$_POST["cell"];
   $dpt=$_POST['dept'];

    $query2="insert into tbl_commitee_member(mem_name,mem_deg,cc_id,dept_id) values(' $mm','$md','$c','$dpt')";
    if(mysqli_query($dbCon,$query2)){
        header("location:addmember.php?msg=Member Added");
    }
    else
    {
        header("location:addmember.php?msg=Member not added at this time");
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
                    <h5 class="card-title">Add Members</h5>
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
                        
                            <form  id="admem" method="post">
                                <div class="row mt-2">
                                
                                <div class="col-1">
                                    
                                    <label>Member<span class="clcl"> * </span></label>
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control" placeholder="Enter Member Name" name="mem_name" required />
                                    
                                </div>
                                <div class="col-2">
                                    <input type="text" class="form-control" placeholder="Enter Member Designation" name="mem_deg" required />
                                    
                                </div>
                                <div class="col-2">
                                        <select class="form-control" name="dept" id="dept" required="">
                                            <option disabled selected value="">--Select department From Here--</option>
                                            <?php
                                                while($row_dep=mysqli_fetch_array($res_dep))
                                                {
                                                    echo "<option value='".$row_dep['dept_id']."'>";
                                                    echo $row_dep['dept_name'];
                                                    echo "</option>";                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                }
                                            ?>
                                        </select>
                                </div>
                                <div class="col-2">
                                        <select class="form-control" name="cell" id="cell" required="">
                                            <option disabled selected value="">--Select Cell From Here--</option>
                                            <?php
                                                while($row=mysqli_fetch_array($res))
                                                {
                                                    echo "<option value='".$row['cc_id']."'>";
                                                    echo $row['committee_name'];
                                                    echo "</option>";                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                }
                                            ?>
                                        </select>
                                </div>
                                <div class="col-1">
                                    
                                    
                                    <button type="submit" class="btn btn-primary" name="memsubmit" id="memsubmit">Add Member</button>
                                </div>



                                </div>
                               
                               

                                
                            </form>
                        
                       

                </div>
               

                <table class="table datatable-button-init-basic datatable-reorder">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Commitee and Cell</th>
                            <th>Member name</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query3="select * from tbl_commitee_member left join tbl_commitee on tbl_commitee_member.cc_id=tbl_commitee.cc_id left join tbl_department on tbl_commitee_member.dept_id=tbl_department.dept_id";
                    $res3=mysqli_query($dbCon,$query3);
					$a=1;
					while($row3=mysqli_fetch_array($res3))
					{
					?>
                        <tr>
                            <td><?php echo $a;$a++;?></td>
                            <td><?php echo $row3['committee_name'];?></td>
                            <td><?php echo $row3['mem_name'];?></td>
                            <td><?php echo $row3['dept_name'];?></td>
                            <td><?php echo $row3['mem_deg'];?></td>
                           
                            <td><a href="#" onclick="deluser(this)">Delete</a><span style="display: none;"><?php echo $row3['mem_id'];?></span></td>
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
    function deluser(p) {
        var id = jQuery(p).next().text();
       
        var status = confirm("Do you want to delete member ?");
        if (status == true) {
          window.location.href = '../admin/del_mem_com.php?id=' + id;
       //  alert(id);
        }
    }
</script>

	<?php include 'footer.php';?>