<!--html and form for login page-->
<link rel="stylesheet" type="text/css" <?php echo link_tag("css\landing.css");?>>
<div id = "login_form">
        <h1> Please log in</h1>

        <?php
        echo form_open('login/validate_credentials');
        echo form_input('username', 'Username');
        echo form_password('password', 'Password') . br(1);
        echo form_submit('submit', 'Login') . br(1);
        echo '<h5>Not a member?' . anchor('login/signup', 'Create an account') . '</h5>';

        ?>
</div>