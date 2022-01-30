@extends('layouts.layout')
@section('content')
    <div class="container  mx-auto px-4 bg-teal-50">

        <div class="container flex flex-row justify-center items-stretch flex flex-wrap my-8 mx-auto">
            @foreach($posts as $post)
                <div class="max-w-sm  rounded overflow-hidden shadow-lg my-5 mx-3 w-1/4">
                    <img class="w-full" src="{!! $post->img !!}" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <a href=" {{ route('post', $post->id) }}"><h5 class="text-gray-900 text-xl font-medium mb-2">{!! $post->title !!}</h5></a>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center mt-6">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
