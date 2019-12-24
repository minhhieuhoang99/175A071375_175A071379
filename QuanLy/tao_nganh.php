
 
<?php require_once("../includes/mysqli_connect.php"); ?>
<?php
	
    $message = '';
	if (isset($_POST["tao_nganh"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$MaNganh = $_POST["MaNganh"];
		$TenNganh = $_POST["TenNganh"];
		        

		$sql = "INSERT INTO nganh VALUES ('$MaNganh', '$TenNganh')";
		// thực thi câu $sql với biến dbcon lấy từ file connection.php
        mysqli_set_charset($dbcon,$sql);
        mysqli_query($dbcon,$sql);
        
        
		$message = '<label class="text-success">Tạo ngành học thành công</label>';
		
	}
    
?>


<!DOCTYPE html>
<html>
	<head>
			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>	
	    
		<div class="container" style="width:100%; max-width:600px">

    

	    <div class="panel panel-default">
				<div class="panel-heading"><h4>Tạo ngành học</h4></div>
				<div class="panel-body">
					
					<form action="tao_nganh.php" method="POST">
						

						
							<div class="form-group">
								<label>Mã ngành học</label>
								<input type="text" name="MaNganh" class="form-control" required />
							</div>
							<div class="form-group">
								<label>Tên ngành học</label>
								<input type="text" name="TenNganh" class="form-control" required/>
							</div>
					    



		                    <div class="form-group" >

									<input type="submit" name="tao_nganh"  value="Tạo ngành" class="btn btn-success" style="margin-top: 25px; margin-left: 0px;"/>
							</div>
					    
                         <?php echo $message; ?>                   
					</form>
					
				</div>
			</div>
		</div>
		
	</body>
</html>