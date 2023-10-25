<?php
//check xem giá trị của id đã xuất hiện chưa URL chưa
if (isset($_GET['id'])) {
   try {
      //kết nối đến DB
      include 'includes/DatabaseConnection.php';
      //lấy value của joke id từ URL thông qua GET
      $id = $_GET['id'];
      //tạo câu lệnh SQL để xóa joke theo id
      $sql = "DELETE FROM joke 
           WHERE id = :id";
      //tạo statement để prepare sql
      $stm = $pdo->prepare($sql);
      //bind value của id
      $stm->bindValue(':id', $id);
      //thực thi statement
      $stm->execute();
      //redirect về trang joke list
      header("location: jokes.php");
   } catch (PDOException $error) {
      //báo lỗi kết nối DB
      echo "DB connect error: $error";
   }
}