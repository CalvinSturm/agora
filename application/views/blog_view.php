<script>
    function addPost() {
        $(".blog-main").append('<div class="blog-post"><h2 class="blog-post-title"></h2><p                                     class="blog-post-meta"><a href="#"></a></p><p id = "body"></p></div>');
        var codeBlock = document.getElementById("blog-post");
        var name = document.getElementById('name');
        var title = document.getElementById("title");
        var blog = document.getElementById("blog");
        $(".blog-post-title").text(title);
        $("a").text(name);
        $("#body").text(blog);
        alert('name');

    }
</script>


<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">The Blog</h1>
        <p class="lead blog-description"> Aenean lacinia bibendum nulla sed consectetu                  </p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">
            
            <div class="blog-post">
                <h2 class="blog-post-title">Title</h2>
                <p class="blog-post-meta">Date<a href="#">Calvin</a></p>
                <p id = "body">mollis euismod. Cras mattis consectetur                     purus sitamet fermentum. Aenean lacinia bibendum nulla sed consectetur.mollis euismod. Cras mattis consectetur purus sitamet fermentum. Aenean lacinia bibendum nulla sed consectetur.mollis euismod. Cras mattis consecteturpurus sitamet fermentum. Aenean lacinia bibendum nulla sed consectetur.mollis euismod. Cras mattis consectetur         purus sitamet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>

            <nav>
                <ul class="pager">
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </nav>

        </div><!-- /.blog-main -->
        
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur                     purus sitamet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
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
            <div id = "blog_form">
                <?php 
                if($this->session->userdata('username') === 'admin') { 
                    $js = 'onClick = "addPost()"';
                    echo form_input('name', 'Name');
                    echo form_input('title', 'Title');
                    echo form_textarea('blog', 'Blog');
                    echo form_submit('mysubmit', 'Submit Post!', $js);


                } 
                ?>
            </div>


<footer class="blog-footer">
    <p>Copyright © 2015 
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>