<div>
    <section class="about">
        <div class="container">
            <div class="about-section">
                <div class="row align-items-center gy-5">
                    <div class="col-lg-6">
                        <div class="about-img" data-aos="fade-right">
                            <img src="{{Storage::url($about->image)}}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content" data-aos="fade-up">
                            <h3 class="about-title">{{$about->title}}</h3>
                            <p class="about-info">
                                {{ $about->description }}
                            </p>

                            <a href="contact-us.html" class="shop-btn">
                                Contact us
                                <span>
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1.45312" y="0.914062" width="9.25346" height="2.05632"
                                            transform="rotate(45 1.45312 0.914062)" fill="white" />
                                        <rect x="8" y="7.45703" width="9.25346" height="2.05632"
                                            transform="rotate(135 8 7.45703)" fill="white" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
