<div class="pagination">
    @if($previousPage)
        <a class="button is-primary" href="{{$previousPage}}">Newer posts</a>
    @endif

    @if($nextPage)
        <a class="button is-primary" href="{{$nextPage}}">Previous posts</a>
    @endif
</div>