<?php 
session_start();
include "model/model.php";
 include "../php/lib/managertime.php";

if(isset($_FILES["photo"]) == "" || $_POST["title"] ==""  || empty($_POST["title"]) || $_POST["text"] == "" || !ctype_space($_POST["title"])!=1 || !ctype_space($_POST["text"])!=1 )
{

    header("Location: /blogs?empty=empty");

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
   
            $h = getdate()['hours'];
            $m = getdate()['minutes'];
            $s = getdate()['seconds'];
            $hh = getsimpletime()['h'];
            $mm = getsimpletime()['m'];
            $ss = getsimpletime()['s'];

            $t = "$hh".":"."$mm".":"."$ss";
            if($h < 12){
                $t = "$hh".":"."$mm".":"."$ss"." A.M";
            }
            else{
                $t = "$hh".":"."$mm".":"."$ss"." P.M";
            }
        $statementinsert = "INSERT into blogspot (blogTitle, blogDescription, blogImage, blogDateTime, timeless) VALUES ('$title', '$text', '$photo', '$times', '$t')";
            mysqli_query($conection, $statementinsert);
            header("Location: /blogs?go=go");
         }
    }
    else{
        header("Location: /blogs?imgfailed=imgfailed");
    }
}


 


?>