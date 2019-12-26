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