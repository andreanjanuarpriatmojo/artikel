<!-- comment_replies.blade.php -->

@foreach($comments as $comment)
<div class="display-comment">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>{{ $comment->name }}</strong> <span class="text-muted">commented 5 days ago</span>
            </div>
            <div class="panel-body">
                {{ $comment->comment }}
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="" id="reply"></a>
                    <form method="post" class="form-inline" action="{{ route('reply.add') }}">
                         @csrf
                        <textarea name="comment" class="form-control" placeholder="Write your comment here!" style="resize: none;padding: 20px;height: 100px;width: 100%;border: 2px solid #F2F2F2;margin-bottom: 1em"></textarea>
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Write your name!" style="border: 2px solid #F2F2F2;padding: 20px;">
                            <input class="form-control" type="text" name="email" placeholder="Write your email!" style="border: 2px solid #F2F2F2;padding: 20px;">
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-warning" value="Reply" />
                        </div>
                    </form>
                </div>
            </div>
            @include('artikel.comment.replies', ['comments' => $comment->replies])
        </div>
        
</div>
@endforeach

