<?php include_once 'db-connect.php'; ?>
<?php 
class Blog extends Database{

//************************Blog Function*************//////////
    ///////*************************************//////////

    //Add new Blog.....
    public function add_new_blog($title, $blog_tag, $blog_category, $author, $content, $slug, $image, $u_id, $u_name, $activity_msg, $activity_type)
    {
        date_default_timezone_set('Asia/kolkata');
        $blog_date= date('d-m-y');
        
        $stmt = $this->con->prepare("INSERT INTO vaaf_blogs (blog_title, blog_tag, blog_category, blog_author, blog_image, blog_description, blog_date, blog_slug) VALUES (?,?,?,?,?,?,?,?)");

         $stmt_acti = $this->con->prepare("INSERT INTO vaaf_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
        $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

        if($stmt->execute(array($title, $blog_tag, $blog_category, $author, $image, $content, $blog_date, $slug)))
            return $this->con->lastInsertId();
        else
            return false;

    }


    // get agent list searching    
public function search_blog_via_category($blog_categ)
    {
        
      if ($blog_categ=='All') {
          $stmt = $this->con->prepare("SELECT * FROM esg_blogs ORDER BY blog_id DESC ");
        }
        else
        {
           $stmt = $this->con->prepare("SELECT * FROM esg_blogs WHERE blog_category=:blog_categ ORDER BY blog_id DESC ");
        }
        $stmt->execute(array(':blog_categ' => $blog_categ)); 
     
        if($stmt->rowCount()>0)
            {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
               
                
               ?>

                <div class="col-md-4">
                  <div class="blog-inner">
                     <figure class="figure">
                        
                        <div class="blog-inner-img">
                           <?php
                              if($row['blog_image']!="")
                              {
                              ?>
                           <img src="manage/app/upload/blog/<?php echo $row['blog_image']; ?>" alt="<?php echo $row['blog_image'];?>" class="img-fluid user-img">
                           <?php
                              }
                              else
                              {
                              ?>
                           <img src="image/default/1.jpeg"  alt="" class="img-fluid user-img"> 
                           <?php
                              }
                              ?>
                        </div>
                        <div class="blog-inner-desc-btm">
                           <div class="title">
                              <span><a href="blog-detail?blog=<?php echo $row['blog_slug']?>"><?php echo $row['blog_title']; ?></a></span>
                           </div>
                           <figcaption class="figure-caption">
                              <p>
                                          <span style="font-size: 12px;">Posted on :
                                 <?php echo $row['blog_date']; ?></span>
                                 <a style="float: right;" href="blog-detail?blog=<?php echo $row['blog_slug']?>"> Read Article </a>
                              </p>
                           </figcaption>
                        </div>
                     </figure>
                  </div>
               </div>
                <?php
                }
            }
        else
            {
                echo '<div class="col-md-12 product-men text-center">
                <img src="image/no-record-found.png" alt="" class="img-fluid">
             </div>';
            }
    }

// pagination blog    
public function get_blog_count()
    {
        $stmt = $this->con->prepare("SELECT count(*) AS a_count FROM esg_blogs WHERE blog_status = 1");
         $stmt->execute();
         return $stmt;
    }

// get all blog here 

public function get_blog()
    {
        $stmt = $this->con->prepare("SELECT * FROM vaaf_blogs  ORDER BY blog_id DESC");
        $stmt->execute(); 
        return $stmt;
    }


public function get_blog_edit($blog_id)
    {
        $stmt = $this->con->prepare("SELECT * FROM vaaf_blogs WHERE blog_id = :blog_id ORDER BY blog_id DESC");
        $stmt->execute(array(':blog_id' => $blog_id)); 
        return $stmt;
    }
// only active blog_status

public function get_blog_active()
    {
        $stmt = $this->con->prepare("SELECT * FROM vaaf_blogs WHERE blog_status=1  ORDER BY blog_id DESC");
        $stmt->execute(); 
        return $stmt;
    }
 // end 

// get feedback    
public function get_feedback()
    {
        $stmt = $this->con->prepare("SELECT esg_feedback.*, esg_users.u_name, esg_users.u_profile_pic FROM esg_feedback LEFT JOIN esg_users ON esg_users.u_id = esg_feedback.feedback_by ORDER BY id DESC");
        $stmt->execute(); 
        return $stmt;
    }

// feedaback count
 public function feedback_count()
    {
        $stmt = $this->con->prepare("SELECT COUNT(*) FROM esg_feedback WHERE feedback_status = 0");
        $stmt->execute();
        $row = $stmt->fetchColumn();
         return $row;
    }

// end
    public function get_blog_home()
    {
        $stmt = $this->con->prepare("SELECT * FROM esg_blogs WHERE blog_status=1 ORDER BY blog_id DESC LIMIT 0,3");
        $stmt->execute(); 
        return $stmt;
    }
public function get_blog_sidebar()
    {
        $stmt = $this->con->prepare("SELECT * FROM esg_blogs ORDER BY blog_id DESC LIMIT 0,5");
        $stmt->execute(); 
        return $stmt;
    }
// end blog code here

public function get_blog_front($blog_slug)
    {
        $stmt = $this->con->prepare("SELECT * FROM vaaf_blogs WHERE blog_slug = :blog_slug ORDER BY blog_title DESC");
        $stmt->execute(array(':blog_slug' => $blog_slug)); 
        return $stmt;
    }
// status update blog

// feedback seen 

