<?php include_once 'db-connect.php'; ?>
<?php 
class Dashboard extends Database{

//************************Dashboard Function*************//////////
    ///////*************************************//////////
public function get_total_project_web()
{
$stmt = $this->con->prepare("SELECT count(*) FROM tech_project WHERE project_type ='website'");
        $stmt->execute(); 
        return $stmt->fetchColumn();
}

public function get_total_project_app()
{
$stmt = $this->con->prepare("SELECT count(*) FROM tech_project WHERE project_type ='app'");
        $stmt->execute(); 
        return $stmt->fetchColumn();
}

public function get_team_number()
{
$stmt = $this->con->prepare("SELECT count(*) FROM tech_team");
        $stmt->execute(); 
        return $stmt->fetchColumn();
}
public function get_blog_number()
{
$stmt = $this->con->prepare("SELECT count(*) FROM tech_blogs ");
        $stmt->execute(); 
        return $stmt->fetchColumn();
}

public function get_msg_home()
    {
        $stmt = $this->con->prepare("SELECT * FROM tech_contact  ORDER BY con_id DESC LIMIT 3");
        $stmt->execute(); 
        return $stmt;
    }

    public function get_team_home()
    {
        $stmt = $this->con->prepare("SELECT * FROM tech_team  ORDER BY team_id DESC LIMIT 3");
        $stmt->execute(); 
        return $stmt;
    }

    public function get_project_home()
    {
        $stmt = $this->con->prepare("SELECT * FROM tech_project  ORDER BY project_id DESC LIMIT 3");
        $stmt->execute(); 
        return $stmt;
    }

}

?>