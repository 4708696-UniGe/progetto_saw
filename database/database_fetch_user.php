 <?php
	include 'database_connect.php';

	if (!$conn) {
		die("Connessione fallita: " . mysqli_connect_error());
	}

	$sql = "
	SELECT * FROM users 
	WHERE id != '".$_SESSION['ID_USER']."'
	";

	$res = mysqli_query($conn, $sql);
	

	while ($rows = mysqli_fetch_array($res)) {
	?>
	<a class="list-group-item list-group-item-action active text-white rounded-0">
             <div class="media"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                <div class="media-body ml-4">
                  <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0"> <?php echo $rows['firstname']; ?> </h6><small class="small font-weight-bold">Data ultimo messaggio</small>
                  </div>
                  <p class="font-italic mb-0 text-small"> Anteprima messaggio </p>
                </div>
              </div>
            </a>
	<?php } ?>


?>

