@extends('layouts.default')

@section('page-content')
<div class="bg-white text-black p-4 pt-16 flex items-center justify-center">
    <div class="flex flex-col items-center w-full max-w-5xl">
        <!-- Nikola Tesla's Contributions -->
        <section class="mb-8">
            <h2 class="text-3xl font-bold mb-4">Accolades</h2>
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
                    <p class="text-sm">Quarter-finalists of ICC T20 WC 2021</p>
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
            <h2 class="text-3xl font-bold mb-4">Inventions</h2>
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                <!-- Image and brief description for each invention -->
                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="invention_image_1.jpg" alt="Invention 1" class="w-full h-32 object-cover mb-2 rounded">
                    <p class="text-sm">Brief description of Invention 1.</p>
                </div>

                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="invention_image_1.jpg" alt="Invention 1" class="w-full h-32 object-cover mb-2 rounded">
                    <p class="text-sm">Brief description of Invention 1.</p>
                </div>

                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="invention_image_1.jpg" alt="Invention 1" class="w-full h-32 object-cover mb-2 rounded">
                    <p class="text-sm">Brief description of Invention 1.</p>
                </div>

                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="invention_image_1.jpg" alt="Invention 1" class="w-full h-32 object-cover mb-2 rounded">
                    <p class="text-sm">Brief description of Invention 1.</p>
                </div>
                <!-- Repeat for other inventions -->
            </div>
        </section>

        <!-- Nikola Tesla's Awards -->
        <section class="mb-8">
            <h2 class="text-3xl font-bold mb-4">Awards</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Image and brief description for each award -->
                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="award_image_1.jpg" alt="Award 1" class="w-full h-32 object-cover mb-2 rounded">
                    <p class="text-sm">Brief description of Award 1.</p>
                </div>

                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="award_image_1.jpg" alt="Award 1" class="w-full h-32 object-cover mb-2 rounded">
                    <p class="text-sm">Brief description of Award 1.</p>
                </div>
                <!-- Repeat for other awards -->
            </div>
        </section>

        <!-- Nikola Tesla's Books -->
        <section>
            <h2 class="text-3xl font-bold mb-4">Books</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Image and brief description for each book -->
                <div class="bg-gray-200 p-4 rounded text-center">
                    <img src="book_image_1.jpg" alt="Book 1" class="w-full h-32 object-cover mb-2 rounded">
                    <p class="text-sm">Brief description of Book 1.</p>
                </div>
                <!-- Repeat for other books -->
            </div>
        </section>
    </div>
</div>
@endsection
