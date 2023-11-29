@extends('layouts.default')

@section('page-content')
<div class="text-black p-4 pt-16 flex items-center justify-center">
    <div class="flex flex-col items-center w-full max-w-5xl">

        <section class="mb-8">
            <h2 class="text-3xl font-bold mb-4 text-white">Recent Contibutions</h2>
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                <!-- Image and brief description for each contribution -->
                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="https://cdn-icons-png.flaticon.com/128/5971/5971593.png" alt="Contribution 1" class="w-full h-32 object-cover mb-2 rounded">
                    <p class="text-sm">ICC player of the tournament-2023 World Cup</p>
                </div>

                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="https://cdn-icons-png.flaticon.com/128/2706/2706804.png" alt="Contribution 1" class="w-full h-32 object-cover mb-2 rounded">
                    <p class="text-sm">Runners-up WTC 2023</p>
                </div>

                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="https://t3.ftcdn.net/jpg/06/11/56/24/240_F_611562408_YA0oQ8ajo60Bdx5MCk9v6DKJxuumayDX.jpg" alt="Contribution 1" class="w-full h-32 object-cover mb-2 rounded">
                    <p class="text-sm">Semi-finalists of ICC T20 WC 2021</p>
                </div>

                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="https://cdn-icons-png.flaticon.com/128/2706/2706804.png" alt="Contribution 1" class="w-full h-32 object-cover mb-2 rounded">
                    <p class="text-sm">Runners-up WTC 2021</p>
                </div>
                <!-- Repeat for other contributions -->
            </div>
        </section>

        <!-- Nikola Tesla's Inventions -->
        <section class="mb-8">
            <h2 class="text-3xl font-bold mb-4 text-white">Awards</h2>
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                <!-- Image and brief description for each invention -->
                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/en/7/7f/Arjun_Award.jpg" alt="Invention 1" class="w-full h-32 object-cover mb-2 rounded">
                    <p class="text-sm">Arjuna Award-2013</p>
                </div>

                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXveKZEx4JrIYuDo8DwPKlgbRV_A1gGJtLtA&usqp=CAU" alt="Invention 1" class="w-full h-32 object-cover mb-2 rounded">
                    <p class="text-sm">Khel Ratna Award-2018</p>
                </div>

                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVaWt5J_49Q8tU_ujPQdF4sV1PubX3WuDpkA&usqp=CAU" alt="Invention 1" class="w-full h-32 object-cover mb-2 rounded">
                    <p class="text-sm">Padma Shri-2017</p>
                </div>

                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/CEAT_Logo.svg/375px-CEAT_Logo.svg.png" alt="Invention 1" class="w-full h-32 object-cover mb-2 rounded">
                    <p class="text-sm">CEAT International Cricketer-12,14,18,19</p>
                </div>
                <!-- Repeat for other inventions -->
            </div>
        </section>

        <!-- Nikola Tesla's Awards -->
        <section class="mb-8">
            <h2 class="text-3xl font-bold mb-4 text-white">Awards</h2>
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                <!-- Image and brief description for each award -->
                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="https://upload.wikimedia.org/wikipedia/en/d/dd/Sir_Garfield_Sobers_Trophy.jpeg" alt="Award 1" class="w-full h-32 object-cover mb-2 rounded">
                    <p class="text-sm">ICC Men's Cricketer of the DECADE-11 to 20</p>
                </div>

                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScVuuo5-JzBxZBDr3n9RBKKGASi4HntOO_KAWFNBxJdAEdc_YaWp9wSV75h8ce3_S_fYU&usqp=CAU" alt="Award 1" class="w-full h-32 object-cover mb-2 rounded">
                    <p class="text-sm">Wisden's Leading Cricketer in the World-16,17,18</p>
                </div>

                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_4BQnLiNGeSHScpug8ST8EEecdR1Ak61vDw&usqp=CAU" alt="Award 1" class="w-full h-32 object-cover mb-2 rounded">
                    <p class="text-sm">IPL Orange Cap Award-2016</p>
                </div>

                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScVuuo5-JzBxZBDr3n9RBKKGASi4HntOO_KAWFNBxJdAEdc_YaWp9wSV75h8ce3_S_fYU&usqp=CAU" alt="Award 1" class="w-full h-32 object-cover mb-2 rounded">
                    <p class="text-sm">ICC Men's Cricketer of the Year-17,18</p>
                </div>
                <!-- Repeat for other awards -->
            </div>
        </section>


    </div>
</div>
@endsection
