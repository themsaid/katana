<h3>From the blog</h3>

@foreach($blogPosts as $blogPost)
    <a href="@url($blogPost->path)">{{ $blogPost->title }}</a><br>
@endforeach

<br>
Want to read more?
<br>
<a href="@url('blog')">Check all posts</a>