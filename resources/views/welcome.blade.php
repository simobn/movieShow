<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/jquery-3.6.3.js')}}"></script>
        <!-- Styles -->
        <style>
            .btn-close {
                color: #aaaaaa;
                font-size: 20px;
                text-decoration: none;
                padding:10px;
                position: absolute;
                right: 7px;
                z-index: 99;
                cursor: pointer;
                top: 0;
            }
            .btn-close:hover {
                color: #919191;
            }
            .modale:before {
                content: "";
                display: none;
                background: rgba(0, 0, 0, 0.6);
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 10;
            }
            .opened:before {
                display: block;
            }
            .opened .modal-dialog {
                -webkit-transform: translate(0, 0);
                -ms-transform: translate(0, 0);
                transform: translate(0, 0);
                top: 20%;
            }
            .modal-dialog {
                border: #333333 solid 0px;
                border-radius: 5px;
                /*margin-left: -200px;*/
                text-align:center;
                position: fixed;
                left: 50%;
                transform: translateX(-50%)!important;
                top: -100%;
                z-index: 11;
                width: 720px;
                box-shadow:0 5px 10px rgba(0,0,0,0.3);
                -ms-transform: translate(0, -500%);
                -webkit-transition: -webkit-transform 0.3s ease-out;
                -moz-transition: -moz-transform 0.3s ease-out;
                -o-transition: -o-transform 0.3s ease-out;
                transition: transform 0.3s ease-out;
            }
            .modal-body {
                padding: 20px;
            }
            .modal-header {
                border-bottom: #eeeeee solid 1px;
            }
            .modal-header h2 {
                font-size: 20px;
            }

        </style>
    </head>
    <body class="antialiased">
    <div class="w-full min-h-screen bg-black text-white flex flex-col items-center justify-center relative" id="home">
        <header class="flex absolute top-0 w-full justify-end py-5">
            <nav class=" border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800 ">
                <div class="flex flex-wrap justify-between items-center mx-auto w-full">
                    <div class="hidden justify-end items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                        <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                            <li>
                                <a href="#home" class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white" aria-current="page">Home</a>
                            </li>
                            <li>
                                <a href="#bio" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Biographies of Team</a>
                            </li>
                            <li>
                                <a href="#relatioship_advices" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Relationship Advice</a>
                            </li>
                            <li>
                                <a href="#what_i_loved" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">What I Loved About MTDAHL</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Upcoming Screenings</a>
                            </li>
                            <li>
                                <a href="#sound_track" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Soundtracks</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="text-center max-w-3xl mx-auto absolute top-[50%] lef-[50%] z-20" >
            This is an epic view into the workings and non-working interactions of an inner city youthful adult man - woman 1983 couple. The couple act out a critical view of the imbalance within their union and the innovative/abusive methods they use to resolve that which stands in between the success of their one-sided Love affair. The viewer should prepare to be surprised and shocked.
            <button  class="openmodale border border-white rounded px-6 py-3 block mt-4 hover:bg-gray-100 hover:text-gray-500 mx-auto">
                watch trailer
            </button>
            <div class="modale" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-header">
                        <a href="#" class="btn-close closemodale" aria-hidden="true">&times;</a>
                    </div>
                </div>
            </div>
        </div>
        <p class="font-bold text-xl capitalize absolute top-[90px] left-0 p-16 ">MTDAHL</p>
        <p class="font-bold text-xl capitalize absolute top-[250px] left-0 p-16">MTDAHL</p>
        <p class="font-bold text-xl capitalize absolute top-[370px] left-0 p-16">MTDAHL</p>
        <p class="font-bold text-xl capitalize absolute bottom-[250px] left-0 p-16">MTDAHL</p>
        <p class="font-bold text-xl capitalize absolute bottom-[90px] left-0 p-16">MTDAHL</p>
        <p class="font-bold text-xl capitalize absolute top-[90px] left-[20%] p-16">MTDAHL</p>
        <p class="font-bold text-xl capitalize absolute bottom-[30px] left-[20%] p-16">MTDAHL</p>
        <p class="font-bold text-xl capitalize absolute bottom-[70px] left-[50%] p-16">MTDAHL</p>
        <p class="font-bold text-xl capitalize absolute top-[90px] right-[30%] p-16">MTDAHL</p>
        <p class="font-bold text-xl capitalize absolute top-[50%] right-[15%] p-16">MTDAHL</p>
    </div>

