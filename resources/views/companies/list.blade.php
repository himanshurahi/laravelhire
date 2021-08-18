@extends('layouts.frontend_layouts.main_app')
@section('main')
<div class="pageloader"></div>
<div class="infraloader is-active"></div>
<!-- Hero and Navbar -->
<div class="hero sub-hero has-shapes">
    <!-- Navbar partial -->
    @include('layouts.frontend_layouts.navbar')
    <div class="hero-body has-text-centered is-narrow">
        <div class="container">
            <div class="sub-hero-container">
                <div class="sub-hero-content">
                    <h1 class="title is-2 is-bold is-light">{{count($companies)}} Companies found.</h1>
                    <h3 class="subtitle is-5 is-light is-vhidden">placeholder subtitle</h3>

                    <div class="square square-1"></div>
                    <div class="square square-2"></div>
                    <div class="square square-3"></div>
                    <div class="square square-4"></div>
                    <div class="square square-5"></div>
                    <div class="square square-6"></div>
                    <div class="square square-7"></div>
                </div>

                <div class="sub-hero-search">
                    <div class="search-inner">
                        <div class="control has-icons-left">
                            <input class="input" placeholder="search">
                            <span class="icon is-medium is-left">
                                    <i class="sl sl-icon-magnifier"></i>
                                </span>
                        </div>
                        <div class="control has-icons-left">
                            <input class="input" placeholder="Location">
                            <span class="icon is-medium is-left">
                                    <i class="sl sl-icon-location"></i>
                                </span>
                        </div>
                        <a class="button primary-btn raised">Search</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="columns job-results-wrapper">
            <div class="column is-3 is-hidden-mobile">
                <div class="job-results-filter">
                    <h3 class="title is-5">Current search</h3>

                    <div class="search-tags pb-60">
                        <span class="tag is-rounded">Frontend</span>
                        <span class="tag is-rounded">React JS</span>
                        <span class="tag is-rounded">Vue JS</span>
                    </div>

                    <h3 class="title is-5">Locations</h3>
                    <div class="checkbox-list pb-60">
                        <ul>
                            <li>
                                <div class="field pb-5">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small muted-text">
                                            <input id="check1" type="checkbox" class="d-checkbox">
                                            <span></span>
                                            Los Angeles (8)
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field pb-5">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small muted-text">
                                            <input id="check2" type="checkbox" class="d-checkbox">
                                            <span></span>
                                            San Francisco (3)
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field pb-5">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small muted-text">
                                            <input id="check3" type="checkbox" class="d-checkbox">
                                            <span></span>
                                            San Jose (4)
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field pb-5">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small muted-text">
                                            <input id="check4" type="checkbox" class="d-checkbox">
                                            <span></span>
                                            San Juan (7)
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field pb-5">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small muted-text">
                                            <input id="check5" type="checkbox" class="d-checkbox">
                                            <span></span>
                                            orange County (2)
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <h3 class="title is-5">Categories</h3>
                    <div class="checkbox-list pb-60">
                        <ul>
                            <li>
                                <div class="field pb-5">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small muted-text">
                                            <input id="check6" type="checkbox" class="d-checkbox">
                                            <span></span>
                                            Development (65)
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field pb-5">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small muted-text">
                                            <input id="check7" type="checkbox" class="d-checkbox">
                                            <span></span>
                                            Marketing (15)
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field pb-5">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small muted-text">
                                            <input id="check8" type="checkbox" class="d-checkbox">
                                            <span></span>
                                            Finance (23)
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field pb-5">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small muted-text">
                                            <input id="check9" type="checkbox" class="d-checkbox">
                                            <span></span>
                                            Design (9)
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field pb-5">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small muted-text">
                                            <input id="check10" type="checkbox" class="d-checkbox">
                                            <span></span>
                                            Management (4)
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="column is-9">
                <div class="job-results">
                    <div class="job-results-section">
                        <h3 class="title is-4">Matching results</h3>

                        <div class="result-list">
                            <!--Job Result-->
                           @foreach ($companies as $company)
                           <a href="laravel-companies/{{$company->id}}" class="result-list-item">
                            <img src="" data-demo-src="assets/img/logos/custom/slicer.svg" alt="">
                            <div class="meta">
                                <span>{{$company->company_name}}</span>
                                <div class="details">
                                    <span>Slicer</span>
                                    <span class="spacer">|</span>
                                    <span><i class="sl sl-icon-location"></i> Los Angeles</span>
                                </div>
                            </div>
                            <div class="end">
                                <span class="tag is-rounded is-secondary">{{ \Carbon\Carbon::parse($company->created_at)->diffForHumans()}}</span>
                                <span class="time"><i class="sl sl-icon-clock"></i>{{ \Carbon\Carbon::parse($company->created_at)->format('d/m/Y')}}</span>
                            </div>
                        </a>
                           @endforeach
                           
                        </div>

                    </div>

                    {{-- <div class="job-results-section">
                        <h3 class="title is-4">Suggested results</h3>

                        <div class="result-list">
                            <!--Job Result-->
                            <div class="result-list-item">
                                <img src="" data-demo-src="assets/img/logos/custom/slicer.svg" alt="">
                                <div class="meta">
                                    <span>Develop a quick mobile app</span>
                                    <div class="details">
                                        <span>Slicer</span>
                                        <span class="spacer">|</span>
                                        <span><i class="sl sl-icon-location"></i> Los Angeles</span>
                                    </div>
                                </div>
                                <div class="end">
                                    <span class="tag is-rounded is-secondary">3 months</span>
                                    <span class="time"><i class="sl sl-icon-clock"></i> Apr 12, 2020</span>
                                </div>
                            </div>
                            <!--Job Result-->
                            <div class="result-list-item">
                                <img src="" data-demo-src="assets/img/logos/custom/metamovies.svg" alt="">
                                <div class="meta">
                                    <span>Add a custom rating module to our website</span>
                                    <div class="details">
                                        <span>Metamovies</span>
                                        <span class="spacer">|</span>
                                        <span><i class="sl sl-icon-location"></i> San Diego</span>
                                    </div>
                                </div>
                                <div class="end">
                                    <span class="tag is-rounded">1 week</span>
                                    <span class="time"><i class="sl sl-icon-clock"></i> Apr 12, 2020</span>
                                </div>
                            </div>
                            <!--Job Result-->
                            <div class="result-list-item">
                                <img src="" data-demo-src="assets/img/logos/custom/lipflow.svg" alt="">
                                <div class="meta">
                                    <span>Design our Newsletter</span>
                                    <div class="details">
                                        <span>Lipflow</span>
                                        <span class="spacer">|</span>
                                        <span><i class="sl sl-icon-location"></i> Los Angeles</span>
                                    </div>
                                </div>
                                <div class="end">
                                    <span class="tag is-rounded">1 week</span>
                                    <span class="time"><i class="sl sl-icon-clock"></i> Apr 12, 2020</span>
                                </div>
                            </div>
                            <!--Job Result-->
                            <div class="result-list-item">
                                <img src="" data-demo-src="assets/img/logos/custom/quick-fashion.svg" alt="">
                                <div class="meta">
                                    <span>Redesign our website</span>
                                    <div class="details">
                                        <span>Quick Fashion</span>
                                        <span class="spacer">|</span>
                                        <span><i class="sl sl-icon-location"></i> San Jose</span>
                                    </div>
                                </div>
                                <div class="end">
                                    <span class="tag is-rounded is-secondary">2 months</span>
                                    <span class="time"><i class="sl sl-icon-clock"></i> Apr 12, 2020</span>
                                </div>
                            </div>
                            <!--Job Result-->
                            <div class="result-list-item">
                                <img src="" data-demo-src="assets/img/logos/custom/epicburger.svg" alt="">
                                <div class="meta">
                                    <span>implement a new security infrastructure</span>
                                    <div class="details">
                                        <span>Epic Burger</span>
                                        <span class="spacer">|</span>
                                        <span><i class="sl sl-icon-location"></i> Los Angeles</span>
                                    </div>
                                </div>
                                <div class="end">
                                    <span class="tag is-rounded is-secondary">8 months</span>
                                    <span class="time"><i class="sl sl-icon-clock"></i> Apr 12, 2020</span>
                                </div>
                            </div>
                            <!--Job Result-->
                            <div class="result-list-item">
                                <img src="" data-demo-src="assets/img/logos/custom/drop.svg" alt="">
                                <div class="meta">
                                    <span>Redesign our brand assets</span>
                                    <div class="details">
                                        <span>Drop</span>
                                        <span class="spacer">|</span>
                                        <span><i class="sl sl-icon-location"></i> Los Angeles</span>
                                    </div>
                                </div>
                                <div class="end">
                                    <span class="tag is-rounded">1 month</span>
                                    <span class="time"><i class="sl sl-icon-clock"></i> Apr 12, 2020</span>
                                </div>
                            </div>
                        </div>

                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
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
                    <img class="small-footer-logo" src="/assets/img/logos/bulkit-logo-g.png" alt="">
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
<div class="side-navigation-menu">
    <!-- Categories menu -->
    <div class="category-menu-wrapper">
        <!-- Menu -->
        <ul class="categories">
            <li class="square-logo"><img src="assets/img/logos/square-white.svg" alt=""></li>
            <li class="category-link is-active" data-navigation-menu="demo-pages"><i class="sl sl-icon-layers"></i></li>
            <li class="category-link" data-navigation-menu="onepagers"><i class="sl sl-icon-docs"></i></li>
            <li class="category-link" data-navigation-menu="components"><i class="sl sl-icon-grid"></i></li>
        </ul>
        <!-- Menu -->

        <ul class="author">
            <li>
                <!-- Theme author -->
                <a href="https://cssninja.io" target="_blank">
                    <img class="main-menu-author" src="assets/img/logos/cssninja.svg" alt="">
                </a>
            </li>
        </ul>
    </div>
    <!-- /Categories menu -->

    <!-- Navigation menu -->
    <div id="demo-pages" class="navigation-menu-wrapper animated preFadeInRight fadeInRight">
        <!-- Navigation Header -->
        <div class="navigation-menu-header">
            <span>Demo pages</span>
            <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                <span class="menu-toggle">
                        <span class="icon-box-toggle">
                            <span class="rotate">
                                <i class="icon-line-top"></i>
                                <i class="icon-line-center"></i>
                                <i class="icon-line-bottom"></i>
                            </span>
                </span>
                </span>
            </a>
        </div>
        <!-- Navigation Body -->
        <ul class="navigation-menu">
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">weekend</span>Agency kit</a>
                <ul>
                    <li><a class="is-submenu" href="/agency-home.html">Homepage</a></li>
                    <li><a class="is-submenu" href="/agency-about.html">About</a></li>
                    <li><a class="is-submenu" href="/agency-portfolio.html">Portfolio</a></li>
                    <li><a class="is-submenu" href="/agency-contact.html">Contact</a></li>
                    <li><a class="is-submenu" href="/agency-blog.html">Blog</a></li>
                    <li><a class="is-submenu" href="/agency-post-nosidebar.html">Post no sidebar</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">wb_incandescent</span>Startup kit</a>
                <ul>
                    <li><a class="is-submenu" href="/startup-landing.html">Homepage</a></li>
                    <li><a class="is-submenu" href="/startup-about.html">About</a></li>
                    <li><a class="is-submenu" href="/startup-product.html">Product</a></li>
                    <li><a class="is-submenu" href="/startup-contact.html">Contact</a></li>
                    <li><a class="is-submenu" href="/startup-login.html">Login</a></li>
                    <li><a class="is-submenu" href="/startup-signup.html">Sign up</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">apps</span>Landing kit 1</a>
                <ul>
                    <li><a class="is-submenu" href="/kit1-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-3.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-4.html">Landing page v4</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-5.html">Landing page v5</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-6.html">Landing page v6</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-7.html">Landing page v7</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-8.html">Landing page v8</a></li>
                    <li><a class="is-submenu" href="/kit1-features.html">Features v1</a></li>
                    <li><a class="is-submenu" href="/kit1-features-2.html">Features v2</a></li>
                    <li><a class="is-submenu" href="/kit1-pricing.html">Pricing page</a></li>
                    <li><a class="is-submenu" href="/kit1-login.html">Login page</a></li>
                    <li><a class="is-submenu" href="/kit1-signup.html">Signup page</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">timelapse</span>Landing kit 2</a>
                <ul>
                    <li><a class="is-submenu" href="/kit2-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-3.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-4.html">Landing page v4</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-5.html">Landing page v5</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-6.html">Landing page v6</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-7.html">Landing page v7</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-8.html">Landing page v8</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-9.html">Landing page v9</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-10.html">Landing page v10</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-11.html">Landing page v11</a></li>
                    <li><a class="is-submenu" href="/kit2-features.html">Features v1</a></li>
                    <li><a class="is-submenu" href="/kit2-features-2.html">Features v2</a></li>
                    <li><a class="is-submenu" href="/kit2-pricing.html">Pricing page</a></li>
                    <li><a class="is-submenu" href="/kit2-login.html">Login page</a></li>
                    <li><a class="is-submenu" href="/kit2-signup.html">Signup page</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">assistant</span>Landing kit 3</a>
                <ul>
                    <li><a class="is-submenu" href="/kit3-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit3-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit3-features.html">Feature page</a></li>
                    <li><a class="is-submenu" href="/kit3-pricing.html">Pricing page</a></li>
                    <li><a class="is-submenu" href="/kit3-login.html">Login page</a></li>
                    <li><a class="is-submenu" href="/kit3-signup.html">Signup page</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">brightness_2</span>Landing kit 4</a>
                <ul>
                    <li><a class="is-submenu" href="/kit4-landing.html">Landing page</a></li>
                    <li><a class="is-submenu" href="/kit4-pricing.html">Pricing page</a></li>
                    <li><a class="is-submenu" href="/kit4-help.html">Help center</a></li>
                    <li><a class="is-submenu" href="/kit4-help-category.html">Help category</a></li>
                    <li><a class="is-submenu" href="/kit4-help-article.html">Help article</a></li>
                    <li><a class="is-submenu" href="/kit4-signup.html">Sign Up</a></li>
                    <li><a class="is-submenu" href="/kit4-login.html">Login</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">toys</span>Landing kit 5</a>
                <ul>
                    <li><a class="is-submenu" href="/kit5-landing.html">Landing page</a></li>
                    <li><a class="is-submenu" href="/kit5-features.html">Feature page</a></li>
                    <li><a class="is-submenu" href="/kit5-pricing.html">Pricing Page</a></li>
                    <li><a class="is-submenu" href="/kit5-login.html">Login / Signup</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">mouse</span>Landing kit 6</a>
                <ul>
                    <li><a class="is-submenu" href="kit6-landing.html">Landing page</a></li>
                    <li><a class="is-submenu" href="kit6-login.html">Login page</a></li>
                    <li><a class="is-submenu" href="kit6-signup.html">Signup page</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">work</span>Landing kit
                    7</a>
                <ul>
                    <li><a class="is-submenu" href="/kit7-landing.html">Landing page</a></li>
                    <li><a class="is-submenu" href="/kit7-landing-alt.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit7-landing-3.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit7-landing-4.html">Landing page v4</a></li>
                    <li><a class="is-submenu" href="/kit7-landing-5.html">Landing page v5</a></li>
                    <li><a class="is-submenu" href="/kit7-authentication.html">Auth page</a></li>
                    <li><a class="is-submenu" href="/kit7-pricing.html">Pricing page</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">public</span>Landing kit 8</a>
                <ul>
                    <li><a class="is-submenu" href="/kit8-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-1.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-2.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-3.html">Landing page v4</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-4.html">Landing page v5</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-5.html">Landing page v6</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-6.html">Landing page v7</a></li>
                    <li><a class="is-submenu" href="/kit8-pricing.html">Pricing page</a></li>
                    <li><a class="is-submenu" href="/kit8-jobs.html">Jobs page</a></li>
                    <li><a class="is-submenu" href="/kit8-login.html">Login page</a></li>
                    <li><a class="is-submenu" href="/kit8-signup.html">Signup page</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">assessment</span>Landing kit 9</a>
                <ul>
                    <li><a class="is-submenu" href="/kit9-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit9-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit9-landing-3.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit9-landing-4.html">Landing page v4</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">account_balance</span>Landing kit 10</a>
                <ul>
                    <li><a class="is-submenu" href="/kit10-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit10-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit10-landing-3.html">Landing page v3</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">shop</span>Landing kit 11</a>
                <ul>
                    <li><a class="is-submenu" href="/kit11-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-3.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-4.html">Landing page v4</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-5.html">Landing page v5</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-6.html">Landing page v6</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-7.html">Landing page v7</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-8.html">Landing page v8</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">stars</span>Landing kit 12</a>
                <ul>
                    <li><a class="is-submenu" href="/kit12-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit12-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit12-landing-3.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit12-landing-4.html">Landing page v4</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">new_releases</span>Landing kit 13</a>
                <ul>
                    <li><a class="is-submenu" href="/kit13-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit13-landing-2.html">Landing page v2</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">code</span>Landing kit 14</a>
                <ul>
                    <li><a class="is-submenu" href="/kit14-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit14-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit14-landing-3.html">Landing page v3</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">settings</span>Landing kit 15</a>
                <ul>
                    <li><a class="is-submenu" href="/kit15-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit15-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit15-landing-3.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit15-landing-4.html">Landing page v4</a></li>
                    <li><a class="is-submenu" href="/kit15-landing-5.html">Landing page v5</a></li>
                    <li><a class="is-submenu" href="/kit15-landing-6.html">Landing page v6</a></li>
                    <li><a class="is-submenu" href="/kit15-about.html">About page</a></li>
                    <li><a class="is-submenu" href="/kit15-contact.html">Contact page</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Navigation menu -->
    <div id="onepagers" class="navigation-menu-wrapper animated preFadeInRight fadeInRight is-hidden">
        <!-- Navigation Header -->
        <div class="navigation-menu-header">
            <span>Sub Pages</span>
            <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                <span class="menu-toggle">
                        <span class="icon-box-toggle">
                            <span class="rotate">
                                <i class="icon-line-top"></i>
                                <i class="icon-line-center"></i>
                                <i class="icon-line-bottom"></i>
                            </span>
                </span>
                </span>
            </a>
        </div>
        <!-- Navigation body -->
        <ul class="navigation-menu">
            <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">shopping_cart</span>Commerce</a>
                <ul>
                    <li><a class="is-submenu" href="/commerce-home.html">Shop Home</a></li>
                    <li><a class="is-submenu" href="/commerce-product-landing.html">Product landing v1</a></li>
                    <li><a class="is-submenu" href="/commerce-product-landing-2.html">Product landing v2</a></li>
                    <li><a class="is-submenu" href="/commerce-product-1.html">Product page</a></li>
                    <li><a class="is-submenu" href="/commerce-cart.html">Cart page</a></li>
                    <li><a class="is-submenu" href="/commerce-payment-flow.html">Checkout page</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">domain</span>Company</a>
                <ul>
                    <li><a class="is-submenu" href="/about-page-1.html">About v1</a></li>
                    <li><a class="is-submenu" href="/about-page-2.html">About v2</a></li>
                    <li><a class="is-submenu" href="/case-study-1.html">Case Study v1</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">call</span>Contact</a>
                <ul>
                    <li><a class="is-submenu" href="/contact-page-1.html">Contact v1</a></li>
                    <li><a class="is-submenu" href="/contact-page-2.html">Contact v2</a></li>
                    <li><a class="is-submenu" href="/contact-page-3.html">Contact v3</a></li>
                    <li><a class="is-submenu" href="/contact-page-4.html">Contact v4</a></li>
                    <li><a class="is-submenu" href="/contact-page-5.html">Contact v5</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">book</span>Blog</a>
                <ul>
                    <li><a class="is-submenu" href="/blog-posts-full.html">Posts List v1</a></li>
                    <li><a class="is-submenu" href="/blog-posts-full-alt.html">Posts List v2</a></li>
                    <li><a class="is-submenu" href="/blog-posts-side.html">Posts List v3</a></li>
                    <li><a class="is-submenu" href="/blog-posts-side-alt.html">Posts List v4</a></li>
                    <li><a class="is-submenu" href="/blog-posts-grid-full.html">Posts Grid v1</a></li>
                    <li><a class="is-submenu" href="/blog-posts-grid-full-masonry.html">Posts Grid v2</a></li>
                    <li><a class="is-submenu" href="/blog-posts-grid-side.html">Posts Grid v3</a></li>
                    <li><a class="is-submenu" href="/blog-posts-grid-side-masonry.html">Posts Grid v4</a></li>
                    <li><a class="is-submenu" href="/blog-single-full.html">Single Post V1</a></li>
                    <li><a class="is-submenu" href="/blog-single-side.html">Single Post V2</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link has-new" href="#"><span class="material-icons">highlight</span>Error Pages</a>
                <ul>
                    <li><a class="is-submenu" href="/error-1.html">Error v1</a></li>
                    <li><a class="is-submenu" href="/error-2.html">Error v2</a></li>
                    <li><a class="is-submenu" href="/error-3.html">Error v3</a></li>
                    <li><a class="is-submenu" href="/error-4.html">Error v4</a></li>
                    <li><a class="is-submenu" href="/error-5.html">Error v5</a></li>
                    <li><a class="is-submenu" href="/error-6.html">Error v6</a></li>
                    <li><a class="is-submenu" href="/error-7.html">Error v7</a></li>
                    <li><a class="is-submenu" href="/error-8.html">Error v8</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Navigation menu -->
    <div id="components" class="navigation-menu-wrapper animated preFadeInRight fadeInRight is-hidden">
        <!-- Navigation Header -->
        <div class="navigation-menu-header">
            <span>Components</span>
            <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                <span class="menu-toggle">
                        <span class="icon-box-toggle">
                            <span class="rotate">
                                <i class="icon-line-top"></i>
                                <i class="icon-line-center"></i>
                                <i class="icon-line-bottom"></i>
                            </span>
                </span>
                </span>
            </a>
        </div>
        <!-- Navigation body -->
        <ul class="navigation-menu">
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">view_quilt</span>Layout</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-layout-grid.html">Grid system</a></li>
                    <li><a class="is-submenu" href="/_components-layout-video.html">Video background</a></li>
                    <li><a class="is-submenu" href="/_components-layout-parallax.html">Parallax</a></li>
                    <li><a class="is-submenu" href="/_components-layout-headers.html">Headers</a></li>
                    <li><a class="is-submenu" href="/_components-layout-footers.html">Footers</a></li>
                    <li><a class="is-submenu" href="/_components-layout-typography.html">Typography</a></li>
                    <li><a class="is-submenu" href="/_components-layout-colors.html">Colors</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">subject</span>Navbars</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-layout-navbar-fade-light.html">Fade light</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-fade-dark.html">Fade dark</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-static-light.html">Static
                            light</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-static-dark.html">Static
                            dark</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-static-solid.html">Static
                            solid</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-double-dark.html">Double
                            dark</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-double-light.html">Double
                            light</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">view_stream</span>Sections</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-sections-features.html">Features</a></li>
                    <li><a class="is-submenu" href="/_components-sections-pricing.html">Pricing</a></li>
                    <li><a class="is-submenu" href="/_components-sections-team.html">Team</a></li>
                    <li><a class="is-submenu" href="/_components-sections-testimonials.html">Testimonials</a></li>
                    <li><a class="is-submenu" href="/_components-sections-clients.html">Clients</a></li>
                    <li><a class="is-submenu" href="/_components-sections-counters.html">Counters</a></li>
                    <li><a class="is-submenu" href="/_components-sections-carousel.html">Carousel</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">playlist_add_check</span>Basic
                    UI</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-basicui-cards.html">Cards</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-buttons.html">Buttons</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-dropdowns.html">Dropdowns</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-lists.html">Lists</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-modals.html">Modals</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-tabs.html">Tabs & pills</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-accordion.html">Accordions</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-badges.html">Badges & labels</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-popups.html">Popups</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">playlist_add</span>Advanced
                    UI</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-advancedui-tables.html">Tables</a></li>
                    <li><a class="is-submenu" href="/_components-advancedui-timeline.html">Timeline</a></li>
                    <li><a class="is-submenu" href="/_components-advancedui-boxes.html">Boxes</a></li>
                    <li><a class="is-submenu" href="/_components-advancedui-messages.html">Messages</a></li>
                    <li><a class="is-submenu" href="/_components-advancedui-megamenu.html">Megamenu</a></li>
                    <li><a class="is-submenu" href="/_components-advancedui-calendar.html">Calendar</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">check_box</span>Forms</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-forms-inputs.html">Inputs</a></li>
                    <li><a class="is-submenu" href="/_components-forms-controls.html">Controls</a></li>
                    <li><a class="is-submenu" href="/_components-forms-layouts.html">Form layouts</a></li>
                    <li><a class="is-submenu" href="/_components-forms-steps.html">Step forms</a></li>
                    <li><a class="is-submenu" href="/_components-forms-uploader.html">Uploader</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">adjust</span>Icons</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-icons-im.html">Icons Mind</a></li>
                    <li><a class="is-submenu" href="/_components-icons-sl.html">Simple Line Icons</a></li>
                    <li><a class="is-submenu" href="/_components-icons-fa.html">Font Awesome</a></li>
                    <li><a class="is-submenu" href="https://material.io/icons/" target="_blank">Material Icons</a></li>
                    <li><a class="is-submenu" href="/_components-extensions-iconpicker.html">Icon Picker</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /Navigation menu -->
</div>

@endsection
   