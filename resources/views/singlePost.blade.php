@extends('layouts.layout')
@section('content')


    <div class="py-24 px-12">

        <div class="container mx-auto flex flex-wrap">
            <div class="w-full md:w-1/2 md:pr-4 flex flex-wrap mb-12 md:mb-0">

                    <img src="{!! $post->img !!}" class="w-full h-full object-cover">

            </div>
            <div class="w-full md:w-1/2 md:pl-4">
                <h1 class="text-4xl ">{!! $post->title !!}</h1>
                <br>
                <div class="max-w-lg">
                    <h2 class="mb-6 text-gray-700">{!! $post->description !!}</h2>
                    <p class="mb-6 text-gray-700">{!! $post->content !!}</p>
                    <a href="{{ route('posts')}}" class="inline-block bg-teal-500 text-white px-6 py-3 text-sm hover:bg-gray-800">Find out more</a>
                </div>
            </div>
        </div>
    </div>
    <h3 class="mb-4 text-lg text-center font-semibold text-gray-900">Comment Section</h3>
    <footer class="border-solid border-2 border-teal-600">
    @include('post.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])    </footer>
    @auth("web")
    <h3 class="mb-4 text-lg text-center font-semibold text-gray-900">Write Your Comment</h3>
    <div class="flex bg-teal-50 justify-center items-center">
        <div class="w-1/2 bg-teal-50 p-2 pt-4 rounded shadow-lg">

            <div class="flex ml-3">

                <div class="mr-3">
                    <img src="http://picsum.photos/50" alt="" class="rounded-full">
                </div>
                <div>

                        <h1 class="font-semibold">{{Auth::user()->name}}</h1>

                </div>
            </div>
    <form method="post" action="{{ route('comments.store') }}">
        @csrf
        <div class="form-group">
            <div class="mt-3 p-3 w-full">
                <textarea rows="3"  name="body" class="border form-control p-2 rounded w-full" placeholder="Write something..."></textarea>
            </div>
            <input type="hidden" name="post_id" value="{{ $post->id }}" />
        </div>
        <div class="flex justify-between mx-3 form-group">
            <div><button class="px-4 py-1 bg-gray-800 text-white rounded font-light hover:bg-gray-700">Submit</button></div>
        </div>
    </form> @endauth









        </div>
    </div>

    </div>

@endsection
