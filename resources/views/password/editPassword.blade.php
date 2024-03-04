<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container card mt-5" style="width: 500px">
        <div class="card-header">
            <h2 class="pt-3">Edit Password</h2>
        </div>
        <div class="card-body">
            @if (Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif

            <form action="{{ route('password.edit') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="password" class="form-label">Current Password</label>
                    <input type="password" class="form-control" name="current_password" required id="current_password">
                    @error('current_password')
                        <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">New Password</label>
                    <input type="password" class="form-control" name="password" required id="password">
                    @error('password')
                        <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password Confirmation</label>
                    <input type="password" class="form-control" name="confirm_password" required id="confirm_password">
                    @error('password')
                        <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary ">Submit</button>
            </form>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
