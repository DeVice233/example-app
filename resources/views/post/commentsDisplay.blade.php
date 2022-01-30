



    <div class="antialiased mx-auto max-w-screen-sm">

        @foreach($comments as $comment)
        <div class="space-y-1 my-1">
            <div class="flex">
                <div class="flex-shrink-0 mr-3">
                    <img class="mt-1 rounded-full w-8 h-8 sm:w-10 sm:h-10" src="http://picsum.photos/50" alt="">
                </div>
                <div class="flex-1  rounded-lg px-4  sm:px-6 sm:py-1 leading-relaxed">
                    <strong>{{ $comment->user->name }}</strong> <span class="text-xs text-gray-400">{{$comment->created_at}}</span>
                    <p class="text-sm">
                        {{ $comment->body }}
                    </p>

@auth("web") <a href="" id="reply"></a>
                    <form method="post" action="{{ route('comments.store') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="body" class="form-control" /> <hr />
                            <input type="hidden" name="post_id" value="{{ $post_id }}" />
                            <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Reply" />
                        </div>

                    </form>
                    @endauth



                    <div class=" flex items-center">

                        <div class="text-sm text-gray-500 font-semibold">
                              @include('post.commentsDisplay', ['comments' => $comment->replies])
                        </div>
                    </div>

                </div>
            </div>
        </div>
            @endforeach

    </div>

