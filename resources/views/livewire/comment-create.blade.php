<div
    x-data="{
        focused: {{ $parentComment ? 'true' : 'false' }},
        isEdit: {{ $commentModel ? 'true' : 'false' }},
        init() {
            if( this.isEdit || this.focused) {
                this.$refs.input.focus()
            }

            console.log('init called');

            Livewire.on('commentCreated', () => {
                console.log('commentCreated');
                this.focused = false;
            })
        }
    }"
    x-on:commentCreated="
        focused = false
    "
    >
        <div class="mb-2">
            <textarea
                x-ref="input"
                wire:model="comment"
                @click=" focused = true "
                placeholder="Leave a comment"
                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                :rows=" isEdit || focused ? '2' : '1' "
                ></textarea>
        </div>

        <div :class="isEdit || focused ? '' : 'hidden' ">
            <button
                wire:click="createComment"
                type="submit"
                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mr-3"
                >Submit</button>

            <button
                @click=" focused = false; isEdit = false; Livewire.dispatch('cancelEditing')"
                >Cancel</button>
        </div>
</div>
