<?php $__env->startSection('title'); ?>
    Send email
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div id="page-content">
        <div class="clear"></div>
        <div class="container">
            <br />
            <div class="container box">

                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>


                <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong><?php echo e($message); ?></strong>
                    </div>
                <?php endif; ?>
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading text-center">
                            <h4><strong>Kontaktirajte nas</strong></h4>
                        </div>
                            <div class="panel-body">
                                <form method="post" action="<?php echo e(url('sendemail/send')); ?>">

                                    <?php echo e(csrf_field()); ?>


                                    <div class="form-group col-xs-12">
                                        <label>Ime in priimek</label>
                                        <input type="text" name="name" class="form-control" />
                                    </div>

                                    <div class="form-group col-xs-12">
                                        <label>Email naslov</label>
                                        <input type="text" name="email" class="form-control" />
                                    </div>

                                    <div class="form-group col-xs-12">
                                        <label>Vpiši sporočilo</label>
                                        <textarea name="message" class="form-control" rows="7"></textarea>
                                    </div>

                                    <div class="form-group col-xs-12">
                                        <input type="submit" name="send" value="Send" class="btn btn-info" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>