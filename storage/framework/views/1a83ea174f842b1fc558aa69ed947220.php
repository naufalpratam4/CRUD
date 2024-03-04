<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>pelanggan</title>
</head>

<body>
    
    <div class="container pt-5 mt-5" style="width: 800px">
        <div><a href="<?php echo e(route('student.create')); ?>" class="btn btn-primary mb-3">Add Pelanggan</a></div>
    </div>

    
    <div class="container mt-5" style="width: 800px">
        <table class="table ">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Tanggal Registrasi</th>
                    <th scope="col">No Handphone</th>
                    <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $pelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $DP): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="col pb-0 pt-3"><?php echo e($DP->id); ?></td>
                        <td class="col pb-0 pt-3 text-truncate text-capitalize"><?php echo e($DP->namaPelanggan); ?></td>
                        <td class="col pb-0 pt-3"><?php echo e($DP->tanggalRegistrasi = date('d/m/y')); ?> </td>
                        <td class="col pb-0 pt-3"><?php echo e($DP->hp); ?></td>
                        <td class="col pb-0 pt-3 text-truncate"><?php echo e($DP->alamat); ?></td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </tbody>
        </table>
        <div>
            <a href="coba"><button class="btn btn-primary">back</button></a>
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
<?php /**PATH D:\College\semester 6\Magang\magangjogja\coba\resources\views/pelanggan/index.blade.php ENDPATH**/ ?>