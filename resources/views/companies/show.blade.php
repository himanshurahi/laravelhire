@extends('layouts.frontend_layouts.main_app')
@section('main')
<div class="pageloader"></div>
<div class="infraloader is-active"></div>
<!-- Hero and Navbar -->
<div class="hero sub-hero has-shapes">
    <!-- Navbar partial -->
    @include('layouts.frontend_layouts.navbar')

    <div class="profile-header">
        <div class="profile-header-inner">
            <div class="profile-avatar">
                <img class="avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/helen.jpg" />
                <h2 class="title is-4 is-narrow">{{$company->company_name}}</h2>
                <p class="subtitle is-6">UI/UX Designer</p>
            </div>

            <div class="tabs is-centered">
                <ul>
                    <li class="is-active"><a href="profile-1.html">Overview</a></li>
                    <li><a href="profile-2.html">Projects</a></li>
                    <li><a href="profile-3.html">Network</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="section is-app-grey">
        <div class="container">
            <div class="profile-wrapper">
                <!--Profile card-->
                <div class="profile-card">
                    <div class="profile-card-head">
                        <h3>Description</h3>
                    </div>

                    <div class="profile-card-body">
                        {!! nl2br($company->company_details) !!}
                    </div>
                </div>
                <!--Profile card-->
                {{-- <div class="profile-card">
                    <div class="profile-card-head">
                        <h3>Projects</h3>
                        <a href="#">View All</a>
                    </div>

                    <div class="profile-card-body">
                        <div class="projects">
                            <div class="columns">
                                <div class="column is-4">
                                    <a class="project">
                                        <img src="https://via.placeholder.com/800x600" data-demo-src="assets/img/demo/projects/1.png" alt="" />
                                        <h3>Modin Ecommerce</h3>
                                        <p>Some nice project subtitle</p>
                                        <div class="project-members">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/alan.jpg" alt="" />
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/alan.jpg" alt="" />
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/alex.jpg" alt="" />
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/betty.jpg" alt="" />
                                        </div>
                                    </a>
                                </div>
                                <div class="column is-4">
                                    <a class="project">
                                        <img src="https://via.placeholder.com/800x600" data-demo-src="assets/img/demo/projects/2.png" alt="" />
                                        <h3>Hiring Portal</h3>
                                        <p>Some nice project subtitle</p>
                                        <div class="project-members">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/elie.jpg" alt="" />
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/stella.jpg" alt="" />
                                        </div>
                                    </a>
                                </div>
                                <div class="column is-4">
                                    <a class="project">
                                        <img src="https://via.placeholder.com/800x600" data-demo-src="assets/img/demo/projects/3.png" alt="" />
                                        <h3>Accounting for noobs</h3>
                                        <p>Some nice project subtitle</p>
                                        <div class="project-members">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/terry.jpg" alt="" />
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/nick.jpg" alt="" />
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/marc.jpg" alt="" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

               
            </div>
        </div>
    </div>

  
</div>

<footer class="footer-light-medium">
    <div class="container">
        <div class="footer-head">
            <div class="head-text">
                <h3>Ready to get started?</h3>
                <p>Create your free account now</p>
            </div>
            <div class="head-action">
                <div class="buttons">
                    <a class="button primary-btn raised action-button is-bold">Try it free</a>
                    <a class="button chat-button">Chat with us</a>
                </div>
            </div>
        </div>
        <div class="columns footer-body">
            <!-- Column -->
            <div class="column is-4">
                <div class="pt-10 pb-10">
                    <img class="small-footer-logo" src="{{asset('assets/img/logos/bulkit-logo-g.png')}}" alt="">
                    <div class="footer-description">
                        Bulkit is built for developers and designers. It's modular approach lets you create an original
                        landing page for your brand.
                    </div>
                </div>
                <div>
                    <span class="moto">Designed and coded with <i class="fa fa-heart color-red"></i> by CSS
                            Ninja.</span>
                    <div class="social-links">
                        <a href="#">
                            <span class="icon"><i class="fa fa-facebook"></i></span>
                        </a>
                        <a href="#">
                            <span class="icon"><i class="fa fa-twitter"></i></span>
                        </a>
                        <a href="#">
                            <span class="icon"><i class="fa fa-linkedin"></i></span>
                        </a>
                        <a href="#">
                            <span class="icon"><i class="fa fa-dribbble"></i></span>
                        </a>
                        <a href="#">
                            <span class="icon"><i class="fa fa-github"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="column is-6 is-offset-2">
                <div class="columns">
                    <!-- Column -->
                    <div class="column">
                        <ul class="footer-column">
                            <li class="column-header">
                                Bulkit
                            </li>
                            <li class="column-item"><a href="#">Home</a></li>
                            <li class="column-item"><a href="#">Pricing</a></li>
                            <li class="column-item"><a href="#">Get started</a></li>
                            <li class="column-item"><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <!-- Column -->
                    <div class="column">
                        <ul class="footer-column">
                            <li class="column-header">
                                Ressources
                            </li>
                            <li class="column-item"><a href="#">Learning</a></li>
                            <li class="column-item"><a href="#">Support center</a></li>
                            <li class="column-item"><a href="#">Frequent questions</a></li>
                            <li class="column-item"><a href="#">Schedule a demo</a></li>
                        </ul>
                    </div>
                    <!-- Column -->
                    <div class="column">
                        <ul class="footer-column">
                            <li class="column-header">
                                Terms
                            </li>
                            <li class="column-item"><a href="#">Terms of Service</a></li>
                            <li class="column-item"><a href="#">Privacy policy</a></li>
                            <li class="column-item"><a href="#">SaaS services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright has-text-centered">
            <p>&copy; 2019-2020 | <a href="https://cssninja.io">Css Ninja</a> | All Rights Reserved.</p>
        </div>
    </div>
</footer> <!-- Side navigation -->


@endsection
   