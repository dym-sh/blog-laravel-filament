<x-app-layout
  meta-title="About The Blog"
  meta-description="looking into source code i see"
  >

  <section class="w-full flex flex-col items-center px-3">

      <article class="flex flex-col shadow my-4 max-w-full">
          <!-- Article Image -->
          <a href="#" class="hover:opacity-75">
            <img src="/storage/{{ $widget->image }}"
              >
          </a>
          <div class="bg-white flex flex-col justify-start p-6">
              <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $widget->title }}</a>
              {!! $widget->content !!}
          </div>
      </article>

  </section>

</x-app-layout>