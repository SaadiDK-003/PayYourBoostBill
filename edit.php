<?php
require_once 'config.php';
$eid = $_GET['id'];
$get_query = $con->query("SELECT * FROM `boost_bill` WHERE `id`='$eid'");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Edit Page</title>
</head>

<body>
    <?php
    if (mysqli_num_rows($get_query) > 0) {
        $eData = mysqli_fetch_object($get_query);
    ?>

        <div class="container my-5 boost-form edit">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto rounded">
                    <?php
                    if (isset($_POST['mobileNumber']) && isset($_POST['email'])) {
                        // $newVal = $_POST['amount'] + $processingFee;
                        $values = array();
                        foreach ($_POST as $key => $value) {
                            // if ($key == 'amount') {
                            //     $_POST[$key] = $newVal;
                            //     $values[] .= "$key = '" . $newVal . "'";
                            // } else {
                            $values[] .= "$key = '" . $value . "'";
                            // }
                        }
                        $updQ = $con->query("UPDATE `boost_bill` SET " . join(', ', $values) . " WHERE `id`='$eid'");
                        if ($updQ) {
                    ?>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h4 class="alert alert-success">Updated Successfully.</h4>
                                    <script>
                                        setTimeout(() => {
                                            window.location.href = "/clientarea/records.php";
                                        }, 1000);
                                    </script>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <form method="post" id="boostForm">
                        <!-- First Step -->
                        <div id="first-step" class="row">
                            <div class="col-12 text-center">
                                <h3 class="fw-bold mb-4 ls-1">Refill Your Boost Mobile</h3>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="mobileNumber">Enter Your Boost Mobile Number</label>
                                    <input type="tel" name="mobileNumber" id="mobileNumber" class="form-control" placeholder="+1 XXX-XXX-XXXX" value="<?= $eData->mobileNumber ?>" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="renterMobileNumber">Re-enter Your Boost Mobile Number</label>
                                    <input type="tel" name="renterMobileNumber" id="renterMobileNumber" class="form-control" placeholder="+1 XXX-XXX-XXXX" value="<?= $eData->renterMobileNumber ?>" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-3">
                                <div class="form-group">
                                    <label for="boostPin">Enter 4-digit Boost pin</label>
                                    <input type="number" name="boostPin" id="boostPin" class="form-control" placeholder="XXXX" value="<?= $eData->boostPin ?>" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-3">
                                <div class="form-group">
                                    <label for="amount">Enter Amount</label>
                                    <input type="number" name="amount" id="amount" class="form-control" placeholder="Enter Amount Between $10 to $200" value="<?= $eData->amount ?>" required>
                                </div>
                            </div>
                        </div>
                        <!-- Second Step -->
                        <div id="second-step" class="row">
                            <div class="col-12 mt-4">
                                <h3 class="text-center fw-bold ls-1">Payment Information</h3>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="cardHolderName">Card Holder Name</label>
                                    <input type="text" name="cardHolderName" id="cardHolderName" class="form-control" placeholder="Name on Card" value="<?= $eData->cardHolderName ?>" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="cardNumber">Card Number</label>
                                    <input type="text" name="cardNumber" id="cardNumber" class="form-control" placeholder="4242424242424242" value="<?= $eData->cardNumber ?>" required>
                                </div>
                            </div>
                            <div class="col-4 mt-3">
                                <div class="form-group">
                                    <label for="cardMonth">Month</label>
                                    <select type="text" name="cardMonth" id="cardMonth" class="form-control" required>
                                        <option selected hidden value="<?= $eData->cardMonth ?>"><?= $eData->cardMonth ?></option>
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
                                        <option selected hidden value="<?= $eData->cardYear ?>"><?= $eData->cardYear ?></option>
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
                                    <input type="number" name="cvv" id="cvv" class="form-control" placeholder="XXX" value="<?= $eData->cvv ?>" required>
                                </div>
                            </div>
                            <div class="col-3"></div>
                            <div class="col-6 mt-3">
                                <div class="form-group">
                                    <label for="zipCode">zipCode</label>
                                    <input type="text" name="zipCode" id="zipCode" class="form-control" placeholder="XXXXX" value="<?= $eData->zipCode ?>" required>
                                </div>
                            </div>
                            <div class="col-3"></div>
                            <div class="col-12 mt-4">
                                <h3 class="text-center fw-bold ls-1">Address Details</h3>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" name="city" id="city" class="form-control" placeholder="New York City" value="<?= $eData->city ?>" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="state">State/Province</label>
                                <select name="state" id="state" class="form-control" required>
                                    <option selected hidden value="<?= $eData->state ?>"><?= $eData->state ?></option>
                                    <option value="Alabama">Alabama</option>
                                    <option value="Alaska">Alaska</option>
                                    <option value="Arizona">Arizona</option>
                                    <option value="Arkansas">Arkansas</option>
                                    <option value="California">California</option>
                                    <option value="Colorado">Colorado</option>
                                    <option value="Connecticut">Connecticut</option>
                                    <option value="Delaware">Delaware</option>
                                    <option value="District Of Columbia">District Of Columbia</option>
                                    <option value="Florida">Florida</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Idaho">Idaho</option>
                                    <option value="Illinois">Illinois</option>
                                    <option value="Indiana">Indiana</option>
                                    <option value="Iowa">Iowa</option>
                                    <option value="Kansas">Kansas</option>
                                    <option value="Kentucky">Kentucky</option>
                                    <option value="Louisiana">Louisiana</option>
                                    <option value="Maine">Maine</option>
                                    <option value="Maryland">Maryland</option>
                                    <option value="Massachusetts">Massachusetts</option>
                                    <option value="Michigan">Michigan</option>
                                    <option value="Minnesota">Minnesota</option>
                                    <option value="Mississippi">Mississippi</option>
                                    <option value="Missouri">Missouri</option>
                                    <option value="Montana">Montana</option>
                                    <option value="Nebraska">Nebraska</option>
                                    <option value="Nevada">Nevada</option>
                                    <option value="New Hampshire">New Hampshire</option>
                                    <option value="New Jersey">New Jersey</option>
                                    <option value="New Mexico">New Mexico</option>
                                    <option value="New York">New York</option>
                                    <option value="North Carolina">North Carolina</option>
                                    <option value="North Dakota">North Dakota</option>
                                    <option value="Ohio">Ohio</option>
                                    <option value="Oklahoma">Oklahoma</option>
                                    <option value="Oregon">Oregon</option>
                                    <option value="Pennsylvania">Pennsylvania</option>
                                    <option value="Rhode Island">Rhode Island</option>
                                    <option value="South Carolina">South Carolina</option>
                                    <option value="South Dakota">South Dakota</option>
                                    <option value="Tennessee">Tennessee</option>
                                    <option value="Texas">Texas</option>
                                    <option value="Utah">Utah</option>
                                    <option value="Vermont">Vermont</option>
                                    <option value="Virginia">Virginia</option>
                                    <option value="Washington">Washington</option>
                                    <option value="West Virginia">West Virginia</option>
                                    <option value="Wisconsin">Wisconsin</option>
                                    <option value="Wyoming">Wyoming</option>
                                </select>
                            </div>
                            <div class="col-12 mt-4">
                                <h3 class="text-center fw-bold ls-1">Contact Details</h3>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="cellNumber">Mobile Number</label>
                                    <input type="tel" name="cellNumber" id="cellNumber" class="form-control" placeholder="+1 XXX-XXX-XXXX" value="<?= $eData->cellNumber ?>" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="example@gmail.com" value="<?= $eData->email ?>" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-3">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="<?= $eData->status ?>" selected hidden><?= $eData->status ?></option>
                                        <option value="Pending">Pending</option>
                                        <option value="Cancelled">Cancelled</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-3">
                                <div class="form-group">
                                    <label for="campaign">Campaign</label>
                                    <input type="campaign" name="campaign" id="campaign" class="form-control" placeholder="Campaign" value="<?= $eData->campaign ?>" required>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="form-group">
                                    <label for="notes">Notes</label>
                                    <textarea type="notes" name="notes" id="notes" class="form-control" placeholder="Enter Notes" rows="3" required><?= $eData->notes ?></textarea>
                                </div>
                            </div>
                            <div class="col-6 mt-4">
                                <a href="/clientarea/records.php" class="btn btn-secondary w-100">Back</a>
                            </div>
                            <div class="col-6 mt-4">
                                <button type="submit" class="btn btn-primary w-100">Update</button>
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

            });
        </script>

    <?php } else { ?>
        <div class="container vh-100 d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>No Record Found!</h2>
                </div>
                <div class="col-12">
                    <a href="/clientarea/records.php" class="btn btn-primary w-100">Go Back</a>
                </div>
            </div>
        </div>
    <?php } ?>
</body>

</html>