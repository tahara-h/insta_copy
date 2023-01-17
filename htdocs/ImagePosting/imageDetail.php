<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>画像投稿アプリ</title>
</head>
<body>
  <?php
    include('./function/dbConfig.php');
    include("./function/getDatas.php");
    include('header.php');
   ?>
  <div class="detailImageBox">
    <div class="detailImage">
      <img src="./images/<?php echo $data['image']['file_name'];?>" alt="投稿画像">
      <div class="detailImagButton">
        <button class="deleteButton" onclick="location.href='./function/deleteImage.php?id=<?php echo $_GET['id']; ?>'">削除</button>
      </div>
      <button onclick="location.href='./index.php';">戻る</button>
    </div>
</div>
</body>
</html>