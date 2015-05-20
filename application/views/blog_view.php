<div class="container">
    
    <div class="blog-header">
        <h1 class="blog-title">The Blog</h1>
        <p class="lead blog-description"> Aenean lacinia bibendum nulla sed consectetu</p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">
            
            <?php 
            
            //displays blogs and delete buttons if logged in
            foreach($blogs->result() as $match) {

                echo '<div class="blog-post"><h2 class="blog-post-title">' . $match->title . '</h2>';
                echo '<p class="blog-post-meta">' . $match->timeStamp . '<a href="#">   ' . $match->name;
                echo '</a></p><p id = "body">' . $match->body . '</p>';
                if($this->session->userdata('username') === 'admin') { 
                    echo form_open('blog/delete');
                    echo form_hidden('id', $match->id);
                    echo form_submit('submit', 'Delete');
                    echo form_close("</div>");
                }
            
            }
            
            ?>

        </div>
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consecteturpurus sitamet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>
        <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
                <li><a href="#">March 2014</a></li>
                <li><a href="#">February 2014</a></li>
                <li><a href="#">January 2014</a></li>
                <li><a href="#">December 2013</a></li>
                <li><a href="#">November 2013</a></li>
                <li><a href="#">October 2013</a></li>
                <li><a href="#">September 2013</a></li>
                <li><a href="#">August 2013</a></li>
                <li><a href="#">July 2013</a></li>
                <li><a href="#">June 2013</a></li>
                <li><a href="#">May 2013</a></li>
                <li><a href="#">April 2013</a></li>
            </ol>
        </div>
            <div class="sidebar-module">
                <h4>Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->

        <!-- admin blog submit form -->
                <?php 
                if($this->session->userdata('username') === 'admin') { 
                    echo '<div id = "blog_form">';
                    echo form_open('blog/post_blog'); 
                    echo form_input('name', 'Name');
                    echo form_input('title', 'Title');
                    echo form_textarea('body', 'Body');
                    echo form_submit('submit', 'Submit Post!') . '</div>';

                } 
                ?>
        

<footer class="blog-footer">
    <p>Copyright © 2015 
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>