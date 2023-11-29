@extends('layouts.default')
@section('page-content')


<section class="py-20">
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
      <title>Tailwind CSS 2D Table</title>
      @vite('resources/css/app.css')
    </head>
    <body class="p-4">

        <h2 class="font-extrabold ">Batting Stats</h2><br>
    <table class="min-w-full bg-black border border-black">

        <thead>
        <tr>
            <th class="py-2 px-4 border-b">FORMAT</th>
            <th class="py-2 px-4 border-b">Matches</th>
            <th class="py-2 px-4 border-b ">Innings</th>
            <th class="py-2 px-4 border-b">Runs</th>
            <th class="py-2 px-4 border-b">Avg</th>
            <th class="py-2 px-4 border-b">SR</th>
            <th class="py-2 px-4 border-b">100s</th>
            <th class="py-2 px-4 border-b">50s</th>
            <th class="py-2 px-4 border-b">4s</th>
            <th class="py-2 px-4 border-b">6s</th>
            <th class="py-2 px-4 border-b">HS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <th class="py-2 px-4 border-b">Tests</th>
            <td class="py-2 px-4 border-b">111</td>
            <td class="py-2 px-4 border-b">187</td>
            <td class="py-2 px-4 border-b">8676</td>
            <td class="py-2 px-4 border-b">49.29</td>
            <td class="py-2 px-4 border-b">55.23</td>
            <td class="py-2 px-4 border-b">29</td>
            <td class="py-2 px-4 border-b">29</td>
            <td class="py-2 px-4 border-b">966</td>
            <td class="py-2 px-4 border-b">24</td>
            <td class="py-2 px-4 border-b">254*</td>

        </tr>
        <tr>
            <th class="py-2 px-4 border-b">ODIs</th>
            <td class="py-2 px-4 border-b">292</td>
            <td class="py-2 px-4 border-b">280</td>
            <td class="py-2 px-4 border-b">13848</td>
            <td class="py-2 px-4 border-b">58.68</td>
            <td class="py-2 px-4 border-b">93.59</td>
            <td class="py-2 px-4 border-b">50</td>
            <td class="py-2 px-4 border-b">72</td>
            <td class="py-2 px-4 border-b">1294</td>
            <td class="py-2 px-4 border-b">151</td>
            <td class="py-2 px-4 border-b">183</td>
        </tr>
        <tr>
            <th class="py-2 px-4 border-b">T20Is</th>
            <td class="py-2 px-4 border-b">115</td>
            <td class="py-2 px-4 border-b">107</td>
            <td class="py-2 px-4 border-b">4008</td>
            <td class="py-2 px-4 border-b">52.73</td>
            <td class="py-2 px-4 border-b">137.96</td>
            <td class="py-2 px-4 border-b">1</td>
            <td class="py-2 px-4 border-b">37</td>
            <td class="py-2 px-4 border-b">356</td>
            <td class="py-2 px-4 border-b">117</td>
            <td class="py-2 px-4 border-b">122*</td>
        </tr>
        <tr>
            <th class="py-2 px-4 border-b">FC</th>
            <td class="py-2 px-4 border-b">143</td>
            <td class="py-2 px-4 border-b ">235</td>
            <td class="py-2 px-4 border-b">10925</td>
            <td class="py-2 px-4 border-b">50.34</td>
            <td class="py-2 px-4 border-b">55.70</td>
            <td class="py-2 px-4 border-b">36</td>
            <td class="py-2 px-4 border-b">37</td>
            <td class="py-2 px-4 border-b">1279</td>
            <td class="py-2 px-4 border-b">39</td>
            <td class="py-2 px-4 border-b">254*</td>
        </tr>
        <tr>
            <th class="py-2 px-4 border-b">List A</th>
            <td class="py-2 px-4 border-b">326</td>
            <td class="py-2 px-4 border-b ">313</td>
            <td class="py-2 px-4 border-b">15290</td>
            <td class="py-2 px-4 border-b">57.48</td>
            <td class="py-2 px-4 border-b">93.61</td>
            <td class="py-2 px-4 border-b">54</td>
            <td class="py-2 px-4 border-b">80</td>
            <td class="py-2 px-4 border-b">1458</td>
            <td class="py-2 px-4 border-b">175</td>
            <td class="py-2 px-4 border-b">183</td>
        </tr>
        <tr>
            <th class="py-2 px-4 border-b">T-20s</th>
            <td class="py-2 px-4 border-b">374</td>
            <td class="py-2 px-4 border-b ">357</td>
            <td class="py-2 px-4 border-b">11965</td>
            <td class="py-2 px-4 border-b">41.40</td>
            <td class="py-2 px-4 border-b">133.35</td>
            <td class="py-2 px-4 border-b">8</td>
            <td class="py-2 px-4 border-b">91</td>
            <td class="py-2 px-4 border-b">1069</td>
            <td class="py-2 px-4 border-b">371</td>
            <td class="py-2 px-4 border-b">122*</td>
        </tr>
        <!-- Add more rows and data as needed -->
      </tbody>
    </table>
</body>
</html>

</section>
@endsection
