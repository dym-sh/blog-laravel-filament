<?php
/** @var $posts \Illuminate\Pagination\LengthAwarePaginator */

?>

<x-app-layout
    meta-description="Homepage"
    >

    <div class="container max-w-4xl mx-auto py-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

            {{-- Latest Post --}}
            <div class="col-span-2">
                <h2 class="text-lg sm:text-xl font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3">
                    Latest Post
                </h2>
                <x-post-item :post="$latestPost" />
            </div>

            {{-- Popular 3 posts --}}
            <div>
                <h2 class="text-lg sm:text-xl font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3">
                    Popular Posts
                </h2>
                <div class="flex flex-col gap-4">
                    @foreach( $popularPosts as $post)
                        {{-- <x-post-item :post="$post" /> --}}
                        <div class="grid grid-cols-4 gap-2">
                            <a href="{{ route('view', $post) }}" class="pt-2">
                                <img class="max-h-10 overflow-hidden" src="{{ $post->getThumbnail() }}" alt="{{ $post->title }}">
                            </a>
                            <div class="col-span-3">
                                <a href="{{ route('view', $post) }}">
                                    <h3 class="text-sm text-bold whitespace-nowrap truncate">{{ $post->title }}</h3>
                                </a>
                                @if($post->categories)
                                    <div class="flex gap-2">
                                        @foreach($post->categories as $category)
                                            <a href="{{ route('by-category', $category) }}" class="bg-blue-500 text-white rounded  text-xs uppercase px-2 py-1">
                                                {{ $category->title }}
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                                <div class="text-xs">
                                    {{ $post->shortBody(10) }}
                                </div>
                                <a href="{{ route('view', $post) }}" class="text-xs uppercase text-gray-800 hover:text-black items-center">Continue Reading <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach
            </div>
            </div>
        </div>

        {{-- recomended posts --}}
        <div>
            <h2 class="text-lg sm:text-xl font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3">
                recomended posts
            </h2>
        </div>

        {{-- latest categories --}}
        <div>
            <h2 class="text-lg sm:text-xl font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3">
                latest categories
            </h2>
        </div>
    </div>

</x-app-layout>
