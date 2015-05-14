<?php


echo "<br>You are logged in and are in the members area!!" . "<br> <br>";
echo "Here is a listing of People we have in our system:<br>";

//Here is an example of how we can retreive and use user's cookie data
/*
$thisUser = $this->session->userdata('username');
 foreach ($matches->result() as $match)
{
   
    if($thisUser != $match['username']) {
        echo "<br>";
        echo "Email: " . $match['email'];
        echo "<br>";
        echo "Skill Offered: " . $match['skillOffered'];
        echo "<br>";
        echo "SkillWanted: " . $match['skillWanted'];
        echo "<br>";
    
    }
} 
*/
//New way pulling from site Controller

echo '<table border = "1" style = "width:100%">';
foreach($matches->result() as $match) {
    echo '<tr>';
    echo '<td>';
    echo $match->username . '<br>';
    echo '</td>';
    echo '<td>';
    echo $match->email . '<br>';
    echo '</td>';
    echo '<td>';
    echo $match->skillOffered . '<br>';
    echo '</td>';
    echo '<td>';
    echo $match->skillWanted . '<br>';
    echo '</td>';
    echo '</tr>';
        
}
echo '</table>';


?>