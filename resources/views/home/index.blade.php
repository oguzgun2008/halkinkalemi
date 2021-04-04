@extends('layouts.home')
@section('title','Halkın Kalemi')
@section('keywords','Halkın Kalemi')
@section('description','Halkın Kalemi')
@section('author','Barış Sorkun')
@section('content')
    <section class="section bg-color-light border-0 my-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center">
                    <h2 class="font-weight-bold mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">About Us</h2>
                    <p class="text-color-dark pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in arcu facilisis quam aliquam ultrices quis in purus. Donec volutpat et justo et viverra. Suspendisse id justo a ipsum viverra ultrices quis et quam. Pellentesque id finibus elit, vitae finibus est. Sed mollis orci eget ex euismod vulputate. Praesent fermentum dignissim congue. Praesent sapien mi.</p>
                    <a href="#" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1900" data-plugin-options="{'accY': 100}">READ MORE</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-color-tertiary border-0 my-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="font-weight-bold text-center appear-animation" data-appear-animation="fadeInUpShorter">Popular Courses</h2>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                    <div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
                        <div class="thumb-info-wrapper">
                            <a href="demo-education-courses-detail.html"><img src="{{asset('assets')}}/img/demos/education/courses/course-1.jpg" class="img-fluid" alt=""></a>
                            <div class="thumb-info-price bg-color-secondary font-weight-semibold">
                                <span>FREE</span>
                            </div>
                        </div>
                        <div class="thumb-info-caption">
                            <h3 class="font-weight-semibold text-transform-none"><a href="demo-education-courses-detail.html" class="custom-link-color-dark">Aeronautical and Manufacturing</a></h3>
                        </div>
                        <div class="thumb-info-footer">
                            <ul class="nav text-1">
                                <li><a href="demo-education-courses-detail.html"><i class="far fa-user text-color-primary"></i> John Doe</a></li>
                                <li class="ml-3"><a href="demo-education-courses-detail.html"><i class="far fa-clock text-color-primary"></i> 30 Minutes</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                    <div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
                        <div class="thumb-info-wrapper">
                            <a href="demo-education-courses-detail.html"><img src="{{asset('assets')}}/img/demos/education/courses/course-2.jpg" class="img-fluid" alt=""></a>
                            <div class="thumb-info-price bg-color-secondary font-weight-semibold">
                                <span>$585</span>
                            </div>
                        </div>
                        <div class="thumb-info-caption">
                            <h3 class="font-weight-semibold text-transform-none"><a href="demo-education-courses-detail.html" class="custom-link-color-dark">Complementary Medicine</a></h3>
                        </div>
                        <div class="thumb-info-footer">
                            <ul class="nav text-1">
                                <li><a href="demo-education-courses-detail.html"><i class="far fa-user text-color-primary"></i> John Doe</a></li>
                                <li class="ml-3"><a href="demo-education-courses-detail.html"><i class="far fa-clock text-color-primary"></i> 48 Hours</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
                        <div class="thumb-info-wrapper">
                            <a href="demo-education-courses-detail.html"><img src="{{asset('assets')}}/img/demos/education/courses/course-3.jpg" class="img-fluid" alt=""></a>
                            <div class="thumb-info-price bg-color-secondary font-weight-semibold">
                                <span>FREE</span>
                            </div>
                        </div>
                        <div class="thumb-info-caption">
                            <h3 class="font-weight-semibold text-transform-none"><a href="demo-education-courses-detail.html" class="custom-link-color-dark">Creative Writing</a></h3>
                        </div>
                        <div class="thumb-info-footer">
                            <ul class="nav text-1">
                                <li><a href="demo-education-courses-detail.html"><i class="far fa-user text-color-primary"></i> John Doe</a></li>
                                <li class="ml-3"><a href="demo-education-courses-detail.html"><i class="far fa-clock text-color-primary"></i> 2 Hours</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    <div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
                        <div class="thumb-info-wrapper">
                            <a href="demo-education-courses-detail.html"><img src="{{asset('assets')}}/img/demos/education/courses/course-4.jpg" class="img-fluid" alt=""></a>
                            <div class="thumb-info-price bg-color-secondary font-weight-semibold">
                                <span>FREE</span>
                            </div>
                        </div>
                        <div class="thumb-info-caption">
                            <h3 class="font-weight-semibold text-transform-none"><a href="demo-education-courses-detail.html" class="custom-link-color-dark">Librarianship & Information</a></h3>
                        </div>
                        <div class="thumb-info-footer">
                            <ul class="nav text-1">
                                <li><a href="demo-education-courses-detail.html"><i class="far fa-user text-color-primary"></i> John Doe</a></li>
                                <li class="ml-3"><a href="demo-education-courses-detail.html"><i class="far fa-clock text-color-primary"></i> 1 Hour</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 mb-xl-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                    <div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
                        <div class="thumb-info-wrapper">
                            <a href="demo-education-courses-detail.html"><img src="{{asset('assets')}}/img/demos/education/courses/course-5.jpg" class="img-fluid" alt=""></a>
                            <div class="thumb-info-price bg-color-secondary font-weight-semibold">
                                <span>$222</span>
                            </div>
                        </div>
                        <div class="thumb-info-caption">
                            <h3 class="font-weight-semibold text-transform-none"><a href="demo-education-courses-detail.html" class="custom-link-color-dark">Drama, Dance & Cinematics</a></h3>
                        </div>
                        <div class="thumb-info-footer">
                            <ul class="nav text-1">
                                <li><a href="demo-education-courses-detail.html"><i class="far fa-user text-color-primary"></i> John Doe</a></li>
                                <li class="ml-3"><a href="demo-education-courses-detail.html"><i class="far fa-clock text-color-primary"></i> 15 Minutes</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 mb-xl-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    <div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
                        <div class="thumb-info-wrapper">
                            <a href="demo-education-courses-detail.html"><img src="{{asset('assets')}}/img/demos/education/courses/course-6.jpg" class="img-fluid" alt=""></a>
                            <div class="thumb-info-price bg-color-secondary font-weight-semibold">
                                <span>$456</span>
                            </div>
                        </div>
                        <div class="thumb-info-caption">
                            <h3 class="font-weight-semibold text-transform-none"><a href="demo-education-courses-detail.html" class="custom-link-color-dark">Forensic Science</a></h3>
                        </div>
                        <div class="thumb-info-footer">
                            <ul class="nav text-1">
                                <li><a href="demo-education-courses-detail.html"><i class="far fa-user text-color-primary"></i> John Doe</a></li>
                                <li class="ml-3"><a href="demo-education-courses-detail.html"><i class="far fa-clock text-color-primary"></i> 2 Hours</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 mb-md-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                    <div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
                        <div class="thumb-info-wrapper">
                            <a href="demo-education-courses-detail.html"><img src="{{asset('assets')}}/img/demos/education/courses/course-7.jpg" class="img-fluid" alt=""></a>
                            <div class="thumb-info-price bg-color-secondary font-weight-semibold">
                                <span>FREE</span>
                            </div>
                        </div>
                        <div class="thumb-info-caption">
                            <h3 class="font-weight-semibold text-transform-none"><a href="demo-education-courses-detail.html" class="custom-link-color-dark">General Engineering</a></h3>
                        </div>
                        <div class="thumb-info-footer">
                            <ul class="nav text-1">
                                <li><a href="demo-education-courses-detail.html"><i class="far fa-user text-color-primary"></i> John Doe</a></li>
                                <li class="ml-3"><a href="demo-education-courses-detail.html"><i class="far fa-clock text-color-primary"></i> 3 Hours</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                    <div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
                        <div class="thumb-info-wrapper">
                            <a href="demo-education-courses-detail.html"><img src="{{asset('assets')}}/img/demos/education/courses/course-8.jpg" class="img-fluid" alt=""></a>
                            <div class="thumb-info-price bg-color-secondary font-weight-semibold">
                                <span>$500</span>
                            </div>
                        </div>
                        <div class="thumb-info-caption">
                            <h3 class="font-weight-semibold text-transform-none"><a href="demo-education-courses-detail.html" class="custom-link-color-dark">Mechanical Engineering</a></h3>
                        </div>
                        <div class="thumb-info-footer">
                            <ul class="nav text-1">
                                <li><a href="demo-education-courses-detail.html"><i class="far fa-user text-color-primary"></i>by John Doe</a></li>
                                <li class="ml-3"><a href="demo-education-courses-detail.html"><i class="far faclock text-color-primary"></i> 4 Hours</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a href="#" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold">VIEW ALL</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section parallax section-parallax my-0 border-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '125%'}" data-image-src="{{asset('assets')}}/img/demos/education/parallax/parallax-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-6 appear-animation" data-appear-animation="fadeInLeftShorter">
                    <div class="card">
                        <div class="card-body p-5">
                            <h2 class="font-weight-bold text-center text-6 mb-0">REGISTER NOW</h2>
                            <p class="text-color-dark text-5 text-center">Get 50% off for all Courses</p>
                            <div class="countdown text-color-primary font-weight-semibold custom-countdown-style-1 justify-content-center mb-4" data-plugin-countdown data-plugin-options="{'date': '2022/01/01 12:00:00', 'wrapperClass': 'text-color-primary', 'numberClass': 'font-weight-semibold text-color-primary'}"></div>
                            <form class="custom-form-style-1 contact-form" action="{{asset('assets')}}/php/contact-form.php" method="POST">

                                <div class="contact-form-success alert alert-success d-none mt-4">
                                    <strong>Success!</strong> Your register has been sent to us.
                                </div>

                                <div class="contact-form-error alert alert-danger d-none mt-4">
                                    <strong>Error!</strong> There was an error sending your register.
                                    <span class="mail-error-message text-1 d-block"></span>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6 pr-md-0">
                                        <input type="text" value="" data-msg-required="Please enter your first name." maxlength="100" class="form-control bg-color-tertiary" name="firstName" id="firstName" placeholder="FIRST NAME*" required>
                                    </div>
                                    <div class="form-group col-md-6 pl-md-0">
                                        <input type="text" value="" data-msg-required="Please enter your last name." maxlength="100" class="form-control bg-color-tertiary custom-border-left-1" name="lastName" id="lastName" placeholder="LAST NAME*" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 pr-md-0">
                                        <input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control bg-color-tertiary" name="phone" id="phone" placeholder="PHONE*" required>
                                    </div>
                                    <div class="form-group col-md-6 pl-md-0">
                                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control bg-color-tertiary custom-border-left-1" name="email" id="email" placeholder="EMAIL*" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <input type="submit" value="GET IT NOW" class="btn btn-primary text-1 font-weight-semibold d-block text-4 py-3 w-100" data-loading-text="Loading...">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-color-light border-0 my-0">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class="font-weight-bold mb-4 appear-animation" data-appear-animation="fadeInUpShorter">What Students Says</h2>
                </div>
            </div>
            <div class="row justify-content-center appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                <div class="col">
                    <div class="owl-carousel custom-nav m-0" data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'nav': true, 'autoHeight': true}">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes custom-testimonial-style-1">
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in arcu facilisis quam aliquam ultrices quis in purus. Donec volutpat et justo et viverra. Suspendisse id justo a ipsum viverra ultrices quis et quam.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <img src="{{asset('assets')}}/img/demos/education/authors/author-1.jpg" class="img-fluid rounded-circle" alt />
                                        <p>
                                            <strong class="text-uppercase text-color-dark">ALICE DOE</strong>
                                        </p>
                                        <div class="rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes custom-testimonial-style-1">
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in arcu facilisis quam aliquam ultrices quis in purus. Donec volutpat et justo et viverra. Suspendisse id justo a ipsum viverra ultrices quis et quam.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <img src="{{asset('assets')}}/img/demos/education/authors/author-2.jpg" class="img-fluid rounded-circle" alt />
                                        <p>
                                            <strong class="text-uppercase text-color-dark">JOSIE DOE</strong>
                                        </p>
                                        <div class="rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-color-tertiary border-0 my-0">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-bold appear-animation" data-appear-animation="fadeInUpShorter">Latest News</h2>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                    <article class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1 h-100">
                        <div class="thumb-info-wrapper">
                            <a href="demo-education-blog-detail.html"><img src="{{asset('assets')}}/img/demos/education/news/news-1.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="thumb-info-caption">
                            <span class="date d-block text-color-primary font-weight-semibold text-3 mb-3">22 FEB 2020</span>
                            <h3 class="font-weight-semibold text-transform-none"><a href="demo-education-blog-detail.html" class="custom-link-color-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In.</a></h3>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                    <article class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1 h-100">
                        <div class="thumb-info-wrapper">
                            <a href="demo-education-blog-detail.html"><img src="{{asset('assets')}}/img/demos/education/news/news-2.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="thumb-info-caption">
                            <span class="date d-block text-color-primary font-weight-semibold text-3 mb-3">22 FEB 2020</span>
                            <h3 class="font-weight-semibold text-transform-none"><a href="demo-education-blog-detail.html" class="custom-link-color-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In.</a></h3>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    <article class="thumb-info custom-thumb-info-style-1 h-100">
                        <div class="thumb-info-caption">
                            <span class="date d-block text-color-primary font-weight-semibold text-3 mb-3">22 FEB 2020</span>
                            <h3 class="font-weight-semibold text-transform-none mb-4"><a href="demo-education-blog-detail.html" class="custom-link-color-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In.</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in arcu facilisis quam aliquam ultrices quis in purus. Donec volutpat et justo et vive...</p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a href="#" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold">VIEW ALL</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section parallax section-parallax my-0 border-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '125%'}" data-image-src="{{asset('assets')}}/img/demos/education/parallax/parallax-2.jpg">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-10 col-lg-7 offset-md-2 offset-lg-5">
                    <div class="row appear-animation" data-appear-animation="fadeInUpShorter">
                        <div class="col">
                            <div class="feature-box feature-box-style-2 custom-feature-box-style-1">
                                <div class="feature-box-icon mt-3">
                                    <img src="{{asset('assets')}}/img/demos/education/icons/icon-1.png" class="img-fluid" width="60" alt="" />
                                </div>
                                <div class="feature-box-info">
                                    <h2 class="font-weight-semibold text-6 mb-0">National Awards</h2>
                                    <p class="text-color-dark mb-4 pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis elit vitae enim vehicula fermentum. Sed ut tincidunt orci. Nam id viverra tortor. Etiam blandit lobortis aliquet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <div class="col">
                            <div class="feature-box feature-box-style-2 custom-feature-box-style-1">
                                <div class="feature-box-icon mt-3">
                                    <img src="{{asset('assets')}}/img/demos/education/icons/icon-2.png" class="img-fluid" width="60" alt="" />
                                </div>
                                <div class="feature-box-info">
                                    <h2 class="font-weight-semibold text-6 mb-0">Best Teachers</h2>
                                    <p class="text-color-dark mb-4 pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis elit vitae enim vehicula fermentum. Sed ut tincidunt orci. Nam id viverra tortor. Etiam blandit lobortis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <div class="col">
                            <div class="feature-box feature-box-style-2 custom-feature-box-style-1">
                                <div class="feature-box-icon mt-3">
                                    <img src="{{asset('assets')}}/img/demos/education/icons/icon-3.png" class="img-fluid" width="60" alt="" />
                                </div>
                                <div class="feature-box-info">
                                    <h2 class="font-weight-semibold text-6 mb-0">Many Courses</h2>
                                    <p class="text-color-dark mb-4 pb-2">Etiam blandit lobortis aliquet. Sed vehicula nisl sit amet sollicitudin porta. Donec id erat eleifend, imperdiet urna vel, scelerisque elit. Curabitur accumsan nisl at purus dictum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
