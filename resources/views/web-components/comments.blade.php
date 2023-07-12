@foreach($blog->comments as $comment)

<section class="blog-details">
    <strong class="text-right"><p>{{$comment->created_at->diffForHumans()}}</p></strong>
    <strong><p>{{$comment->user->name}}</p></strong>
    <p id="comment-{{$comment->id}}">{{$comment->comment}}</p>
</section>

@endforeach