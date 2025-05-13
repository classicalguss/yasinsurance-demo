<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Insurance Demo</title>
    <!-- Bootstrap 5.3 CSS -->
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
    />
    <!-- Bootstrap Icons -->
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
</head>
<body class="bg-light">

<!-- Center everything vertically & horizontally -->
<div class="d-flex justify-content-center align-items-center px-3 mt-4">
    <!-- Constrain width -->
    <div class="row" style="max-width: 1000px; width: 100%">

        <!-- Left column: image + insurance card -->
        <div class="col-md-8">
            <!-- Car image card -->

            <!-- 2) Car details -->
            <div class="card shadow-sm mb-3">
                <div class="card-header">
                    <h6 class="mb-0">Car details</h6>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Model:</strong> Hyundai Tucson GLS</li>
                    <li class="list-group-item"><strong>Year:</strong> 2021</li>
                    <li class="list-group-item"><strong>Mileage:</strong> 32,000 km</li>
                    <li class="list-group-item"><strong>Color:</strong> Phantom Black</li>
                    <li class="list-group-item"><strong>Engine:</strong> 2.4L 4-Cylinder</li>
                </ul>
            </div>
            <!-- Insurance toggle card -->

            <div class="card w-100">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
                <link
                        rel="stylesheet"
                        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
                />
                <script src="https://staging.yasmina.ai/js/toggle.js"></script>
                <!-- Bootstrap 5 JS Bundle -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
                <div class="card-header">
                    Add Insurance by
                    <img class="ms-2" src="https://www.tawuniya.com/assets/tawuniya-logo-BFmobvJd.svg"/>
                </div>
                <div class="card-body align-items-center">
                    <div class="d-flex justify-content-between">
                        <!-- Toggle Switch -->
                        <select class="form-select form-select-sm w-50" id="insuranceCoverage" name="insurance_coverage">
                            <option value="comprehensive">Comprehensive (Alshamel)</option>
                            <option value="third_party_plus">Third Party Plus Insurance</option>
                            <option value="third_party">Third Party Insurance</option>
                            <option value="no_coverage">No insurance coverage</option>
                        </select>

                        <!-- Price Display -->
                        <span class="mb-0">Price: <span id="insurancePrice">0.00 SAR</span></span>
                    </div>
                    <div class="mt-4 ms-2">
                        <ul class="list-unstyled" id="coverageList">
                            <li class="d-flex align-items-center">
                                <a data-bs-toggle="collapse" href="#collapseExample" role="button" class="link-success">View all coverages</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right column: price details -->
        <div class="col-md-4 d-flex align-items-start">
            <div class="card shadow-sm w-100">

                    <img
                            src="https://www.shutterstock.com/image-vector/icon-logo-sign-art-sedan-260nw-2484157269.jpg"
                            class="img-fluid w-100 object-fit-cover rounded"
                            alt="2021 Hyundai Tucson GLS"
                    />
                <div class="card-header bg-white">
                    <h5 class="mb-0">Price details</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Car price</span>
                        <span>75,000 SAR</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Delivery fee</span>
                        <span>500 SAR</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Commission</span>
                        <span>1,125 SAR</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>VAT (15%)</span>
                        <span>11,625 SAR</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between fw-semibold">
                        <span>Total</span>
                        <span>88,250 SAR</span>
                    </li>
                </ul>
                <div class="card-body">
                    <button type="button" class="btn btn-primary w-100">
                        Proceed to payment
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>