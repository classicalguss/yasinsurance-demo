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

        <form
                action="{{ route('checkout') }}"
                method="POST"
                class="row g-3"
                style="max-width: 900px; width:100%;"
        >
            @csrf
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
                <script src="https://staging.yasmina.ai/js/toggle.js"></script>
                <!-- Bootstrap 5 JS Bundle -->
                <div class="card-header">
                    Add Insurance by
                    <img class="ms-2" src="https://www.tawuniya.com/assets/tawuniya-logo-BFmobvJd.svg"/>
                </div>
                <div class="card-body align-items-center">
                    <div class="d-flex justify-content-between">
                        <!-- Toggle Switch -->
                        <select id="insuranceCoverage" name="insurance_coverage" class="form-select form-select-sm w-50">
                            <option value="comprehensive" data-price="500">
                                Comprehensive (Alshamel)
                            </option>
                            <option value="third_party_plus" data-price="110">
                                Third Party Plus Insurance
                            </option>
                            <option value="third_party" data-price="100">
                                Third Party Insurance
                            </option>
                            <option value="no_coverage" data-price="0">
                                No insurance coverage
                            </option>
                        </select>
                        <span>Price: <span id="insurancePrice">0 SAR</span></span>
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
                <ul class="list-group list-group-flush" id="priceDetailsList">
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Car price</span>
                        <span id="carPrice" data-price="75000">75,000 SAR</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Delivery fee</span>
                        <span id="deliveryFee" data-price="500">500 SAR</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Commission</span>
                        <span id="commission" data-price="1125">1,125 SAR</span>
                    </li>
                    <li
                            id="insuranceRow"
                            class="list-group-item d-flex justify-content-between d-none"
                    >
                        <span>Insurance</span>
                        <span id="insuranceDetail" data-price="0">0 SAR</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>VAT (15%)</span>
                        <span id="vat">0 SAR</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between fw-semibold">
                        <span>Total</span>
                        <span id="total">0 SAR</span>
                    </li>
                </ul>
                <div class="card-body">
                    <button type="submit" class="btn btn-primary w-100">
                        Proceed to payment
                    </button>
                </div>
            </div>
        </div>

        </form>
    </div>
</div>

</body>
<script>
    const select          = document.getElementById("insuranceCoverage");
    const insuranceRow    = document.getElementById("insuranceRow");
    const insuranceDetail = document.getElementById("insuranceDetail");
    const carPriceEl      = document.getElementById("carPrice");
    const deliveryFeeEl   = document.getElementById("deliveryFee");
    const commissionEl    = document.getElementById("commission");
    const vatEl           = document.getElementById("vat");
    const totalEl         = document.getElementById("total");
    const priceLabel      = document.getElementById("insurancePrice");

    function recalc() {
        // 1. Pull raw numbers from data-price
        const car   = Number(carPriceEl.dataset.price);
        const fee   = Number(deliveryFeeEl.dataset.price);
        const comm  = Number(commissionEl.dataset.price);
        const ins   = Number(select.selectedOptions[0].dataset.price);

        // 2. Update the inline label
        priceLabel.textContent = ins.toLocaleString() + " SAR";

        // 3. Show/hide insurance row
        if (ins > 0) {
            insuranceDetail.textContent = ins.toLocaleString() + " SAR";
            insuranceRow.classList.remove("d-none");
        } else {
            insuranceRow.classList.add("d-none");
        }

        // 4. Recalculate VAT & Total
        const subTotal  = car + fee + comm + ins;
        const vatAmount = Math.round(subTotal * 0.15);
        vatEl.textContent  = vatAmount.toLocaleString() + " SAR";
        totalEl.textContent = (subTotal + vatAmount).toLocaleString() + " SAR";
    }

    select.addEventListener("change", recalc);
    recalc(); // initial call
</script>
</html>