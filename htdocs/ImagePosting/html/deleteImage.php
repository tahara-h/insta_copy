<?php

include('./dbConfig.php');

$targetDirectory = 'images/';
$imageId = $_GET['id'];

if(!empty($imageId)) {
    $sql = "SELECT file_name FROM images WHERE id = " . $imageId;

    $sth = $db->prepare($sql);
    $sth->execute();
    $getImageName = $sth->fetch();

    $deleteImage = unlink($targetDirectory . $getImageName['file_name']);

    if($deleteImage) {
        $deleteRecord = $db->query("DELETE FROM images WHERE id = " . $imageId);

        if($deleteRecord) {
            #元のページに戻る機能
            echo <<<EOF
                <script>
                location.href='http://127.0.200.1/imagePosting/html/index.php';
                </script>
            EOF;
            exit();
        }
    }
}