<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth" dir="ltr">

<!-- Mirrored from shreethemes.in/jobstack/layouts/job-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 16:34:52 GMT -->

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
    <!--end header-->
    <!-- End Navbar -->

    <!-- Start Hero -->
    <section
        class="relative table w-full py-36 bg-[url('../../assets/images/hero/bg.html')] bg-top bg-no-repeat bg-cover">
        <div class="absolute inset-0 bg-emerald-900/90"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white">Job
                    Post</h3>

            </div><!--end grid-->
        </div><!--end container-->

        <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
            <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
                <li
                    class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white/50 hover:text-white">
                    <a href="index.html">Jobstack</a>
                </li>
                <li class="inline breadcrumb-item text-[15px] font-semibold duration-500 ease-in-out text-white"
                    aria-current="page">Job Post</li>
            </ul>
        </div>
    </section><!--end section-->
    <div class="relative">
        <div
            class="shape absolute start-0 end-0 sm:-bottom-px -bottom-[2px] overflow-hidden z-1 text-slate-50 dark:text-slate-800">
            <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Start -->
    <section class="relative bg-slate-50 dark:bg-slate-800 lg:py-24 py-16">
        <div class="container">
            <div class="lg:flex justify-center">
                <div class="lg:w-2/3">
                    <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                        <form class="text-start" action="jobPost" method="POST">
                            @csrf
                            <div class="grid grid-cols-1">
                                <h5 class="text-lg font-semibold">Job Details:</h5>
                            </div>

                            <div class="grid grid-cols-12 gap-4 mt-4">
                                <div class="col-span-12 text-start">
                                    <label class="font-semibold" for="RegisterName">Job Title:</label>
                                    <input id="RegisterName" type="text"
                                        class="form-input border border-slate-100 dark:border-slate-800 mt-1"
                                        placeholder="Web Developer" name="titre">
                                </div>

                                <div class="col-span-12 text-start">
                                    <label for="comments" class="font-semibold">Job Description:</label>
                                    <textarea name="description" id="comments"
                                        class="form-input border border-slate-100 dark:border-slate-800 mt-1 textarea"
                                        placeholder="Write Job Description :"></textarea>
                                </div>

                                <div class="md:col-span-6 col-span-12 text-start">
                                    <label class="font-semibold">Job Type:</label>
                                    <select name="type_contrat"
                                        class="form-select form-input border border-slate-100 dark:border-slate-800 block w-full mt-1">
                                        <option value="à distance">À distance</option>
                                        <option value="hybride">Hybride</option>
                                        <option value="à temps plein">À temps plein</option>
                                    </select>
                                </div>


                                <div class="col-span-12 text-start">
                                    <label class="font-semibold" for="RegisterName">Emplacement</label>
                                    <input id="RegisterName" name="emplacement" type="text"
                                        class="form-input border border-slate-100 dark:border-slate-800 mt-1"
                                        placeholder="location">
                                </div>



                            </div>

                            <div class="grid grid-cols-12 gap-4 mt-4">
                                <div class="col-span-12 text-start">
                                    <label class="font-semibold" for="Skillname">Skills:</label>
                                    <input id="Skillname" type="text" name="compétences_requises"
                                        class="form-input border border-slate-100 dark:border-slate-800 mt-1"
                                        placeholder="Web Developer">
                                </div>
                            </div>




                            <div class="grid grid-cols-1 gap-4 mt-4">
                                <div>
                                    <button type="submit" id="submit" name="send"
                                        class="btn rounded-md bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white">Post
                                        Now</button>
                                </div>
                            </div>
                        </form><!--end form-->
                    </div>
                </div>
            </div><!--end flex-->
        </div><!--end container-->
    </section><!--end section-->
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
                                    <li class="inline-block"><a href="index.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">Home</a>
                                    </li>
                                    <li class="inline-block mt-[10px] md:mt-0"><a href="services.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">How
                                            it works</a></li>
                                    <li class="inline-block mt-[10px] md:mt-0"><a href="#"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">Create
                                            a job</a></li>
                                    <li class="inline-block mt-[10px] md:mt-0"><a href="aboutus.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">About
                                            us</a></li>
                                    <li class="inline-block mt-[10px] md:mt-0"><a href="contact.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out font-medium">Contact
                                            us</a></li>
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
                        <p class="mb-0 text-gray-300 font-medium">©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Jobstack. Design with <i class="mdi mdi-heart text-red-600"></i>
                            by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.
                        </p>
                    </div>

                    <ul class="list-none md:text-end text-center space-x-0.5">
                        <li class="inline"><a href="https://1.envato.market/jobstack" target="_blank"
                                class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i
                                    class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                        <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank"
                                class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i
                                    class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                        <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank"
                                class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i
                                    class="uil uil-behance" title="Behance"></i></a></li>
                        <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank"
                                class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i
                                    class="uil uil-linkedin" title="Linkedin"></i></a></li>
                        <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank"
                                class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i
                                    class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                        <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank"
                                class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i
                                    class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                        <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank"
                                class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i
                                    class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                        <li class="inline"><a href="mailto:support@shreethemes.in"
                                class="btn btn-icon btn-sm border-2 border-gray-800 dark:border-gray-700 rounded-md hover:border-emerald-600 dark:hover:border-emerald-600 hover:bg-emerald-600 dark:hover:bg-emerald-600 text-white"><i
                                    class="uil uil-envelope align-middle" title="email"></i></a></li>
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
            <label
                class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8"
                for="chk">
                <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
            </label>
        </span>
    </div>


    <!-- Switcher -->

    <!-- LTR & RTL Mode Code -->

    <!-- LTR & RTL Mode Code -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top"
        class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-emerald-600 text-white justify-center items-center"><i
            class="uil uil-arrow-up"></i></a>
    <!-- Back to top -->

    <!-- JAVASCRIPTS -->
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/plugins.init.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- JAVASCRIPTS -->
</body>

<!-- Mirrored from shreethemes.in/jobstack/layouts/job-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 16:34:52 GMT -->

</html>
