<?php

$query = $this->db->query("SELECT * FROM members;");
echo "<br>You are logged in and are in the members area!!" . "<br> <br>";
echo "Here is a listing of People we have in our system:<br>";
//We can get fancy with location and skill queries
//$zipcode = $this->session->userdata('zipcode');
//$skillOffered = $this->session->userdata('skillOffered');
//$skillWanted = $this->session->userdata('skillWanted');
//
//Here is an example of how we can retreive and use user's cookie data

/*$thisUser = $this->session->userdata('username');
 foreach ($query->result_array() as $row)
{
   
    if($thisUser != $row['username']) {
        echo "<br>";
        echo "Email: " . $row['email'];
        echo "<br>";
        echo "Skill Offered: " . $row['skillOffered'];
        echo "<br>";
        echo "SkillWanted: " . $row['skillWanted'];
        echo "<br>";
    
    }
} */

//New way pulling from site Controller
foreach($matches->result() as $match) {
    echo $match->username;
}

?>