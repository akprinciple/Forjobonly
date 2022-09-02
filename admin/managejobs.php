<?php 
		include 'inc/session.php'; 
		
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Manage Jobs</title>
	<?php include 'inc/link.php'; ?>

</head>
<body>
	<div class="container-fluid">
		<div class="row">
		<?php
		include 'inc/sidebar.php';
		?>
			<table class="table-striped col-md-10 m-auto text-center table-bordered ">
				<thead class=" table-head">
					<tr>
						<th>Company</th>
						<th>Title</th>
						<th>Location</th>
						<th>Actions</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
				 <?php 
				if (isset($_GET['page_no']) && $_GET['page_no']!="") {
				$page_no = $_GET['page_no'];
				} else {
				$page_no = 1;
    			}
				$total_records_per_page = 20;
   	 			$offset = ($page_no-1) * $total_records_per_page;
				$previous_page = $page_no - 1;
				$next_page = $page_no + 1;
				$adjacents = "2"; 
				$result_count = mysqli_query($connect,"SELECT COUNT(*) As total_records FROM `jobs`");
				$total_records = mysqli_fetch_array($result_count);
				$total_records = $total_records['total_records'];
    			$total_no_of_pages = ceil($total_records / $total_records_per_page);
				$second_last = $total_no_of_pages - 1; // total page minus 1
   				$result = mysqli_query($connect, "SELECT * FROM `jobs` ORDER BY id DESC LIMIT $offset, $total_records_per_page");
				while ($row = mysqli_fetch_array($result)) {
				$company = $row['company'];
				$title = $row['title'];
				$description = $row['description'];
				$date = $row['date'];
				$time = $row['time'];
				$department = $row['department']; 
				$location = $row['location']; 
				?>
					<tr>
						<td>
							<a href="profile.php?company=<?php 
								$selt = "SELECT * FROM users WHERE company = '{$company}'";
								$s_query = mysqli_query($connect, $selt);
								while ($c_id = mysqli_fetch_array($s_query)){
									echo $c_id['id'];
								}
							 ?>" class="font-weight-bold"><?php echo $company; ?>
								
							</a>
						</td> 
	<!--------------------------- Title  ---------------------------------->
						<td title="<?php echo $title; ?>"><?php echo $title; ?></td>
						<td title="<?php echo $location; ?>"><?php echo $location; ?></td>
						<td>
<!--------------------------- View Button  ---------------------------------->	
			 				<a class="fas fa-eye text-decoration-none text-primary" href="viewjobs.php?job=<?php echo $row['id']; ?>" title="View Jobs">
							</a>
<!--------------------------- Edit Button  ---------------------------------->
							<a title="Edit Jobs" class="fas fa-pen text-decoration-none text-secondary" href="viewjobs.php?job=<?php echo $row['id']; ?>">
							</a> 			
<!--------------------------- Approval Button  ---------------------------------->
							<a class="text-decoration-none" href="approval.php?approve=<?php echo $row['id']; ?>" title="<?php if($row['status'] == 1){
									echo "Approved";
							 	 }
							 	else{
							 		echo "Unapproved";
							 		} ?>">
							 		<?php 
							 		if ($row['status']==1) {
							 		echo "<button class='btn btn-success border-0 fas fa-check'></button>";
							 		}
									 else{
							 			echo "<button class='btn btn-warning border-0 text-light fas fa-check'></button>";
							 		} ?>
							</a>
<!--------------------------- Delete Button  ---------------------------------->
							<a title="Delete" href="deletejob.php?delete=<?php echo $row['id']; ?>" class="fas fa-times ml-3 text-danger text-underline_none"></a>
						</td>
<!--------------------------- Date  ---------------------------------->
						<td class="font-weight-bold"><?php echo $date; ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
<!----------------------- For dividing the pages----------------------------->
		<center>
	<ul class="pagination mt-2">
	<?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
    			
	<li <?php if($page_no <= 1){ echo "class='disable'"; } ?>>
	<a class="page-link" <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
	</li>
       
    <?php 
	if ($total_no_of_pages <= 10){  	 
		for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
			if ($counter == $page_no) {
		   echo "<li class='active page-link bg-dark'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter' class='page-link'>$counter</a></li>";
				}
        }
	}
	elseif($total_no_of_pages > 10){
		
	if($page_no <= 4) {			
	 for ($counter = 1; $counter < 8; $counter++){		 
			if ($counter == $page_no) {
		   echo "<li class='active page-link bg-dark'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter' class='page-link'>$counter</a></li>";
				}
        }
		echo "<li><a>...</a></li>";
		echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
		echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
		}

	 elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
		echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
           if ($counter == $page_no) {
		   echo "<li class='active bg-dark'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                  
       }
       echo "<li><a>...</a></li>";
	   echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
	   echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
		
		else {
        echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
		   echo "<li class='active bg-dark'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                   
                }
            }
	}
?>
    
	<li  <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
	<a class="page-link" <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
	</li>
    <?php if($page_no < $total_no_of_pages){
		echo "<li><a href='?page_no=$total_no_of_pages' class='page-link'>Last &rsaquo;&rsaquo;</a></li>";
		} ?>
		<!------------------------------  For the number of posts available -------------------------------->
		<li class="nav-link border border-secondary p-1 font-weight-bold ml-3"><?php $try = "SELECT * FROM `jobs`";
			$rr = mysqli_query($connect, $try);
			$eee = mysqli_num_rows($rr);
			echo $eee; ?> Job(s) avalaible</li>
</ul>
</center>

		</div>
	</div>
</body>
</html>