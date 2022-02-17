<?php

 //$file = "readme.txt";

// $path = realpath($file);
// echo "<pre>";
// print_r(pathinfo($path,PATHINFO_BASENAME));
// print_r(pathinfo($path,PATHINFO_DIRNAME));
// print_r(pathinfo($path,PATHINFO_EXTENSION));
// print_r(pathinfo($path,PATHINFO_FILENAME));
// echo "</pre>";

// echo basename($path, ".txt");
// echo dirname($path);
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

$file = fopen("readme.txt", "a+");

// // echo fread($file, 50);
// // echo fread($file, filesize("readme.txt"));
// echo fgets($file);
// echo ftell($file);
//echo fseek($file,15);
// echo fpassthru($file);
// rewind($file);
 //echo "<br><br>" . fgets($file);

//     echo "<ul>";
//  while(!feof($file)){
//      $line = fgets($file);
//      echo "<li>". $line . "</li>";
//  }

//  echo "</ul>";

// fwrite($file, "\nHere is new line");
ftruncate($file, 50);

if(is_file("readme.txt")){
    echo "Yes it is file";
}else {
    echo "No it is not a file";
}
echo "<br>";
if(is_dir("readme.txt")){
    echo "Yes it is Folder";
}else {
    echo "No it is not a Folder";
}

echo "<br>";
if(is_writeable("readme.txt")){
    echo "Yes it is writeable";
}else {
    echo "No it is not a writeable";
}

echo "<br>";
if(is_executable("readme.txt")){
    echo "Yes it is executable";
}else {
    echo "No it is not a executable";
}