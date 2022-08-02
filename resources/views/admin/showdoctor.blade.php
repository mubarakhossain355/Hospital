<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->

        @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
            <div class="container">
                <div style="padding-right: 200px; padding-top:50px">
                    <table>
                        <tr>
                            <th style="padding: 10px">Doctor Name</th>
                            <th style="padding: 10px">Phone</th>
                            <th style="padding: 10px">Speciality</th>
                            <th style="padding: 10px">Room No</th>
                            <th style="padding: 10px">Image</th>
                            <th style="padding: 10px">Update</th>
                            <th style="padding: 10px">Delete</th>

                        </tr>
                        @foreach ($doctors as $doctor)
                            <tr style="background-color: skyblue">
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->phone }}</td>
                                <td>{{ $doctor->speciality }}</td>
                                <td>{{ $doctor->room }}</td>
                                <td><img src="doctorimage/{{ $doctor->image }}" height="60" width="60"></td>
                                <td><a class="btn btn-primary" href="{{ url('updatedoctor', $doctor->id) }}">Update</a>
                                </td>
                                <td style="padding: 10px"><a onclick="return confirm('are you sure to confirm')"
                                        class="btn btn-danger" href="{{ url('deletedoctor', $doctor->id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>

        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->

    @include('admin.script')
</body>

</html>
