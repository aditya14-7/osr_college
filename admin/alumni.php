<?php
include("connection.php");
$query="select * from tbl_alumni order by id desc";
$res=mysqli_query($dbCon,$query);



?>
<style>
td button
{
	border:none;
	background:#ffff04;
	height:30px;
	width:70px;
     
}
#del
{
color:red;
}
</style>

	<?php include 'header.php';?>

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
                    <h5 class="card-title">Alumni</h5>
                    <h5 class="card-title" id="msg" style="color:orangered;"></h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload" onclick="formrest()"></a>                            
                        </div>
                    </div>
                </div>

                <table class="table datatable-button-init-basic datatable-reorder">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Student Name</th>
                            <th>Enrollment No</th>
                            <th>Parent Name</th>
							     <th>branch</th>
                            <th>year</th>
							<th>Stu_mob</th>
                            <th>Stu_Email</th>
                            <th>marks</th>
                            <th>company</th>
                            <th>designation</th>
                            <th>feedback</th>
                            <th>about</th>
                            <th>pic</th>
                            <th>cv</th>
                            <th>action</th>
							<th>status</th>
                            
                        </tr>
                    </thead>
                    <tbody>
					<?php
					$a=1;
					while($row=mysqli_fetch_array($res))
					{
					?>
                        <tr>
                           <td><?php echo $a;$a++;?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['enrollment'];?></td>
                            <td><?php echo $row['fname'];?></td>
                            <td><?php echo $row['branch'];?></td>
                            <td><?php echo $row['year'];?></td>
                            <td><?php echo $row['mob'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['marks'];?></td>
                            <td><?php echo $row['company'];?></td>
                            <td><?php echo $row['designation'];?></td>
                            <td><?php echo $row['feedback'];?></td>
                            <td><?php echo $row['about'];?></td>
                            <td><img src="alumni_pic/<?php echo $row['pic'];?>" alt="Alumni photo" style="height: 100px; width:100px;"></td>
                            <td><a href="alumni_cv/<?php echo $row['cv'];?>" target="_blank">View CV</a></td>
                            <td><a href="delalumni.php?id=<?php echo $row['id'];?>" id="del">Delete</a></td>
							<td><a href="statusalumni.php?id=<?php echo $row[0]?>">
							<?php
							if($row['status']=='N')
							{
								echo "Not Visible";
							}
							if($row['status']=='Y')
							{
								echo "Visible";
							}
								
							
							
							?></a></td>
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
    function deluser(p) {
        var id = jQuery(p).next().text();
        var status = confirm("Do you want to delete record?");
        if (status == true) {
            window.location.href = '../Admin/delalumni?id=' + id;
        }
    }
</script>     

      
          	<?php include 'footer.php';?>