<div class="mt-4">
    <div class="flex mb-4 gap-3">
        <div class="w-12 h-12 flex items-center justify-center bg-gray-100 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
              </svg>

        </div>
        <div>
            <div class="flex gap-3">
                <a href="#" class="font-semibold text-indigo-600">
                    {{ $comment->user->name }}
                </a>
                <span class="text-gray-500">
                    {{ $comment->created_at->diffForHumans() }}
                </span>
            </div>
            <div class="text-gray-700">
                {{ $comment->comment }}
            </div>
            <div>
                <a href="#" class="text-sm text-indigo-600 mr-3">Reply</a>
                @if( \Illuminate\Support\Facades\Auth::id() == $comment->user_id )
                    <a href="#" class="text-sm text-blue-600 mr-3">Edit</a>
                    <a wire:click.prevent="deleteComment" href="#" class="text-sm text-red-600">Delete</a>
                @endif
            </div>
        </div>
    </div>
</div>
