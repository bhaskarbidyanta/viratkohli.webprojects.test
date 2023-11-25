@extends('layouts.default')
<section class="py-20">
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
      <title>Tailwind CSS 2D Table</title>
    </head>
    <body class="p-4">

      <table class="min-w-full bg-white border border-gray-300">
        <thead>
          <tr>
            <th class="py-2 px-4 border-b"></th>
            <th class="py-2 px-4 border-b">Matches</th>
            <th class="py-2 px-4 border-b">Innings</th>
            <th class="py-2 px-4 border-b">Runs</th>
            <th class="py-2 px-4 border-b">Avg</th>
            <th class="py-2 px-4 border-b">SR</th>
            <th class="py-2 px-4 border-b">100</th>
            <th class="py-2 px-4 border-b">50</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="py-2 px-4 border-b">Test</td>
            <td class="py-2 px-4 border-b">111</td>
            <td class="py-2 px-4 border-b">187</td>
            <td class="py-2 px-4 border-b">8676</td>
            <td class="py-2 px-4 border-b">49.3</td>
            <td class="py-2 px-4 border-b">55.23</td>
            <td class="py-2 px-4 border-b">29</td>
            <td class="py-2 px-4 border-b">29</td>

          </tr>
          <tr>
            <td class="py-2 px-4 border-b">ODI</td>
            <td class="py-2 px-4 border-b">292</td>
            <td class="py-2 px-4 border-b">280</td>
            <td class="py-2 px-4 border-b">13848</td>
            <td class="py-2 px-4 border-b">58.68</td>
            <td class="py-2 px-4 border-b">93.59</td>
            <td class="py-2 px-4 border-b">50</td>
            <td class="py-2 px-4 border-b">72</td>
          </tr>
          <tr>
            <td class="py-2 px-4 border-b">T20I</td>
            <td class="py-2 px-4 border-b">115</td>
            <td class="py-2 px-4 border-b">107</td>
            <td class="py-2 px-4 border-b">4008</td>
            <td class="py-2 px-4 border-b">52.74</td>
            <td class="py-2 px-4 border-b">137.97</td>
            <td class="py-2 px-4 border-b">1</td>
            <td class="py-2 px-4 border-b">37</td>
          </tr>
          <!-- Add more rows and data as needed -->
        </tbody>
      </table>

    </body>
    </html>

</section>
