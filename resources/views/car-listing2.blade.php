<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سيارات للبيع في السعودية | موقع سيارة</title>
    <script src="https://cdn.jsdelivr.net/npm/image-map-resizer@1.0.10/js/imageMapResizer.min.js"></script>
    <style>
        img {
            max-width: 100%;
            height: auto;
            display: block;
        }
    </style>
</head>
<body>

<img src="/demo/aggregator/listing.png" usemap="#cars-map" alt="Car Listing" id="carImage">

<map name="cars-map" id="cars-map">
    <area target="" alt="example" title="example" href="/car-booking?sequence=172256061" coords="694,813,1327,1665" shape="rect">
    <area target="" alt="example" title="example" href="/car-booking?sequence=972396060" coords="2000,1665,1358,813" shape="rect">
    <area target="" alt="example" title="example" href="/car-booking?sequence=872396020" coords="2034,813,2661,1662" shape="rect">
</map>

<script>
    // Wait until the entire page (including the image) is fully loaded
    window.addEventListener('load', function() {
        imageMapResize(); // Now the clickable areas will work correctly
    });
</script>

</body>
</html>