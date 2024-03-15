<?php include "../app_include/session.php";?>
<?php include "../app_include/function.php";?>
<?php include 'class/blog-class.php';?>
<?php $token = $_SESSION["token"]; ?>
<?php 
   if($_POST['token']== $_SESSION['token'])
       {
    
        $image = '';
        $location      = '../upload/blog/';

        $title         = test_input($_POST['blog_title']); 
        $blogid        = test_input($_POST['blog_id']); 
        $blog_tag      = "Demo1,Demo2";
        $blog_category = test_input($_POST['blog_category']);
        $author        = test_input($_POST['blog_author']);
        $content       = htmlspecialchars_decode($_POST['blog_description']) ;
        $slug          = slugify($title);
        $pic           = test_input($_POST['image']);

        $u_id          = test_input($_SESSION['u_id']);
        $u_name        = test_input($_SESSION['name']);

        $activity_msg  = "Blog has been updated by ".$u_name;
        $activity_type = "Add New Blog " .$title;

        if($_FILES["file"]["name"] != '')
        {
            $image = upload_image($location);
        }
        else
        {
          $image = $pic;
        }

        

       $blog = new Blog();
       $row  = $blog->edit_blog($blogid,$title, $blog_tag, $blog_category, $author, $content, $slug, $image, $u_id, $u_name, $activity_msg, $activity_type);
       if($row !=null)
       {
           echo json_encode(array(
            "valid"=>1,
            "message" => "Blog has been updated successfully."
        ));
       }
       else
       {
            echo json_encode(array(
            "valid"=>0,
            "message" => "Something went wrong."
        ));
    
       }
       }
       else
       {
          echo json_encode(array(
            "valid"=>0,
            "message" => "Error."
        ));
       }
   
   
   ?>