<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avian Test</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />

    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

    @vite('resources/css/app.css')

</head>

<body>
    @include('layout.navigation')

    <div class="bg-white">

        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="mx-auto py-12">
                @yield('content')
            </div>
        </div>
    </div>

</body>

</html>
