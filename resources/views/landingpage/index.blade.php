@extends('layouts.layout-landing-page')

@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Banner">
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>we are ready to help you</h6>
                        <h4>Legal &amp; IT <br>Consulting</h4>
                        <!-- <a href="contact.html" class="filled-button">contact us</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="request-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4>Contact us immediately via Whatsapp</h4>
                    <span>Want to contact us via email?&nbsp;<a href="#contactus">Click here.</a></span>
                </div>
                <div class="col-md-4">
                    <a href="https://wa.me/6281259771971" class="border-button">Our Whatsapp</a>
                </div>
            </div>
        </div>
    </div>

    <div class="services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Our <em>Services</em></h2>
                        <!-- <span>Aliquam id urna imperdiet libero mollis hendrerit</span> -->
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5 mb-5">
                            <a href="/services#tabs-1">
                                <div class="mb-2">
                                    <i class="bi-gem fs-1 text-primary">
                                        <img src="assets/img/clipboard.png" alt="Management" width="200">
                                    </i>
                                </div>
                            </a>
                            <h3 class="h4 mb-2">Management</h3>
                            <p class="text-muted mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Tempore, sit?</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <a href="/services#tabs-2">
                                <div class="mb-2">
                                    <i class="bi-laptop fs-1 text-primary">
                                        <img src="assets/img/compliant.png" alt="Legal" width="200">
                                    </i>
                                </div>
                            </a>
                            <h3 class="h4 mb-2">Legal</h3>
                            <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias,
                                nulla?</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <a href="/services#tabs-3">
                                <div class="mb-2">
                                    <i class="bi-laptop fs-1 text-primary">
                                        <img src="assets/img/compliance.png" alt="Compliance" width="200">
                                    </i>
                                </div>
                            </a>
                            <h3 class="h4 mb-2">Compliance</h3>
                            <p class="text-muted mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Corrupti, porro.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <a href="/services#tabs-4">
                                <div class="mb-2">
                                    <i class="bi-laptop fs-1 text-primary">
                                        <img src="assets/img/outsourcing.png" alt="Outsourcing" width="200">
                                    </i>
                                </div>
                            </a>
                            <h3 class="h4 mb-2">Outsource</h3>
                            <p class="text-muted mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Doloremque, ducimus.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <a href="/services#tabs-5">
                                <div class="mb-2">
                                    <i class="bi-laptop fs-1 text-primary">
                                        <img src="assets/img/it.png" alt="IT" width="200">
                                    </i>
                                </div>
                            </a>
                            <h3 class="h4 mb-2">IT Solution</h3>
                            <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Voluptate,
                                repellendus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="content">
                        <h2>Why <em>us?</em></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error obcaecati, soluta fuga
                            impedit
                            perspiciatis cumque aperiam, qui, aspernatur ducimus aliquam sequi. Ipsam numquam incidunt
                            ex sed.
                            Corrupti non necessitatibus quas totam fugiat quam sit error nam adipisci est! Architecto
                            rem neque sunt
                            repellat fuga corporis porro nulla veniam deserunt!</p>
                        {{-- <a href="" class="filled-button">Read More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="more-info" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="left-image">
                                    <img src="assets/images/more-info.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <div class="right-content">
                                    <span>Who we are</span>
                                    <h2>Get to know about <em>our company</em></h2>
                                    <p>Curabitur pulvinar sem a leo tempus facilisis. Sed non sagittis neque. Nulla
                                        conse quat tellus
                                        nibh, id molestie felis sagittis ut. Nam ullamcorper tempus ipsum in
                                        cursus<br><br>Praes end at
                                        dictum metus. Morbi id hendrerit lectus, nec dapibus ex. Etiam ipsum quam,
                                        luctus eu egestas eget,
                                        tincidunt</p>
                                    <a href="/about" class="filled-button">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="articles" id="articles">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Latest <em>Articles</em></h2>
                        <span>Some of our latest articles</span>
                    </div>
                </div>
                <div class="article d-flex col-md-12 mb-4">
                    <!-- <div class="owl-testimonials owl-carousel"> -->
                    @foreach ($posts as $post)
                        <div class="article-item">
                            {{-- <img src="{{ url('/img/' . $post->image) }}" alt="<?= $post->title ?>"> --}}
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                            <div class="down-content">
                                <h4>{{ $post->title }}</h4>
                                <p>{{ $post->excerpt }}</p>
                                <a href="article/<?= $post->slug ?>" class="article-button">...read more</a>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="article-item">
                        <img src="assets/images/service_01.jpg" alt="">
                        <div class="down-content">
                            <h4>Tittle</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita quod doloremque ex non
                                est
                                incidunt ratione voluptate laudantium quos iure.</p>
                                <a href="" class="filled-button">Read More</a>
                            </div>
                        </div>
                        
                    <div class="article-item">
                        <img src="assets/images/service_01.jpg" alt="">
                        <div class="down-content">
                            <h4>Tittle</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita quod doloremque ex non
                                est
                                incidunt ratione voluptate laudantium quos iure.</p>
                                <a href="" class="filled-button">Read More</a>
                            </div>
                    </div> --}}


                    <!-- <div class="testimonial-item">
                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="inner-content">
                                                                                                                                                                                                                                                                                                                                                                                                                                      <h4>John Smith</h4>
                                                                                                                                                                                                                                                                                                                                                                                                                                      <span>Market Specialist</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                      <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan,
                                                                                                                                                                                                                                                                                                                                                                                                                                        arcu id ornare malesuada, est nulla luctus nisi."</p>
                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                    <img src="http://placehold.it/60x60" alt="">
                                                                                                                                                                                                                                                                                                                                                                                                                                  </div> -->


                    <!-- </div> -->
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <a href="/article" class="filled-button">See More Articles</a>
                </div>
            </div>
        </div>
    </div>

    <div class="  callback-form" id="contactus">
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Contact <em>Us</em></h2>
                        <span>Contact us via official email</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Full Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email"
                                            pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject"
                                            placeholder="Subject" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="border-button">Send
                                            Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
