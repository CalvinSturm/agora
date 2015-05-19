<!DOCTYPE HTML PUBLIC>
<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    <link rel="stylesheet" type="text/css" <?php echo link_tag("css\login.css");?>>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	    
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top" role="banner">
		  <div class="container">
		    <div class="navbar-header">
		      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a href="#" class="navbar-brand">Agora</a>
		    </div>
		    <nav class="collapse navbar-collapse" role="navigation">
		      <ul class="nav navbar-nav">
		        <li>
                    <?php
                    echo anchor('site/myQuery', 'Listings'); 
                    ?>
		        </li>
		        <li>
		          <?php
                    echo anchor('blog', 'Blog');
                    
                    
                    ?>
		        </li>
		        <li>
                    <?php
                        if($this->session->userdata('is_logged_in')) {
                            echo anchor('login/sign_out', 'Sign Out');
                        }
                        else {
                            echo anchor('login', 'Sign In');
                           
                        }              
                    ?>
		          
		        </li>
		      </ul>
		    </nav>
		  </div>
		</nav>
        <?php
            echo br(2);
        ?>