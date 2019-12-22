<?php
//bước 1: Kết nối
$conn = mysqli_connect('localhost','root','','');
if(!$conn){
    die('Kết nối không thành công:'.mysqli_connect_error());
}
//bước 2: khai báo và thực thi
$sql = "DELETE FROM posts WHERE postID = '$getID'";
mysqli_set_charset($conn,$sql);
if(mysql_query($conn,$sql)){
    header("Location:index.php")
}




$sql = "SELECT * FROM posts";
mysqli_set_charset($conn,$sql);
$result = mysql_query($conn,$sql);
//bước 3: xử lý kết quả
if(mysqli_num_rows($result)>0){
    echo '<table>';
    echo '<tr>';
     echo '<th>postsID</th>;';
     echo '<th>postsTitle</th>;';
     echo '<th>postsShort</th>;';
     echo '<th>Edit</th>;';
     echo '<th>Delete</th>;';
    echo '</tr>';
    while($row = mysqli_fetch_assoc($result)){
     echo '<tr>';
      echo '<td>'.$row['postID']'</td>';
      echo '<td>'.$row['postTitle']'</td>';
      echo '<td>'.$row['postContent']'</td>;';
      echo '<th><a href="editPost.php?id="><img src="../images/edit.gif" ></a></th>;';
      echo '<th><a href="deletePost.php?id="><img src="" ></a></th>;';
     echo '</tr>';
    }
    echo '<h3>' .$row['postTitle'].'</h3>';
    echo '<h3>' .$row['postShort'].'</h3>';
    echo '<h3>' .$row['postContent'].'</h3>';
}
//bước 4: đóng kết nối
mysqli_closse($conn)
?>