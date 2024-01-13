<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Panel Login</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="mx-auto col-12 col-lg-4">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>Login Panel</h2>
                        <h5 class="showMsg"></h5>
                    </div>
                    <form id="login-form">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required placeholder="Enter Your Email">
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required placeholder="Enter Your Password">
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary w-100">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <script>
        $(document).ready(function() {
            $('#login-form').on('submit', function(e) {
                e.preventDefault();
                let formData = $(this).serialize();
                $.ajax({
                    url: 'login-check.php',
                    method: 'POST',
                    data: formData,
                    success: function(res) {
                        let result = JSON.parse(res);
                        $('.showMsg').html(result.msg).addClass(result.cssClass);
                        setTimeout(() => {
                            $('.showMsg').html('').removeClass(result.cssClass);
                        }, 1800);
                        setTimeout(() => {
                            if (result.status == "success") {
                                window.location.href = "records.php";
                            }
                        }, 2000);
                    }
                })
            })
        });
    </script>
</body>

</html>