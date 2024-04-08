<!DOCTYPE html>
<html lang="en">

<head>
    <!-- css link -->
    <base href="/public">
    @include('home.homecss')
</head>

<body>
    <!-- header section start -->
    <div class="header_section mb-5">
        @include('home.header')
    </div>

    <div style="text-align: center;" class="col-md-12">
        <div>
            <img style="padding: 20px; height: 400px; width: 550px; margin: auto" src="/postimage/{{ $post->image }}">
        </div>

        <h3><b>{{ $post->title }}</b></h3>
        <h4>{{ $post->description }}</h4>
        <p>Post by <b>{{ $post->name }}</b></p>

       <a href="{{ url('/') }}" class="btn btn-lg btn-secondary mt-3" type="button">Back</a>



    </div>



    @include('home.footer')
</body>

</html>
