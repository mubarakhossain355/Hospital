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
            <form action="{{ url('editdoctor', $doctors->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding-top: 15px">
                    <label for="">Doctor Name</label>
                    <input type="text" value="{{ $doctors->name }}" name="name" id=""
                        style="color: black" placeholder="Enter Name">
                </div>
                <div style="padding-top: 15px">
                    <label for="">Phone Number</label>
                    <input type="text" value="{{ $doctors->phone }}" name="phone" id=""
                        style="color: black" placeholder="Enter Number">
                </div>
                <div style="padding-top: 15px">
                    <label for="">Speciality</label>
                    <input type="text" name="speciality" value="{{ $doctors->speciality }}" style="color: black"
                        id="">
                </div>
                <div style="padding-top: 15px">
                    <label for="">Room No</label>
                    <input type="text" name="room" value="{{ $doctors->room }}" id=""
                        style="color: black" placeholder="Enter room number">
                </div>
                <div style="padding-top: 15px">
                    <label for="">Change Image</label>
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
