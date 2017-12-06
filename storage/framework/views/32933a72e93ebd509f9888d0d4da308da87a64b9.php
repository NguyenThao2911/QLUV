<?php $__env->startSection('Content'); ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>QUẢN TRỊ > USER</h2>   
                    </div>
                    <div class="col-lg-12">
                        <?php if(Session::has('flash_message')): ?>
                             <div class="alert alert-<?php echo e(Session::get('flash_level')); ?>">
                                 <?php echo e(Session::get('flash_message')); ?>

                             </div>
                        <?php endif; ?>
                    </div>
                </div>              
                <div style="float: right;">
                    <a href="<?php echo e(route('user.getadd')); ?>">(+) Add User</a>
                </div>
                  <hr />
                  
                <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fullname</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Giới tính</th>
                                    <th>Quyền</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                            
                           <?php $__currentLoopData = $listUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                    <td><?php echo e($user['id']); ?></td>
                                    <td><?php echo e($user['fullname']); ?></td>
                                    <td><?php echo e($user['username']); ?></td>
                                    <td><?php echo e($user['email']); ?></td>
                                    <td><?php echo e($user['phone']); ?></td>
                                    <td><?php if($user['sex']==0): ?> <?php echo e('nam'); ?> <?php else: ?> <?php echo e('nữ'); ?> <?php endif; ?></td>
                                    <td><?php if($user['is_admin']==0): ?> <?php echo e('admin'); ?> <?php else: ?> <?php echo e('recruiter'); ?> <?php endif; ?></td>
                                    <td><a href="<?php echo e(route('user.getedit', $user['id'])); ?>">Sửa</a> | <a href="<?php echo e(route('user.delete', $user['id'])); ?>">Xóa</a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
            </div>
    
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>