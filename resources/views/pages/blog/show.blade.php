<x-base-layout>

    {{-- Meta Description --}}
    @section('meta_description', $post->metaDescription())

    {{-- Facebook Meta --}}
    @section('og:title', $post->title)
    @section('og:image', 'storage/images/' . $post->cover_image)

    {{-- Title --}}
    @section('title', $post->title)

    <main class="min-h-screen" style="background-image: linear-gradient(to right, #edf4ff , #d5e2f7);">
        <section class="container pt-24 mx-auto space-y-4">

            <article class="p-4 ">
                <h1 class="mb-2 text-2xl font-bold">{{ $post->title }}</h1>

                <div> {!!  $post-> body !!} </div>

                <button class="p-2 mt-16 text-xs bg-blue-500" style="color: white">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}" target="_blank">
                        Chia sẻ trên facebook.
                    </a>
                </button>

            </article>

        </section>
    </main>
</x-base-layout>