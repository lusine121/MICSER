<?php

$files = glob( "*.php");

function dirToArray() {

    $files = scandir("C:\ xampp");
    foreach ($files as $key => $value) {
        if (is_dir( "C:\ xampp" . DIRECTORY_SEPARATOR . $value)){
            $result[$value] = ("C:\ xampp" . DIRECTORY_SEPARATOR . $value);
        }
        else {
            $result[] = $value;
        }
    }
}

echo "<pre>";
print_r($files);

?>
