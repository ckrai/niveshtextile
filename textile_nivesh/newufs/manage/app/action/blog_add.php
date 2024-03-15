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
        $blog_tag      = "Demo1,Demo2";
        $blog_category = test_input($_POST['blog_category']);
        $author        = test_input($_POST['blog_author']);
        $content       = htmlspecialchars_decode($_POST['blog_description']) ;
        $slug          = slugify($title);

        $u_id          = test_input($_SESSION['u_id']);
        $u_name        = test_input($_SESSION['name']);

        $activity_msg  = "Blog has been added by ".$u_name;
        $activity_type = "Add New Blog " .$title;

        if($_FILES["file"]["name"] != '')
        {
            $image = upload_image($location);
        }

        

       $blog = new Blog();
       $row  = $blog->add_new_blog($title, $blog_tag, $blog_category, $author, $content, $slug, $image, $u_id, $u_name, $activity_msg, $activity_type);
       if($row !=null)
       {
           echo json_encode(array(
            "valid"=>1,
            "message" => "Blog has been added successfully."
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