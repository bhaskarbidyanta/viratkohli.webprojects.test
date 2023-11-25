@extends('layouts.default')

@section('page-content')
    <section class="relative min-h-screen flex items-center">
        <div class="container mx-auto text-center">
            <h2 class="class text-4xl sm:text-8xl">Get to <span class="text-pink-500">know</span></h2>
            <h3 class="text-2xl sm:text-4xl italic">Virat Kohli</h3>
        </div>

        <div class="absolute bottom-8 left-0 right-0 p-20">
            <p class="text-center">Scroll to learn more</p>
        </div>

    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Introduction</h3>
            <h4 class="text-xl mb-3 text-gray-200">Short Description</h4>
            <p class="mb-6">
                Virat Kohli ( born 5 November 1988) is an Indian international cricketer and the former captain of the Indian national
                cricket team. He currently represents Royal Challengers Bangalore in the IPL and Delhi in domestic cricket. Kohli is
                widely regarded as one of the greatest batsmen in the history of the sport.[3] He is the highest run scorer in T20I
                and IPL. In 2020, the International Cricket Council named him the male cricketer of the decade. Kohli is currently
                fourth-highest run-scorer in international cricket and stands second in the list of most international centuries
                scored. He also holds the record for scoring the most centuries in One Day International cricket.[4][5] Kohli was a member
                of the Indian team that won the 2011 Cricket World Cup and 2013 ICC Champions Trophy.


            </p>
            <a href="{{route('about')}}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Learn more</a>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">External Links</h3>
            <div class="flex flex-wrap -mx-2">
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">Cricbuzz Virat Kohli</h3>
                        <p class="text-gray-200 mb-3">
                            Look at his astounishing achievements and get inspired from him here!
                        </p>
                        <a href="{{url('https://www.cricbuzz.com/profiles/1413/virat-kohli#!#profile')}}" class="bg-pink-500 text-center py-2 px-4
                        rounded hover:bg-purple-500 transition">Cricbuzz Virat Kohli</a>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">ESPN Virat Kohli</h3>
                        <p class="text-gray-200 mb-3">
                            Look at his stats and the records set by him here!
                        </p>
                        <a href="{{url('https://www.espncricinfo.com/cricketers/virat-kohli-253802')}}" class="bg-pink-500 text-center py-2 px-4
                        rounded hover:bg-purple-500 transition">ESPN Virat Kohli</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

