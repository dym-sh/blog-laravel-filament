<?php
/** @var $posts \Illuminate\Pagination\LengthAwarePaginator */

?>

<x-app-layout>

<section class="w-full md:w-2/3 flex flex-col px-3">
  <div class="flex flex-col">
    @foreach( $posts as $post )
        <a href="{{ route('view', $post) }}">
          <h2 class="text-blue-500 font-bold text-lg sm:text-xl mb-2">
            {!! preg_replace(
                    '/('.request()->get('q').')/i'
                  , '<span class="bg-yellow-400">${1}</span>'
                  , $post->title
                )
            !!}
          </h2>
          <div>
            {!! preg_replace(
                    '/('.request()->get('q').')/i'
                  , '<span class="bg-yellow-400">${1}</span>'
                  , $post->shortBody()
                )
            !!}
          </div>
        </a>
        <hr class="my-4">
    @endforeach
  </div>
  {{ $posts->onEachSide(1)->links() }}

</section>

<x-sidebar />

</x-app-layout>
