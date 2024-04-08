<!DOCTYPE html>
<html lang="en">

<head>
    <!-- css link -->
    <base href="/public">
    @include('home.homecss')
    <style>

        .div_deg
        {
            text-align: center;
        }

        .img_deg
        {
            height: 150px;
            width: 250px;
            margin: auto;
        }

        label
        {
            font-size: 18px;
            font-weight: bold;
            width: 200px;
        }

        .input_deg
        {
            padding: 30px;
        }

        .title_deg
        {
            padding: 30px;
            font-size: 30px;
            font-weight: bold;

        }

    </style>
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        @include('home.header')

    </div>

    <div class="div_deg">
        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="buttton" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{ session()->get('message') }}
        </div>

        @endif
        <h1 class="title_deg">Update Post</h1>
        <form action="{{ url('update_post_data',$data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input_deg">
                <label for="">Title </label>
                <input type="text" name="title" value="{{ $data->title }}">
            </div>

            <div class="input_deg">
                <label for="">Description </label>
                <textarea name="description" id="" >{{ $data->descriptiom }}</textarea>
            </div>

            <div class="input_deg">
                <label for="">Current Image </label>
                <img class="img_deg" src="/postimage/{{ $data->image }}" alt="">
            </div>

            <div class="input_deg">
                <label for="">Change Image </label>
                <input type="file" name="image">
            </div>

            <div class="input_deg">

                <input type="submit" class="btn btn-dark " name="image" value="Update">
            </div>

        </form>
    </div>






    <div>
        @include('home.footer')
    </div>

</body>

</html>
