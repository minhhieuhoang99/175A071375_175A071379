<?php require_once("../includes/mysqli_connect.php"); ?>
<?php require ("dautrang.php"); ?>

<?php
    $sql = "SELECT TenMon , MaMon , MaNganh FROM mon";
    $query = mysqli_query($dbcon,$sql);
?>
<main>
      <div class="grid-container">
      <?php require ("navquanly.php"); ?>
        <div class="grid-item item2">
        <table class="table">
      <thead class="thead-light">
        <tr>
          
          <th scope="col">Mã môn học</th>
          <th scope="col">Tên môn học</th>
          <th scope="col">Mã ngành học</th>
          <th scope="col">Sửa</th>
          <th scope="col">Xóa</th>

        </tr>
      </thead>
      <tbody>
          <?php 
            while ( $row = mysqli_fetch_array($query)) {
               $MaMon = $row['MaMon'];
               
        ?>
        <tr>
          <th scope="row"><?php echo $row['MaNganh']; ?></th>
          <td><?php echo $row['MaMon']; ?></td>
          <td><?php echo $row['TenMon']; ?></td>
          <td><a href="">Sửa</a></td>
          <td><a href="">Xóa</a></td>

        </tr>
        <?php } ?>
      </tbody>
    </table>

        </div>
        <div class="grid-item item3"></div>
      </div>
    </main>
    
        
<?php require ("chantrang.php"); ?>