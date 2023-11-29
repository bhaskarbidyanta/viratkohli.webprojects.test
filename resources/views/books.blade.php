@extends('layouts.default')
@section('page-content')
    <section class="py-20 min-h-screen flex items-center">
        <div class="absolute bottom--10 left-90 right-10 max-w-md mx-auto flex-shrink justify-right hover:bg-black transition ">

            <img src="images/vk3.png" class="main-img">
        </div>
        <div class="text-center">
        <div class="max-w-screen-lg mx-auto">
            <h2 class="text-6xl text-center mb-6">These are some books on Virat Kohli</h2>



            <div class="mb-6 text-left">


            <ol class="mb-6 text-left">
                <li>Driven:The Virat Kohli Story,Vijay Lokapally,2016</li><br>
                <li>Winning like Virat. Think and Succeed like Kohli,Abhirup Bhattacharya,2017</li><br>
                <li>Virat Kohli. The Best in the World,Fred Nicholson,2019</li><br>
                <li>Virat Kohli:Reliable Rebel,C. Rajshekar Rao,2015</li><br>
                <li>Kohinoor of India,Chakrapani Srinivasa,2019</li><br>
            </ol>
            </div><br>
            <div>
                <a href="{{route('home')}}" class="inline-block bg-pink-500 text-center py-2 px-4 rounded
                hover:bg-purple-500 transition">Go Home</a>
            </div>
        </div>
    </section>
@endsection
