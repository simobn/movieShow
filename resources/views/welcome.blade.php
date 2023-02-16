<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MTDAHL</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/jquery-3.6.3.js')}}"></script>
        <!-- Styles -->
        <style>
            body{
                scroll-behavior: smooth;
            }
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
            .videos-grid {
                display:grid;
                grid-template-columns:1fr 1fr;
                grid-column-gap: 30px;
            }

            .videos-grid-video {
            }

            .videos-grid-video > iframe {
                height:420px;
            }
        </style>
    </head>
    <body class="antialiased bg-black">
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
                                <a href="#upcoming" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Upcoming Screenings</a>
                            </li>
                            <li>
                                <a href="#sound_track" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Soundtrack</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="text-center max-w-3xl mx-auto absolute top-[50%] lef-[50%] z-20" >
            This is an epic view into the workings and non-working interactions of an inner city youthful adult man - woman 1983 couple. The couple act out a critical view of the imbalance within their union and the innovative/abusive methods they use to resolve that which stands in between the success of their one-sided love affair. The viewer should prepare to be surprised and shocked.
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
                    <img class="  rounded-t-lg h-72 w-72  md:rounded-none md:rounded-l-lg" src="{{asset('images/Maya Jai Pinson photo.jpeg')}}" alt="">
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
            </div>

        </div>
        <div class="w-full flex justify-end my-28" >
            <div  class="p-10 flex flex-col flex-wrap items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-4xl ml-28 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 relative mr-28"
                  style="background-color: #E3DFD1">
                <div class="w-72 h-72 absolute -left-16 -top-16 rounded-tr-3xl overflow-hidden">
                    <img class="  rounded-t-lg h-72 w-72  md:rounded-none md:rounded-l-lg" src="{{asset('images/SashaAnglin.jpeg')}}" alt="">
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="ml-48 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">SASHA ANGLIN</h5>
                    <h3 class="ml-48 mb-1 text-xs font-bold tracking-tight text-gray-900 dark:text-white ca">Actress</h3>
                    <p class=" ml-48 mb-3 font-normal text-gray-700 dark:text-gray-400">Sasha-Gaye Anglin is originally from Spanish Town, Jamaica and now resides in the city of Philadelphia.
                        She has a background in theater, commercial, and film work and recently made her directorial debut with
                        the Zoom production “Ama &amp; Coltrane.” Her training credits include the studying of Meisner’s acting
                        techniques. </p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 indent-48">Sasha would like to take this opportunity to thank her Lord &amp; Savior Jesus Christ for graces
                        that could never be enumerated, as well as thank everyone who has supported her this far. </p>
                </div>
            </div>

        </div>
        <div class="w-full" >
            <div  class="p-10 flex flex-col flex-wrap items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-4xl ml-28 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 relative"
                  style="background-color: #E3DFD1">
                <div class="w-72 h-72 absolute -left-16 -top-16 rounded-tr-3xl overflow-hidden">
                    <img class="  rounded-t-lg h-72 w-72  md:rounded-none md:rounded-l-lg" src="{{asset('images/AdrianZeigler.jpg')}}" alt="">
                </div>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="ml-48 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Adrian Zeigler</h5>
                    <h3 class="ml-48 mb-1 text-xs font-bold tracking-tight text-gray-900 dark:text-white">Actor, Voice Over Talent, Poet, Producer, Director, & Writer.</h3>
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
            </div>

        </div>
        <div class="w-full flex justify-end my-28" >
            <div  class="p-10 flex flex-col flex-wrap items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-4xl ml-28 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 relative mr-28"
                  style="background-color: #E3DFD1">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class=" mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Larry O. Harrison</h5>
                    <h3 class="mb-1 text-xs font-bold tracking-tight text-gray-900 dark:text-white ca">Writer, Playwright, & Executive Producer</h3>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Larry O. Harrison was born December 17, 1954 in Washington, D.C. as the youngest of 3 children born to Edward and Elizabeth Harrison.
                        He has lived and studied in Washington, D.C., Maryland, Texas, and San Francisco. He is the father of 4  in which he raised 3
                        of his children individually following the death of his spouse Millian Harrison in 2003. He has been educated in both public and private schools
                        inclusive of seven different colleges/universities resulting in various professional certifications and a B.A. in Theatre Arts/Playwriting.
                    </p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> Mr. Harrison has created a variety of poetic, stage, and life reflective literature such as "For What Man Has Left Undone (cc 1982); "Much To Do About Her Love" (cc1983);"Tales of Juvenile Jail"; "Poetic Works of Hesasolophi"; and " From G to Me" to mention a few.
                        Mr. Harrison has served within the artistic community as a Concert Promoter, Music DJ, Theatre House Manager, Entertainment Security Agent for Night Clubs and Entertainment Persons, Role Play Actor for Educational Videos, and Stage Crew Member for Stage and Musical Performances within Private and Educational Venues.
                        Mr. Harrison is currently dividing his time between creative writing projects, teaching martial arts, facilitating judicial mediations for D.C. Superior Court, and Assisting in the raising of his grandchildren.. </p>
                </div>
            </div>

        </div>
    </div>
{{--    biography section ends here--}}
    <div class="w-full bg-cover bg-black" id="relatioship_advices">
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
                    <span id="previous" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                        </svg>

                    </span>
                    <span class="mt-4" id="count">1</span>
                    <span>/</span>
                    <span class="mb-4">2</span>
                    <span id="next" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-cover bg-black" id="what_i_loved">
        <div class="w-full h-screen bg-black py-20 flex flex-wrap">
            <div class="w-3/4 h-full flex">
                <div class="w-1/12 flex flex-col text-white items-center justify-center mx-auto">
                    <span id="wil_previous" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                        </svg>
                    </span>
                    <span class="mt-4" id="wil_count">1</span>
                    <span>/</span>
                    <span class="mb-4">2</span>
                    <span id="wil_next" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </div>
                <div class="w-11/12 h-full relative">
                    <video  controls src="{{asset('videos/v4.mp4')}}" class="w-full h-full" id="wilon-play">
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
                        <video class="w-full cursor-pointer" src="{{asset('videos/v3.mp4')}}" id="wilsmall-video"></video>
                        <p class="font-bold">the god father</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container  mx-auto">
        <div class="w-full py-20">
            <h1 class="font-bold p-8 my-8 text-2xl text-center text-white ">Upcoming Screenings</h1>
        </div>
        <div class="videos-grid" id="upcoming">
            @forelse($scenes as $movie)
                <div class="videos-grid-video">
                    <h5 id="videos-grid text-white">
                        {{$movie->name}}
                    </h5>
                    <video  controls src="{{$movie->image_url}}" class="w-full h-full" id="on-play">
                        <source src="{{$movie->image_url}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            @empty
                <h1 class="mx-auto text-white">no upcoming Screens yet</h1>
            @endforelse

        </div>
    </div>

    <div class="container mx-auto bg-black" >
        <div class="w-full py-20">
            <h1 class="font-bold p-8 my-8 text-2xl text-center text-white ">
                MTDAHL Soundtrack
            </h1>
        </div>
        <div class="videos-grid" id="sound_track">
            <div class="videos-grid-video">
                <h5 id="videos-grid">
                    1. Preparing mifold for use
                </h5>
                <iframe width="100%" height="420" src="https://www.youtube.com/embed/hcytiqpvy-I" title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>

            <div class="videos-grid-video">
                <h5 id="videos-grid">
                    2. Securing the child in the mifold seat
                </h5>
                <iframe width="100%" height="420" src="https://www.youtube.com/embed/-AfBa0KkDK4" title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>

            <div class="videos-grid-video">
                <h5 id="videos-grid">
                    3. Who can use mifold
                </h5>
                <iframe width="100%" height="420px"  src="https://www.youtube.com/embed/JLQDDlnv1xY" title="YouTube video player"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>


        </div>
    </div>

    <script>
        // $('#small-video').on('click',function (e) {
        //     let toPlay = $(e.target)[0].src;
        //     let nextPlay = $("#on-play").attr('src')
        //     //clear on play src
        //     var currentVideo = $("#on-play");
        //     // Create a new video element with updated source
        //     var newVideo = $('<video controls class="w-full h-full">').attr("src", toPlay);
        //     newVideo.html(`<source src="${toPlay}" type="video/mp4">`)
        //     // Replace the current video element with the new one
        //     currentVideo.replaceWith(newVideo);
        //
        //
        //     let smallVideo = $('#small-video')
        //     let newSmallVideo = $('<video  class="w-full cursor-pointer" id="small-video">').attr("src", nextPlay);
        //     smallVideo.replaceWith(newSmallVideo)
        // })
        // $('#wilsmall-video').on('click',function (e) {
        //     toggleWilVideos()
        // })
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

        $('#wil_previous').click(function (e) {
            let count = $('#wil_count').html()
            if(count === 2 || count === '2'){
                $('#wil_count').html('1')
                toggleWilVideos()
            }
        });

        $('#wil_next').click(function (e) {
            let count = $('#wil_count').html()
            if(count === 1 || count === '1'){
                $('#wil_count').html('2')
                toggleWilVideos()
            }
        });

        $('#previous').click(function (e) {
            let count = $('#count').html()
            if(count === 2 || count === '2'){
                $('#count').html('1')
                toggleVideos()
            }
        });

        $('#next').click(function (e) {
            let count = $('#wil_count').html()
            if(count === 1 || count === '1'){
                $('#count').html('2')
                toggleVideos()
            }
        });

        function toggleWilVideos(){
            let toPlay = $('#wilsmall-video').attr('src');
            let nextPlay = $("#wilon-play").attr('src')
            // //clear on play src
            var currentVideo = $("#wilon-play");
            // // Create a new video element with updated source
            var newVideo = $('<video controls class="w-full h-full" id="wilon-play">').attr("src", toPlay);
            newVideo.html(`<source src="${toPlay}" type="video/mp4"  >`)
            // // Replace the current video element with the new one
            currentVideo.replaceWith(newVideo);
            //
            //
            let smallVideo = $('#wilsmall-video')
            let newSmallVideo = $('<video  class="w-full cursor-pointer" id="wilsmall-video">').attr("src", nextPlay);
            smallVideo.replaceWith(newSmallVideo)
        }


        function toggleVideos(){
            let toPlay = $('#small-video').attr('src');
            let nextPlay = $("#on-play").attr('src')
            //clear on play src
            var currentVideo = $("#on-play");
            // Create a new video element with updated source
            var newVideo = $('<video controls class="w-full h-full" id="on-play">').attr("src", toPlay);
            newVideo.html(`<source src="${toPlay}" type="video/mp4">`)
            // Replace the current video element with the new one
            currentVideo.replaceWith(newVideo);


            let smallVideo = $('#small-video')
            let newSmallVideo = $('<video  class="w-full cursor-pointer" id="small-video">').attr("src", nextPlay);
            smallVideo.replaceWith(newSmallVideo)
        }
    </script>
    </body>
</html>
