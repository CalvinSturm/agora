<!DOCTYPE HTML PUBLIC>
<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    <link rel="stylesheet" type="text/css" <?php echo link_tag("css\login.css");?>>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	    
	</head>
	<body>
        <?php
        echo '<h1>' . anchor('admin', 'Admin Dashboard'); anchor('login/sign_out', 'Sign Out') . '</h1>'; 
        echo '    ' . anchor('login/sign_out', 'Sign Out') . '</h1>'; 
        ?>
