@foreach ($posts as $post)
    <p>{{ $post }}</p>
@endforeach

@if (count($posts) > 0)
    <p>Found {{ count($posts) }} posts</p>
@else
    <p>No posts found</p>
@endif