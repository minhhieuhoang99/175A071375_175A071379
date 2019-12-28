<?php
//bước 1: Kết nối
require ("mysqli_connect.php");
//bước 2: khai báo và thực thi
$sql = "SELECT * FROM users";
mysqli_set_charset($dbcon,$sql);
$result = mysqli_query($dbcon,$sql);
//bước 3: xử lý kết quả
if(mysqli_num_rows($result)>0){
    echo '<table>';
    echo '<tr>';
     echo '<th>userid</th>;';
     echo '<th>first_name</th>;';
     echo '<th>last_name</th>;';
     echo '<th>Edit</th>;';
     echo '<th>Delete</th>;';
    echo '</tr>';
    while($row = mysqli_fetch_assoc($result)){
     echo '<tr>';
      echo '<td>'.$row['userid'].'.</td>';
      echo '<td>'.$row['first_name'].'</td>';
      echo '<td>'.$row['last_name'].'</td>;';
      echo '<th><a href="editPost.php?id="><img src="../images/edit.gif" ></a></th>;';
      echo '<th><a href="deletePost.php?id="><img src="" ></a></th>;';
     echo '</tr>';
    }
    echo '<h3>' .$row['userid'].'</h3>';
    echo '<h3>' .$row['first_name'].'</h3>'; 
    echo '<h3>' .$row['last_name'].'</h3>';
}
//bước 4: đóng kết nối
mysqli_close($dbcon);
?>