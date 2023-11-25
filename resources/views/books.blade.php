@extends('layouts.default')
@section('page-content')
    <section class="py-20 min-h-screen flex items-center">
        <div class="max-w-screen-lg mx-auto">
            <h2 class="text-6xl text-center mb-6">These are some books on Virat Kohli</h2>
            <h3 class="text-4xl text-center  text-gray-200 mb-6">Who is Bhaskar Bidyanta?</h3>
            <p class="mb-6 text-left">
                Winning like Virat. Think and Succeed like Kohli.
            </p><br>
            <p class="mb-6 text-left">
                Virat Kohli. The Best in the World.
            </p><br>
            <div class="mb-6 text-left">
                What Would Virat Kohli Do?
            </div><br>
            <div class="text-center">
                <a href="{{route('home')}}" class="inline-block bg-pink-500 text-center py-2 px-4 rounded
                hover:bg-purple-500 transition">Go Home</a>
            </div>
        </div>
    </section>
@endsection