    public function feedback_seen($u_id, $u_name, $activity_type, $activity_msg, $feedback_id,$feedback_status)
    {
        $stmt = $this->con->prepare("UPDATE esg_feedback SET feedback_status = :feedback_status WHERE id = :id");


        $stmt->execute(array(':id'  => $feedback_id, ':feedback_status' =>$feedback_status));

        $stmt_acti = $this->con->prepare("INSERT INTO esg_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
        $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

         return true;
    }    


public function update_blog_status($u_id, $u_name, $activity_msg, $activity_type, $blog_id, $status)
    {
       $stmt = $this->con->prepare("UPDATE vaaf_blogs SET blog_status =:status WHERE blog_id = :blog_id ");
       $stmt->execute(array(':blog_id' => $blog_id, ':status'=>$status));

       $stmt_acti = $this->con->prepare("INSERT INTO vaaf_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
       $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

       return true;  
    }

// delete blog here 

public function delete_blog($u_id, $u_name, $activity_msg, $activity_type, $blog_id)
    {
        $stmt = $this->con->prepare("DELETE  FROM vaaf_blogs WHERE blog_id = :blog_id");
        $stmt->execute(array(':blog_id' => $blog_id));
        
        $stmt_acti = $this->con->prepare("INSERT INTO vaaf_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
       $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));
         return true;
    }

// feedaback here side  
 public function get_feedback_list_home()
    {
       
        
        $stmt = $this->con->prepare("SELECT esg_feedback.*, esg_users.u_name, esg_users.u_profile_pic FROM esg_feedback LEFT JOIN esg_users ON esg_users.u_id = esg_feedback.feedback_by WHERE feedback_status = 0 ORDER BY id DESC");
        $stmt->execute(); 
        return $stmt;
    }
//Update Blog....

    public function edit_type_blog($u_id, $u_name, $activity_type, $activity_msg,$blog_id,$blog_title, $blog_category,$author, $blog_description, $image)
    {
        $stmt = $this->con->prepare("UPDATE esg_blogs SET 
            blog_id             = :blog_id,
            blog_title          = :blog_title,
            blog_category       = :blog_category, 
            author              = :author, 


            blog_description    = :blog_description,
            blog_image          = :image
             WHERE blog_id = :blog_id");


        $stmt->execute(array(
            ':blog_id'              => $blog_id, 
            ':blog_title'           => $blog_title, 
            ':blog_category'        => $blog_category, 
            ':author'               => $author, 


            ':blog_description'     =>$blog_description,
            ':image'                =>$image
        ));

        $stmt_acti = $this->con->prepare("INSERT INTO esg_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
        $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

         return true;
    }




}

?>