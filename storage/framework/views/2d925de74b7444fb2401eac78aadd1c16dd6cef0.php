<?php $__env->startSection('Content'); ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>QUẢN TRỊ > ỨNG VIÊN</h2>   
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
                    <a href="<?php echo e(route('candidate.getadd')); ?>">(+) Add Candidate</a>
                </div>
                  <hr />
                  
                <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Birthday</th>
                                    <th>Sex</th>
                                    <th>Experience</th>
                                    <th>School</th>
                                    <th>Certificate</th>
                                    <th>Work</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                            
                           <?php $__currentLoopData = $listCandidates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                                <tr>
                                    <td><?php echo e($candidate['id']); ?></td>
                                    <td><?php echo e($candidate['fullname']); ?></td>
                                    <td><?php echo e($candidate['email']); ?></td>
                                    <td><?php echo e($candidate['phone']); ?></td>
                                    <td><?php echo e($candidate['birthday']); ?></td>
                                    <td> <?php if($candidate['sex']==0): ?> <?php echo e('nam'); ?> <?php else: ?> <?php echo e('nữ'); ?> <?php endif; ?></td>
                                    <td><?php echo e($candidate['experience']); ?></td>
                                    <td><?php echo e($candidate['school']); ?></td>
                                    <td><?php echo e($candidate['certificate']); ?></td>
                                    <td> <?php if($candidate['type_work']==0): ?> <?php echo e('Fresher'); ?> <?php elseif($candidate['type_work']==1): ?> <?php echo e('Junior'); ?> <?php else: ?> <?php echo e('Senior'); ?> <?php endif; ?></td>
                                    <td><a href="<?php echo e(route('candidate.getedit', $candidate['id'])); ?>">Sửa</a> | <a href="<?php echo e(route('candidate.delete', $candidate['id'])); ?>">Xóa</a></td>
                                </tr>
                            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                          
                        </table>

            </div>
    
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>