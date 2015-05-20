<link rel="stylesheet" type="text/css" <?php echo link_tag("css\members.css");?>>
<?php 

echo "<br>You are logged in and are in the members area!!" . "<br> <br>";
echo "Here are your skill matches:<br>";

echo '<table border = "2" style = "width:100%">';
    echo '<tr>';
    echo '<td>';
    echo 'Username' . '<br>';
    echo '</td>';
    echo '<td>';
    echo 'Email' . '<br>';
    echo '</td>';
    echo '<td>';
    echo 'Skill Offered' . '<br>';
    echo '</td>';
    echo '<td>';
    echo 'Skill Wanted' . '<br>';
    echo '</td>';
    echo '</tr>';

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

foreach($matches2->result() as $match) {
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
