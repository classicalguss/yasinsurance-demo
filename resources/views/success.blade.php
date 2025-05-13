<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Purchase Success</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
    />
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="card mx-auto shadow-sm" style="max-width: 600px;">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">✅ Purchase Successful</h5>
        </div>
        <div class="card-body">
            <h6>Car Details</h6>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item"><strong>Model:</strong> {{ $car['model'] }}</li>
                <li class="list-group-item"><strong>Year:</strong> {{ $car['year'] }}</li>
                <li class="list-group-item"><strong>Mileage:</strong> {{ $car['mileage'] }}</li>
                <li class="list-group-item"><strong>Color:</strong> {{ $car['color'] }}</li>
                <li class="list-group-item"><strong>Engine:</strong> {{ $car['engine'] }}</li>
                <li class="list-group-item"><strong>Price:</strong> {{ number_format($car['price']) }} SAR</li>
            </ul>

            @if($insuranceKey !== 'no_coverage')
                <h6>Insurance Selected</h6>
                <p class="mb-3">{{ $insuranceLabel }}</p>
                <!-- Download Certificate button -->
                <a
                        href="https://imgv2-2-f.scribdassets.com/img/document/808075094/original/a3ee2389c4/1?v=1"
                        class="btn btn-primary"
                        download="certificate.jpg"
                >
                    <i class="bi bi-download me-1"></i> Download Insurance Certificate
                </a>
            @else
                <h6>No Insurance Selected</h6>
            @endif
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
