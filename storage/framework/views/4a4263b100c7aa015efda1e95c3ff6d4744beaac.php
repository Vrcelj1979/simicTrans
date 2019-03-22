<?php $__env->startSection('content'); ?>
    <div class="container">
        <div id="page-content">
            <div class="clear"></div>
                <div class="row justify-content-center">
                    <div style=" height:50px"></div>
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-info">
                            <div class="panel-heading text-center">
                                <h4><strong>Registriraj se</strong></h4>
                            </div>

                            <div class="panel-body">
                                <form method="POST" action="<?php echo e(route('register')); ?>">
                                    <?php echo csrf_field(); ?>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-3 col-form-label text-md-right"><?php echo e(__('Ime')); ?></label>

                                        <div class="col-md-9">
                                            <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                            <?php if($errors->has('name')): ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-3 col-form-label text-md-right"><?php echo e(__('Email naslov')); ?></label>

                                        <div class="col-md-9">
                                            <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                            <?php if($errors->has('email')): ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-3 col-form-label text-md-right"><?php echo e(__('Geslo')); ?></label>

                                        <div class="col-md-9">
                                            <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                            <?php if($errors->has('password')): ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-3 col-form-label text-md-right"><?php echo e(__('Potrdi geslo')); ?></label>

                                        <div class="col-md-9">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-9 col-md-offset-3">
                                            <button type="submit" class="btn btn-info">
                                                <?php echo e(__('Registriraj se')); ?>

                                            </button>
                                        </div>
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