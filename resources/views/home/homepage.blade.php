<!DOCTYPE html>
<html lang="en">

<head>
    <!-- css link -->
    @include('home.homecss')
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        @include('home.header')

        <!-- banner section start -->
        {{-- @include('home.banner') --}}
        <!-- banner section end -->

    </div>
    <!-- header section end -->

    <!-- services section start -->
    <div>
        @include('home.services')
    </div>
    <!-- services section end -->

    <!-- about section start -->
    {{-- <div>
        @include('home.about')
    </div> --}}
    <!-- about section end -->

    <!-- footer section start -->
    <div>
        @include('home.footer')
    </div>

</body>

</html>
