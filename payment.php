<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trek Booking </title>
<?php require('inc/links.php'); ?>   
</head>
<body class="bg-light">
<?php require('inc/header.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <header>
        <h1>Payment</h1>
    </header>

    <div class="container">
        <form id="paymentForm" action="success.php" method="post">
            <label for="cardNumber">Card Number:</label>
            <input type="text" id="cardNumber" placeholder="Enter card number" required>

            <label for="expirationDate">Expiration Date:</label>
            <input type="text" id="expirationDate" placeholder="MM/YYYY" required>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" placeholder="Enter CVV" required>

            <button type="button" onclick="processPayment()">Submit Payment</button>
        </form>
    </div>

    <script>
        function processPayment() {
            var cardNumber = document.getElementById('cardNumber').value;
            var expirationDate = document.getElementById('expirationDate').value;
            var cvv = document.getElementById('cvv').value;

            if (cardNumber.trim() === '' || expirationDate.trim() === '' || cvv.trim() === '') {
                alert('Please fill in all required fields.');
                return false; // Prevent form submission
            }

            // Simulate payment processing
            // Replace this with actual payment processing logic
            // For demonstration purposes, use a setTimeout to simulate async processing
            setTimeout(function () {
                alert('Payment processed successfully!');
                // Redirect to the success page
                window.location.href = 'success.php';
            }, 1000);

            return false; // Prevent form submission (remove this line if you want to submit the form)
        }
    </script>


</body>
</html>





<?php
require('inc/footer.php');
?>

</body>
</html>