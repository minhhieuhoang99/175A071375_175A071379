<?php
$query = "SELECT last_name, first_name, email, DATE_FORMAT(registration_date, '%M %d, %Y')";
$query .=" AS regdat, class, paid, userid FROM users ORDER BY registration_date DESC";
$q .=" LIMIT $start, $pagerows";	



// Prepared statement not needed since hardcoded	
$result = mysqli_query ($dbcon, $query); // Run the query.
if ($result) { // If it ran OK, display the records.
// Table header. 									#2
echo '<table class="table table-striped">
<tr>
<th scope="col">Edit</th>
<th scope="col">Delete</th>
<th scope="col">Last Name</th>
<th scope="col">First Name</th>
<th scope="col">Email</th>
<th scope="col">Date Registered</th>
</tr>';				
// Fetch and print all the records:							#3
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	// Remove special characters that might already be in table to #5
	// reduce the chance of XSS exploits
	$user_id = htmlspecialchars($row['userid'], ENT_QUOTES);
	$last_name = htmlspecialchars($row['last_name'], ENT_QUOTES);
	$first_name = htmlspecialchars($row['first_name'], ENT_QUOTES);
	$email = htmlspecialchars($row['email'], ENT_QUOTES);
	$registration_date = htmlspecialchars($row['regdat'], ENT_QUOTES);
	echo '<tr>
	<td><a href="edit_user.php?id=' . $user_id . '">Edit</a></td>
	<td><a href="delete_user.php?id=' . $user_id . '">Delete</a></td>
	<td>' . $last_name . '</td>
	<td>' . $first_name . '</td>
	<td>' . $email . '</td>
	<td>' . $registration_date . '</td>
	</tr>';
	}
	echo '</table>'; // Close the table.
	//                                                                                                                                                                      #7
	mysqli_free_result ($result); // Free up the resources.	
}
else { // If it did not run OK.
// Error message:
echo '<p class="error">The current users could not be retrieved. We apologize';
echo ' for any inconvenience.</p>';
// Debug message:
// echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
exit;
} // End of if ($result) 
mysqli_close($dbcon); // Close the database connection.

?>