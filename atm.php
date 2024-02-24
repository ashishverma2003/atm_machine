<?php
include 'php/atmoops.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["check_balance"])) {
        $result = "Current Balance: $".$atm->checkBalance();
    } elseif (isset($_POST["withdraw"])) {
        $result = $atm->withdraw($_POST["withdraw_amount"]);
    } elseif (isset($_POST["deposit"])) {
        $result = $atm->deposit($_POST["deposit_amount"]);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/atm.css">
    <title>ATM Web Interface</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 bg-dark atm-machine">
                <h1 class="text-center text-success">ATM Web Interface</h1>
                <form method="post">
                    <button class="btn btn-primary" type="submit" name="check_balance">Check Balance</button>
                </form>
                <form method="post">
                    <label for="withdraw_amount" class="fs-4 text-white">Withdraw Amount:</label>
                    <input class="form-control" type="number" name="withdraw_amount" required>
                    <button class="btn btn-success my-2" type="submit" name="withdraw">Withdraw</button>
                </form>
                <form method="post">
                    <label for="deposit_amount" class="fs-4 text-white">Deposit Amount:</label>
                    <input class="form-control" type="number" name="deposit_amount" required>
                    <button class="btn btn-success my-2" type="submit" name="deposit">Deposit</button>
                </form>
                <?php
                    if (isset($result)) {
                        echo "<p class='text-white fs-3'>$result</p>";
                    }
                ?>
                <form method="post">
                    <button class="btn btn-danger" type="submit" name="close">Close Interface</button>
                </form>
                <Script src="all.js"></Script>
                <script src="bootstrap.bundle.min.js"></script>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</body>
</html>