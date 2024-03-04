<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>coba</title>
</head>

<body>
    <div class="container mt-5" style="width: 800px">
        <h2>List Students</h2>
    </div>
    {{-- tabel --}}
    <div class="container mt-1" style="width: 800px">
        <table class="table ">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">No Handphone</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $no => $hasil)
                    <tr>
                        <th>{{ $no + 1 }}</th>
                        <td>{{ $hasil->Name }}</td>
                        <td class="text-truncate">{{ $hasil->Address }}</td>
                        <td>{{ $hasil->noHp }}</td>
                        <td><a href="" class="btn btn-warning ">Edit</a><a href=""
                                class="btn btn-danger ms-1">Delete</a></td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        <div>
            <a href="/"><button class="btn btn-primary">back</button></a>
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
