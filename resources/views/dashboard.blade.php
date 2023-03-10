<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @foreach ($posts as $post)
        <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2>
                        {{ $post->title }}
                    </h2>
                    <p>
                        {{ Str::limit( $note->text, 200 ) }}
                    </p>
                    <p>
                    {{ $post->author }}
                    </p>
                    <span>
                    {{ $post->updated_at->diffForHumans()  }}
                    </span>
                </div>
            @endforeach

        </div>
    </div>
</x-app-layout>
