@extends('layout')

@section('title', "Straw Theater")

@section('content')

    <!-- Nav Bar -->
    <nav class="font-sans text-center flex justify-between my-4 mx-auto container overflow-hidden mt-8 z-50 relative">
        <a href="/" class="toggleColour text-gray-700 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"><img src="images/cover.png" width="250px"></a>
        <ul class="text-sm text-grey-dark list-reset flex items-center">
            <button style='background: linear-gradient(45deg, #805AD5, #E7AEF3)' class="text-white ml-4 py-2 px-6 rounded bg-gray-800 font-bold hidden sm:block bg-purple-600" id="signup_btn">Signup to Get Notified</button>
        </ul>
    </nav>


    <!-- Hero Section -->
    <section class="-mt-24 font-sans container m-auto flex min-h-screen">

        <div class="flex-1 flex items-start flex-col justify-center">
            <h1 class="my-4 font-medium mt-32 md:mt-16 lg:mt-0 text-4xl text-center w-full px-2 text-gray-700 xl:text-5xl lg:text-4xl lg:px-0 font-black mb-8 md:text-5xl md:w-full lg:text-left lg:-mt-4">This is <span class="text-purple-600">First</span> online <span class="text-purple-500">Movie Theater</span></h1>
            <p class="leading-normal mb-12 pr-36 text-lg text-center w-full px-16 text-gray-500 leading-loose xl:pr-32 md:text-center md:px-32 sm:text-center lg:text-left lg:px-0">Subscribe to get informed when new Movies drop! Enter your mail address here:</p>
            <form action="https://yahoo.us4.list-manage.com/subscribe/post?u=b531ab082e7b631637491f975&amp;id=1fb90b4892" method="post" class="flex w-full px-16 xl:pr-32 lg:pr-16 md:px-32 lg:px-0">
                <input type="hidden" name="b_b531ab082e7b631637491f975_1fb90b4892" tabindex="-1" value="">
                <input class="bg-white border-2 border-gray-300 rounded py-2 px-4 block w-full focus:outline-none focus:border-purple-600 text-black input w-1/3" id="email" type="email" name="EMAIL" autofocus placeholder="jane@example.com">
                <button style='background: linear-gradient(45deg, #805AD5, #E7AEF3)' class="hover:bg-grey-darker text-white ml-4 py-2 px-6 rounded bg-purple-600 font-bold w-2/3">Submit</button>
            </form>
        </div>
        <div class="flex-1 hidden items-start flex-col justify-center lg:flex">
            <img src="images/undraw_online_media_62jb.svg" alt="">
        </div>

    </section>

    <svg width="100%" height="auto" class="w-full relative" viewBox="0 0 1370 65" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Desktop-HD" transform="translate(0.000000, -558.000000)" fill="#F9F9FC"><path d="M0,558 C243.726562,600.97601 472.059896,622.464014 685,622.464014 C897.940104,622.464014 1126.27344,600.97601 1370,558 L1370,622.464014 L0,622.464014 L0,558 Z" id="Rectangle-4"></path></g></g></svg>

    <!-- Features Section -->
    <section class="bg-gray-100">
    
        <div class="container max-w-5xl mx-auto mt-0 pb-24">
			
                <h2 class="w-full mb-16 pt-16 pt-4 text-5xl font-bold leading-tight text-center text-gray-700">Here we have</h2>
    
                <div class="flex flex-wrap mb-16">
                    <div class="w-1/6 sm:w-1/2 p-6 pl-48 pr-16">
                        <img src="images/undraw_Credit_card_3ed6.svg" alt="">
                    </div>
                    <div class="w-5/6 sm:w-1/2 p-6 pr-48">
                        <h3 class="text-3xl font-bold leading-none mb-3 mt-16 text-gray-700">Get your <span class="text-purple-500">Tickets </span>in a seconds</h3>
                        <p class="text-gray-600 mb-8">Buy your tickets in couple of seconds and watch the movies you've been waiting for with your friends</p>	
                    </div>
                    
                </div>
    
    
                <div class="flex flex-wrap flex-col-reverse sm:flex-row">
                    <div class="w-1/6 sm:w-1/2 p-6 pl-48 pr-16">
                        <img src="images/undraw_horror_movie_3988.svg" alt="">
                    </div>
                    <div class="w-5/6 sm:w-1/2 p-6 pr-48">
                        <div class="align-middle">
                            <h3 class="text-3xl font-bold leading-none mb-3 mt-16 text-gray-700">Your tickets are valid both on <span class="text-purple-500"> web </span> and <span class="text-purple-500">theater! </span></h3>
                            <p class="text-gray-600 mb-8">Did you buy tickets for a theater but you can't go anymore? No problem, with that tickets you can watch movies at home as well!<br><br>
                        </p></div>
                    </div>
                </div>

                <div class="flex flex-wrap flex-col-reverse sm:flex-row">
                    <div class="w-1/6 sm:w-1/2 p-6 pl-48 pr-16">
                        <img src="images/undraw_on_the_way_ldaq.svg" alt="">
                    </div>
                    <div class="w-5/6 sm:w-1/2 p-6 pr-48">
                        <div class="align-middle">
                            <h3 class="text-3xl font-bold leading-none mb-3 mt-16 text-gray-700">Your <span class="text-purple-500"> pop-corn & drinks </span> will be delivered by <span class="text-purple-500">Glovo! </span></h3>
                            <p class="text-gray-600 mb-8">Before you start watching movies you can request your pop-corn and drinks and it will be delivered in mere minutes!<br><br>
                        </p></div>
                    </div>
                </div>
    
            </div>

    </section>

    <svg width="100%" height="auto" class="w-full relative bg-gray-100" style="top:1px;" viewBox="0 0 1370 65" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Desktop-HD" transform="translate(0.000000, -558.000000)" fill="#5a67d8"><path d="M0,558 C243.726562,600.97601 472.059896,622.464014 685,622.464014 C897.940104,622.464014 1126.27344,600.97601 1370,558 L1370,622.464014 L0,622.464014 L0,558 Z" id="Rectangle-4"></path></g></g></svg>

@endsection
