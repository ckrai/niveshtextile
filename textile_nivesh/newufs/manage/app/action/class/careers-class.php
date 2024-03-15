<?php include_once 'db-connect.php'; ?>
<?php 
class Careers extends Database{

//************************Blog Function*************//////////
    ///////*************************************//////////

    //Add new Blog.....
    public function add_new_careers($title, $content, $slug, $location, $u_id, $u_name, $activity_msg, $activity_type)
    {
        date_default_timezone_set('Asia/kolkata');
        $careers_date= date('d-m-y');
        
        $stmt = $this->con->prepare("INSERT INTO tech_careers (career_title, career_slug,career_description, career_location) VALUES (?,?,?,?)");

         $stmt_acti = $this->con->prepare("INSERT INTO tech_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
        $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

        if($stmt->execute(array($title, $slug, $content, $location)))
            return $this->con->lastInsertId();
        else
            return false;

    }


// get all careers here 

public function get_careers()
    {
        $stmt = $this->con->prepare("SELECT * FROM tech_careers  ORDER BY career_id DESC");
        $stmt->execute(); 
        return $stmt;
    }

   

public function get_career_edit($careerId)
    {
        $stmt = $this->con->prepare("SELECT * FROM tech_careers WHERE career_id = :career_id ORDER BY career_id DESC");
        $stmt->execute(array(':career_id' => $careerId)); 
        return $stmt;
    }




   

// end blog code here
public function get_blog_front($blog_slug)
    {
        $stmt = $this->con->prepare("SELECT * FROM tech_blogs WHERE blog_slug = :blog_slug ORDER BY blog_title DESC");
        $stmt->execute(array(':blog_slug' => $blog_slug)); 
        return $stmt;
    }


    //Get careers website...
    public function get_careers_web()
    {
        $stmt = $this->con->prepare("SELECT * FROM tech_careers WHERE career_status=1 ORDER BY career_id DESC");
        $stmt->execute(); 
        return $stmt;
    }


public function update_career_status($u_id, $u_name, $activity_msg, $activity_type, $careers_id, $status)
    {
       $stmt = $this->con->prepare("UPDATE tech_careers SET career_status =:status WHERE career_id = :career_id ");
       $stmt->execute(array(':career_id' => $careers_id, ':status'=>$status));

       $stmt_acti = $this->con->prepare("INSERT INTO tech_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
       $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

       return true;  
    }

// delete career here 

public function delete_career($u_id, $u_name, $activity_msg, $activity_type, $careers_id)
    {
        $stmt = $this->con->prepare("DELETE  FROM tech_careers WHERE career_id = :career_id");
        $stmt->execute(array(':career_id' => $careers_id));
        
        $stmt_acti = $this->con->prepare("INSERT INTO tech_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
       $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));
         return true;
    }


//Update career....

    public function edit_career($career_id,$title, $location, $content, $slug, $u_id, $u_name, $activity_msg, $activity_type)
    {
        $stmt = $this->con->prepare("UPDATE tech_careers SET 
            career_title       = :career_title,
            career_location    = :career_location, 
            career_slug        = :career_slug, 
            career_description = :career_description
            WHERE career_id    = :career_id");


        $stmt->execute(array(
            ':career_id'           => $career_id, 
            ':career_title'        => $title, 
            ':career_location'     => $location, 
            ':career_slug'         => $slug, 
            ':career_description'  => $content
            
        ));

        $stmt_acti = $this->con->prepare("INSERT INTO tech_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
        $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

         return true;
    }

}

?>