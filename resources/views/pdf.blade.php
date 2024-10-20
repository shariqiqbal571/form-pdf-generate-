<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Layout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .card {
            width: 700px;
            border: 2px solid #000;
            padding: 20px;
            margin: 0 auto;
            position: relative;
        }
        .header {
            text-align: left;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .sub-header {
            font-size: 12px;
            margin-bottom: 20px;
            font-style: italic;
        }
        .logo {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 100px;
        }
        .card-body {
            display: flex;
            justify-content: space-between;
        }
        .photo {
            width: 130px;
            height: 130px;
            border: 1px solid #000;
        }
        .details {
            flex: 1;
            margin-left: 20px;
        }
        .details p {
            margin: 5px 0;
        }
        .details span {
            font-weight: bold;
        }
        .qr-code {
            margin-top: 20px;
        }
        .signature {
            margin-top: 10px;
            margin-left: 150px;
            font-style: italic;
        }
        .footer {
            margin-top: 20px;
            background-color: #f0f0f0;
            padding: 10px;
            font-size: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="card">
        <!-- Header Section -->
        <div class="header">Card No.: {{ $data['card_number'] }}</div>
        <div class="sub-header">For Card Verification Please Scan QR Code</div>
        <img class="logo" src="{{ asset('images/logo-url.png') }}" alt="TUV Logo">

        <!-- Body Section -->
        <div class="card-body">
            <!-- Photo Section -->
            <div class="photo">
                <img src="{{ $photo_path }}" alt="User Photo" style="width: 100%; height: 100%;">
            </div>

            <!-- Details Section -->
            <div class="details">
                <p><span>Name:</span> {{ $data['name'] }}</p>
                <p><span>ID/ Iqama No.:</span> {{ $data['id_number'] }}</p>
                <p><span>Qualified as:</span> {{ $data['qualified_as'] }}</p>
                <p><span>Issue Date:</span> {{ $data['issue_date'] }}</p>
                <p><span>Expiry Date:</span> {{ $data['expiry_date'] }}</p>
                <p><span>Company Name:</span> {{ $data['company'] }}</p>
            </div>

            <!-- QR Code Section -->
            <div class="qr-code">
                {!! QrCode::size(100)->generate($qr_code_data) !!}
            </div>
        </div>

        <!-- Signature Section -->
        <div class="signature">
            <img src="{{ asset('images/signature-url.png') }}" alt="Signature" style="width: 100px;">
        </div>

        <!-- Footer Section -->
        <div class="footer">
            This is not Saudi government License ID. Its valid only for the qualification stated. This card doesn’t release the operator from his duty with regards to safe operation of equipment...
        </div>
    </div>

</body>
</html>
