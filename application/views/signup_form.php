<!--main html for signup page/form -->

<h1>Create an account</h1>
<fieldset>
    <legend>Personal Information</legend>
    <?php
    echo form_open('login/create_member');
    echo form_input('fname', set_value('fname', 'First Name'));
    echo form_input('lname', set_value('lname', 'Last Name'));  
    echo form_input('email', set_value('email', 'Email'));
    echo form_input('username', set_value('username', 'Username'));
    echo form_password('password', set_value('password', 'Password'));
    echo form_password('password2', set_value('password2', 'Password confirm'));

    echo form_submit('submit', 'Create Account');
 
    validation_errors('<p class = "error"></p>');
    
    ?>

</fieldset>
