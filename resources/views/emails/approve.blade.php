<!DOCTYPE html>
<html>
<head>
    <title>Product Modification Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        #container {
            width: 80%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007BFF;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            margin-bottom: 10px;
            line-height: 1.4;
        }

        strong {
            color: #007BFF;
        }

        .message {
            background-color: #f7f7f7;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        .approved {
            color: green;
        }

        .rejected {
            color: red;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>Product Modification Notification</h1>

        <p>Dear,</p>

        <p>We would like to inform you that the product "<strong>{{ $productData['product_name'] }}</strong>" has been
            modified and the changes have been reviewed by "<strong>{{ $productData['editor'] }}</strong>".</p>

        <p>Modification Date: {{ $productData['modification_date'] }}</p>

        <!-- Modified Product Details -->
        @if ($productData['changes_approved'])
        <p class="message approved">The changes have been <strong>Approved</strong>.</p>
        @else
        <p class="message rejected">The changes have been <strong>Rejected</strong>.</p>
        @endif

        <p class="footer">Thank you for keeping us informed.</p>
    </div>
</body>
</html>
