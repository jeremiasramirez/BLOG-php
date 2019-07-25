<?php 
session_start();
include "model/model.php";
if(isset($_FILES["photo"]) == "" || $_POST["title"] ==""  || $_POST["text"] == "" || !ctype_space($_POST["title"])!=1 || !ctype_space($_POST["text"])!=1 )
{

    header("Location: ../index.php?empty=empty");

}
else
{
    if( ($_FILES["photo"]["error"]) == UPLOAD_ERR_OK){

        $destinateToImage = "uploads/blogsimg/";
        $destinateToImage = $destinateToImage . $_FILES["photo"]["name"];
        move_uploaded_file($_FILES["photo"]["tmp_name"], $destinateToImage);
        $title=$_POST['title'];
        $text=$_POST['text'];
        $photo=$_FILES['photo']["name"];
        mysqli_query($conection, "INSERT INTO blogspot (blogTitle, blogImage, blogDescription) VALUES ('$title', '$photo','$text')");
        header("Location: ../index.php?go=go");
    }
    else{
        header("Location: ../index.php?imgfailed=imgfailed");
    }
}


 





?>