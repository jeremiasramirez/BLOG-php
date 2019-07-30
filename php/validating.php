<?php 
session_start();
include "model/model.php";
if(isset($_FILES["photo"]) == "" || $_POST["title"] ==""  || empty($_POST["title"]) || $_POST["text"] == "" || !ctype_space($_POST["title"])!=1 || !ctype_space($_POST["text"])!=1 )
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
        $title = strip_tags($_POST['title']);
        $title = addslashes($_POST['title']);
        $text=$_POST['text'];
        $text=strip_tags($_POST['text']);
        $text=addslashes($_POST['text']);

        $times = time();
        $times = date('d/m/Y', $times);
        $photo=$_FILES['photo']["name"];

       if($title!=""){
            
        $statementinsert = "INSERT into blogspot (blogTitle, blogDescription, blogImage, blogDateTime) VALUES ('$title', '$text', '$photo', '$times')";
        mysqli_query($conection, $statementinsert);
        header("Location: ../index.php?go=go");
         }
    }
    else{
        header("Location: ../index.php?imgfailed=imgfailed");
    }
}


 


?>