<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
</head>

<body>

    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->

        @include('admin.navbar')
        <!-- partial -->

        <div class="main-panel">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                        x
                    </button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding-top: 15px">
                    <label for="">Doctor Name</label>
                    <input type="text" name="name" id="" style="color: black" placeholder="Enter Name">
                </div>
                <div style="padding-top: 15px">
                    <label for="">Phone Number</label>
                    <input type="text" name="phone" id="" style="color: black" placeholder="Enter Number">
                </div>
                <div style="padding-top: 15px">
                    <label for="">Speciality</label>
                    <select name="speciality" style="color: black; width:200px" name="" id="">
                        <option>--Select--</option>
                        <option value="skin">skin</option>
                        <option value="heart">heart</option>
                        <option value="eye">eye</option>
                        <option value="nose">nose</option>
                    </select>
                </div>
                <div style="padding-top: 15px">
                    <label for="">Room No</label>
                    <input type="text" name="room" id="" style="color: black"
                        placeholder="Enter room number">
                </div>
                <div style="padding-top: 15px">
                    <label for="">Doctor Image</label>
                    <input type="file" name="file" id="">
                </div>
                <div style="padding-top: 15px">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>

        </div>

    </div>
    <!-- main-panel ends -->

    <!-- page-body-wrapper ends -->

    @include('admin.script')
</body>

</html>
