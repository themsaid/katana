<div class="pagination">
    @if($previousPage)
        <a class="button is-primary" href="@url($previousPage)">Newer posts</a>
    @endif

    @if($nextPage)
        <a class="button is-primary" href="@url($nextPage)">Previous posts</a>
    @endif
</div>