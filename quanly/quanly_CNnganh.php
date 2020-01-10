<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ("../includes/dautrang.php"); ?>

<?php
    $sql = "SELECT MaNganh , TenNganh FROM nganh";
    $query = mysqli_query($dbcon,$sql);
?>
<?php
	if (isset($_GET["id_delete"])) {		
		$sql = 'DELETE FROM nganh WHERE MaNganh LIKE "' . $_GET["id_delete"] . '"';     
		mysqli_query($dbcon,$sql);
		
	}

?>
<main>
<?php require ("../includes/nav.php"); ?>
      <div class="grid-container">
      <?php require ("navquanly.php"); ?>
        <div class="grid-item item2">
        <table class="table">
      <thead class="thead-light">
        <tr>
                    
          <th scope="col">Tên ngành học</th>
          <th scope="col">Mã ngành học</th>
          <th scope="col">Sửa</th>
          <th scope="col">Xóa</th>

        </tr>
      </thead>
      <tbody>
          <?php 
            while ( $row = mysqli_fetch_array($query)) {
               $MaNganh = $row['MaNganh'];
               
        ?>
        <tr>

          <th scope="row"><?php echo $row['MaNganh']; ?></th>
          <td><?php echo $row['TenNganh']; ?></td>
          <td><a href="capnhatnganh.php?id=<?php echo $MaNganh;?>">Sửa</a></td>
          <td><a href="quanly_CNnganh.php?id_delete=<?php echo $MaNganh;?>">Xóa</a></td>

        </tr>
        <?php } ?>
      </tbody>
    </table>

        </div>
        <div class="grid-item item3"></div>
      </div>
    </main>
    
        
    <?php require ("../includes/chantrang.php"); ?>