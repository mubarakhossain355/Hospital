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
                <div style="padding-right: 300px; padding-top:50px">
                    <table>
                        <tr>
                            <th style="padding: 10px">Customer Name</th>
                            <th style="padding: 10px">Email</th>
                            <th style="padding: 10px">Phone</th>
                            <th style="padding: 10px">Doctor Name</th>
                            <th style="padding: 10px">date</th>
                            <th style="padding: 10px">Message</th>
                            <th style="padding: 10px">Status</th>
                            <th style="padding: 10px">Approved</th>
                            <th style="padding: 10px">Cancel</th>

                        </tr>
                        @foreach ($appoint as $item)
                            <tr style="background-color: skyblue">
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->doctor }}</td>
                                <td>{{ $item->date }}</td>
                                <td>{{ $item->message }}</td>
                                <td>{{ $item->status }}</td>
                                <td><a class="btn btn-success" href="{{ url('approved', $item->id) }}">Approved</a></td>
                                <td><a class="btn btn-danger" href="{{ url('canceled', $item->id) }}">Cancel</a></td>
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
