<div class="bg-gray-900">
    {{-- In work, do what you enjoy. --}}

    <section id="home">

        <div x-data="{ open: false }"
            class="fixed inset-0 top-0 left-0 z-10 hidden w-full h-20 p-5 border-b-2 border-gray-800 lg:z-30 sm:block indent-0 text-start "x-cloak>


        </div>


        <div x-data="{ atTop: true }" @scroll.window="atTop=window.pageYOffset>50?false:true"
            class="fixed inset-0 top-0 right-0 z-40 flex flex-row w-full h-20 p-0 px-5 py-3 bg-gray-900 place-content-between "
            :class="(atTop === false) ? 'opacity-75' : ''" x-cloak>




            <div class="flex flex-row p-2 0 place-content-between ">
                <div x-data="{ test: false }" class="" x-cloak>
                    <div class="block lg:hidden">
                        <button type="button" class="mt-3 text-sm text-white rounded-lg ">

                            <i x-on:click="test=!test" class="fa-solid fa-bars fa-2xl"></i>
                        </button>
                    </div>
                    <div x-transition x-show="test" class="absolute text-white list-none top-20 left-5">

                        <a href="#home" @click="test=false">
                            <li class="w-48 py-2 bg-gray-800 hover:bg-gray-900">

                                <i class="ml-2 fa-solid fa-user-lock fa-xs"></i><span class="ml-2 text-xs ">HOME</span>

                            </li>
                        </a>

                        <a href="#skills" @click="test=false">
                            <li class="w-48 py-2 bg-gray-800 hover:bg-gray-900">

                                <i class="ml-2 fa-solid fa-user-lock fa-xs"></i><span
                                    class="ml-2 text-xs n">SKILLS</span>

                            </li>
                        </a>

                        <a href="#certificates" @click="test=false">
                            <li class="w-48 py-2 bg-gray-800 hover:bg-gray-900">

                                <i class="ml-2 fa-solid fa-user-lock fa-xs"></i><span
                                    class="ml-2 text-xs ">CERTIFICATES</span>

                            </li>
                        </a>

                        <a href="#about" @click="test=false">
                            <li class="w-48 py-2 bg-gray-800 hover:bg-gray-900">

                                <i class="ml-2 fa-solid fa-user-lock fa-xs"></i><span class="ml-2 text-xs">ABOUT</span>

                            </li>
                        </a>
                        <a href="#projects" @click="test=false">
                            <li class="w-48 py-2 bg-gray-800 hover:bg-gray-900">

                                <i class="ml-2 fa-solid fa-user-lock fa-xs"></i><span
                                    class="ml-2 text-xs">PROJECTS</span>

                            </li>
                        </a>






                    </div>
                </div>
                <div class="flex items-end text-left ml-28 font-poppins lg:flex-row ">


                    <span class="hidden text-5xl font-bold text-green-500 lg:block ">W</span><span
                        class="hidden text-2xl font-bold text-white lg:block">ALTER</span>
                </div>


            </div>


            <div class="flex flex-row items-center mr-10 text-white gap-x-8 ">
                <a class="hidden list-none hover:text-green-500 cursor-grab lg:block" href="#home">Home</a>
                <a class="hidden list-none hover:text-green-500 cursor-grab lg:block " href="#skills">Skills</a>
                <a class="hidden list-none hover:text-green-500 cursor-grab lg:block"
                    href="#certificates">Certificates</a>
                <a class="hidden list-none hover:text-green-500 cursor-grab lg:block " href="#about">About</a>
                <a class="hidden list-none hover:text-green-500 cursor-grab lg:block " href="#projects">Projects</a>
            </div>




        </div>


        <div x-data="{ shown: false }" x-intersect:leave="shown = false" x-intersect="shown = true"
            class="w-screen h-screen p-0 bg-gray-900 lg:mt-20 md:mt-20 xs:mt-20 font-poppins ">



            <div x-show="shown" x-transition
                class="flex flex-col-reverse mx-10 mt-10 lg:mt-0 lg:flex-row place-content-between gap-x-20 ">
                <div class="w-full p-0 mt-5 text-left bg-gray-900 h-96 animate-fade-up animate-once">

                    <h1 class="mt-20 ml-5 text-white lg:ml-20 lg:mt-20 text-1xl ">
                        PHP/LARAVEL/LIVEWIRE
                        DEVELOPER</h1>

                    <h1 class="mt-10 ml-5 text-6xl text-white sm:ml-20 sm:mt-10 ">Hi, I'm <span
                            class="font-bold text-green-500">WALTER</span>
                    </h1>
                    <h1 class="mb-10 ml-5 text-5xl text-white sm:ml-20">From Philippines</h1>

                    <p class="mb-10 ml-5 text-justify text-white sm:ml-20">
                        I'm currently open for part-time job and new opportunities. Whether you have a question or just
                        want
                        to say hi, feel free to reach out, and I'll do my best to get back to you! &#128512;
                    </p>
                    <div class="flex flex-row ml-5 sm:ml-20 gap-x-8 ">
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

                    <img src="me.png" class="w-full h-48 mt-32 lg:ml-10 lg:h-72" alt="">

                </div>

            </div>


        </div>
    </section>



    {{-- Skills section --}}


    <section id="skills">
        <div x-data="{ shown: false }" x-intersect:leave="shown = false" x-intersect="shown = true"
            class="w-screen h-auto p-1 bg-gray-900 lg:h-screen lg:bg-gray-600 md:lg:bg-gray-600 font-poppins">
            <div class="ml-5 text-left mt-96 lg:text-center lg:mt-24 md:mt-28 font-poppins">


                <span
                    class="px-8 py-3 ml-8 text-2xl font-bold text-white bg-gray-700 rounded-md lg:bg-gray-900">FEATURED
                    SKILLS</span>
            </div>





            <div x-show="shown" x-transition
                class="flex flex-col lg:flex:row place-content-between gap-x-5 lg:mx-60 xs:mx-0 animate-fade-left">

                <div
                    class="flex flex-col w-full p-10 mx-auto mt-10 text-white bg-gray-900 lg:ml-8 content-evenly gap-x-10 h-96">
                    <div class="flex items-center justify-center mb-5 text-2xl font-bold text-center lg:ml-5 lg:inline">
                        Frontend
                    </div>
                    <div
                        class="flex flex-col items-center justify-center mt-5 lg:flex-row md:gap-x-5 sm:gap-y-5 gap-y-5 ">


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
                    <div class="mt-10 mb-5 text-2xl font-bold text-center lg:mt-10 lg:inline">Backend
                    </div>
                    <div class="flex flex-col items-center justify-center mt-5 lg:flex-row lg:gap-x-5 gap-y-5 ">
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
            class="w-screen h-screen p-1 mt-40 bg-gray-900 lg:mt-10 font-poppins ">
            <div class="text-left mt-96 lg:mt-24 lg:text-center lg:ml-14 font-poppins">


                <span
                    class="px-8 py-3 text-2xl font-bold text-white rounded-md mt-28 lg:mt-10 xs:bg-gray-700 lg:bg-gray-900">ABOUT
                    ME</span>
            </div>
            <div class="flex lg:mx-10 xs:mx-5 lg:flex-row xs:flex-col place-content-between gap-x-10" x-show="shown"
                x-transition>
                <div class="hidden w-full p-0 mt-10 text-left bg-gray-900 h-96 animate-fade-left lg:block ">

                    <img src="secartoon.jpg" alt="" class="w-full h-full rounded-s-full ">

                </div>
                <div class="w-full h-40 p-10 mt-10 text-white bg-gray-900 rounded-e-full animate-fade-right">

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
            class="w-screen h-auto p-1 bg-gray-900 lg:h-screen lg:bg-gray-700 font-poppins">
            <div class="ml-0 text-left lg:ml-8 lg:text-center lg:mt-24 mt-28 font-poppins ">


                <span
                    class="px-8 py-3 ml-5 text-2xl font-bold text-white rounded-md xs:bg-gray-700 lg:bg-gray-900">CERTIFICATES</span>
            </div>





            <div x-show="shown" x-transition
                class="flex flex-row mx-20 place-content-between gap-x-5 animate-fade-left">

                <div
                    class="flex flex-col w-full p-0 mx-auto mt-10 text-white bg-gray-900 lg:p-10 content-evenly gap-x-10 h-96">

                    <div class="flex flex-col items-center justify-center mt-5 lg:flex-row lg:gap-x-5 gap-y-5">
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
            class="h-auto py-1 mt-20 bg-gray-900 lg:h-screen font-poppins" x-cloak>
            <div class="ml-5 text-left lg:text-center lg:mt-28 mt-96 font-poppins ">


                <span
                    class="px-8 py-3 ml-5 text-2xl font-bold text-white rounded-md xs:bg-gray-900 lg:bg-gray-900">PROJECTS</span>
            </div>





            <div x-show="shown" x-transition class="flex flex-row w-full p-0 place-content-between gap-x-5 " x-cloak>

                <div
                    class="flex flex-col w-screen mx-auto mt-10 text-white bg-gray-900 lg:h-screen xs:h-auto content-evenly gap-x-10 ">

                    <div
                        class="flex flex-col items-center justify-center w-full h-full text-xs lg:p-10 lg:h-96 lg:flex-row lg:gap-x-5 gap-y-5">


                        <div
                            class="flex flex-col p-4 bg-gray-800 rounded-md lg:h-52 xs:h-72  lg:w-60 xs:w-full items-center transition duration-300 ease-in-out delay-150  hover:-translate-y-0.5 hover:scale-105">
                            <img src="/todo.png" alt="" class="w-96 ">
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
                            class="flex flex-col p-4 bg-gray-800 rounded-md items-center lg:h-52 xs:h-72 lg:w-60 xs:w-full transition duration-300 ease-in-out delay-150  hover:-translate-y-0.5 hover:scale-105">
                            <img src="/role.png" alt="" class="w-96 ">
                            <label class="mt-6 text-center text-white " for="">USER ROLE MANAGEMENT
                            </label>
                            <a wire:navigate href="/login" class="w-full mt-5 text-end">
                                <span class="px-4 py-2 bg-gray-800 rounded-md hover:bg-gray-900">Visit &#8594;</span>
                            </a>
                        </div>
                        <div
                            class="flex flex-col p-4 bg-gray-800 rounded-md items-center lg:h-52 xs:h-72 lg:w-60 xs:w-full transition duration-300 ease-in-out delay-150  hover:-translate-y-0.5 hover:scale-105">
                            <img src="/print.png" alt="" class="w-96 ">
                            <label class="mt-6 text-center text-white " for="">PRINT PDF
                            </label>
                            <a wire:navigate href="/print_page" class="w-full mt-5 text-end">
                                <span class="px-4 py-2 bg-gray-800 rounded-md hover:bg-gray-900">Visit &#8594;</span>
                            </a>
                        </div>

                        <div
                            class="flex flex-col p-4 bg-gray-800 rounded-md items-center lg:h-52 xs:h-72 lg:w-60 xs:w-full transition duration-300 ease-in-out delay-150  hover:-translate-y-0.5 hover:scale-105">
                            <img src="/search.png" alt="" class="w-96 ">
                            <label class="mt-6 text-center text-white " for="">LIVE SEARCH
                            </label>
                            <a wire:navigate href="/live_search" class="w-full mt-5 text-end">
                                <span class="px-4 py-2 bg-gray-800 rounded-md hover:bg-gray-900">Visit &#8594;</span>
                            </a>
                        </div>

                        <div
                            class="flex flex-col p-4 bg-gray-800 rounded-md items-center lg:h-52 xs:h-72 lg:w-60 xs:w-full transition duration-300 ease-in-out delay-150  hover:-translate-y-0.5 hover:scale-105">
                            <img src="/leave.png" alt="" class="w-96 ">
                            <label class="mt-6 text-center text-white " for="">LEAVE MANAGEMENT SYSTEM
                            </label>
                            <a wire:navigate href="https://ehrisleaves.bislig.org/login" class="w-full mt-5 text-end">
                                <span class="px-4 py-2 bg-gray-800 rounded-md hover:bg-gray-900">Visit &#8594;</span>
                            </a>
                        </div>



















                    </div>




                </div>

            </div>


        </div>
    </section>
    <section>
        <div class="flex flex-col items-center justify-center w-screen h-40 py-1 text-center bg-gray-700 font-poppins">


            <div class="flex flex-row mt-5 gap-x-8">
                <a href="https://www.facebook.com/ladwalters/" target="_blank"><span class=""><i
                            class="fa-brands fa-facebook fa-2x" style="color:#00ff00"></i></span></a>

                <a href="https://x.com/walter_lad/" target="_blank"><span><i
                            class="fa-brands fa-square-x-twitter fa-2x" style="color:#00ff00"></i></span></a>

                <a href="https://github.com/taylerwards" target="_blank"><span><i class="fa-brands fa-github fa-2x"
                            style="color:#00ff00"></i></span></a>



            </div>

            <p class="mb-1 text-sm text-white">Designed & Built by Walter Lad</p>
            <p class="text-sm text-white">Copyright © 2025 - All right reserved</p>





        </div>
    </section>




</div>
