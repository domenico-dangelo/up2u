<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="flex flex-row h-screen align-middle">
    <div class="basis-1/2 bg-up2u-primary-green">
        <div class="m-40 space-y-20 align-middle">
            <p class="font-extrabold text-5xl text-white  ">
                Quale paese in Europa detiene il record per il maggiore consumo di acqua in bottiglia?
            </p>
            <p class="font-light text-2xl text-white">
                Sottotitolo eventuale, non più lungo di così: Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi
            </p>
        </div>
    </div>
    @include('form')
    @include('success')
    @include('error')
</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="{{'/js/validate.js'}}"></script>
</html>
