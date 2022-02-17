<?php

$file = "readme.txt";

$path = realpath($file);
echo "<pre>";
print_r(pathinfo($path,PATHINFO_BASENAME));
print_r(pathinfo($path,PATHINFO_DIRNAME));
print_r(pathinfo($path,PATHINFO_EXTENSION));
print_r(pathinfo($path,PATHINFO_FILENAME));
echo "</pre>";

echo basename($path, ".txt");
echo dirname($path);
// if(file_exists($file)){
//     // echo readfile("readme.txt");
//     // copy($file, "newfile.txt");
//     //rename("newfile.txt", "oldfile.txt");
//    // unlink("oldfile.txt");
//   // delete("oldfile.txt");
//   //mkdir("textfiles");
//   unlink("textfiles");

// }else {
//     echo "File does not exist";
// }



// echo filesize($file);
// echo filetype($file);
//echo realpath($file);
//echo pathinfo($file);