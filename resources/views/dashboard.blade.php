<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    
<!-- Mirrored from shreethemes.in/jobstack/layouts/index-four.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 16:33:52 GMT -->
<head>
        <meta charset="UTF-8">
        <title>Jobstack - Job Portal Tailwind CSS Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Job Listing Landing Template" name="description">
        <meta content="Job, CV, Career, Resume, Job Portal, Create Job, Post job, tailwind Css" name="keywords">
        <meta name="author" content="Shreethemes">
        <meta name="website" content="https://shreethemes.in/">
        <meta name="email" content="support@shreethemes.in">
        <meta name="version" content="1.4.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Css -->
        <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
        <link href="assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet">
        <!-- Main Css -->
        <link href="assets/libs/%40iconscout/unicons/css/line.css" type="text/css" rel="stylesheet">
        <link href="assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/tailwind.min.css" rel="stylesheet" type="text/css">

    </head>
    
    <body class="dark:bg-slate-900">
        <!-- Loader Start -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader End -->
        <!-- Start Navbar -->
        <nav id="topnav" class="defaultscroll is-sticky bg-white dark:bg-slate-900">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="index.html">
                    <div class="block sm:hidden">
                        <img src="assets/images/logo-icon-40.png" class="h-10 inline-block dark:hidden"  alt="">
                        <img src="assets/images/logo-icon-40-white.png" class="h-10 hidden dark:inline-block"  alt="">
                    </div>
                    <div class="sm:block hidden">
                        <img src="assets/images/logo-dark.png" class="h-[24px] inline-block dark:hidden" alt="">
                        <img src="assets/images/logo-white.png" class="h-[24px] hidden dark:inline-block" alt="">
                    </div>
                </a>
                <!-- End Logo container-->

                <!-- Start Mobile Toggle -->
                <div class="menu-extras">
                    <div class="menu-item">
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Mobile Toggle -->

                <!--Login button Start-->
                <ul class="buy-button list-none mb-0">
                    <li class="inline-block mb-0">
                        <div class="relative top-[3px]">
                            <i class="uil uil-search text-lg absolute top-[3px] end-3"></i>
                            <input type="text" class="form-input h-9 pe-10 rounded-3xl sm:w-44 w-36 border-gray-100 dark:border-slate-800 bg-white dark:bg-slate-900" name="s" id="searchItem" placeholder="Search...">
                        </div>
                    </li>
                    <li class="dropdown inline-block relative ps-1">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                            <span class="btn btn-icon rounded-full bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white"><img src="assets/images/team/01.jpg" class="rounded-full" alt=""></span>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                            <ul class="py-2 text-start">
                                <li>
                                    <a href="candidate-profile.html" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i data-feather="user" class="size-4 me-2"></i>Profile</a>
                                </li>
                                <li>
                                    <a href="candidate-profile-setting.html" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i data-feather="settings" class="size-4 me-2"></i>Settings</a>
                                </li>
                                <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                                <li>
                                    <a href="lock-screen.html" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i data-feather="lock" class="size-4 me-2"></i>Lockscreen</a>
                                </li>
                                <li>
                                    <a href="login.html" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i data-feather="log-out" class="size-4 me-2"></i>Logout</a>
                                </li>
                            </ul>
                        </div>
                    </li><!--end dropdown-->
                </ul>
                <!--Login button End-->

                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu justify-start">
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Home</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="index.html" class="sub-menu-item">Hero One</a></li>
                                <li><a href="index-two.html" class="sub-menu-item">Hero Two</a></li>
                                <li><a href="index-three.html" class="sub-menu-item">Hero Three</a></li>
                                <li><a href="index-four.html" class="sub-menu-item">Hero Four</a></li>
                                <li><a href="index-five.html" class="sub-menu-item">Hero Five</a></li>
                                <li><a href="index-six.html" class="sub-menu-item">Hero Six </a></li>
                                <li><a href="index-seven.html" class="sub-menu-item">Hero Seven </a></li>
                                <li><a href="index-eight.html" class="sub-menu-item">Hero Eight</a></li>
                                <li><a href="index-nine.html" class="sub-menu-item">Hero Nine  <span class="bg-yellow-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item"><a href="javascript:void(0)"> Jobs </a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="job-categories.html" class="sub-menu-item">Job Categories</a></li>
                        
                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)"> Job Grids </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="job-grid-one.html" class="sub-menu-item">Job Grid One</a></li>
                                        <li><a href="job-grid-two.html" class="sub-menu-item">Job Grid Two</a></li>
                                        <li><a href="job-grid-three.html" class="sub-menu-item">Job Grid Three</a></li>
                                        <li><a href="job-grid-four.html" class="sub-menu-item">Job Grid Four </a></li>
                                    </ul>  
                                </li>

                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)"> Job Lists </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="job-list-one.html" class="sub-menu-item">Job List One</a></li>
                                        <li><a href="job-list-two.html" class="sub-menu-item">Job List Two</a></li>
                                        <li><a href="job-list-three.html" class="sub-menu-item">Job List Three</a></li>
                                        <li><a href="job-list-four.html" class="sub-menu-item">Job List Four</a></li>
                                        <li><a href="job-list-five.html" class="sub-menu-item">Job List Five </a></li>
                                        <li><a href="job-list-six.html" class="sub-menu-item">Job List Six </a></li>
                                    </ul>  
                                </li>

                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)"> Job Detail </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="job-detail-one.html" class="sub-menu-item">Job Detail One</a></li>
                                        <li><a href="job-detail-two.html" class="sub-menu-item">Job Detail Two</a></li>
                                        <li><a href="job-detail-three.html" class="sub-menu-item">Job Detail Three</a></li>
                                    </ul>  
                                </li>
                
                                <li><a href="job-apply.html" class="sub-menu-item">Job Apply</a></li>
                
                                <li><a href="job-post.html" class="sub-menu-item">Job Post </a></li>
                
                                <li><a href="career.html" class="sub-menu-item">Career </a></li>
                            </ul>  
                        </li>
                
                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="aboutus.html" class="sub-menu-item">About Us</a></li>
                                <li><a href="services.html" class="sub-menu-item">Services</a></li>
                                <li><a href="pricing.html" class="sub-menu-item">Pricing </a></li>

                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)">Employers</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="employer-list.html" class="sub-menu-item">Employers</a></li>
                                        <li><a href="employer-profile.html" class="sub-menu-item">Employer Profile</a></li>
                                    </ul>
                                </li>
                        
                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)">Candidates </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="candidate-list.html" class="sub-menu-item">Candidates</a></li>
                                        <li><a href="candidate-profile.html" class="sub-menu-item">Candidate Profile</a></li>
                                        <li><a href="candidate-profile-setting.html" class="sub-menu-item">Profile Settings </a></li>
                                    </ul>
                                </li>

                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)"> Helpcenter </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="helpcenter-overview.html" class="sub-menu-item">Overview</a></li>
                                        <li><a href="helpcenter-faqs.html" class="sub-menu-item">FAQs</a></li>
                                        <li><a href="helpcenter-guides.html" class="sub-menu-item">Guides</a></li>
                                        <li><a href="helpcenter-support.html" class="sub-menu-item">Support</a></li>
                                    </ul>  
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blogs.html" class="sub-menu-item"> Blogs</a></li>
                                        <li><a href="blog-detail.html" class="sub-menu-item"> Blog Detail</a></li>
                                    </ul> 
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="login.html" class="sub-menu-item"> Login</a></li>
                                        <li><a href="signup.html" class="sub-menu-item"> Signup</a></li>
                                        <li><a href="reset-password.html" class="sub-menu-item"> Forgot Password</a></li>
                                        <li><a href="lock-screen.html" class="sub-menu-item"> Lock Screen</a></li>
                                    </ul> 
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="terms.html" class="sub-menu-item">Terms of Services</a></li>
                                        <li><a href="privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                                    </ul>  
                                </li>

                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="comingsoon.html" class="sub-menu-item"> Coming Soon</a></li>
                                        <li><a href="maintenance.html" class="sub-menu-item"> Maintenance</a></li>
                                        <li><a href="error.html" class="sub-menu-item"> 404!</a></li>
                                        <li><a href="thankyou.html" class="sub-menu-item"> Thank you</a></li>
                                    </ul> 
                                </li>
                            </ul>
                        </li>
                
                        <li><a href="contact.html" class="sub-menu-item">Contact</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </nav><!--end header-->
        <!-- End Navbar -->

        <!-- Start Hero -->
        <section class="lg:h-screen py-36 h-auto relative flex items-center background-effect overflow-hidden bg-[url('../../assets/images/hero/bg2.html')] bg-no-repeat bg-cover">
            <div class="container-fluid">
                <div class="absolute inset-0 z-0 bg-[url('../../assets/images/hero/curve-shape.html')] dark:bg-[url('../../assets/images/hero/curve-shape-dark.html')] bg-top bg-cover"></div>
            </div><!--end container-->

            <div class="container z-1">
                <div class="grid grid-cols-1 mt-10">
                    <h4 class="lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 font-bold">Make The Best Move to <br> Choose Your <span class="text-emerald-600">New Job</span></h4>
                    <p class="text-slate-400 text-lg max-w-xl">Find Jobs, Employment & Career Opportunities. Some of the companies we've helped recruit excellent applicants over the years.</p>
                
                    <div class="grid lg:grid-cols-12 grid-cols-1" id="reserve-form">
                        <div class="lg:col-span-7 mt-8">
                            <div class="bg-white dark:bg-slate-900 border-0 shadow rounded p-3">
                                <form action="#">
                                    <div class="registration-form text-dark text-start">
                                        <div class="grid md:grid-cols-12 grid-cols-1 md:gap-0 gap-6">
                                            <div class="lg:col-span-8 md:col-span-7">
                                                <div class="filter-search-form relative filter-border">
                                                    <i class="uil uil-briefcase-alt icons"></i>
                                                    <input name="name" type="text" id="job-keyword" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" placeholder="Search your Keywords">
                                                </div>
                                            </div>

                                            <div class="lg:col-span-4 md:col-span-5">
                                                <input type="submit" id="search" name="search" style="height: 60px;" class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white searchbtn submit-btn w-full" value="Search">
                                            </div>
                                        </div><!--end grid-->
                                    </div><!--end container-->
                                </form>
                            </div>
                        </div><!--ed col-->
                    </div><!--end grid-->

                    <div class="mt-4">
                        <span class="text-slate-400"><span class="text-dark">Popular Searches :</span> Designer, Developer, Web, IOS, PHP Senior Engineer</span>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="absolute inset-0 bg-emerald-600/5"></div>
            <ul class="circles p-0 mb-0">
                <li class="brand-img"><img src="assets/images/company/shree-logo.png" class="size-9" alt=""></li>
                <li class="brand-img"><img src="assets/images/company/skype.png" class="size-9" alt=""></li>
                <li class="brand-img"><img src="assets/images/company/snapchat.png" class="size-9" alt=""></li>
                <li class="brand-img"><img src="assets/images/company/spotify.png" class="size-9" alt=""></li>
                <li class="brand-img"><img src="assets/images/company/telegram.png" class="size-9" alt=""></li>
                <li class="brand-img"><img src="assets/images/company/whatsapp.png" class="size-9" alt=""></li>
                <li class="brand-img"><img src="assets/images/company/android.png" class="size-9" alt=""></li>
                <li class="brand-img"><img src="assets/images/company/facebook-logo.png" class="size-9" alt=""></li>
                <li class="brand-img"><img src="assets/images/company/linkedin.png" class="size-9" alt=""></li>
                <li class="brand-img"><img src="assets/images/company/google-logo.png" class="size-9" alt=""></li>
            </ul>
        </section><!--end section-->
        <div class="relative">


            <div class="shape absolute start-0 end-0 sm:-bottom-px -bottom-[2px] overflow-hidden text-white dark:text-slate-900">
                <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- End Hero -->
     
        <div class="grid md:grid-cols-2 mt-8 gap-[30px]">

            <div class="group rounded-lg shadow hover:shadow-lg dark:shadow-gray-700 transition-all duration-500">
                <div class="flex items-center justify-between p-6">
                    <div class="flex items-center">
                        <div class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                            <img src="assets/images/company/google-logo.png" class="size-8" alt="">
                        </div>

                        <div class="ms-3">
                            <a href="employer-detail.html" class="block text-[16px] font-semibold hover:text-emerald-600 transition-all duration-500">Google</a>
                            <span class="block text-sm text-slate-400">2 days ago</span>
                        </div>
                    </div>

                    <a href="job-apply.html" class="btn btn-icon btn-lg rounded-full bg-emerald-600/5 group-hover:bg-emerald-600 border border-slate-100 dark:border-slate-800 text-emerald-600 group-hover:text-white"><i class="uil uil-arrow-up-right"></i></a>
                </div>

                <div class="lg:flex items-center justify-between border-t border-gray-100 dark:border-gray-800 p-6">
                    <div>
                        <a href="job-detail-one.html" class="text-lg font-semibold hover:text-emerald-600">Marketing Director</a>
                        <p class="text-slate-400 mt-1">Total Openings: 1</p>
                    </div>

                    <p class="text-slate-400 lg:mt-0 mt-4"><i class="uil uil-usd-circle text-[20px] text-emerald-600"></i> $950 - $1100/mo</p>
                </div>

                <div class="px-6 py-2 bg-slate-50 dark:bg-slate-800 flex justify-between items-center">
                    <div>
                        <span class="inline-block font-semibold"><i class="mdi mdi-check-decagram mdi-18px text-blue-500 me-1"></i>Verified</span>
                        <ul class="list-none inline-block ms-1 text-yellow-400 space-x-0.5">
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline text-slate-400 font-semibold">4.8</li>
                        </ul>
                    </div>
                    <span class="inline-block me-1 text-slate-400"><i class="uil uil-map-marker text-[18px] text-slate-900 dark:text-white me-1"></i>USA</span>
                </div>
            </div><!--end content-->

 
        </div>
        <!-- Start -->
        <div class="container md:mt-24 mt-16">

            <div class="grid md:grid-cols-2 mt-8 gap-[30px]">




                
               
            </div><!--end grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-8 mb-4">
                <div class="md:col-span-12 text-center">
                    <a href="job-list-five.html" class="btn btn-link text-slate-400 hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">See More Jobs <i class="uil uil-arrow-right align-middle"></i></a>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
        <!-- End -->

        <!-- Start Footer -->
        <footer class="relative bg-slate-900 dark:bg-slate-800">
            <div class="container">
                <div class="grid grid-cols-1">
                    <div class="relative py-12">
                        <!-- Subscribe -->
                        <div class="relative w-full">
                            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                                <div class="md:col-span-3">
                                    <a href="#" class="flex justify-center md:justify-start focus:outline-none">
                                        <img src="assets/images/logo-light.png" class="" alt="">
                                    </a>
                                </div><!--end col-->
                        
                                <div class="md:col-span-9">
                                    <ul class="list-disc footer-list md:text-end text-center space-x-3">
                                        <li class="inline-block"><a href="index.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">Home</a></li>
                                        <li class="inline-block mt-[10px] md:mt-0"><a href="services.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">How it works</a></li>
                                        <li class="inline-block mt-[10px] md:mt-0"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">Create a job</a></li>
                                        <li class="inline-block mt-[10px] md:mt-0"><a href="aboutus.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">About us</a></li>
                                        <li class="inline-block mt-[10px] md:mt-0"><a href="contact.html" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">Contact us</a></li>
                                    </ul><!--end icon-->
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div>
                        <!-- Subscribe -->
                    </div>
                </div>
            </div><!--end container-->

            <div class="py-[30px] px-0 border-t border-gray-800 dark:border-gray-700">
                <div class="container text-center">
                    <div class="grid md:grid-cols-2 items-center gap-6">
                        <div class="md:text-start text-center">
                            <p class="mb-0 text-gray-300 font-medium">© <script>document.write(new Date().getFullYear())</script> Jobstack. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                        </div>

                        <ul class="list-none md:text-end text-center space-x-0.5">
                            <li class="inline"><a href="https://1.envato.market/jobstack" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                            <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                            <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-behance" title="Behance"></i></a></li>
                            <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>
                            <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                            <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                            <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                            <li class="inline"><a href="mailto:support@shreethemes.in" class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                        </ul><!--end icon-->
                    </div><!--end grid-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- End Footer -->
        <!-- Switcher -->
        <div class="fixed top-1/4 -left-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
                </label>
            </span>
        </div>

        <div class="fixed top-1/2 -right-11 z-50 hidden sm:block">
            <a href="https://1.envato.market/jobstack" target="_blank" class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold"><i class="mdi mdi-cart-outline me-1"></i> Download</a>
        </div>
        <!-- Switcher -->

        <!-- LTR & RTL Mode Code -->
        <div class="fixed top-[40%] -left-3 z-50">
            <a href="#" id="switchRtl">
                <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold rtl:block ltr:hidden" >LTR</span>
                <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold ltr:block rtl:hidden">RTL</span>
            </a>
        </div>
        <!-- LTR & RTL Mode Code --> 

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-emerald-600 text-white justify-center items-center"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- JAVASCRIPTS -->
        <script src="assets/libs/tobii/js/tobii.min.js"></script>
        <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>

<!-- Mirrored from shreethemes.in/jobstack/layouts/index-four.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 16:33:52 GMT -->
</html>