
<?php $__env->startSection('title', 'Information detailé'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xxl mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php if(session('success')): ?>
            <div class="alert alert-success col-12">
                <?php echo e(session('success')); ?>

            </div>
            <?php endif; ?>
            

            <div class="card">
                <div class="card-header">
                    <h2><?php echo e($student->nom); ?></h2>
                </div>
                <div class="card-body">
                    <p><strong>Address:</strong> <?php echo e($student->address); ?></p>
                    <p><strong>Email:</strong> <?php echo e($student->email); ?></p>
                    <p><strong>Date of Birth:</strong> <?php echo e($student->dob); ?></p>
                    <p><strong>Phone:</strong> <?php echo e($student->phone); ?></p>
                    <p><strong>City:</strong> <?php echo e($student->ville->nom); ?></p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                <div class="d-flex">
                    <a class="btn btn-success me-3" href="<?php echo e(route('etudiants.edit', $student->id)); ?>">Edit content</a>
                    <a class="btn btn-secondary" href="<?php echo e(route('forum.index')); ?>">Return</a>
                
                    
                </div>
            </div>
        </div>
    </div>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\roman\OneDrive\Documents\Programming and conception web design\hivere_2023\cadriciel\Maisonneuve2295542\resources\views/forum/show.blade.php ENDPATH**/ ?>