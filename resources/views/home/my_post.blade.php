<!DOCTYPE html>
<html lang="en">

<head>
    <!-- css link -->
    @include('home.homecss')
    <style>
        .post_deg {
            padding: 30px;
            text-align: center;
        }

        .title_deg {
            font-size: 30px;
            font-weight: bold;
            padding: 15px;
        }

        .des_deg {
            font-size: 18px;
            font-weight: bold;
            padding: 15px;
        }

        .img_deg
        {
            height: 300px;
            width: 500px;
            padding: 30px;
            margin: auto;
        }
    </style>
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        @include('home.header')

        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="buttton" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{ session()->get('message') }}
        </div>

        @endif

        <!-- banner section start -->
    </div>
    @foreach ($data as $data)
        <div class="post_deg">
            <img class="img_deg" src="/postimage/{{ $data->image }}" alt="">
            <h4 class="title_deg">{{ $data->title }}</h4>
            <p class="des_deg">{{ $data->description }}</p>
            <a onclick="return confirm('Are you sure to delete this?')" href="{{ url('my_post_del',$data->id) }}" class="btn btn-danger">Delete</a>
            <a href="{{ url('post_update_page',$data->id) }}" class="btn btn-primary">Update</a>
            {{-- <a href="{{ url('/') }}" class="btn btn-secondary">Back</a> --}}

        </div>
    @endforeach

    <!-- header section end -->



    <!-- footer section start -->
    <div>
        @include('home.footer')
    </div>

</body>

</html>
