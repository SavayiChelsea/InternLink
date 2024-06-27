<!-- resources/views/internships.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Internships </title>
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/applicants.css') }}" />

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
    </div>


   <div class="container ">
    <div class="slide">
        <div class="item" style="background-image: url('{{ asset('images/bg1.jpg') }}')">
            <div class="content">
                <div class="name">Internship1</div>
                <div class="des"> software related loreim ipsum dolor</div>
                <button>see more</button>
            </div>
        </div>

        <div class="item" style="background-image: url('{{ asset('images/bg2.jpg') }}')">
            <div class="content">
                <div class="name">Internship2</div>
                <div class="des"> software related loreim ipsum dolor</div>
                <button>see more</button>
            </div>
        </div>

        <div class="item" style="background-image: url('{{ asset('images/bg3.jpg') }}')">
            <div class="content">
                <div class="name">Internship 3</div>
                <div class="des"> IT related loreim ipsum dolor</div>
                <button>see more</button>
            </div>
        </div>

        <div class="item" style="background-image: url('{{ asset('images/bg1.jpg') }}')">
            <div class="content">
                <div class="name">Internship4</div>
                <div class="des"> software related loreim ipsum dolor</div>
                <button>see more</button>
            </div>
        </div>

        <div class="item" style="background-image: url('{{ asset('images/bg2.jpg') }}')">
            <div class="content">
                <div class="name">Internship5</div>
                <div class="des"> software related loreim ipsum dolor</div>
                <button>see more</button>
            </div>
        </div>

        <div class="item" style="background-image: url('{{ asset('images/bg3.jpg') }}')">
            <div class="content">
                <div class="name">Internship6</div>
                <div class="des"> software related loreim ipsum dolor</div>
                <button>see more</button>
            </div>
        </div>

        <div class="item" style="background-image: url('{{ asset('images/bg1.jpg') }}')">
            <div class="content">
                <div class="name">Internships</div>
                <div class="des"> software related loreim ipsum dolor</div>
                <button>see more</button>
            </div>
        </div>

        <div class="item" style="background-image: url('{{ asset('images/bg2.jpg') }}')">
            <div class="content">
                <div class="name">Internship8</div>
                <div class="des"> software related loreim ipsum dolor</div>
                <button>see more</button>
            </div>
        </div>
    </div>

    <div class="button">
        <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
        <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
   </div>

   <script src="{{ asset('js/applicants.js') }}"></script>
</body>
</html>
