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
            <input type="text" placeholder="Type here...">
            <label for="" class="icon">
                <i class="fas fa-search"></i>
            </label>
        </div>

    <div class="internship-container">
        <div class="internship">
            <h3>Internship Title 1</h3>
            <p>Company Name 1</p>
            <p>Location 1</p>
            <p>Duration: 3 months</p>
            <button>Apply Now</button>
        </div>
        <div class="internship">
            <h3>Internship Title 2</h3>
            <p>Company Name 2</p>
            <p>Location 2</p>
            <p>Duration: 6 months</p>
            <button>Apply Now</button>
        </div>
        <div class="internship">
            <h3>Internship Title 1</h3>
            <p>Company Name 1</p>
            <p>Location 1</p>
            <p>Duration: 3 months</p>
            <button>Apply Now</button>
        </div>
        <div class="internship">
            <h3>Internship Title 1</h3>
            <p>Company Name 1</p>
            <p>Location 1</p>
            <p>Duration: 3 months</p>
            <button>Apply Now</button>
        </div>

    </div>
</div>



   <script src="{{ asset('js/homepage.js') }}"></script>
</body>
</html>
