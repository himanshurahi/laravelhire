<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Bulkit :: Home</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />

    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/app.css">
    <link id="theme-sheet" rel="stylesheet" href="assets/css/core.css">

</head>

<body class="is-theme-core">
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <!-- Hero -->
    <div class="hero is-relative is-fullheight is-app-grey jobs-hero">

        <!--Nav-->
        @include('layouts.frontend_layouts.navbar')
        <div class="hero-body">
            <div class="container">
                <div class="columns has-text-centered">
                    <!-- Caption -->
                    <div class="column is-12 is-hero-caption is-centered">
                        <h1 class="title is-1">Find skilled laravel developers</h1>
                        <h2 class="subtitle is-5 pt-10 body-color">
                            Hire Best freelance Laravel Developer, available at a resonable Price.
                        </h2>

                        <!--Search Box-->
                        <div class="search-box-wrapper">
                            <div class="columns box search-box">
                                <div class="column is-4 is-paddingless">
                                    <form class="search-block">
                                        <label class="search-label label">
                                            <span>Keywords</span>
                                        </label>
                                        <input class="search-input home-input" placeholder="Enter some keywords" type="/search" value="" autofocus>
                                    </form>
                                </div>
                                <div class="column is-3 is-paddingless">
                                    <form class="price-block">
                                        <label class="price-label label">
                                            <span>Salary</span>
                                        </label>
                                        <a class="button" href="#" title="Salary">
                                            <span>Your monthly salary</span>
                                        </a>
                                        <div class="dropdown-container">
                                            <div class="dropdown">
                                                <div class="range-container">
                                                    <div class="left-input">
                                                        <input class="minSalaryInput input" maxlength="6" placeholder="Min" type="number">
                                                    </div>
                                                    <div class="right-input">
                                                        <input class="maxSalaryInput input" maxlength="6" placeholder="Max" type="number">
                                                    </div>
                                                </div>
                                                <div class="salary-options-container">
                                                    <ul class="min-options">
                                                        <li class="dark-text">No Min</li>
                                                        <li>$1,000</li>
                                                        <li>$2,000</li>
                                                        <li>$3,000</li>
                                                        <li>$4,000</li>
                                                        <li>$5,000</li>
                                                        <li>$6,000</li>
                                                    </ul>
                                                    <ul class="max-options">
                                                        <li class="dark-text">No Max</li>
                                                        <li>$8,000</li>
                                                        <li>$10,000</li>
                                                        <li>$14,000</li>
                                                        <li>$18,000</li>
                                                        <li>$25,000</li>
                                                        <li>$30,000</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="column is-3 is-paddingless">
                                    <div class="price-block">
                                        <label class="price-label label">
                                            <span>Options</span>
                                        </label>
                                        <a class="button" href="#" title="Job Options">
                                            <span>Filter your search</span>
                                        </a>
                                        <div class="dropdown-container">
                                            <div class="dropdown">
                                                <div class="options-container has-slimscroll">
                                                    <p>Roles</p>
                                                    <div class="checkbox">
                                                        <label for="allRoles">
                                                            <input id="allRoles" type="checkbox">
                                                            <span class="checkbox-material">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                        <span>All</span>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="developerRole">
                                                            <input id="developerRole" type="checkbox">
                                                            <span class="checkbox-material">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                        <span>Developer</span>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="engineerRole">
                                                            <input id="engineerRole" type="checkbox">
                                                            <span class="checkbox-material">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                        <span>Engineer</span>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="architectRole">
                                                            <input id="architectRole" type="checkbox">
                                                            <span class="checkbox-material">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                        <span>Architect</span>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="deveopsRole">
                                                            <input id="deveopsRole" type="checkbox">
                                                            <span class="checkbox-material">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                        <span>DevOps</span>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="analystRole">
                                                            <input id="analystRole" type="checkbox">
                                                            <span class="checkbox-material">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                        <span>Analyst</span>
                                                    </div>
                                                </div>
                                                <div class="options-container has-slimscroll">
                                                    <p>Skills</p>
                                                    <div class="checkbox">
                                                        <label for="allSkills">
                                                            <input id="allSkills" type="checkbox">
                                                            <span class="checkbox-material">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                        <span>All</span>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="javascriptSkill">
                                                            <input id="javascriptSkill" type="checkbox">
                                                            <span class="checkbox-material">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                        <span>Javascript</span>
                                                        <div class="end">
                                                            <img src="assets/img/logos/stacks/js.svg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="angularSkill">
                                                            <input id="angularSkill" type="checkbox">
                                                            <span class="checkbox-material">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                        <span>Angular</span>
                                                        <div class="end">
                                                            <img src="assets/img/logos/stacks/angular.svg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="csharpSkill">
                                                            <input id="csharpSkill" type="checkbox">
                                                            <span class="checkbox-material">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                        <span>C Sharp</span>
                                                        <div class="end">
                                                            <img src="assets/img/logos/stacks/csharp.svg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="nodeSkill">
                                                            <input id="nodeSkill" type="checkbox">
                                                            <span class="checkbox-material">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                        <span>NodeJS</span>
                                                        <div class="end">
                                                            <img src="assets/img/logos/stacks/nodejs.svg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="reactSkill">
                                                            <input id="reactSkill" type="checkbox">
                                                            <span class="checkbox-material">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                        <span>ReactJS</span>
                                                        <div class="end">
                                                            <img src="assets/img/logos/stacks/reactjs.svg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="htmlSkill">
                                                            <input id="htmlSkill" type="checkbox">
                                                            <span class="checkbox-material">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                        <span>Html5</span>
                                                        <div class="end">
                                                            <img src="assets/img/logos/stacks/html5.svg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column is-2 is-paddingless">
                                    <a class="button is-primary is-large search-button">Search</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Hero Mockup -->
        <img class="jobs-hero-image" src="assets/img/LP13-img/jobs-hero.png" data-demo-src="assets/img/demo/jobs-hero.png" alt="">
    </div>


    <div class="section is-medium">
        <div class="container">

            <!--Title-->
            <div class="title-wrap has-text-centered">
                <h2 class="title is-spaced is-2">Featured Jobs</h2>
                <h3>Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu harum inermis iudicabit.</h3>
                <img src="assets/img/graphics/legacy/divider.svg" class="special-divider" alt="">
            </div>

            <!-- Wrapper -->
            <div class="content-wrapper">

                <div class="columns is-multiline">

                    <!--Featured Job -->
                    <div class="column is-4">
                        <a href="#" class="flex-card featured-job-box">
                            <div class="icon-container is-first is-icon-reveal">
                                <img src="assets/img/LP13-img/airbnb.svg" alt="" data-demo-src="assets/img/demo/brands/airbnb.svg" alt="">
                            </div>
                            <div class="content-container">
                                <h3>UI/UX Designer</h3>
                                <div class="job-summary">
                                    <span class="company">Airbnb</span>
                                    <span class="salary">
                                        <i class="sl sl-icon-diamond"></i>
                                        <span>$10K - $15K</span>
                                    </span>
                                </div>
                                <div class="tags">
                                    <span class="tag is-rounded is-success is-pastel">Design</span>
                                    <span class="tag is-rounded is-info is-pastel">Full-time</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Featured Job -->
                    <div class="column is-4">
                        <a href="#" class="flex-card featured-job-box">
                            <div class="icon-container is-first is-icon-reveal">
                                <img src="assets/img/LP13-img/gitlab.svg" alt="" data-demo-src="assets/img/demo/brands/gitlab.svg" alt="">
                            </div>
                            <div class="content-container">
                                <h3>Web Developer</h3>
                                <div class="job-summary">
                                    <span class="company">Gitlab</span>
                                    <span class="salary">
                                        <i class="sl sl-icon-diamond"></i>
                                        <span>$8K - $13K</span>
                                    </span>
                                </div>
                                <div class="tags">
                                    <span class="tag is-rounded is-yellow is-pastel">Development</span>
                                    <span class="tag is-rounded is-info is-pastel">Full-time</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Featured Job -->
                    <div class="column is-4">
                        <a href="#" class="flex-card featured-job-box">
                            <div class="icon-container is-first is-icon-reveal">
                                <img src="assets/img/LP13-img/slack.svg" alt="" data-demo-src="assets/img/demo/brands/slack.svg" alt="">
                            </div>
                            <div class="content-container">
                                <h3>Product Manager</h3>
                                <div class="job-summary">
                                    <span class="company">Slack</span>
                                    <span class="salary">
                                        <i class="sl sl-icon-diamond"></i>
                                        <span>$15K - $20K</span>
                                    </span>
                                </div>
                                <div class="tags">
                                    <span class="tag is-rounded is-purple is-pastel">Product</span>
                                    <span class="tag is-rounded is-info is-pastel">Full-time</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Featured Job -->
                    <div class="column is-4">
                        <a href="#" class="flex-card featured-job-box">
                            <div class="icon-container is-first is-icon-reveal">
                                <img src="assets/img/LP13-img/dribbble.svg" alt="" data-demo-src="assets/img/demo/brands/dribbble.svg" alt="">
                            </div>
                            <div class="content-container">
                                <h3>Project Manager</h3>
                                <div class="job-summary">
                                    <span class="company">Dribbble</span>
                                    <span class="salary">
                                        <i class="sl sl-icon-diamond"></i>
                                        <span>$15K - $20K</span>
                                    </span>
                                </div>
                                <div class="tags">
                                    <span class="tag is-rounded is-purple is-pastel">Project</span>
                                    <span class="tag is-rounded is-info is-pastel">Full-time</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Featured Job -->
                    <div class="column is-4">
                        <a href="#" class="flex-card featured-job-box">
                            <div class="icon-container is-first is-icon-reveal">
                                <img src="assets/img/LP13-img/facebook.svg" alt="" data-demo-src="assets/img/demo/brands/facebook.svg" alt="">
                            </div>
                            <div class="content-container">
                                <h3>UI/UX Designer</h3>
                                <div class="job-summary">
                                    <span class="company">Facebook</span>
                                    <span class="salary">
                                        <i class="sl sl-icon-diamond"></i>
                                        <span>$10K - $15K</span>
                                    </span>
                                </div>
                                <div class="tags">
                                    <span class="tag is-rounded is-success is-pastel">Design</span>
                                    <span class="tag is-rounded is-info is-pastel">Full-time</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Featured Job -->
                    <div class="column is-4">
                        <a href="#" class="flex-card featured-job-box">
                            <div class="icon-container is-first is-icon-reveal">
                                <img src="assets/img/LP13-img/github.svg" alt="" data-demo-src="assets/img/demo/brands/github.svg" alt="">
                            </div>
                            <div class="content-container">
                                <h3>Web Developer</h3>
                                <div class="job-summary">
                                    <span class="company">GitHub</span>
                                    <span class="salary">
                                        <i class="sl sl-icon-diamond"></i>
                                        <span>$11K - $14K</span>
                                    </span>
                                </div>
                                <div class="tags">
                                    <span class="tag is-rounded is-yellow is-pastel">Development</span>
                                    <span class="tag is-rounded is-purple is-pastel">Part-time</span>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <!-- CTA -->
                <div class="cta-wrapper has-text-centered is-title-reveal pt-60">
                    <a href="kit5-login.html" class="button button-cta is-bold btn-align primary-btn raised">
                        View More Jobs Near You
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- <div class="section is-medium is-app-grey">
        <div class="container"> -->

    <!--Title-->
    <!-- <div class="title-wrap has-text-centered">
                <h2 class="title is-spaced is-2">Popular Categories</h2>
                <h3>Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu harum inermis iudicabit.</h3>
                <img src="assets/img/graphics/legacy/divider.svg" class="special-divider" alt="">
            </div> -->

    <!-- Wrapper -->
    <!-- <div class="content-wrapper">

                <div class="job-categories">
                    <div class="job-categories-inner"> -->

    <!--Category-->
    <!-- <a href="#" class="job-category tilt-card rounded">
                            <div class="job-category-overlay">
                            </div>
                            <div class="job-category-image">
                                <img src="https://via.placeholder.com/940x650" alt="" data-demo-src="https://images.pexels.com/photos/340152/pexels-photo-340152.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" />
                            </div>
                            <div class="job-category-heading">
                                <span class="small">Web Development</span>
                                <h2>JS Frontend</h2>
                            </div>
                        </a> -->

    <!--Category-->
    <!-- <a href="#" class="job-category tilt-card rounded">
                            <div class="job-category-overlay">
                            </div>
                            <div class="job-category-image">
                                <img src="https://via.placeholder.com/940x650" alt="" data-demo-src="https://images.pexels.com/photos/3584974/pexels-photo-3584974.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" />
                            </div>
                            <div class="job-category-heading">
                                <span class="small">Design</span>
                                <h2>UI Design</h2>
                            </div>
                        </a> -->

    <!--Category-->
    <!-- <a href="#" class="job-category tilt-card rounded">
                            <div class="job-category-overlay">
                            </div>
                            <div class="job-category-image">
                                <img src="https://via.placeholder.com/940x650" alt="" data-demo-src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" />
                            </div>
                            <div class="job-category-heading">
                                <span class="small">Design</span>
                                <h2>UX Design</h2>
                            </div>
                        </a> -->

    <!--Category-->
    <!-- <a href="#" class="job-category tilt-card rounded">
                            <div class="job-category-overlay">
                            </div>
                            <div class="job-category-image">
                                <img src="https://via.placeholder.com/940x650" alt="" data-demo-src="https://images.pexels.com/photos/3059748/pexels-photo-3059748.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" />
                            </div>
                            <div class="job-category-heading">
                                <span class="small">Web Development</span>
                                <h2>Database Design</h2>
                            </div>
                        </a> -->

    <!--Category-->
    <!-- <a href="#" class="job-category tilt-card rounded">
                            <div class="job-category-overlay">
                            </div>
                            <div class="job-category-image">
                                <img src="https://via.placeholder.com/940x650" alt="" data-demo-src="https://images.pexels.com/photos/3861961/pexels-photo-3861961.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" />
                            </div>
                            <div class="job-category-heading">
                                <span class="small">Web Development</span>
                                <h2>Backend</h2>
                            </div>
                        </a> -->

    <!--Category-->
    <!-- <a href="#" class="job-category tilt-card rounded">
                            <div class="job-category-overlay">
                            </div>
                            <div class="job-category-image">
                                <img src="https://via.placeholder.com/940x650" alt="" data-demo-src="https://images.pexels.com/photos/618613/pexels-photo-618613.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" />
                            </div>
                            <div class="job-category-heading">
                                <span class="small">Business</span>
                                <h2>Analytics</h2>
                            </div>
                        </a> -->

    <!--Category-->
    <!-- <a href="#" class="job-category tilt-card rounded">
                            <div class="job-category-overlay">
                            </div>
                            <div class="job-category-image">
                                <img src="https://via.placeholder.com/940x650" alt="" data-demo-src="https://images.pexels.com/photos/373945/pexels-photo-373945.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" />
                            </div>
                            <div class="job-category-heading">
                                <span class="small">Management</span>
                                <h2>Products</h2>
                            </div>
                        </a> -->

    <!--Category-->
    <!-- <a href="#" class="job-category tilt-card rounded">
                            <div class="job-category-overlay">
                            </div>
                            <div class="job-category-image">
                                <img src="https://via.placeholder.com/940x650" alt="" data-demo-src="https://images.pexels.com/photos/3585088/pexels-photo-3585088.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" />
                            </div>
                            <div class="job-category-heading">
                                <span class="small">Development</span>
                                <h2>Mobile Apps</h2>
                            </div>
                        </a> -->
    <!-- </div>
                </div> -->

    <!-- CTA -->
    <!-- <div class="cta-wrapper has-text-centered is-title-reveal pt-60">
                    <a href="#" class="button button-cta is-bold btn-align primary-btn raised">
                        View All Categories
                    </a>
                </div> -->

    <!-- </div>

        </div>
    </div>  -->

    <div class="section is-medium">
        <div class="container">

            <!--Title-->
            <div class="title-wrap has-text-centered">
                <h2 class="title is-spaced is-2">Hot Topics</h2>
                <h3>Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu harum inermis iudicabit.</h3>
                <img src="assets/img/graphics/legacy/divider.svg" class="special-divider" alt="">
            </div>

            <div class="content-wrapper">
                <div class="columns is-multiline">

                    <!--Hot Topic-->
                    <div class="column is-4">
                        <a href="#" class="flex-card job-topic">
                            <div class="icon-container is-first is-icon-reveal">
                                <img src="assets/img/logos/stacks/js.svg" alt="">
                            </div>
                            <div class="meta">
                                <h3>Vanilla Javascript</h3>
                                <div class="job-summary">
                                    <span class="company">Frontend</span>
                                    <span class="salary">
                                        <i class="sl sl-icon-people"></i>
                                        <span>6749</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Hot Topic-->
                    <div class="column is-4">
                        <a href="#" class="flex-card job-topic">
                            <div class="icon-container is-first is-icon-reveal">
                                <img src="assets/img/logos/stacks/angular.svg" alt="">
                            </div>
                            <div class="meta">
                                <h3>Angular 11</h3>
                                <div class="job-summary">
                                    <span class="company">Frontend</span>
                                    <span class="salary">
                                        <i class="sl sl-icon-people"></i>
                                        <span>3921</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Hot Topic-->
                    <div class="column is-4">
                        <a href="#" class="flex-card job-topic">
                            <div class="icon-container is-first is-icon-reveal">
                                <img src="assets/img/logos/stacks/csharp.svg" alt="">
                            </div>
                            <div class="meta">
                                <h3>C Sharp</h3>
                                <div class="job-summary">
                                    <span class="company">Backend</span>
                                    <span class="salary">
                                        <i class="sl sl-icon-people"></i>
                                        <span>6478</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Hot Topic-->
                    <div class="column is-4">
                        <a href="#" class="flex-card job-topic">
                            <div class="icon-container is-first is-icon-reveal">
                                <img src="assets/img/logos/stacks/css3.svg" alt="">
                            </div>
                            <div class="meta">
                                <h3>CSS3</h3>
                                <div class="job-summary">
                                    <span class="company">Web Design</span>
                                    <span class="salary">
                                        <i class="sl sl-icon-people"></i>
                                        <span>10.9K</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Hot Topic-->
                    <div class="column is-4">
                        <a href="#" class="flex-card job-topic">
                            <div class="icon-container is-first is-icon-reveal">
                                <img src="assets/img/logos/stacks/html5.svg" alt="">
                            </div>
                            <div class="meta">
                                <h3>Html5</h3>
                                <div class="job-summary">
                                    <span class="company">Web Design</span>
                                    <span class="salary">
                                        <i class="sl sl-icon-people"></i>
                                        <span>24.2K</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Hot Topic-->
                    <div class="column is-4">
                        <a href="#" class="flex-card job-topic">
                            <div class="icon-container is-first is-icon-reveal">
                                <img src="assets/img/logos/stacks/nodejs.svg" alt="">
                            </div>
                            <div class="meta">
                                <h3>NodeJS</h3>
                                <div class="job-summary">
                                    <span class="company">Backend</span>
                                    <span class="salary">
                                        <i class="sl sl-icon-people"></i>
                                        <span>1271</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Hot Topic-->
                    <div class="column is-4">
                        <a href="#" class="flex-card job-topic">
                            <div class="icon-container is-first is-icon-reveal">
                                <img src="assets/img/logos/stacks/python.svg" alt="">
                            </div>
                            <div class="meta">
                                <h3>Python</h3>
                                <div class="job-summary">
                                    <span class="company">Backend</span>
                                    <span class="salary">
                                        <i class="sl sl-icon-people"></i>
                                        <span>18.3K</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Hot Topic-->
                    <div class="column is-4">
                        <a href="#" class="flex-card job-topic">
                            <div class="icon-container is-first is-icon-reveal">
                                <img src="assets/img/logos/stacks/php.svg" alt="">
                            </div>
                            <div class="meta">
                                <h3>PhP</h3>
                                <div class="job-summary">
                                    <span class="company">Backend</span>
                                    <span class="salary">
                                        <i class="sl sl-icon-people"></i>
                                        <span>15.1K</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Hot Topic-->
                    <div class="column is-4">
                        <a href="#" class="flex-card job-topic">
                            <div class="icon-container is-first is-icon-reveal">
                                <img src="assets/img/logos/stacks/reactjs.svg" alt="">
                            </div>
                            <div class="meta">
                                <h3>ReactJS</h3>
                                <div class="job-summary">
                                    <span class="company">Frontend</span>
                                    <span class="salary">
                                        <i class="sl sl-icon-people"></i>
                                        <span>9211</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Hot Topic-->
                    <div class="column is-4">
                        <a href="#" class="flex-card job-topic">
                            <div class="icon-container is-first is-icon-reveal">
                                <img src="assets/img/logos/stacks/vuejs.svg" alt="">
                            </div>
                            <div class="meta">
                                <h3>VueJS</h3>
                                <div class="job-summary">
                                    <span class="company">Frontend</span>
                                    <span class="salary">
                                        <i class="sl sl-icon-people"></i>
                                        <span>10.7K</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Hot Topic-->
                    <div class="column is-4">
                        <a href="#" class="flex-card job-topic">
                            <div class="icon-container is-first is-icon-reveal">
                                <img src="assets/img/logos/stacks/wordpress.svg" alt="">
                            </div>
                            <div class="meta">
                                <h3>WordPress</h3>
                                <div class="job-summary">
                                    <span class="company">Web Design</span>
                                    <span class="salary">
                                        <i class="sl sl-icon-people"></i>
                                        <span>19.6K</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Hot Topic-->
                    <div class="column is-4">
                        <a href="#" class="flex-card job-topic">
                            <div class="icon-container is-first is-icon-reveal">
                                <img src="assets/img/logos/stacks/illustrator.svg" alt="">
                            </div>
                            <div class="meta">
                                <h3>Illustrator</h3>
                                <div class="job-summary">
                                    <span class="company">Web Design</span>
                                    <span class="salary">
                                        <i class="sl sl-icon-people"></i>
                                        <span>5263</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <!-- CTA -->
                <div class="cta-wrapper has-text-centered is-title-reveal pt-60">
                    <a href="#" class="button button-cta is-bold btn-align primary-btn raised">
                        View All Topics
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="section is-medium is-app-grey">
        <div class="container">

            <!--Title-->
            <div class="title-wrap has-text-centered">
                <h2 class="title is-spaced is-2">Recently Joined</h2>
                <h3>Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu harum inermis iudicabit.</h3>
                <img src="assets/img/graphics/legacy/divider.svg" class="special-divider" alt="">
            </div>

            <!-- Wrapper -->
            <div class="content-wrapper">
                <div class="columns">

                    <!--User-->
                    <div class="column is-3">
                        <div class="job-user">
                            <div class="avatar-wrap">
                                <img class="avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/helen.jpg">
                                <img class="badge" src="assets/img/logos/stacks/vuejs.svg" alt="">
                            </div>
                            <h3>Himanshu Rahi</h3>
                            <p>Software Developer, India</p>
                            <div class="tags">
                                <span class="tag is-rounded is-purple is-pastel">Full-Time</span>
                                <span class="tag is-rounded is-yellow is-pastel">Fullstack</span>
                            </div>
                        </div>
                    </div>

                    <!--User-->
                    <div class="column is-3">
                        <div class="job-user">
                            <div class="avatar-wrap">
                                <img class="avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/nick.jpg">
                                <img class="badge" src="assets/img/logos/stacks/js.svg" alt="">
                            </div>
                            <h3>Shashi Ranjan</h3>
                            <p>Software Developer, India</p>
                            <div class="tags">
                                <span class="tag is-rounded is-info is-pastel">Part-Time</span>
                                <span class="tag is-rounded is-yellow is-pastel">Fullstack</span>
                            </div>
                        </div>
                    </div>

                    <!--User-->
                    <div class="column is-3">
                        <div class="job-user">
                            <div class="avatar-wrap">
                                <img class="avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/lakisha.jpg">
                                <img class="badge" src="assets/img/logos/stacks/csharp.svg" alt="">
                            </div>
                            <h3>Monica N</h3>
                            <p>Software Developer & HR, India</p>
                            <div class="tags">
                                <span class="tag is-rounded is-success is-pastel">Freelance</span>
                                <span class="tag is-rounded is-orange is-pastel">Backend</span>
                            </div>
                        </div>
                    </div>

                    <!--User-->
                    <div class="column is-3">
                        <div class="job-user">
                            <div class="avatar-wrap">
                                <img class="avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/alex.jpg">
                                <img class="badge" src="assets/img/logos/stacks/reactjs.svg" alt="">
                            </div>
                            <h3>Ankit</h3>
                            <p>Sotware Developer Intern, India</p>
                            <div class="tags">
                                <span class="tag is-rounded is-info is-pastel">Part-Time</span>
                                <span class="tag is-rounded is-yellow is-pastel">Fullstack</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- Testimonials -->
    <div id="card-testimonials" class="section is-medium is-skewed-sm">
        <div class="container is-reverse-skewed-sm">
            <!--Title-->
            <div class="title-wrap has-text-centered">
                <h2 class="title is-spaced is-2">They Love Us</h2>
                <h3>Lorem ipsum dolor sit amet, clita laoreet ne cum. His cu harum inermis iudicabit.</h3>
                <img src="assets/img/graphics/legacy/divider.svg" class="special-divider" alt="">
            </div>

            <div class="content-wrapper">
                <div class="columns is-vcentered">
                    <div class="column is-hidden-mobile"></div>
                    <div class="column is-10">
                        <div class="columns is-vcentered">
                            <div class="column is-6">
                                <div class="flex-card testimonial-card light-bordered light-raised padding-20">
                                    <div class="testimonial-title">
                                        Amazed by the product
                                    </div>
                                    <div class="testimonial-text">
                                        Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire
                                        incorrupte. Vis mutat altera percipit ad.
                                    </div>
                                    <div class="user-id">
                                        <img class="" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/dan.png">
                                        <div class="info">
                                            <div class="name">Dan Shwartz</div>
                                            <div class="position">Software engineer</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-card testimonial-card light-bordered light-raised padding-20">
                                    <div class="testimonial-title">
                                        My tasks are now painless
                                    </div>
                                    <div class="testimonial-text">
                                        Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire
                                        incorrupte. Vis mutat altera percipit ad.
                                    </div>
                                    <div class="user-id">
                                        <img class="" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/janet.jpg">
                                        <div class="info">
                                            <div class="name">Jane Guzmann</div>
                                            <div class="position">CFO</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-6">
                                <div class="flex-card testimonial-card light-bordered light-raised padding-20">
                                    <div class="testimonial-title">
                                        Very nice support
                                    </div>
                                    <div class="testimonial-text">
                                        Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire
                                        incorrupte. Vis mutat altera percipit ad.
                                    </div>
                                    <div class="user-id">
                                        <img class="" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/barry.jpg">
                                        <div class="info">
                                            <div class="name">Barry Lindon</div>
                                            <div class="position">Accountant</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-card testimonial-card light-bordered light-raised padding-20">
                                    <div class="testimonial-title">
                                        My income has doubled
                                    </div>
                                    <div class="testimonial-text">
                                        Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire
                                        incorrupte. Vis mutat altera percipit ad.
                                    </div>
                                    <div class="user-id">
                                        <img class="" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/anthony.jpg">
                                        <div class="info">
                                            <div class="name">Anthony Leblanc</div>
                                            <div class="position">Founder at Hereby</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="column is-hidden-mobile"></div>
                </div>

                <!-- <div class="grid-clients three-grid mt-60">
                    <div class="columns is-vcentered">
                        <div class="column"></div>
                        <div class="column">
                            <a><img class="client" src="assets/img/logos/custom/systek.svg" alt=""></a>
                        </div>
                        <div class="column">
                            <a><img class="client" src="assets/img/logos/custom/phasekit.svg" alt=""></a>
                        </div>
                        <div class="column">
                            <a><img class="client" src="assets/img/logos/custom/grubspot.svg" alt=""></a>
                        </div>
                        <div class="column"></div>
                    </div>
                    <div class="columns is-vcentered is-separator">
                        <div class="column"></div>
                        <div class="column">
                            <a><img class="client" src="assets/img/logos/custom/tribe.svg" alt=""></a>
                        </div>
                        <div class="column">
                            <a><img class="client" src="assets/img/logos/custom/kromo.svg" alt=""></a>
                        </div>
                        <div class="column">
                            <a><img class="client" src="assets/img/logos/custom/covenant.svg" alt=""></a>
                        </div>
                        <div class="column"></div>
                    </div>
                    <div class="columns is-vcentered is-separator">
                        <div class="column"></div>
                        <div class="column">
                            <a><img class="client" src="assets/img/logos/custom/infinite.svg" alt=""></a>
                        </div>
                        <div class="column">
                            <a><img class="client" src="assets/img/logos/custom//gutwork.svg" alt=""></a>
                        </div>
                        <div class="column">
                            <a><img class="client" src="assets/img/logos/custom/proactive.svg" alt=""></a>
                        </div>
                        <div class="column"></div>
                    </div>
                </div> -->
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
                        <img class="small-footer-logo" src="assets/img/logos/bulkit-logo-g.png" alt="">
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
    <!-- /Side navigation -->
    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>


    <!--<div id="style-switcher" class="style-switcher visible">
        <div class="switcher-close">
            <i class="material-icons">close</i>
        </div>
        <!--Main Theme-->
    <!-- <div class="style-dot">
            <input type="radio" id="core" name="theme_selector" checked>
            <div class="style-dot-inner"></div>
        </div> -->
    <!--Main Theme-->
    <!-- <div class="style-dot">
            <input type="radio" id="purple" name="theme_selector">
            <div class="style-dot-inner is-purple"></div>
        </div> -->
    <!--Main Theme-->
    <!-- <div class="style-dot">
            <input type="radio" id="teal" name="theme_selector">
            <div class="style-dot-inner is-teal"></div>
        </div> -->
    <!--Main Theme-->
    <!-- <div class="style-dot">
            <input type="radio" id="green" name="theme_selector">
            <div class="style-dot-inner is-green"></div>
        </div> -->

    <!--Main Theme-->
    <!-- <div class="style-dot">
            <input type="radio" id="azur" name="theme_selector">
            <div class="style-dot-inner is-azur"></div>
        </div> -->
    <!--Main Theme-->
    <!-- <div class="style-dot">
            <input type="radio" id="blue" name="theme_selector">
            <div class="style-dot-inner is-blue"></div>
        </div> -->
    <!--Main Theme-->
    <!-- <div class="style-dot">
            <input type="radio" id="night" name="theme_selector">
            <div class="style-dot-inner is-night"></div>
        </div> -->
    <!--Main Theme-->
    <!-- <div class="style-dot">
            <input type="radio" id="yellow" name="theme_selector">
            <div class="style-dot-inner is-yellow"></div>
        </div> -->
    <!--Main Theme-->
    <!-- <div class="style-dot">
            <input type="radio" id="orange" name="theme_selector">
            <div class="style-dot-inner is-orange"></div>
        </div> -->
    <!--Main Theme-->
    <!-- <div class="style-dot">
            <input type="radio" id="red" name="theme_selector">
            <div class="style-dot-inner is-red"></div>
        </div> -->
    </div>

    <!-- <div id="bulchat" class="open">
        <div class="chat-button open g-item"></div>
    </div>  -->

    <!-- Chat widget -->
    <!-- <div id="chat-widget">
        <div class="chat-widget-body is-closed">
            <div class="chat-header">
                <div class="close-chat is-hidden-desktop is-hidden-tablet"><img src="assets/img/graphics/legacy/close-small.svg" alt=""></div>
                <div class="chat-team">
                    <div class="team-member has-text-centered">
                        <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/alan.jpg">
                        <div class="is-handwritten">Alan maynard</div>
                    </div>
                </div>
                <div class="response-delay has-text-centered">
                    Answers in less than 18 hours
                </div>
            </div>
            <div class="message-container">
                <div class="divider">
                    <span class="before-divider"></span>
                    <div class="children">Today</div>
                    <span class="after-divider"></span>
                </div>
                <div class="chat-message from">
                    <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/alan.jpg">
                    <div class="bubble-wrapper">
                        <div class="timestamp">02:49 pm</div>
                        <div class="chat-bubble">
                            Hey iam Alan ! Iam here to help. What can i do for you ?
                        </div>
                    </div>
                </div>
                <div class="chat-message to">
                    <div class="bubble-wrapper">
                        <div class="timestamp">02:48 pm</div>
                        <div class="chat-bubble">
                            Hello, someone out there ? I could use some help
                        </div>
                    </div>
                    <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/helen.jpg">
                </div>
            </div>
            <div class="message-input">
                <textarea class="" rows="1" placeholder="Send a message ..."></textarea>
                <div class="message-options">
                    <div class="emoji-button"></div>
                    <div class="attach-button"></div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- /Chat widget -->
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/core.js"></script>
</body>

</html>