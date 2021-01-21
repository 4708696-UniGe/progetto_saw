<?php
$conn = mysqli_connect("localhost", "root", "", "test");
$output = '';


if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["query"]);

	$query = "
	SELECT * FROM ticket
	WHERE email LIKE '%".$search."%'
	"; 

	
}
else
{
	$query = "
		SELECT * FROM ticket";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Email</th>
							<th>Opening Date</th>
							<th>Device</th>
							<th>OS</th>
							<th>Description</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["email"].'</td>
				<td>'.$row["opening_date"].'</td>
				<td>'.$row["device"].'</td>
				<td>'.$row["os"].'</td>
				<td>'.$row["description"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}



?>