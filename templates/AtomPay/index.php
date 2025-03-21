<!doctype html>
<html lang="en">

<head>
    <title>Atom Insta Payments</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container my-5">
        <h3 class="">Merchant Shop</h3>
        <p>Transaction Id:<?php echo $data['txnId']; ?> </p>
        <p>Atom Token Id: <?php echo $atomTokenId; ?> </p>
        <p>Pay Rs. <?php echo $data['amount'] ?></p>
        <a name="" id="" class="btn btn-primary" href="javascript:openPay()" role="button">Pay Now</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://pgtest.atomtech.in/staticdata/ots/js/atomcheckout.js"></script>

    <script>
        function openPay() {
            const options = {
                "atomTokenId": "<?php echo $atomTokenId; ?>",
                "merchId": "<?php echo $data['login']; ?>",
                "custEmail": "<?php echo $data['email']; ?>",
                "custMobile": "<?php echo $data['mobile']; ?>",
                "returnUrl": "<?php echo $data['return_url']; ?>"
            }
            let atom = new AtomPaynetz(options, 'uat');
        }
    </script>
</body>

</html>