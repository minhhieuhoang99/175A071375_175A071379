<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ("dautrang.php"); ?>

<?php
    $sql = "SELECT MaLHP , TenLopHP , MaTGH FROM lophocphan";
    $query = mysqli_query($dbcon,$sql);
?>
<?php
	if (isset($_GET["id_delete"])) {	
		$sql = 'DELETE FROM lophocphan WHERE MaLHP LIKE "' . $_GET["id_delete"] . '"';
		mysqli_query($dbcon,$sql);
	}
?>
<main>
<?php require ("nav.php"); ?>
      <div class="grid-container">
      <?php require ("navquanly.php"); ?>
        <div class="grid-item item2">
        <table class="table">
      <thead class="thead-light">
        <tr>
          
          <th scope="col">Mã lớp học phần</th>  
          <th scope="col">Tên lớp học phần</th>
          <th scope="col">Mã thời gian học</th>
          <th scope="col">Sửa</th>
          <th scope="col">Xóa</th>

        </tr>
      </thead>
      <tbody>
          <?php 
            while ( $row = mysqli_fetch_array($query)) {
               $MaLHP = $row['MaLHP'];
               
        ?>
        <tr>
          <th scope="row"><?php echo $row['MaLHP']; ?></th>
          <td><?php echo $row['TenLopHP']; ?></td>
          <td><?php echo $row['MaTGH']; ?></td>
          <td><a href="capnhatlophp.php?id=<?php echo $MaLHP;?>">Sửa</a></td>
          <td><a href="quanly_CNLhp.php?id_delete=<?php echo $MaLHP;?>">Xóa</a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

        </div>
        <div class="grid-item item3"></div>
      </div>
    </main>
    
        
<?php require ("chantrang.php"); ?>