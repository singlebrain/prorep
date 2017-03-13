<?php
$target_dir = "uploads/";
$cate=$_GET["category"];
$target_dir = $target_dir.$cate."/";
$target_file = $target_dir . basename($_FILES["userfile"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "pdf") {
    echo "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";



    require_once 'medoo.min.php';




$database = new medoo([
    // required
    'database_type' => 'mysql',
    'database_name' => 'mynewdb',
    'server' => 'localhost',
    'username' => 'akm',
    'password' => 'password',
    'charset' => 'utf8',
 ]);
 
$var1= "var1";
$var2= "var2";
$var3= "var3";

$last_user_id = $database->insert("book", [
    "tag1" => $var1,
    "url" => "asdfas",
    "category" => "45retre"      
]);


echo $last_user_id;














        
/*        $connection=mysql_connect("127.0.0.1","users","");
         if(!$connection)
         {
           echo "database login failed";
         }
        $vtag1=$_POST["tag1"];
        $insert_qry='insert into book(tag1,url,category)values($vtag1,$target_file,$cate)';
        if(!mysql_query("insert into book(tag1,url,category)values($vtag1,$target_file,$cate)",$connection))
         {
            echo "\nquery failed";
         }


*/






    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>