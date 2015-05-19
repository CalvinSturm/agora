function addPost() {
        $(".blog-main").append('<div class="blog-post"><h2 class="blog-post-title"></h2><p                                     class="blog-post-meta"><a href="#"></a></p><p id = "body"></p></div>');
        var codeBlock = document.getElementById("blog-post");
        var name = document.getElementById("name");
        var title = document.getElementById("title");
        var blog = document.getElementById("blog");
        $(".blog-post-title").text(title);
        $("a").text(name);
        $("#body").text(blog);
        alert('name');
}
