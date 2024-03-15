<?php include_once 'db-connect.php'; ?>
<?php 
class Property extends Database{
	//Add articles
	public function add_new_articles($u_id, $u_name, $activity_type, $activity_msg,$project_tp, $project_title,$articles_discreption,$image)
	{
	   
	            $stmt = $this->con->prepare("INSERT INTO tech_project (project_title,project_type,project_link,project_image) VALUES (?,?,?,?)");

	            $stmt_acti = $this->con->prepare("INSERT INTO tech_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
	            $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

	            if($stmt->execute(array($project_title,$project_tp,$articles_discreption,$image)))
	                return $this->con->lastInsertId();
	            else
	                return false;
	       
	        
	}

	//Add articles
	public function add_new_clients($u_id, $u_name, $activity_type, $activity_msg,$client_name,$image)
	{
	   
	            $stmt = $this->con->prepare("INSERT INTO tech_clients (client_name,client_image) VALUES (?,?)");

	            $stmt_acti = $this->con->prepare("INSERT INTO tech_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
	            $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

	            if($stmt->execute(array($client_name,$image)))
	                return $this->con->lastInsertId();
	            else
	                return false;
	       
	        
	}

	//Add team
	public function add_new_team($u_id, $u_name, $activity_type, $activity_msg,$name, $position,$experience,$image,$team_description)
	{
	   
	            $stmt = $this->con->prepare("INSERT INTO tech_team (team_name,team_position,team_experience,team_image,team_description) VALUES (?,?,?,?,?)");

	            $stmt_acti = $this->con->prepare("INSERT INTO tech_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
	            $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

	            if($stmt->execute(array($name,$position,$experience,$image,$team_description)))
	                return $this->con->lastInsertId();
	            else
	                return false;
	       
	        
	}

	//delete project type
	public function delete_articles_type($u_id, $u_name, $activity_msg, $activity_type, $project_id)
	{
	    $stmt = $this->con->prepare("DELETE  FROM tech_project WHERE project_id = :project_id");
	    $stmt->execute(array(':project_id' => $project_id));

	    $stmt_acti = $this->con->prepare("INSERT INTO tech_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
	    $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

	     return true;
	}

	//delete client type
	public function delete_client_type($u_id, $u_name, $activity_msg, $activity_type, $client_id)
	{
	    $stmt = $this->con->prepare("DELETE  FROM tech_clients WHERE client_id = :client_id");
	    $stmt->execute(array(':client_id' => $client_id));

	    $stmt_acti = $this->con->prepare("INSERT INTO tech_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
	    $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

	     return true;
	}

	//delete team type
	public function delete_team_type($u_id, $u_name, $activity_msg, $activity_type, $team_id)
	{
	    $stmt = $this->con->prepare("DELETE  FROM tech_team WHERE team_id = :team_id");
	    $stmt->execute(array(':team_id' => $team_id));

	    $stmt_acti = $this->con->prepare("INSERT INTO tech_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
	    $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

	     return true;
	}

	
	//Update project status....
	public function update_project_status($u_id, $u_name, $activity_msg, $activity_type, $project_id, $status)
	{
	   $stmt = $this->con->prepare("UPDATE tech_project SET project_status =:status WHERE project_id = :project_id ");
	   $stmt->execute(array(':project_id' => $project_id, ':status'=>$status));

	   $stmt_acti = $this->con->prepare("INSERT INTO tech_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
	   $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

	   return true;  
	}

	//Update client status....
	public function update_client_status($u_id, $u_name, $activity_msg, $activity_type, $client_id, $status)
	{
	   $stmt = $this->con->prepare("UPDATE tech_clients SET client_status =:status WHERE client_id = :client_id ");
	   $stmt->execute(array(':client_id' => $client_id, ':status'=>$status));

	   $stmt_acti = $this->con->prepare("INSERT INTO tech_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
	   $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

	   return true;  
	}


	//Update client status....
	public function update_team_status($u_id, $u_name, $activity_msg, $activity_type, $team_id, $status)
	{
	   $stmt = $this->con->prepare("UPDATE tech_team SET team_status =:status WHERE team_id = :team_id ");
	   $stmt->execute(array(':team_id' => $team_id, ':status'=>$status));

	   $stmt_acti = $this->con->prepare("INSERT INTO tech_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
	   $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

	   return true;  
	}


	//Update project....
	public function update_articles_type($u_id, $u_name, $activity_type, $activity_msg, $art_type_id,$project_tp, $edit_art_name, $edit_art_discreption,$image)
	{
	    $stmt = $this->con->prepare("UPDATE tech_project SET project_title = :edit_art_name, project_type = :project_type, project_link = :edit_art_discreption,project_image = :image WHERE project_id = :art_type_id");
		$stmt->execute(array(':art_type_id' => $art_type_id, ':edit_art_name' => $edit_art_name, ':project_type' => $project_tp, ':edit_art_discreption' => $edit_art_discreption,':image' => $image));


	    $stmt_acti = $this->con->prepare("INSERT INTO tech_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
	    $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

	     return true;
	}

	//Update team....
	public function update_team_type($u_id, $u_name, $activity_type, $activity_msg, $teamid,$name, $position, $experience,$image,$team_description)
	{
	    $stmt = $this->con->prepare("UPDATE tech_team SET team_name = :team_name, team_position = :team_position, team_experience = :team_experience,team_image = :image, team_description=:team_description WHERE team_id = :team_id");
		$stmt->execute(array(':team_id' => $teamid, ':team_name' => $name, ':team_position' => $position, ':team_experience' => $experience,':image' => $image,':team_description'=>$team_description));


	    $stmt_acti = $this->con->prepare("INSERT INTO tech_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
	    $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

	     return true;
	}

	//Update client....
	public function update_client_type($u_id, $u_name, $activity_type, $activity_msg, $clientid,$client_name,$image)
	{
	    $stmt = $this->con->prepare("UPDATE tech_clients SET client_name = :client_name,client_image = :image WHERE client_id = :client_id");
		$stmt->execute(array(':client_id' => $clientid, ':client_name' => $client_name,':image' => $image));


	    $stmt_acti = $this->con->prepare("INSERT INTO tech_activity (u_id, u_name, a_message, a_type) VALUES (?,?,?,?)");   
	    $stmt_acti->execute(array($u_id, $u_name, $activity_msg, $activity_type ));

	     return true;
	}


    //Get activity log...
	public function get_working_activity()
	{
	    $stmt = $this->con->prepare("SELECT * FROM tech_activity ORDER BY a_id DESC");
	    $stmt->execute(); 
	    return $stmt;
	}

	 //Get login activity log...
	public function get_login_activity()
	{
	    $stmt = $this->con->prepare("SELECT * FROM tech_login_log ORDER BY l_id DESC");
	    $stmt->execute(); 
	    return $stmt;
	}

	 //Get project list...
	public function get_project_list()
	{
	    $stmt = $this->con->prepare("SELECT * FROM tech_project  ORDER BY project_id DESC");
	    $stmt->execute(); 
	    return $stmt;
	}

	 //Get team list...
	public function get_team_list()
	{
	    $stmt = $this->con->prepare("SELECT * FROM tech_team  ORDER BY team_id DESC");
	    $stmt->execute(); 
	    return $stmt;
	}

	 //Get client list...
	public function get_client_list()
	{
	    $stmt = $this->con->prepare("SELECT * FROM tech_clients  ORDER BY client_id DESC");
	    $stmt->execute(); 
	    return $stmt;
	}

	//Get project website...
	public function get_project_web()
	{
	    $stmt = $this->con->prepare("SELECT * FROM tech_project WHERE project_type='website' AND project_status=1 ORDER BY project_id DESC");
	    $stmt->execute(); 
	    return $stmt;
	}


	public function get_project_type()
	{
	    $stmt = $this->con->prepare("SELECT * FROM tech_project WHERE project_status=1 GROUP BY project_type ORDER BY project_id DESC");
	    $stmt->execute(); 
	    return $stmt;
	}


	 //Get project app...
	public function get_project_app()
	{
	    $stmt = $this->con->prepare("SELECT * FROM tech_project WHERE project_type='app' AND project_status=1 ORDER BY project_id DESC");
	    $stmt->execute(); 
	    return $stmt;
	}


	 //Get team...
	public function get_team_frnt()
	{
	    $stmt = $this->con->prepare("SELECT * FROM tech_team WHERE team_status=1 ORDER BY team_id ASC");
	    $stmt->execute(); 
	    return $stmt;
	}
	//Get team...
	public function get_team_frnt2()
	{
	    $stmt = $this->con->prepare("SELECT * FROM tech_team WHERE team_status=1 ORDER BY team_id ASC LIMIT 4");
	    $stmt->execute(); 
	    return $stmt;
	}

	 //Get client ...
	public function get_client_frnt()
	{
	    $stmt = $this->con->prepare("SELECT * FROM tech_clients WHERE client_status=1  ORDER BY client_id DESC");
	    $stmt->execute(); 
	    return $stmt;
	}


 //Get articles limit...
	public function get_articles_limt()
	{
	    $stmt = $this->con->prepare("SELECT * FROM tech_project ORDER BY poject_id DESC LIMIT 0,5");
	    $stmt->execute(); 
	    return $stmt;
	}

	 //Get project...
	public function get_articles_details($project_id)
	{
	    $stmt = $this->con->prepare("SELECT * FROM tech_project WHERE project_id = :project_id");
	    $stmt->execute(array('project_id' =>$project_id )); 
	    return $stmt;
	}

	 //Get team...
	public function get_team_details($team_id)
	{
	    $stmt = $this->con->prepare("SELECT * FROM tech_team WHERE team_id = :team_id");
	    $stmt->execute(array('team_id' =>$team_id )); 
	    return $stmt;
	}

	 //Get client...
	public function get_client_details($client_id)
	{
	    $stmt = $this->con->prepare("SELECT * FROM tech_clients WHERE client_id = :client_id");
	    $stmt->execute(array('client_id' =>$client_id )); 
	    return $stmt;
	}


}
?>