<?php
	
	$message = '';
	if (isset($_POST["tao_nganh"])) {
		
		$MaNganh = $_POST["MaNganh"];
		$TenNganh = $_POST["TenNganh"];
		        

		$sql = "INSERT INTO nganh VALUES ('$MaNganh', '$TenNganh')";
		
        mysqli_set_charset($dbcon,$sql);
        mysqli_query($dbcon,$sql);
        
        
		$message = '<label class="text-success">Tạo ngành học thành công</label>';
		
	}
?>
<?php
	
	$message = '';
	if (isset($_POST["tao_nganh"])) {
		
		$MaNganh = $_POST["MaNganh"];
		$TenNganh = $_POST["TenNganh"];
		        
		$sql = "INSERT INTO nganh VALUES ('$MaNganh', '$TenNganh')";
		
        mysqli_set_charset($dbcon,$sql);
        mysqli_query($dbcon,$sql);
        
        
		$message = '<label class="text-success">Tạo ngành học thành công</label>';
		
	}
?>