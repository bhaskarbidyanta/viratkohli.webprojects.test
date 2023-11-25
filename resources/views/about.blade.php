@extends('layouts.default')
@section('page-content')
    <section class="py-20 min-h-screen flex items-center">
        <div class="max-w-screen-lg mx-auto">
            <h2 class="text-6xl text-center mb-6">About</h2>
            <h3 class="text-4xl text-center  text-gray-200 mb-6">Who is Bhaskar Bidyanta?</h3>
            <p class="mb-6 text-left">
                A spunky, chubby teenager with gelled hair shot to fame after leading India to glory
                 in the Under-19 World Cup at Kuala Lumpur in early 2008. In an Indian team filled with
                  saint-like icons worthy of their own hagiographies, Virat Kohli, with his most un-Indian, 'bad-boy' intensity, would clearly be an outcast.
            </p><br>
            <p class="mb-6 text-left">
                Kohli has a seemingly hot head on his shoulders, but he channels all his anger while he
                is batting. Known to be an aggressive batsman always on the lookout for runs, he has a
                fairly sound , albeit slightly unconventional technique, which makes him judge the length
                of the ball earlier than most, and amazingly quick wrists to run his hands through the
                ball, even against fast bowlers. He is equally adept against pace and spin, and never looks
                ungainly at the crease. With nimble foot-movement against the spinners, he is known to be quite
                destructive when the situation demands it. He has had to fill some rather big shoes of his predecessors,
                and has done an admirable job to say the least.
            </p><br>
            <div class="mb-6 text-left">
                It became a no-brainer when he was asked to captain the Bangalore franchise on a permanent basis from 2012
                and it also translated into more consistency with the bat. Kohli soon turned into a fan favourite even as runs
                flowed from his bat and eventually becoming the leading-run scorer in the history of IPL. Circa, 2016 - the
                India and RCB captain blasted 973 runs - the most by any player in the history of the game and it included four
                hundreds - the most by a batsman in a single edition. Alas, all this didn't translate into a title triumph - one
                that has kept Kohli and Bangalore waiting so far (As of March 2023).
            </div><br>
            <div class="text-center">
                <a href="{{route('home')}}" class="inline-block bg-pink-500 text-center py-2 px-4 rounded
                hover:bg-purple-500 transition">Go Home</a>
            </div>
        </div>
    </section>
@endsection
