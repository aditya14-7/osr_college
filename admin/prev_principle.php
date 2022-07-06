<?php
	include("connection.php");
	$query="select * from tbl_pp";
	$res=mysqli_query($dbCon,$query);

?>

	<?php include 'header.php';?>

	<div class="page-header page-header-light">
		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<a href="#" class="breadcrumb-item"><i class="icon-stack"></i>Manage About Us</a>
					<span class="breadcrumb-item active">About Us</span>
				</div>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
		</div>
	</div>
	<!-- /page header -->


	<!-- /page header -->

	<div class="row">
		<div class="col-xl-12">
		<!-- Traffic sources -->
			<div class="card">
				<div class="card-header header-elements-inline">
					<h5 class="card-title">Add Previous Principal</h5>
					<h5 class="card-title" id="msg" style="color:orangered;"></h5>
					<div class="header-elements">
						<div class="list-icons">
							<a class="list-icons-item" data-action="collapse"></a>
							<a class="list-icons-item" data-action="reload" onclick="formrest()"></a>
						</div>
					</div>
				</div>
				<form action="all.php" method="post" enctype="multipart/form-data">


					<div class="card-body">
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<label>Principal's Name</label>
									<input type="text" name="ppname" placeholder="Principal Name" class="form-control" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<label>Tenure</label>
									<input type="text" name="tenure" placeholder="Tenure" class="form-control" />
								</div>
							</div>
						</div>
						<div class="text-left">
							<input type="submit" name="pp_upload" value="Upload">
						</div>
					</form>


					<table class="table datatable-button-init-basic datatable-reorder">
						<thead>
							<tr>
								<th>S.No.</th>
								<th>Principal Name</th>
								<th>Tenure</th>
								<th>Post Date & Time</th>
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
								<td><?php echo $a;$a++;?></td>
								<td><?php echo $row['pp_name']; ?></td>
								<td><?php echo $row['pp_tenure'];?></td>
								<td><?php echo $row['added_on']; ?></td>
								<td><a href="del_pp.php?id=<?php echo $row['pp_id'];?>">Delete</a></td>

							</tr>
							<?php
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footerck.php';?>
