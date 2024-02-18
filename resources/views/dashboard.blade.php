<x-dashboard-layout>
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


    <!-- Start Hero -->
    <section
        class="lg:h-screen py-36 h-auto relative flex items-center background-effect overflow-hidden bg-[url('../../assets/images/hero/bg2.html')] bg-no-repeat bg-cover">
        <div class="container-fluid">
            <div
                class="absolute inset-0 z-0 bg-[url('../../assets/images/hero/curve-shape.html')] dark:bg-[url('../../assets/images/hero/curve-shape-dark.html')] bg-top bg-cover">
            </div>
        </div><!--end container-->

        <div class="container z-1">
            <div class="grid grid-cols-1 mt-10">
                <h4 class="lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 font-bold">Make The Best Move to
                    <br> Choose Your <span class="text-emerald-600">New Job</span>
                </h4>
                <p class="text-slate-400 text-lg max-w-xl">Find Jobs, Employment & Career Opportunities. Some of the
                    companies we've helped recruit excellent applicants over the years.</p>

                <div class="grid lg:grid-cols-12 grid-cols-1" id="reserve-form">
                    <div class="lg:col-span-7 mt-8">
                        <div class="bg-white dark:bg-slate-900 border-0 shadow rounded p-3">
                            <form action="#">
                                <div class="registration-form text-dark text-start">
                                    <div class="grid md:grid-cols-12 grid-cols-1 md:gap-0 gap-6">
                                        <div class="lg:col-span-8 md:col-span-7">
                                            <div class="filter-search-form relative filter-border">
                                                <i class="uil uil-briefcase-alt icons"></i>
                                                <input name="name" type="text" id="job-keyword"
                                                    class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0"
                                                    placeholder="Search your Keywords">
                                            </div>
                                        </div>

                                        <div class="lg:col-span-4 md:col-span-5">
                                            <input type="submit" id="search" name="search" style="height: 60px;"
                                                class="btn bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white searchbtn submit-btn w-full"
                                                value="Search">
                                        </div>
                                    </div><!--end grid-->
                                </div><!--end container-->
                            </form>
                        </div>
                    </div><!--ed col-->
                </div><!--end grid-->

                <div class="mt-4">
                    <span class="text-slate-400"><span class="text-dark">Popular Searches :</span> Designer, Developer,
                        Web, IOS, PHP Senior Engineer</span>
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


        <div
            class="shape absolute start-0 end-0 sm:-bottom-px -bottom-[2px] overflow-hidden text-white dark:text-slate-900">
            <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- End Hero -->

    <div class="grid md:grid-cols-2 mt-8 mx-8 gap-[30px]">
        @foreach ($jobs as $job)
            <div class="group rounded-lg shadow hover:shadow-lg dark:shadow-gray-700 transition-all duration-500">
                <div class="flex items-center justify-between p-6">
                    <div class="flex items-center">
                        <div class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                            <img src="{{ asset('storage/' . $job->entreprise->logo) }}" class="size-8" alt="Entreprise Logo">
                        </div>

                        <div class="ms-3">
                            <a href="employer-detail.html"
                                class="block text-[16px] font-semibold hover:text-emerald-600 transition-all duration-500">{{ $job->entreprise->nom }}</a>
                            <span class="block text-sm text-slate-400">{{ $job->entreprise->slogan }}</span>
                        </div>
                    </div>

                    <a href="job-apply.html"
                        class="btn btn-icon btn-lg px-8 rounded-xl bg-emerald-600/5 group-hover:bg-emerald-600 border border-slate-100 dark:border-slate-800 text-emerald-600 group-hover:text-white">Apply</a>
                </div>

                <div class="lg:flex items-center justify-between border-t border-gray-100 dark:border-gray-800 p-6">
                    <div>
                        <a href="job-detail-one.html"
                            class="text-lg font-semibold hover:text-emerald-600">{{ $job->titre }}</a>
                        <p class="text-slate-400 mt-1">Required Skills: {{ $job->compétences_requises }} </p>
                    </div>
                    
                    
                    <p class="text-slate-400 lg:mt-0 mt-4"><strong>Contract Type: </strong> {{ $job->type_contrat }}
                    </p>

                </div>

                <div class="p-6">
                    <strong>Job Description:</strong>
                    <p class="text-slate-400">{{ $job->description }}</p>
                </div>
    
                <div class="px-6 py-2 bg-slate-50 dark:bg-slate-800 flex justify-between items-center">
                    <div>
                        <span class="inline-block font-semibold"><i
                                class="mdi mdi-check-decagram mdi-18px text-blue-500 me-1"></i>Verified</span>
                        <ul class="list-none inline-block ms-1 text-yellow-400 space-x-0.5">
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                            <li class="inline text-slate-400 font-semibold">4.8</li>
                        </ul>
                    </div>
                    <span class="inline-block me-1 text-slate-400"><i
                            class="uil uil-map-marker text-[18px] text-slate-900 dark:text-white me-1"></i>{{ $job->emplacement }}</span>
                </div>
            </div><!--end content-->
        @endforeach
    </div>


    <!-- Start -->
    <div class="container md:mt-24 mt-16">

        <div class="grid md:grid-cols-2 mt-8 gap-[30px]">
        </div><!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8 mb-4">
            <div class="md:col-span-12 text-center">
                <a href="job-list-five.html"
                    class="btn btn-link text-slate-400 hover:text-emerald-600 after:bg-emerald-600 duration-500 ease-in-out">See
                    More Jobs <i class="uil uil-arrow-right align-middle"></i></a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
    <!-- End -->
    @push('scripts')
        <script src=""></script>
    </x-dashboard-layout>
