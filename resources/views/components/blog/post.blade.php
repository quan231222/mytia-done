<div class="p-4 bg-white shadow" style="border-radius: 1rem">
    <a href="{{ route('blog.show', $post) }}" class="space-y-4">
        <div class="icon" style="width:300px"><img src="{{ Storage::url('images/' . $post->cover_image) }}"></i></div>
        <h2 class="text-xl font-bold">{{ $post->title }}</h2>
        {{-- <p>{!! Str::limit(($post->body), 200, '....') !!}</p> --}}
    </a>
</div>