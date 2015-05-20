<link rel="stylesheet" type="text/css" <?php echo link_tag("css\members.css");?>>
<?php 
if($this->session->userdata('username') !== 'admin') { 
    echo "<br>You are logged in and are in the members area!!" . "<br> <br>";
    echo "Here are your skill matches:<br>";
}

echo '<table class = "table table-condensed">';
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
    echo '<tr class = "success">';
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
    
    if($this->session->userdata('username') === 'admin') { 
        echo '</td>';
        echo '<td>';
        echo form_open('admin/delete_user');
        echo form_hidden('id', $match->id);
        echo form_submit('submit', 'Delete');
        echo form_close("");
        echo '</td>';
        echo '</tr>';
    }    
}
if($this->session->userdata('username') !== 'admin') { 
    foreach($matches2->result() as $match) {
        echo '<tr class="warning">';
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
    foreach($matches3->result() as $match) {
        echo '<tr class="danger">';
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
}
echo '</table>';

?>
