<link rel="stylesheet" type="text/css" <?php echo link_tag("css\landing.css");?>>
<fieldset>
    
    <div id = "signup_form">
        <?php
        echo '<h1>Create an account</h1>';
        echo form_open('login/create_member'); 
        echo form_input('email', set_value('email', 'Email'));
        echo form_input('username', set_value('username', 'Username'));
        echo form_input('skillWanted', set_value('skillWanted', 'Skill Wanted'));
        echo form_input('skillOffered', set_value('skillOffered', 'Skill Offered'));
        echo form_input('zipcode', set_value('zipcode', 'Zipcode'));
        echo form_password('password', set_value('password', 'Password'));
        echo form_password('password2', set_value('password2', 'Password confirm')) . br(1);

        echo form_submit('submit', 'Create Account');

        validation_errors('<p class = "error"></p>');

        ?>
    </div>
</fieldset>
