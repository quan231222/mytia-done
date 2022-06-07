<div class="col-lg-4 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
    <div class="icon-box">
        <div class=""><img src="{{ Storage::url('images/' . $post->cover_image) }}"></i>
        </div>
        <h4><a href="">{{ $post->title }}</a></h4>
        {{-- <p>{!! Str::limit(($post->body), 200, '...') !!}</p> --}}
    </div>
</div>