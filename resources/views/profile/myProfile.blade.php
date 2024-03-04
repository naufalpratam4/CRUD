<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <title>My Profile</title>
</head>

<body>

    <div class="container card mt-5" style="width: 500px">
        <div class="card-body">
            {{-- {!! User::model(auth()->user(), ['method' => 'POST']) !!} --}}
            <h4 class="fw-bold">My Profile</h4>
            <h5 class="fw-bold mt-1">Name</h5>
            <div>Naufal</div>
            <h5 class="fw-bold mt-3">Email</h5>
            <div>naufal.d.pratama@gmail.com</div>
            <a href="/">
                <button class="btn btn-primary mt-4 mb-3" type="button">Back</button>
            </a>
        </div>


    </div>


</body>

</html>
