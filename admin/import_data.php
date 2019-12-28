<?php
//error_reporting(0);
$conn = mysqli_connect("localhost","root","","test");
//require_once("../includes/mysqli_connect.php");
require_once("../vendor/php-excel-reader/excel_reader2.php");
require_once("../vendor/SpreadsheetReader.php");

if (isset($_POST["import"]))
{
    
    
  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
            
            $Reader->ChangeSheet($i);
            
            foreach ($Reader as $Row)
            {
                //INSERT INTO `taikhoan`(`TenTaiKhoan`, `MatKhau`, `email`, `CapDo`, `NgayTao`, `MaTK`) 
                //VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])    
                $TenTaiKhoan = "";
                if(isset($Row[0])) {
                    $TenTaiKhoan = mysqli_real_escape_string($conn,$Row[0]);
                }
                
                $MatKhau = "";
                if(isset($Row[1])) {
                    $MatKhau = mysqli_real_escape_string($conn,$Row[1]);
                }

                $email = "";
                if(isset($Row[2])) {
                    $email = mysqli_real_escape_string($conn,$Row[2]);
                }
                
                $CapDo = "";
                if(isset($Row[3])) {
                    $CapDo = mysqli_real_escape_string($conn,$Row[3]);
                }

                $NgayTao = "";
                if(isset($Row[4])) {
                    $NgayTao = mysqli_real_escape_string($conn,$Row[4]);
                }
                
                $MaTK = "";
                if(isset($Row[5])) {
                    $MaTK = mysqli_real_escape_string($conn,$Row[5]);
                }
                
                if (!empty($TenTaiKhoan) || !empty($MatKhau) || !empty($email) || !empty($CapDo) || !empty($NgayTao) || !empty($MaTK)) {
                    $query = "INSERT INTO `taikhoan`(`TenTaiKhoan`, `MatKhau`, `email`, `CapDo`, `NgayTao`, `MaTK`)
                    values('".$TenTaiKhoan."','".$MatKhau."','".$email."','".$CapDo."','".$NgayTao."','".$MaTK."')";
                    $result = mysqli_query($conn, $query);
                
                    if (! empty($result)) {
                        $type = "success";
                        $message = "Excel Data Imported into the Database";
                    } else {
                        $type = "error";
                        $message = "Problem in Importing Excel Data";
                    }
                }
             }
        
         }
  }
  else
  { 
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
  }
}
?>

<!DOCTYPE html>
<html>    
<head>
<style>    
body {
	font-family: Arial;
	width: 550px;
}

.outer-container {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 40px 20px;
	border-radius: 2px;
}

.btn-submit {
	background: #333;
	border: #1d1d1d 1px solid;
    border-radius: 2px;
	color: #f0f0f0;
	cursor: pointer;
    padding: 5px 20px;
    font-size:0.9em;
}

.tutorial-table {
    margin-top: 40px;
    font-size: 0.8em;
	border-collapse: collapse;
	width: 100%;
}

.tutorial-table th {
    background: #f0f0f0;
    border-bottom: 1px solid #dddddd;
	padding: 8px;
	text-align: left;
}

.tutorial-table td {
    background: #FFF;
	border-bottom: 1px solid #dddddd;
	padding: 8px;
	text-align: left;
}

#response {
    padding: 10px;
    margin-top: 10px;
    border-radius: 2px;
    display:none;
}

.success {
    background: #c7efd9;
    border: #bbe2cd 1px solid;
}

.error {
    background: #fbcfcf;
    border: #f3c6c7 1px solid;
}

div#response.display-block {
    display: block;
}
</style>
</head>

<body>
    <h2>Import Excel File into MySQL Database using PHP</h2>
    
    <div class="outer-container">
        <form action="" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
                <label>Choose Excel
                    File</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx">
                <button type="submit" id="submit" name="import"
                    class="btn-submit">Import</button>
        
            </div>
        
        </form>
        
    </div>
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    
         
<?php
    $sqlSelect = "SELECT * FROM taikhoan";
    $result = mysqli_query($conn, $sqlSelect);

if (mysqli_num_rows($result) > 0)
{
?>
        
    <table class='tutorial-table'>
        <thead>
            <tr>
            
                <th>TenTaiKhoan</th>
                <th>MatKhau</th>
                <th>email</th>
                <th>CapDo</th>
                <th>NgayTao</th>
                <th>MaTK</th>

            </tr>
        </thead>
<?php
    while ($row = mysqli_fetch_array($result)) {
?>                  
        <tbody>
        <tr>
        
            <td><?php  echo $row['TenTaiKhoan']; ?></td>
            <td><?php  echo $row['MatKhau']; ?></td>
            <td><?php  echo $row['email']; ?></td>
            <td><?php  echo $row['CapDo']; ?></td>
            <td><?php  echo $row['NgayTao']; ?></td>
            <td><?php  echo $row['MaTK']; ?></td>

        </tr>
<?php
    }
?>
        </tbody>
    </table>
<?php 
} 
?>

</body>
</html>