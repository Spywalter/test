<div>
    {{-- In work, do what you enjoy. --}}
    <section id="home">
        <div x-data="{ atTop: true }" @scroll.window="atTop=window.pageYOffset>50?false:true"
            class="fixed inset-0 top-0 right-0 z-40 flex flex-row w-full h-20 p-0 px-5 py-3 bg-gray-900 place-content-between"
            :class="(atTop === false) ? 'opacity-75' : ''" x-cloak>

            <div class="text-left ml-28 font-poppins ">


                <span class="text-5xl font-bold text-green-500 ">W</span><span
                    class="text-2xl font-bold text-white">ALTER</span>
            </div>

            <div class="flex flex-row items-center mr-10 text-white gap-x-8">
                <a class="list-none hover:text-green-500 cursor-grab" href="#home">Home</a>
                <a class="list-none hover:text-green-500 cursor-grab " href="#skills">Skills</a>
                <a class="list-none hover:text-green-500 cursor-grab " href="#certificates">Certificates</a>
                <a class="list-none hover:text-green-500 cursor-grab " href="#about">About</a>
                <a class="list-none hover:text-green-500 cursor-grab " href="#projects">Projects</a>
            </div>

        </div>
        <div x-data="{ shown: false }" x-intersect:leave="shown = false" x-intersect="shown = true"
            class="w-screen h-screen p-0 mt-20 bg-gray-900 font-poppins">



            <div x-show="shown" x-transition class="flex flex-row mx-10 place-content-between gap-x-20 ">
                <div class="w-full p-0 mt-10 text-left bg-gray-900 h-96 animate-fade-up animate-once">

                    <h1 class="mt-20 ml-20 text-white text-1xl ">PHP/LARAVEL/LIVEWIRE
                        DEVELOPER</h1>
                    <h1 class="mt-5 ml-20 text-6xl text-white">Hi, I'm <span
                            class="font-bold text-green-500">WALTER</span>
                    </h1>
                    <h1 class="mb-10 ml-20 text-5xl text-white">From Philippines</h1>

                    <p class="mb-10 ml-20 text-justify text-white">
                        I'm currently open for part-time job and new opportunities. Whether you have a question or just
                        want
                        to say hi, feel free to reach out, and I'll do my best to get back to you! &#128512;
                    </p>
                    <div class="flex flex-row ml-20 gap-x-8">
                        {{--     <a href="https://www.facebook.com/ladwalters/" target="_blank"><span class="ml-20"><i
                                    class="fa-brands fa-facebook fa-2x" style="color:#00ff00"></i></span></a>
                 --}} <button
                            class="px-6 py-2 bg-gray-800 border-2 border-green-500 rounded-lg hover:bg-gray-900 border-1 ">
                            <a href="mailto:walter.lad@deped.gov.ph" target="_blank"><span class="mr-2 text-white ">
                                    Say
                                    Hi!</span>&#128075;</a></button>
                        {{--       <a href="https://x.com/walter_lad/" target="_blank"><span><i
                                    class="fa-brands fa-square-x-twitter fa-2x" style="color:#00ff00"></i></span></a>

                        <a href="https://github.com/taylerwards" target="_blank"><span><i
                                    class="fa-brands fa-github fa-2x" style="color:#00ff00"></i></span></a>
 --}}
                    </div>

                </div>
                <div class="w-full mt-10 bg-gray-900 h-96 animate-fade-left">

                    <img src="me.png" class="w-full mt-10 ml-10 h-96" alt="">

                </div>

            </div>


        </div>
    </section>



    {{-- Skills section --}}


    <section id="skills">
        <div x-data="{ shown: false }" x-intersect:leave="shown = false" x-intersect="shown = true"
            class="w-screen h-screen p-1 bg-gray-600 font-poppins">
            <div class="ml-5 text-center mt-28 font-poppins">


                <span class="px-8 py-3 text-2xl font-bold text-white bg-gray-900 rounded-md">FEATURED SKILLS</span>
            </div>





            <div x-show="shown" x-transition
                class="flex flex-row place-content-between gap-x-5 mx-60 animate-fade-left">

                <div
                    class="flex flex-col w-full p-10 mx-auto mt-10 text-white bg-gray-900 content-evenly gap-x-10 h-96">
                    <div class="mb-5 text-2xl font-bold text-center">Frontend</div>
                    <div class="flex flex-row items-center justify-center mt-5 gap-x-5">
                        <span
                            class="p-2 px-4 border-2 border-green-500 rounded-sm cursor-default hover:bg-black ">HTML</span>
                        <span
                            class="p-2 px-4 border-2 border-green-500 rounded-sm cursor-default hover:bg-black ">CSS</span>

                        <span
                            class="p-2 px-4 border-2 border-green-500 rounded-sm cursor-default hover:bg-black ">JAVASCRIPT</span>

                        <span
                            class="p-2 px-4 border-2 border-green-500 rounded-sm cursor-default hover:bg-black ">TAILWIND
                            CSS</span>
                        <span
                            class="p-2 px-4 border-2 border-green-500 rounded-sm cursor-default hover:bg-black ">ALPHINE
                            JS</span>
                        <span
                            class="p-2 px-4 border-2 border-green-500 rounded-sm cursor-default hover:bg-black ">LIVEWIRE</span>
                    </div>
                    <div class="mt-10 mb-5 text-2xl font-bold text-center">Backend</div>
                    <div class="flex flex-row items-center justify-center mt-5 gap-x-10">
                        <span
                            class="p-2 px-4 border-2 border-green-500 rounded-sm cursor-default hover:bg-black ">LARAVEL</span>
                        <span
                            class="p-2 px-4 border-2 border-green-500 rounded-sm cursor-default hover:bg-black ">CODEIGNITER</span>
                        <span
                            class="p-2 px-4 border-2 border-green-500 rounded-sm cursor-default hover:bg-black ">PHP</span>
                        <span
                            class="p-2 px-4 border-2 border-green-500 rounded-sm cursor-default hover:bg-black ">MYSQL</span>
                        <span
                            class="p-2 px-4 border-2 border-green-500 rounded-sm cursor-default hover:bg-black ">GIT</span>

                    </div>



                </div>

            </div>


        </div>
    </section>

    {{-- About section --}}


    <section id="about">
        <div x-data="{ shown: false }" x-intersect:leave="shown = false" x-intersect="shown = true"
            class="w-screen h-screen p-1 bg-gray-900 font-poppins">
            <div class="ml-5 text-center mt-28 font-poppins ">


                <span class="text-2xl font-bold text-white">ABOUT ME</span>
            </div>
            <div class="flex flex-row mx-10 place-content-between gap-x-10" x-show="shown" x-transition>
                <div class="w-full p-0 mt-10 text-left bg-gray-900 h-96 animate-fade-left ">

                    <img src="secartoon.jpg" alt="" class="w-full h-full rounded-s-full ">

                </div>
                <div class="w-full p-10 mt-10 text-white bg-gray-900 h-96 rounded-e-full animate-fade-right">

                    <div class="flex flex-col gap-y-8 ">
                        <label class="block " for="">Name: Walter M. Lad</label>
                        <label for="">Course: Bachelor of Science in Computer Science</label>
                        <label for="">Eligibility: Civil Service Profesional Level</label>
                        <label for="">Experience: 5 years in government service</label>
                        <label for="">Agency: Department of Education (DepEd)</label>

                    </div>




                </div>

            </div>






        </div>


    </section>

    {{-- Certificates section --}}


    <section id="certificates">
        <div x-data="{ shown: false }" x-intersect:leave="shown = false" x-intersect="shown = true"
            class="w-screen h-screen p-1 bg-gray-600 font-poppins">
            <div class="ml-5 text-center mt-28 font-poppins ">


                <span class="px-8 py-3 text-2xl font-bold text-white bg-gray-900 rounded-md">CERTIFICATES</span>
            </div>





            <div x-show="shown" x-transition
                class="flex flex-row mx-20 place-content-between gap-x-5 animate-fade-left">

                <div
                    class="flex flex-col w-full p-10 mx-auto mt-10 text-white bg-gray-900 content-evenly gap-x-10 h-96">

                    <div class="flex flex-row items-center justify-center mt-5 gap-x-5">
                        <img src="webdesignCert.png"
                            class="w-full transition duration-300 ease-in-out delay-150 h-52 hover:translate-y-6 hover:scale-125 "
                            alt="">

                        <img src="javascriptCert.png"
                            class="w-full transition duration-300 ease-in-out delay-150 h-52 hover:translate-y-6 hover:scale-125"
                            alt="">
                        <img src="dictCert.png"
                            class="w-full transition duration-300 ease-in-out delay-150 h-52 hover:translate-y-6 hover:scale-125"
                            alt="">

                    </div>




                </div>

            </div>


        </div>
    </section>


    {{-- Projects section --}}


    <section id="projects">
        <div x-data="{ shown: false }" x-intersect:leave="shown = false" x-intersect="shown = true"
            class="w-screen h-screen py-1 bg-gray-900 font-poppins">
            <div class="mt-20 ml-5 text-center font-poppins ">


                <span class="px-8 py-3 text-2xl font-bold text-white rounded-md">PROJECTS</span>
            </div>





            <div x-show="shown" x-transition class="flex flex-row w-full p-0 place-content-between gap-x-5 ">

                <div
                    class="flex flex-col w-full h-full p-10 mx-auto mt-10 text-white bg-gray-900 content-evenly gap-x-10 ">

                    <div
                        class="flex flex-row items-center justify-center mt-5 text-xs gap-x-5 animate-fade-up animate-once">


                        <div
                            class="flex flex-col p-4 bg-gray-800 rounded-md h-52 w-60 transition duration-300 ease-in-out delay-150  hover:-translate-y-0.5 hover:scale-105">
                            <img src="/todo.png" alt="" class="w-56 ">
                            <label class="mt-6 text-center text-white " for="">CREATE
                                READ
                                UPDATE
                                DELETE
                            </label>
                            <a wire:navigate href="/crud" class="w-full mt-5 text-end">
                                <span class="px-4 py-2 bg-gray-800 rounded-md hover:bg-gray-900">Visit &#8594;</span>
                            </a>
                        </div>



                        <div
                            class="flex flex-col p-4 bg-gray-800 rounded-md h-52 w-60 transition duration-300 ease-in-out delay-150  hover:-translate-y-0.5 hover:scale-105">
                            <img src="/role.png" alt="" class="w-56 ">
                            <label class="mt-6 text-center text-white " for="">USER ROLE MANAGEMENT
                            </label>
                            <a wire:navigate href="/login" class="w-full mt-5 text-end">
                                <span class="px-4 py-2 bg-gray-800 rounded-md hover:bg-gray-900">Visit &#8594;</span>
                            </a>
                        </div>
                        <div
                            class="flex flex-col p-4 bg-gray-800 rounded-md h-52 w-60 transition duration-300 ease-in-out delay-150  hover:-translate-y-0.5 hover:scale-105">
                            <img src="/print.png" alt="" class="w-56 ">
                            <label class="mt-6 text-center text-white " for="">PRINT PDF
                            </label>
                            <a wire:navigate href="/print_page" class="w-full mt-5 text-end">
                                <span class="px-4 py-2 bg-gray-800 rounded-md hover:bg-gray-900">Visit &#8594;</span>
                            </a>
                        </div>
                        <div
                            class="flex flex-col p-4 bg-gray-800 rounded-md h-52 w-60 transition duration-300 ease-in-out delay-150  hover:-translate-y-0.5 hover:scale-105">
                            <img src="/search.png" alt="" class="w-56 ">
                            <label class="mt-6 text-center text-white " for="">LIVE SEARCH
                            </label>
                            <a wire:navigate href="/search" class="w-full mt-5 text-end">
                                <span class="px-4 py-2 bg-gray-800 rounded-md hover:bg-gray-900">Visit &#8594;</span>
                            </a>
                        </div>


                    </div>
                    <div
                        class="flex flex-row items-center justify-center mt-5 text-xs gap-x-5 animate-fade-up animate-once">

                        <div
                            class="flex flex-col p-4 bg-gray-800 rounded-md h-52 w-60 transition duration-300 ease-in-out delay-150  hover:-translate-y-0.5 hover:scale-105">
                            <img src="/leave.png" alt="" class="w-56 ">
                            <label class="mt-6 text-center text-white " for="">LEAVE MANAGEMENT
                                SYSTEM
                            </label>
                            <span class="text-xs text-center text-green-700 ">already serving users</span>
                            <a href="https://ehrisleaves.bislig.org/" class="w-full mt-2 text-end">
                                <span class="px-4 py-2 bg-gray-800 rounded-md hover:bg-gray-900">Visit &#8594;</span>
                            </a>
                        </div>

                        <div
                            class="flex flex-col p-4 bg-gray-800 rounded-md h-52 w-60 transition duration-300 ease-in-out delay-150  hover:-translate-y-0.5 hover:scale-105">
                            <a wire:navigate href="/crud" class="w-full mt-5 text-end">
                                <span class="px-4 py-2 bg-gray-800 rounded-md hover:bg-gray-900"></span>
                            </a>
                        </div>
                        <div
                            class="flex flex-col p-4 bg-gray-800 rounded-md h-52 w-60 transition duration-300 ease-in-out delay-150  hover:-translate-y-0.5 hover:scale-105">
                            <a wire:navigate href="/crud" class="w-full mt-5 text-end">
                                <span class="px-4 py-2 bg-gray-800 rounded-md hover:bg-gray-900"> </span>
                            </a>
                        </div>




                    </div>




                </div>

            </div>


        </div>
    </section>
    <section>
        <div class="flex flex-col items-center justify-center w-screen py-1 text-center bg-gray-700 h-60 font-poppins">


            <div class="flex flex-row mb-4 mt-28 gap-x-8">
                <a href="https://www.facebook.com/ladwalters/" target="_blank"><span class=""><i
                            class="fa-brands fa-facebook fa-2x" style="color:#00ff00"></i></span></a>

                <a href="https://x.com/walter_lad/" target="_blank"><span><i
                            class="fa-brands fa-square-x-twitter fa-2x" style="color:#00ff00"></i></span></a>

                <a href="https://github.com/taylerwards" target="_blank"><span><i class="fa-brands fa-github fa-2x"
                            style="color:#00ff00"></i></span></a>



            </div>

            <p class="mb-1 text-sm text-white">Designed & Built by Walter Lad</p>
            <p class="text-sm text-white">Copyright © 2024 - All right reserved</p>





        </div>
    </section>




</div>
