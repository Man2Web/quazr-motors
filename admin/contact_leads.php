<?php
require('top.inc.php');
isAdmin();
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Contact Leads</h4>
				</div>
				<div class="card-body-- pl-3 pr-3 pb-3">
				   <!-- <div class="table-stats order-table ov-h"> -->
					<table  id="orderTable">
						<thead>
							<tr>
								<th>Lead Id</th>
								<th ><span class="nobr">Name</span></th>
								<th><span class="nobr"> Mobile </span></th>
								<th><span class="nobr"> Email </span></th>
								<th><span class="nobr"> Message</span></th>
								<th><span class="nobr"> Timestamp</span></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$res=mysqli_query($con,"select * from contact ORDER BY 1 asc");
							while($row=mysqli_fetch_assoc($res)){
							?>
							<tr>
								<td ><?php echo $row['id']?></td>
								<td ><?php echo $row['name']?></td>
								<td ><?php echo $row['mobile']?></td>
								<td ><?php echo $row['email']?></td>
								<td ><?php echo $row['message']?></td>
								<td ><?php echo  substr($row['timestamp'], 0,-10);?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				   <!-- </div> -->
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>