{{--    biography section starts here--}}
    <div class="w-full bg-cover py-16"  style="background-image: url({{asset('/images/back.jpg')}})" id="bio">
        <hr class="bg-white w-1/2 mx-auto" >
        <div class="w-full py-20">
            <h1 class="font-bold p-8 my-8 text-2xl text-center text-white ">Team Biographies</h1>
        </div>

        <div class="w-full" >
            <div  class="p-10 flex flex-col flex-wrap items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-4xl ml-28 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 relative"
                  style="background-color: #E3DFD1">
                <div class="w-72 h-72 absolute -left-16 -top-16 rounded-tr-3xl overflow-hidden">
                    <img class="object-cover  rounded-t-lg h-72 w-72  md:rounded-none md:rounded-l-lg" src="{{asset('images/MJAYPNG.PNG')}}" alt="">
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="ml-48 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Maya Jai Pinson</h5>
                    <h3 class="ml-48 mb-1 text-xs font-bold tracking-tight text-gray-900 dark:text-white">ACTRESS, DIRECTOR, WRITER, AND</h3>
                    <h3 class=" ml-48 mb-1 text-xs font-bold tracking-tight text-gray-900 dark:text-white">MOTIVATIONAL SPEAKER</h3>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 pl-48">Maya Jai Pinson is an accomplished Actress, Director, Writer, and Motivational Speaker with
                        striking natural beauty and the piercing gaze of a woman who exudes confidence and poise in
                        her thoughts and actions.</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 indent-48">As a young athlete, Maya was captain of her school's basketball, volleyball, and lacrosse teams.
                        As an accomplished musician, she played first chair cello in her school's orchestra while
                        maintaining a 4.0 GPA and balancing a social life with her friends, school, and extracurricular
                        activities.</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-48">In addition to acting, her accomplishments include being a published children's book author, co-
                        host of the "Voices of Our Teens" Radio Talk Show, a motivational speaker, athlete, musician,

                        and role model for other young actors and actresses. Maya has been on the Cover of LV
                        Magazine for two years. As well as a full college ride to pursue the film industry.

                        Maya has racked up some pretty impressive film credits as a diverse performer in front of the
                        camera and a gifted writer, director, and producer behind the camera. She’s the first nominee
                        from the Metropolitan area, two years straight, to win at the Young Artist Academy Awards in
                        Hollywood, California. She recently won the 2022 “Outstanding Director’s” award for her film
                        “I Dare You” and won the 2021 “Outstanding Writer” for her film I’m Ready. Maya is also
                        receiving an Achievement Awarded for one of DMV’s Top 10 Actresses on Saturday, April 1,
                        2023.

                        Maya is a two-time winner for the Young Artist Academy Award based in Hollywood, California,
                        for the second year in a row. She was a top nominee by the Nepal America International Film
                        Festival 2022 for her explosive performance. "Crime Scene." She also wrote, directed,
                        produced, and starred in the dynamic, heartfelt, award-winning film,
                        "I Dare You," which brings awareness to domestic violence.</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Some of her most recent film credits include “CHAAW”, "Much to Do About Her Love," "Untold
                        Secrets," "We the People," and Dexter's Heart (2022).
                        Maya is the lead voice-over character in a new award-winning animated series, "My Imaginary
                        Teacher." She's a co-writer on two new feature film scripts, which start filming in the summer
                        of 2023, and three films scheduled to be released in the same year. In an August 2022 interview
                        with New Scene Magazine, Maya says, "Three of my acting goals [are] starring in a thriller,
                        becoming an A-list actress, and winning an Oscar."

                        Maya Jai Pinson was born and raised in Washington, DC. When she isn't working hard on one
                        of her many projects, Maya enjoys traveling, reading, playing softball, basketball, and
                        volleyball, filming, writing, dancing, and bike riding. She loves watching thriller films, hanging
                        out with friends, and inspiring people to reach their dreams. You can follow her on Instagram
                        @mayajai04, on Facebook at MJai Pinson, and on YouTube at MJAIP Productions.</p>
                </div>
                <div class="w-1/2 mx-auto h-96 flex flex-wrap" style="background-color: #C48C2F">
                    <div class="w-1/2 h-1/2 p-8 text-center">
                        <div class="w-24 h-24 bg-yellow-500 rounded-full flex justify-center items-center mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 640 640">
                                <path d="M184.715 2.752h270.582C556.908 2.752 640 84.816 640 185.069v269.85c0 100.277-83.092 182.317-184.703 182.317H184.715C83.104 637.236 0 555.196 0 454.919v-269.85C0 84.816 83.103 2.752 184.715 2.752zm133.561 145.939c98.741 0 178.868 80.127 178.868 178.868 0 98.753-80.127 178.868-178.868 178.868-98.765 0-178.88-80.115-178.88-178.868 0-98.741 80.115-178.868 178.88-178.868zm0 60.414c65.387 0 118.454 53.056 118.454 118.454s-53.068 118.466-118.454 118.466c-65.41 0-118.466-53.067-118.466-118.466 0-65.398 53.056-118.454 118.466-118.454zM491.321 123.9c16.04 0 29.044 13.004 29.044 29.032 0 16.04-13.004 29.044-29.044 29.044-16.028 0-29.032-13.004-29.032-29.044 0-16.028 13.004-29.032 29.032-29.032zM206.825 54.58H433.21c85.005 0 154.526 69.178 154.526 153.712V435.81c0 84.532-69.52 153.699-154.526 153.699H206.825c-85.005 0-154.537-69.167-154.537-153.7V208.29c0-84.532 69.532-153.71 154.537-153.71z"/>
                            </svg>
                        </div>
                        <a href="#" class="text-white w-24 underline">MAYAJAI04</a>
                    </div>
                    <div class="w-1/2 h-1/2 p-8 text-center">
                        <div class="w-24 h-24 bg-yellow-500 rounded-full flex justify-center items-center mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64"  viewBox="0 0 333333 333333" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd">
                                <path d="M197917 62502h52080V0h-52080c-40201 0-72909 32709-72909 72909v31250H83337v62507h41659v166667h62506V166666h52080l10415-62506h-62496V72910c0-5648 4768-10415 10415-10415v6z" fill="#3b5998"/>
                            </svg>
                        </div>
                        <a href="#" class="text-white w-24 underline">MJAY PINSON</a>
                    </div>
                    <div class="w-1/2 h-1/2 p-8 text-center">
                        <div class="w-24 h-24 bg-yellow-500 rounded-full flex justify-center items-center mx-auto overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 122.88 122.88" style="enable-background:new 0 0 122.88 122.88" xml:space="preserve">
                                <style type="text/css">
                                    <![CDATA[ .st0{fill:#F5C518;}  ]]>
                                </style>
                                <g>
                                    <path class="st0" d="M18.43,0h86.02c10.18,0,18.43,8.25,18.43,18.43v86.02c0,10.18-8.25,18.43-18.43,18.43H18.43 C8.25,122.88,0,114.63,0,104.45l0-86.02C0,8.25,8.25,0,18.43,0L18.43,0z"/><path d="M24.96,78.72V44.16h-9.6v34.56H24.96L24.96,78.72z M45.36,44.16L43.2,60.24L42,51.6l-1.2-7.44l-12,0v34.56h8.16v-22.8 l3.36,22.8h6l3.12-23.28v23.28h8.16V44.16H45.36L45.36,44.16z M61.44,78.72V44.16h14.88c3.6,0,6.24,2.64,6.24,6v22.56 c0,3.36-2.64,6-6.24,6H61.44L61.44,78.72z M72.72,50.4l-2.16-0.24v22.56c1.2,0,2.16-0.24,2.4-0.72c0.48-0.48,0.48-1.92,0.48-4.32 V54.24v-2.88L72.72,50.4L72.72,50.4L72.72,50.4z M100.56,52.8h0.72c3.36,0,6.24,2.64,6.24,6v13.92c0,3.36-2.88,6-6.24,6l-0.72,0 c-1.92,0-3.84-0.96-5.04-2.64l-0.48,2.16H86.4V44.16h9.12V55.2C96.72,53.76,98.64,52.8,100.56,52.8L100.56,52.8z M98.64,69.6v-8.16 L98.4,58.8c-0.24-0.48-0.96-0.72-1.44-0.72c-0.48,0-1.2,0.24-1.44,0.72v13.68c0.24,0.48,0.96,0.72,1.44,0.72 c0.48,0,1.44-0.24,1.44-0.72L98.64,69.6L98.64,69.6z"/>
                                </g>
                            </svg>
                        </div>
                        <a href="#" class="text-white w-24 underline">MAYA JAY PINSON</a>
                    </div>
                    <div class="w-1/2 h-1/2 p-8 text-center">
                        <div class="w-24 h-24 bg-yellow-500 rounded-full flex justify-center items-center mx-auto overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" id="Layer_1" data-name="Layer 1" viewBox="0 0 122.88 86.43"><defs><style>.cls-1,.cls-2{fill-rule:evenodd;}.cls-2{fill:#fff;}</style></defs><title>black-and-white-youtube</title><path class="cls-1" d="M121.63,18.65s-1.2-8.47-4.9-12.19c-4.67-4.89-9.91-4.92-12.31-5.21C87.24,0,61.43,0,61.43,0h0s-25.8,0-43,1.25c-2.4.29-7.63.31-12.31,5.21C2.4,10.18,1.22,18.65,1.22,18.65A187.15,187.15,0,0,0,0,38.55v9.31a187.65,187.65,0,0,0,1.22,19.9S2.42,76.23,6.09,80c4.68,4.9,10.82,4.74,13.57,5.26,9.83.94,41.78,1.22,41.78,1.22s25.83,0,43-1.27c2.41-.29,7.64-.32,12.32-5.21,3.69-3.72,4.89-12.2,4.89-12.2a187.15,187.15,0,0,0,1.22-19.9V38.54a189.26,189.26,0,0,0-1.25-19.9Z"/><polygon class="cls-2" points="48.71 59.16 48.71 24.63 81.9 41.95 48.71 59.16 48.71 59.16"/></svg>
                        </div>
                        <a href="#" class="text-white w-24 underline">MJAYP PRODUCTIONS</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="w-full flex justify-end my-28" >
            <div  class="p-10 flex flex-col flex-wrap items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-4xl ml-28 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 relative mr-28"
                  style="background-color: #E3DFD1">
                <div class="w-72 h-72 absolute -left-16 -top-16 rounded-tr-3xl overflow-hidden">
                    <img class="object-cover  rounded-t-lg h-72 w-72  md:rounded-none md:rounded-l-lg" src="{{asset('images/SashaAnglin.jpeg')}}" alt="">
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="ml-48 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">SASHA ANGLIN</h5>
                    <h3 class="ml-48 mb-1 text-xs font-bold tracking-tight text-gray-900 dark:text-white ca">Theater, commercial</h3>
                    <p class=" ml-48 mb-3 font-normal text-gray-700 dark:text-gray-400">Sasha-Gaye Anglin is originally from Spanish Town, Jamaica and now resides in the city of Philadelphia.
                        She has a background in theater, commercial, and film work and recently made her directorial debut with
                        the Zoom production “Ama &amp; Coltrane.” Her training credits include the studying of Meisner’s acting
                        techniques. </p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 indent-48">Sasha would like to take this opportunity to thank her Lord &amp; Savior Jesus Christ for graces
                        that could never be enumerated, as well as thank everyone who has supported her this far. </p>
                </div>
                <div class="w-1/2 mx-auto h-96 flex flex-wrap" style="background-color: #C48C2F">
                    <div class="w-1/2 h-1/2 p-8 text-center">
                        <div class="w-24 h-24 bg-yellow-500 rounded-full flex justify-center items-center mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 640 640">
                                <path d="M184.715 2.752h270.582C556.908 2.752 640 84.816 640 185.069v269.85c0 100.277-83.092 182.317-184.703 182.317H184.715C83.104 637.236 0 555.196 0 454.919v-269.85C0 84.816 83.103 2.752 184.715 2.752zm133.561 145.939c98.741 0 178.868 80.127 178.868 178.868 0 98.753-80.127 178.868-178.868 178.868-98.765 0-178.88-80.115-178.88-178.868 0-98.741 80.115-178.868 178.88-178.868zm0 60.414c65.387 0 118.454 53.056 118.454 118.454s-53.068 118.466-118.454 118.466c-65.41 0-118.466-53.067-118.466-118.466 0-65.398 53.056-118.454 118.466-118.454zM491.321 123.9c16.04 0 29.044 13.004 29.044 29.032 0 16.04-13.004 29.044-29.044 29.044-16.028 0-29.032-13.004-29.032-29.044 0-16.028 13.004-29.032 29.032-29.032zM206.825 54.58H433.21c85.005 0 154.526 69.178 154.526 153.712V435.81c0 84.532-69.52 153.699-154.526 153.699H206.825c-85.005 0-154.537-69.167-154.537-153.7V208.29c0-84.532 69.532-153.71 154.537-153.71z"/>
                            </svg>
                        </div>
                        <a href="#" class="text-white w-24 underline">MAYAJAI04</a>
                    </div>
                    <div class="w-1/2 h-1/2 p-8 text-center">
                        <div class="w-24 h-24 bg-yellow-500 rounded-full flex justify-center items-center mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64"  viewBox="0 0 333333 333333" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd">
                                <path d="M197917 62502h52080V0h-52080c-40201 0-72909 32709-72909 72909v31250H83337v62507h41659v166667h62506V166666h52080l10415-62506h-62496V72910c0-5648 4768-10415 10415-10415v6z" fill="#3b5998"/>
                            </svg>
                        </div>
                        <a href="#" class="text-white w-24 underline">MJAY PINSON</a>
                    </div>
                    <div class="w-1/2 h-1/2 p-8 text-center">
                        <div class="w-24 h-24 bg-yellow-500 rounded-full flex justify-center items-center mx-auto overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 122.88 122.88" style="enable-background:new 0 0 122.88 122.88" xml:space="preserve">
                                <style type="text/css">
                                    <![CDATA[ .st0{fill:#F5C518;}  ]]>
                                </style>
                                <g>
                                    <path class="st0" d="M18.43,0h86.02c10.18,0,18.43,8.25,18.43,18.43v86.02c0,10.18-8.25,18.43-18.43,18.43H18.43 C8.25,122.88,0,114.63,0,104.45l0-86.02C0,8.25,8.25,0,18.43,0L18.43,0z"/><path d="M24.96,78.72V44.16h-9.6v34.56H24.96L24.96,78.72z M45.36,44.16L43.2,60.24L42,51.6l-1.2-7.44l-12,0v34.56h8.16v-22.8 l3.36,22.8h6l3.12-23.28v23.28h8.16V44.16H45.36L45.36,44.16z M61.44,78.72V44.16h14.88c3.6,0,6.24,2.64,6.24,6v22.56 c0,3.36-2.64,6-6.24,6H61.44L61.44,78.72z M72.72,50.4l-2.16-0.24v22.56c1.2,0,2.16-0.24,2.4-0.72c0.48-0.48,0.48-1.92,0.48-4.32 V54.24v-2.88L72.72,50.4L72.72,50.4L72.72,50.4z M100.56,52.8h0.72c3.36,0,6.24,2.64,6.24,6v13.92c0,3.36-2.88,6-6.24,6l-0.72,0 c-1.92,0-3.84-0.96-5.04-2.64l-0.48,2.16H86.4V44.16h9.12V55.2C96.72,53.76,98.64,52.8,100.56,52.8L100.56,52.8z M98.64,69.6v-8.16 L98.4,58.8c-0.24-0.48-0.96-0.72-1.44-0.72c-0.48,0-1.2,0.24-1.44,0.72v13.68c0.24,0.48,0.96,0.72,1.44,0.72 c0.48,0,1.44-0.24,1.44-0.72L98.64,69.6L98.64,69.6z"/>
                                </g>
                            </svg>
                        </div>
                        <a href="#" class="text-white w-24 underline">MAYA JAY PINSON</a>
                    </div>
                    <div class="w-1/2 h-1/2 p-8 text-center">
                        <div class="w-24 h-24 bg-yellow-500 rounded-full flex justify-center items-center mx-auto overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" id="Layer_1" data-name="Layer 1" viewBox="0 0 122.88 86.43"><defs><style>.cls-1,.cls-2{fill-rule:evenodd;}.cls-2{fill:#fff;}</style></defs><title>black-and-white-youtube</title><path class="cls-1" d="M121.63,18.65s-1.2-8.47-4.9-12.19c-4.67-4.89-9.91-4.92-12.31-5.21C87.24,0,61.43,0,61.43,0h0s-25.8,0-43,1.25c-2.4.29-7.63.31-12.31,5.21C2.4,10.18,1.22,18.65,1.22,18.65A187.15,187.15,0,0,0,0,38.55v9.31a187.65,187.65,0,0,0,1.22,19.9S2.42,76.23,6.09,80c4.68,4.9,10.82,4.74,13.57,5.26,9.83.94,41.78,1.22,41.78,1.22s25.83,0,43-1.27c2.41-.29,7.64-.32,12.32-5.21,3.69-3.72,4.89-12.2,4.89-12.2a187.15,187.15,0,0,0,1.22-19.9V38.54a189.26,189.26,0,0,0-1.25-19.9Z"/><polygon class="cls-2" points="48.71 59.16 48.71 24.63 81.9 41.95 48.71 59.16 48.71 59.16"/></svg>
                        </div>
                        <a href="#" class="text-white w-24 underline">MJAYP PRODUCTIONS</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="w-full" >
            <div  class="p-10 flex flex-col flex-wrap items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-4xl ml-28 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 relative"
                  style="background-color: #E3DFD1">
                <div class="w-72 h-72 absolute -left-16 -top-16 rounded-tr-3xl overflow-hidden">
                    <img class="object-cover  rounded-t-lg h-72 w-72  md:rounded-none md:rounded-l-lg" src="{{asset('images/AdrianZeigler.jpg')}}" alt="">
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="ml-48 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Adrian Zeigler</h5>
                    <h3 class="ml-48 mb-1 text-xs font-bold tracking-tight text-gray-900 dark:text-white">Theatre,
                        Television Production,</h3>
                    <h3 class="ml-48 mb-1 text-xs font-bold tracking-tight text-gray-900 dark:text-white">Music, Acting</h3>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 pl-48">Adrian Zeigler (A.Z.) was born in Prince George’s Hospital in Cheverly, MD to Dr.
                        Ronald &amp; Mrs. Valerie Zeigler. Upper Marlboro and Mitchellville, MD are Adrian’s hometowns.
                        During early adolescent years, Adrian took a strong liking to the Performing Arts (Theatre,
                        Television Production, Music, Acting, etc.),</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 indent-48">Culinary Arts, and African history. At Kettering
                        Elementary School in Upper Marlboro, MD, young Adrian played the trumpet in the school band
                        and sang in the choir. Writing short stories along with poetry &amp; spoken word was always
                        healing for Adrian since childhood days. After graduating from Largo High School in 1999,
                        Adrian moved to Baltimore City for 2 years and earned an Associate’s Degree in Professional
                        Cooking &amp; Baking from Baltimore International College. Adrian attended Bowie State
                        University from 2002 to 2005 in earning a Bachelor of Arts in Fine Arts. In 2006, Adrian moved
                        to Los Angeles, CA to pursue a career in the Entertainment Industry. There were pleasant and
                        difficult times and through it all, it made Adrian Zeigler persevere in resilience. By 2013, the
                        academia world was missed by Adrian. He attended (then) University of Maryland University
                        College (UMUC) until 2017 in earning two Master’s Degrees- 1.) Marketing &amp; Management and
                        2.) Distance Education.
                        Original poetry and spoken word by Adrian Zeigler (A.K.A. Brotha ZeIG/Formerly
                        known as Brotha ZeIGler) has been performed at the Black Family Reunion in Washington,
                        DC, Kafa House, Bohemian Tavern, Howard University, BOWIE STATE UNIVERSITY,
                        University of MD- College Park, MD, the Legendary Apollo Theater in Harlem, NY, World
                        Stage of Leimert Park, KAOS Network, open mic venues (east &amp; west coast), and various
                        showcases. In 2010, Adrian wrote and performed a one-man stage play entitled LENOX. It
                        deals with substance abuse and people healing from things they don’t want to discuss. Adrian has
                        performed this one-man stage play at various rehab centers and Theaters throughout Los
                        Angeles, CA. Adrian’s credits are <a href="https://www.imdb.com/name/nm4730557/?ref_=fn_al_nm_1" class="font-bold">in the following link</a> .
                        Performing live Theatre is A.Z.’s first love. Some theatre credits are The Wiz, Ain’t Misbehavin’,
                        The Meeting, Monster, A Raisin in the Sun, etc. Passionate hobbies for Adrian Zeigler are
                        cooking, hiking in the mountains of Los Angeles trails, writing, watching a good series on tv,
                        exercising, and the continuance pursuance of PeAcE and Blessings.</p>

                </div>
                <div class="w-1/2 mx-auto h-96 flex flex-wrap" style="background-color: #C48C2F">
                    <div class="w-1/2 h-1/2 p-8 text-center">
                        <div class="w-24 h-24 bg-yellow-500 rounded-full flex justify-center items-center mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 640 640">
                                <path d="M184.715 2.752h270.582C556.908 2.752 640 84.816 640 185.069v269.85c0 100.277-83.092 182.317-184.703 182.317H184.715C83.104 637.236 0 555.196 0 454.919v-269.85C0 84.816 83.103 2.752 184.715 2.752zm133.561 145.939c98.741 0 178.868 80.127 178.868 178.868 0 98.753-80.127 178.868-178.868 178.868-98.765 0-178.88-80.115-178.88-178.868 0-98.741 80.115-178.868 178.88-178.868zm0 60.414c65.387 0 118.454 53.056 118.454 118.454s-53.068 118.466-118.454 118.466c-65.41 0-118.466-53.067-118.466-118.466 0-65.398 53.056-118.454 118.466-118.454zM491.321 123.9c16.04 0 29.044 13.004 29.044 29.032 0 16.04-13.004 29.044-29.044 29.044-16.028 0-29.032-13.004-29.032-29.044 0-16.028 13.004-29.032 29.032-29.032zM206.825 54.58H433.21c85.005 0 154.526 69.178 154.526 153.712V435.81c0 84.532-69.52 153.699-154.526 153.699H206.825c-85.005 0-154.537-69.167-154.537-153.7V208.29c0-84.532 69.532-153.71 154.537-153.71z"/>
                            </svg>
                        </div>
                        <a href="#" class="text-white w-24 underline">MAYAJAI04</a>
                    </div>
                    <div class="w-1/2 h-1/2 p-8 text-center">
                        <div class="w-24 h-24 bg-yellow-500 rounded-full flex justify-center items-center mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64"  viewBox="0 0 333333 333333" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd">
                                <path d="M197917 62502h52080V0h-52080c-40201 0-72909 32709-72909 72909v31250H83337v62507h41659v166667h62506V166666h52080l10415-62506h-62496V72910c0-5648 4768-10415 10415-10415v6z" fill="#3b5998"/>
                            </svg>
                        </div>
                        <a href="#" class="text-white w-24 underline">MJAY PINSON</a>
                    </div>
                    <div class="w-1/2 h-1/2 p-8 text-center">
                        <div class="w-24 h-24 bg-yellow-500 rounded-full flex justify-center items-center mx-auto overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 122.88 122.88" style="enable-background:new 0 0 122.88 122.88" xml:space="preserve">
                                <style type="text/css">
                                    <![CDATA[ .st0{fill:#F5C518;}  ]]>
                                </style>
                                <g>
                                    <path class="st0" d="M18.43,0h86.02c10.18,0,18.43,8.25,18.43,18.43v86.02c0,10.18-8.25,18.43-18.43,18.43H18.43 C8.25,122.88,0,114.63,0,104.45l0-86.02C0,8.25,8.25,0,18.43,0L18.43,0z"/><path d="M24.96,78.72V44.16h-9.6v34.56H24.96L24.96,78.72z M45.36,44.16L43.2,60.24L42,51.6l-1.2-7.44l-12,0v34.56h8.16v-22.8 l3.36,22.8h6l3.12-23.28v23.28h8.16V44.16H45.36L45.36,44.16z M61.44,78.72V44.16h14.88c3.6,0,6.24,2.64,6.24,6v22.56 c0,3.36-2.64,6-6.24,6H61.44L61.44,78.72z M72.72,50.4l-2.16-0.24v22.56c1.2,0,2.16-0.24,2.4-0.72c0.48-0.48,0.48-1.92,0.48-4.32 V54.24v-2.88L72.72,50.4L72.72,50.4L72.72,50.4z M100.56,52.8h0.72c3.36,0,6.24,2.64,6.24,6v13.92c0,3.36-2.88,6-6.24,6l-0.72,0 c-1.92,0-3.84-0.96-5.04-2.64l-0.48,2.16H86.4V44.16h9.12V55.2C96.72,53.76,98.64,52.8,100.56,52.8L100.56,52.8z M98.64,69.6v-8.16 L98.4,58.8c-0.24-0.48-0.96-0.72-1.44-0.72c-0.48,0-1.2,0.24-1.44,0.72v13.68c0.24,0.48,0.96,0.72,1.44,0.72 c0.48,0,1.44-0.24,1.44-0.72L98.64,69.6L98.64,69.6z"/>
                                </g>
                            </svg>
                        </div>
                        <a href="#" class="text-white w-24 underline">MAYA JAY PINSON</a>
                    </div>
                    <div class="w-1/2 h-1/2 p-8 text-center">
                        <div class="w-24 h-24 bg-yellow-500 rounded-full flex justify-center items-center mx-auto overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" id="Layer_1" data-name="Layer 1" viewBox="0 0 122.88 86.43"><defs><style>.cls-1,.cls-2{fill-rule:evenodd;}.cls-2{fill:#fff;}</style></defs><title>black-and-white-youtube</title><path class="cls-1" d="M121.63,18.65s-1.2-8.47-4.9-12.19c-4.67-4.89-9.91-4.92-12.31-5.21C87.24,0,61.43,0,61.43,0h0s-25.8,0-43,1.25c-2.4.29-7.63.31-12.31,5.21C2.4,10.18,1.22,18.65,1.22,18.65A187.15,187.15,0,0,0,0,38.55v9.31a187.65,187.65,0,0,0,1.22,19.9S2.42,76.23,6.09,80c4.68,4.9,10.82,4.74,13.57,5.26,9.83.94,41.78,1.22,41.78,1.22s25.83,0,43-1.27c2.41-.29,7.64-.32,12.32-5.21,3.69-3.72,4.89-12.2,4.89-12.2a187.15,187.15,0,0,0,1.22-19.9V38.54a189.26,189.26,0,0,0-1.25-19.9Z"/><polygon class="cls-2" points="48.71 59.16 48.71 24.63 81.9 41.95 48.71 59.16 48.71 59.16"/></svg>
                        </div>
                        <a href="#" class="text-white w-24 underline">MJAYP PRODUCTIONS</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
{{--    biography section ends here--}}
    <div class="w-full bg-cover bg-black" id="what_i_loved">
        <div class="w-full h-screen bg-black py-20 flex flex-wrap">
            <div class="w-1/4 h-full flex flex-col items-center justify-between py-10">
                <div class="w-3/4 mx-auto text-left">
                    <h1 class="text-start text-6xl text-white font-bold">Videos</h1>
                    <h3 class="text-start text-3xl text-white font-bold mt-2">The best relationship advices</h3>
                </div>
                <div class="w-3/4 mx-auto text-left">
                    <h3 class="text-start text-xl text-white font-bold mt-2 w-2/3">up next</h3>
                    <div class="w-full h-60 ">
                        <video class="w-full cursor-pointer" src="{{asset('videos/v2.mp4')}}" id="small-video"></video>
                        <p class="font-bold">the god father</p>
                    </div>
                </div>

            </div>
            <div class="w-3/4 h-full flex">
                <div class="w-11/12 h-full relative">
                    <video  controls src="{{asset('videos/v1.mp4')}}" class="w-full h-full" id="on-play">
                        <source src="{{asset('videos/v1.mp4')}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="w-1/12 flex flex-col text-white items-center justify-center mx-auto">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                        </svg>

                    </span>
                    <span class="mt-4">1</span>
                    <span>/</span>
                    <span class="mb-4">2</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-cover bg-black" id="relatioship_advices">
        <div class="w-full h-screen bg-black py-20 flex flex-wrap">
            <div class="w-3/4 h-full flex">
                <div class="w-1/12 flex flex-col text-white items-center justify-center mx-auto">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                        </svg>

                    </span>
                    <span class="mt-4">1</span>
                    <span>/</span>
                    <span class="mb-4">2</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </div>
                <div class="w-11/12 h-full relative">
                    <video  controls src="{{asset('videos/v4.mp4')}}" class="w-full h-full" id="on-play">
                        <source src="{{asset('videos/v4.mp4')}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

            </div>
            <div class="w-1/4 h-full flex flex-col items-center justify-between py-10">
                <div class="w-3/4 mx-auto text-left">
                    <h3 class="text-start text-3xl text-white font-bold mt-2">What I loved about </h3>
                    <h1 class="text-start text-6xl text-white font-bold">MTDAHL</h1>
                </div>
                <div class="w-3/4 mx-auto text-left">
                    <h3 class="text-start text-xl text-white font-bold mt-2 w-2/3">up next</h3>
                    <div class="w-full h-60 ">
                        <video class="w-full cursor-pointer" src="{{asset('videos/v3.mp4')}}" id="small-video"></video>
                        <p class="font-bold">the god father</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="w-full mx-auto bg-black" >
        <div class="w-full py-20">
            <h1 class="font-bold p-8 my-8 text-2xl text-center text-white ">
                MTDAHL Soundtrack
            </h1>
        </div>
        <div class="w-full h-screen flex  items-center" id="sound_track">
            <iframe width="1280" height="720" class="mx-auto" src="https://www.youtube.com/embed/hcytiqpvy-I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($scenes as $movie)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ $movie->image_url }}" class="card-img-top" alt="{{ $movie->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->name }}</h5>
                            <p class="card-text">{{ $movie->description }}</p>
                            <p class="card-text">
                                <small class="text-muted">{{ $movie->release_date }}</small>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        $('#small-video').on('click',function (e) {
            let toPlay = $(e.target)[0].src;
            let nextPlay = $("#on-play").attr('src')
            //clear on play src
            var currentVideo = $("#on-play");
            // Create a new video element with updated source
            var newVideo = $('<video controls class="w-full h-full">').attr("src", toPlay);
            newVideo.html(`<source src="${toPlay}" type="video/mp4">`)
            // Replace the current video element with the new one
            currentVideo.replaceWith(newVideo);


            let smallVideo = $('#small-video')
            let newSmallVideo = $('<video  class="w-full cursor-pointer" id="small-video">').attr("src", nextPlay);
            smallVideo.replaceWith(newSmallVideo)
        })

        $('.openmodale').click(function (e) {
            e.preventDefault();
            $('.modale').addClass('opened');
            let html = `
                    <video  controls src="{{asset('videos/trailer.mp4')}}" class="w-[720px] h-[480px]" id="trailer-play">
                        <source src="{{asset('videos/trailer.mp4')}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>`
            $('.modal-dialog').append(html)
        });
        $('.closemodale').click(function (e) {
            e.preventDefault();
            // $('.modal-dialog').empty()
            $('#trailer-play').remove()
            $('.modale').removeClass('opened');
        });
    </script>
    </body>
</html>
