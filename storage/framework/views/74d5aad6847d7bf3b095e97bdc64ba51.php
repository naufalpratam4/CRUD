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
    
    <div class="container pt-5 mt-5" style="width: 500px">
        <div><a href="<?php echo e(route('student.create')); ?>" class="btn btn-primary mb-3">Add Student</a></div>
    </div>

    
    <div class="container mt-5" style="width: 800px">
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
                <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no => $hasil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th><?php echo e($no + 1); ?></th>
                        <td><?php echo e($hasil->Name); ?></td>
                        <td class="text-truncate"><?php echo e($hasil->Address); ?></td>
                        <td><?php echo e($hasil->noHp); ?></td>
                        <td style="display: flex">
                            
                            <a href="<?php echo e(route('student.show', $hasil->id)); ?>" class="btn btn-secondary ms-1">Detail</a>
                            <a href="<?php echo e(route('student.edit', $hasil->id)); ?>" class="btn btn-warning ">Edit</a>
                            <form action="<?php echo e(route('student.destroy', $hasil->id)); ?>" method="POST" type="button"
                                onsubmit="return confirm('Delete?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger" type="submit" value="Delete">Delete</button>
                            </form>
                            

                        </td>

                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


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
<?php /**PATH D:\College\semester 6\Magang\magangjogja\coba\resources\views/student/admin.blade.php ENDPATH**/ ?>