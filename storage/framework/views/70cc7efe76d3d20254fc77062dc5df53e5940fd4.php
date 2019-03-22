<?php $__env->startSection('title'); ?>
    Dynamic_email_template
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div id="page-content">
        <div class="clear"></div>
        <div class="container">
            <p>Hi, This is <?php echo e($data['name']); ?></p>
            <p>I have some query like { $data['message']  }}</p>
            <p>It would be appriciative, if you gone through this feedback.</p>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>