@extends('layouts.website')

@section('title', 'About Us')


@section('content')
    <section class="page-title bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1>About Our Company</h1>
                        <p>Get to know our history</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img class="img-fluid" src={{ asset('assets/website/images/company/about.jpg') }}>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="pl-0 pl-lg-4">
                        <h2>We strive to be the best and <br> make awesome work.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius enim, accusantium repellat ex
                            autem numquam
                            iure officiis facere vitae itaque.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam qui vel cupiditate exercitationem,
                            ea fuga est
                            velit nulla culpa modi quis iste tempora non, suscipit repellendus labore voluptatem dicta amet?
                            Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit. Provident, neque!</p>
                        <a href="{{ asset('storage/portfolio.pdf') }}" target="_blank" class="btn btn-small">Download
                            Company
                            Profile</a>
                    </div>
                </div>
            </div>
            <div class="row counter-box text-center mt-50">
                <div class="col-lg-2 col-md-4 col-6 mt-4">
                    <div class="counter-item">
                        <i class="ion-ios-flask-outline"></i>
                        <h4 class="count" data-count="349">0</h4>
                        <span>Completed Projects</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mt-4">
                    <div class="counter-item">
                        <i class="ion-ios-flame-outline"></i>
                        <h4 class="count" data-count="35000">0</h4>
                        <span>Lines Of Code</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mt-4">
                    <div class="counter-item">
                        <i class="ion-ios-pint-outline"></i>
                        <h4 class="count" data-count="70">0</h4>
                        <span>Satisfied Customer</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mt-4">
                    <div class="counter-item">
                        <i class="ion-ios-wineglass-outline"></i>
                        <h4 class="count" data-count="10">0</h4>
                        <span>Awards Winner</span>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 mt-4">
                    <div class="counter-item">
                        <i class="ion-ios-chatboxes-outline"></i>
                        <h4 class="count" data-count="30">0</h4>
                        <span>Satisfied Customer</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mt-4">
                    <div class="counter-item">
                        <i class="ion-ios-body-outline"></i>
                        <h4 class="count" data-count="15">0</h4>
                        <span>Awards Winner</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-feature bg-dark section dark-service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>We are indepented Design & Development Agency</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="ion-ios-color-filter-outline"></i>
                        <h4>IOS App Development</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="ion-ios-unlocked-outline"></i>
                        <h4>App Secutity</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="ion-ios-game-controller-b-outline"></i>
                        <h4>Games Development</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="ion-ios-mic-outline"></i>
                        <h4>Animation and Editing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="ion-ios-lightbulb-outline"></i>
                        <h4>UI/UX Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="icon ion-coffee"></i>
                        <h4>Branding</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial section-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="testimonial-carousel text-center">
                        <div class="testimonial-slider owl-carousel">
                            <div>
                                <i class="ion-quote"></i>
                                <p>"This Company created an e-commerce site with the tools to make our business a success,
                                    with innovative
                                    ideas we feel that our site has unique elements that make us stand out from the crowd."
                                </p>
                                <div class="user">
                                    <img src={{ asset('assets/website/images/item-img1.jpg') }} alt="Pepole">

                                    <p><span>Rose Ray</span> CEO-Themefisher</p>
                                </div>
                            </div>
                            <div>
                                <i class="ion-quote"></i>
                                <p>"This Company created an e-commerce site with the tools to make our business a success,
                                    with innovative
                                    ideas we feel that our site has unique elements that make us stand out from the crowd."
                                </p>
                                <div class="user">
                                    <img src={{ asset('assets/website/images/item-img1.jpg') }} alt="Pepole">
                                    <p><span>Rose Ray</span> CEO-Themefisher</p>
                                </div>
                            </div>
                            <div>
                                <i class="ion-quote"></i>
                                <p>"This Company created an e-commerce site with the tools to make our business a success,
                                    with innovative
                                    ideas we feel that our site has unique elements that make us stand out from the crowd."
                                </p>
                                <div class="user">
                                    <img src={{ asset('assets/website/images/item-img1.jpg') }} alt="Pepole">
                                    <p><span>Rose Ray</span> CEO-Themefisher</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="tabCommon">

                        <!-- Tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">

                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="vision-tab" data-bs-toggle="tab"
                                    data-bs-target="#vision" type="button" role="tab" aria-controls="vision"
                                    aria-selected="true">
                                    🟣 Vision
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="mission-tab" data-bs-toggle="tab"
                                    data-bs-target="#mission" type="button" role="tab" aria-controls="mission"
                                    aria-selected="false">
                                    🟣 Mission
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="approch-tab" data-bs-toggle="tab"
                                    data-bs-target="#approch" type="button" role="tab" aria-controls="approch"
                                    aria-selected="false">
                                    🟣 Approach
                                </button>
                            </li>

                        </ul>

                        <!-- Tab Content -->
                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="vision" role="tabpanel"
                                aria-labelledby="vision-tab">
                                <p>We aspire to be our clients' first digital partner, providing innovative marketing
                                    solutions based on creativity, data, and modern technologies to help brands grow and
                                    build a strong and sustainable presence in the digital world.</p>
                            </div>

                            <div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
                                <p>Our mission is to empower companies to achieve their marketing goals through effective
                                    digital strategies, including advertising campaign management, search engine
                                    optimization, social media marketing, and content creation, with a focus on delivering
                                    measurable results and real value to our clients.</p>
                            </div>

                            <div class="tab-pane fade" id="approch" role="tabpanel" aria-labelledby="approch-tab">
                                <p>Our work is based on a deep understanding of the nature of each business, market and
                                    competitor analysis, and then designing customized marketing solutions based on data and
                                    experience. We believe in continuous improvement, transparency in performance, and
                                    building long-term relationships based on trust and mutual success.</p>
                            </div>

                        </div>

                    </div>
                </div>

    </section>

    <section class="call-to-action bg-1 section-sm overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2 class="mb-3 text-dark">We design delightful digital experiences.</h2>
                        <p class="text-dark">Read more about what we do and our philosophy of design. Judge for yourself
                            The work and results
                            <br> we’ve
                            achieved for other clients, and meet our highly experienced Team who just love to design.
                        </p>
                        <a class="btn btn-main btn-solid-border text-dark" href="{{ route('contact') }}">Tell Us Your
                            Story</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
