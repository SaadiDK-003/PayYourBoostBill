<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
    <title>Users list</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Date</th>
                            <th>Campaign</th>
                            <th>Customer Details</th>
                            <th>Phone Number</th>
                            <th>Card Number</th>
                            <th>Status</th>
                            <th>Notes</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>$320,800</td>
                            <td>---</td>
                            <td>---</td>
                            <td>---</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>$320,800</td>
                            <td>---</td>
                            <td>---</td>
                            <td>---</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>Date</th>
                            <th>Campaign</th>
                            <th>Customer Details</th>
                            <th>Phone Number</th>
                            <th>Card Number</th>
                            <th>Status</th>
                            <th>Notes</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>

    <script>
        new DataTable('#example', {
            responsive: true
        });
    </script>
</body>

</html>