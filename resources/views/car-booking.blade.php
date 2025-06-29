<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Image Map Working Example</title>
    <style>
        img {
            max-width: 100%;
            height: auto;
            display: block;
        }
    </style>
</head>
<body>

@if (request()->get('sequence') == "872396020")
    <a href="/car-checkout?sequence=872396020">
        <img src="/demo/aggregator/booking3.png" alt="Car Listing" id="carImage">
    </a>
@elseif (request()->get('sequence') == "972396060")
    <a href="/car-checkout?sequence=972396060">
        <img src="/demo/aggregator/booking2.png" alt="Car Listing" id="carImage">
    </a>
@endif

<script>
    // Wait until the entire page (including the image) is fully loaded
    // window.addEventListener('load', function() {
    //     imageMapResize(); // Now the clickable areas will work correctly
    // });
</script>

</body>
</html>