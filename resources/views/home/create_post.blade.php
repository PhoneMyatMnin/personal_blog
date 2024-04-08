<!DOCTYPE html>
<html lang="en">

<head>
    <!-- css link -->
    @include('home.homecss')
    <style type="text/css">
        .div_deg {
            text-align: center;
        }

        .title_deg {
            font-size: 30px;
            font-weight: bold;
            color: black;
        }

        label {
            display: inline-block;
            width: 200px;
            color: black;
            font-size: 18px;
            font-weight: bold;
        }

        .field_deg {
            padding: 25px;
        }
    </style>
    @include('home.homecss')
</head>

<body>
    @include('sweetalert::alert')
    <!-- header section start -->
    <div class="header_section">
        @include('home.header')
    </div>
    <div class="div_deg">
        <h3 class="title_deg">Add post</h3>
        <form action="{{ url('user_post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="field_deg">
                    <label for="">Title</label>
                    <input type="text" name="title">
                </div>
                <div class="field_deg">
                    <label for="">Description</label>
                    <textarea name="description" id=""></textarea>
                </div>
                <div class="field_deg">
                    <label for="">Add Image</label>
                    <input type="file" name="image">
                </div>
            </div>
            <div class="field_deg">

                <input type="submit" value="Add post" class="btn btn-primary">


            </div>
            <a href="{{ url('/') }}" class="btn btn-lg btn-secondary mt-3" type="button">Back</a>
        </form>
    </div>


    @include('home.footer')


</body>

</html>
