<?php require_once("../includes/mysqli_connect.php"); ?>
<?php
// This script is a query that INSERTs a record in the users table.
// Check that form has been submitted:
try {
	$errors = array(); // Initialize an error array. 
	// Check for a tentaikhoan:                        
        $tentaikhoan = filter_var( $_POST['tentaikhoan'], FILTER_SANITIZE_STRING);	
	if (empty($tentaikhoan)) {
		$errors[] = 'You forgot to enter your first name.';
	}
	// Check for a ten:                        
        $ten = filter_var( $_POST['ten'], FILTER_SANITIZE_STRING);	
	if (empty($ten)) {
		$errors[] = 'You forgot to enter your first name.';
	}
	// Check for a diachi:                        
        $diachi = filter_var( $_POST['diachi'], FILTER_SANITIZE_STRING);	
	if (empty($diachi)) {
		$errors[] = 'You forgot to enter your first name.';
	}
	// Check for a ngay sinh:
	    $ngaysinh = filter_var( $_POST['ngaysinh'], FILTER_SANITIZE_STRING);	
	if (empty($ngaysinh)) {
		$errors[] = 'You forgot to enter your last name.';
	}
	// Check for a cap do:
	    $capdo = filter_var( $_POST['capdo'], FILTER_SANITIZE_STRING);	
	if (empty($ngaysinh)) {
		$errors[] = 'You forgot to enter your last name.';
	}
	// Check for an email address:
	    $email = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL);	
	if  ((empty($email)) || (!filter_var($email, FILTER_VALIDATE_EMAIL))) {
		$errors[] = 'You forgot to enter your email address';
		$errors[] = ' or the e-mail format is incorrect.';
	}
	// Check for a password and match against the confirmed password:
			$password1 = filter_var( $_POST['password1'], FILTER_SANITIZE_STRING);
			$password2 = filter_var( $_POST['password2'], FILTER_SANITIZE_STRING);
	if (!empty($password1)) {
		if ($password1 !== $password2) { 
			$errors[] = 'Your two password did not match.';
		} 
	} else {
		$errors[] = 'You forgot to enter your password(s).';
	}
	if (empty($errors)) { // If everything's OK.     
		if($_POST['capdo'] =="3")
		{         
			// Register the user in the database...
			// Hash password current 60 characters but can increase
				$hashed_passcode = password_hash($password1, PASSWORD_DEFAULT); 
				//require ('mysqli_connect.php'); // Connect to the db.     
				// Make the query:                                               
				$query = "INSERT INTO taikhoan (MaTK, TenTaiKhoan, email, MatKhau , CapDo , NgayTao) ";
				$query .="VALUES(' ', ?, ?, ? ,? , NOW())";		                
				$q = mysqli_stmt_init($dbcon);                                  			
				mysqli_stmt_prepare($q, $query);		
				// use prepared statement to insure that only text is inserted
				// bind fields to SQL Statement
				mysqli_stmt_bind_param($q, 'ssss', $tentaikhoan, $email, $hashed_passcode ,$capdo);
				mysqli_stmt_execute($q);
				if (mysqli_stmt_affected_rows($q) == 1) 
					{	// One record inserted			
						
						$query = "SELECT MaTK, MatKhau, NgayTao, CapDo FROM taikhoan WHERE email=$email";
						$sql = mysqli_query($dbcon,$query);
						$data = mysqli_fetch_array($sql);
						$query1 ="INSERT INTO giangvien (MaGV, HoTenGV, NgaySinh, DiaChi , MaTK ) ";
						$query1 .="VALUES('a', ?, ?, ? ,? )";
						$q1 = mysqli_stmt_init($dbcon);	
						mysqli_stmt_prepare($q1, $query1);	
						mysqli_stmt_bind_param($q1, 'ssss', $ten, $ngaysinh, $diachi ,$data['MaTK']);	
							
						if (mysqli_stmt_affected_rows($q1) == 1)
						{
							header ("location: admin_CNtk.php");
							echo 'thành công ';
						}
						else { echo 'thất bại khi thêm vào bảng giảng viên';}
					
						exit();
					} 
				else { // If it did not run OK.
				// Public message:
					$errorstring = "<p class='text-center col-sm-8' style='color:red'>";
					$errorstring .= "System Error<br />You could not be registered due ";
					$errorstring .= "to a system error. We apologize for any inconvenience.</p>"; 
					echo "<p class=' text-center col-sm-2' style='color:red'>$errorstring</p>";
					// Debugging message below do not use in production
					echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $query . '</p>';
					mysqli_close($dbcon); // Close the database connection.
				// include footer then close program to stop execution
					echo '<footer class="jumbotron text-center col-sm-12"
					style="padding-bottom:1px; padding-top:8px;">
					include("footer.php"); 
					</footer>';
				exit();
				}
		}
		else
		{         
			// Register the user in the database...
			// Hash password current 60 characters but can increase
				$hashed_passcode = password_hash($password1, PASSWORD_DEFAULT); 
				//require ('mysqli_connect.php'); // Connect to the db.     
				// Make the query:                                               
				$query = "INSERT INTO taikhoan (MaTK, TenTaiKhoan, email, MatKhau , CapDo , NgayTao) ";
				$query .="VALUES('a', ?, ?, ?, ?, NOW() )";	                
				$q = mysqli_stmt_init($dbcon);                                  
				mysqli_stmt_prepare($q, $query);
				// use prepared statement to insure that only text is inserted
				// bind fields to SQL Statement
				mysqli_stmt_bind_param($q, 'ssss', $tentaikhoan, $email, $hashed_passcode, $capdo);
			// execute query
				mysqli_stmt_execute($q);
				if (mysqli_stmt_affected_rows($q) == 1) 
					{	// One record inserted
						
						$query = "SELECT MaTK, MatKhau, NgayTao, CapDo FROM taikhoan WHERE email=$email";
						$sql = mysqli_query($dbcon,$query);
						$data = mysqli_fetch_array($sql);
						$query1 ="INSERT INTO quanly (MaQL, HoTenQL, NgaySinh, DiaChi , MaTK ) ";
						$query1 .="VALUES('', ?, ?, ? ,? )";
						$q1 = mysqli_stmt_init($dbcon);	
						mysqli_stmt_prepare($q1, $query1);	
						mysqli_stmt_bind_param($q1, 'ssss', $ten, $ngaysinh, $diachi ,$data['MaTK']);	
							
							if (mysqli_stmt_affected_rows($q1) == 1)
							{
								header ("location: admin_CNtk.php");
								echo 'thành công ';
							}
							else { echo 'thất bại khi thêm vào bảng quản lý';}
						
							

						exit();
					} 
				else { // If it did not run OK.
				// Public message:
					$errorstring = "<p class='text-center col-sm-8' style='color:red'>";
					$errorstring .= "System Error<br />You could not be registered due ";
					$errorstring .= "to a system error. We apologize for any inconvenience.</p>"; 
					echo "<p class=' text-center col-sm-2' style='color:red'>$errorstring</p>";
					// Debugging message below do not use in production
					echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $query . '</p>';
					mysqli_close($dbcon); // Close the database connection.
				// include footer then close program to stop execution
					echo '<footer class="jumbotron text-center col-sm-12"
					style="padding-bottom:1px; padding-top:8px;">
					include("footer.php"); 
					</footer>';
				exit();
				}
		}	
	} else { // Report the errors.                             
		$errorstring = "Error! <br /> The following error(s) occurred:<br>";
		foreach ($errors as $msg) { // Print each error.
			$errorstring .= " - $msg<br>\n";
		}
		$errorstring .= "Please try again.<br>";
		echo "<p class=' text-center col-sm-2' style='color:red'>$errorstring</p>";
		}// End of if (empty($errors)) IF.
		}									
   catch(Exception $e) // We finally handle any problems here   
   {
     // print "An Exception occurred. Message: " . $e->getMessage();
     print "The system is busy please try later";
   }
   catch(Error $e)
   {
      //print "An Error occurred. Message: " . $e->getMessage();
      print "The system is busy please try again later.";
   }
?>