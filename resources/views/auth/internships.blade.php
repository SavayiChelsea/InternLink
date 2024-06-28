<!-- resources/views/internships.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!---box icons link -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <title>Internships </title>
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/internships.css') }}" />

</head>
<body>
    @include('layouts.header')

    <div class="box">
        <div class="search-box">
            <input type="text" id="search-input" placeholder="Type here...">
            <div id="autocomplete-list" class="autocomplete-suggestions"></div>
            <label for="" class="icon">
                <i class="fas fa-search"></i>
            </label>
        </div>
        <div class="internship-container" id="internship-container">
            <div class="internship" data-title="Internship Title 1" data-company="Company Name 1" data-duration="3 months" data-category="IT" data-location="Location 1">
                <h3></h3>
                <p class="company"></p>
                <p class="location"></p>
                <p class="duration"></p>
                <p class="category"></p>
                <button>Apply Now</button>
            </div>
            <div class="internship" data-title="Internship Title 2" data-company="Company Name 2" data-duration="6 months" data-category="Marketing" data-location="Location 2">
                <h3></h3>
                <p class="company"></p>
                <p class="location"></p>
                <p class="duration"></p>
                <p class="category"></p>
                <button>Apply Now</button>
            </div>
            <!-- Add more internship listings as needed -->
        </div>
    </div>

   <script src="{{ asset('js/homepage.js') }}"></script>
</body>
</html>
