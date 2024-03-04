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
    
    <div class="container card mt-5" style="width: 500px"><label for="title" class="fw-bold fs-3 pt-3">Edit
            student</label>
        <form action="<?php echo e(route('student.update', $student->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">

                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" name="Name" class="form-control" id="Name" value="<?php echo e($student->Name); ?>">

            </div>
            <div class="mb-3">

                <label for="Address" class="form-label">Address</label>
                <input type="text" name="Address" class="form-control" id="Address"
                    value="<?php echo e($student->Address); ?>">

            </div>
            <div class="mb-3">
                <label for="aasa" class="form-label">No HP</label>
                <input type="number" class="form-control" id="noHp" name="noHp" value="<?php echo e($student->noHp); ?>">
            </div>

            <div class="pb-3">
                <a href="<?php echo e(route('student.index')); ?>"><button type="button" class="btn btn-secondary">list
                        student</button></a>
                <button type="submit" value="Save" class="btn btn-primary ms-3">Submit</button>
            </div>
        </form>
    </div>



</body>

</html>
<?php /**PATH D:\College\semester 6\Magang\magangjogja\coba\resources\views/student/update.blade.php ENDPATH**/ ?>