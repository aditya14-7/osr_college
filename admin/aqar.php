
	<?php
		include("connection.php");
		$query="select * from aqar";
		$res=mysqli_query($dbCon,$query);
	?>

	<?php include 'header.php';?>

	<div class="page-header page-header-light">
		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<a href="#" class="breadcrumb-item"><i class="icon-stack"></i>Manage NAAC</a>
					<span class="breadcrumb-item active">NAAC</span>
				</div>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
		</div>
	</div>
	<!-- /page header -->

	<div class="row">
		<div class="col-xl-12">
		<!-- Traffic sources -->
			<div class="card">
				<div class="card-header header-elements-inline">
					<h5 class="card-title">Add AQAR</h5>
					<h5 class="card-title" id="msg" style="color:orangered;"></h5>
					<div class="header-elements">
						<div class="list-icons">
							<a class="list-icons-item" data-action="collapse"></a>
							<a class="list-icons-item" data-action="reload" onclick="formrest()"></a>
						</div>
					</div>
				</div>                       
				<form action="all.php" method="post" enctype="multipart/form-data">
				<!--Date :
				<input type="date" name="date"><br><br>
				Attached File : (file shoud be in .pdf formate)
				<input type="file" name="pdf" onchange="validextension(this);"><br><br>
				<input type="submit" name="time-table" value="Upload">-->
					<div class="card-body">
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label>Session</label>
									<input type="text" name="aqar_session" class="form-control">
									
								</div>
								<div class="col-md-6">
									
								<label>Upload Pdf File</label>
									<input type="file" name="pdf" placeholder="pdf" class="form-control" />
								</div>
							</div>
						</div>
						<div class="text-left col-sm-4 container">
							<input type="submit" name="aqar_upload" value="Upload" class="btn btn-primary btn-block" >
						</div>
					</form>
					<hr/>
					<table class="table datatable-button-init-basic datatable-reorder">
						<thead>
							<tr>
								<th>S.No.</th>
								<th>Session</th>
								<th>File</th>
								<th>Post Date & Time</th>
								<th>Action</th>
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
								<td><?php echo $row['aqar_session'];?></td>								
								<td><a href="<?php  echo $row['aqar_file'];?>" target="_blank">Click Here</a></td>
								<td><?php echo $row['added_on'];?></td>
								<td><a href="del_aqar.php?id=<?php echo $row['aqar_id'];?>">Delete</a></td>
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

<?php include 'footer.php';?>