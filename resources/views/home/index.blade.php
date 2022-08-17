<x-base-layout>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>Công ty tư vấn thiết kế và xây dựng Mytia</h1>
                    <h2>Đẹp - Tiện Nghi - Độc Đáo</h2>
                </div>
            </div>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Dự án</h2>
                    <p>Xem qua các dự án của chúng tôi</p>
                </div>
                <div class="row">
                    @foreach ($posts as $post)
                    <x-post :post="$post" />
                    @endforeach
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>Đăng ký nhận thông tin từ chúng tôi.</h3>
                    <p> Nhận các thông tin mới nhất từ công ty chúng tôi!</p>
                    <div>
                        <livewire:newsletter.form>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Liên hệ</h2>
                    <p>Liên hệ với chúng tôi</p>
                </div>

                <div>
                    <iframe style="border:0; width: 100%; height: 270px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.021089214812!2d108.20740801482972!3d16.064395388883934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b4c7f837bd%3A0x490ea7b2e132e521!2zNTQgVsSDbiBDYW8sIFRo4bqhYyBHacOhbiwgVGhhbmggS2jDqiwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaWV0bmFt!5e0!3m2!1sen!2sus!4v1654576936035!5m2!1sen!2sus"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-12">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Đến trực tiếp công ty tại địa chỉ:</h4>
                                <p>54 Văn Cao, Thanh Khê, Đà Nẵng</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Liên hệ với chúng tôi qua Email:</h4>
                                <p>mytiacompany@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Liên hệ với chúng tôi qua số điện thoại:</h4>
                                <p>070 717 3740</p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
</x-base-layout>