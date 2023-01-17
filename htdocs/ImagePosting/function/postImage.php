<?php

include("dbConfig.php");

$targetDirectory = '../images/';
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDirectory . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($fileName)) {
    $arrImageTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    if (in_array($fileType, $arrImageTypes)) {
        $postImageForServer = move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);

        if ($postImageForServer) {
            $insert = $db->query("INSERT INTO images (file_name) VALUES ('" . $fileName . "')");
            console_log("DBに画像(".$fileName.")が登録できました");
        }
    }
}
#元のページに戻る機能
echo <<<EOF
<script>
    location.href='http://127.0.200.1/imagePosting/';
</script>
EOF;
// これ使えない
// header('Location: ' . './html/index.php', true, 303);
exit();
