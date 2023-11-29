@extends('layouts.default')
@section('page-content')
<section class="py-20 min-h-screen flex items-center">
    <div class="absolute bottom--10 left-90 right-10 max-w-md mx-auto flex-shrink justify-right hover:bg-blue-500 transition ">

        <img src="images/vk1.png" class="main-img">
    </div>
    <div class="text-center">
    <div class="max-w-screen-lg mx-auto">
        <h2 class="text-6xl text-center mb-6">Social Media Links of Virat Kohli</h2>



        <div class="mb-6 text-left">


        <ol class="mb-6 text-left">
            <li><a href="https://www.instagram.com/virat.kohli/feed/?hl=en">
                <img src="https://cdn-icons-png.flaticon.com/128/4138/4138124.png" alt="Instagram Icon"><hp class="text-white text-3xl mb-6 uppercase font-black">
                    Virat <span class="text-orange-400">Kohli</span></p></li><br>
            <li><a href="https://www.facebook.com/virat.kohli/"><img src="https://cdn-icons-png.flaticon.com/128/5968/5968830.png" alt="Facebook Icon"><p class="text-white text-3xl mb-6 uppercase font-black">
                Virat <span class="text-black">Kohli</span></p></li><br>
            <li><a href="https://twitter.com/imVkohli"><img src="https://cdn-icons-png.flaticon.com/128/5968/5968764.png" alt="Twitter Icon"><p class="text-white text-3xl mb-6 uppercase font-black">
                Virat <span class="text-blue-500">Kohli</span></p></li><br>


        </ol>
        </div><br>
        <div>
            <a href="{{route('home')}}" class="inline-block bg-pink-500 text-center py-2 px-4 rounded
            hover:bg-purple-500 transition">Go Home</a>
        </div>
    </div>
</section>
@endsection
