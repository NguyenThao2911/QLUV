<?php $__env->startSection('Content'); ?>      
        <div id="page-wrapper" >
            <div id="page-inner">
                                       
                  <hr />
                <div class="col-lg-12">
                    <?php if(count($errors)>0): ?>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="alert alert-danger"><?php echo e($err); ?></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
                <form method="post" action="">
                 <input type="hidden" name="_token" value = "<?php echo e(csrf_token()); ?>">
                <table class="table table-striped table-bordered table-hover">

                <h2>Edit User</h2>
                            
                            <tbody>
                                 <tr>
                                    <td>Họ tên </td>
                                    <td><input type="text" required name="fullname" value="<?php echo e(old('fullname',isset($data)) ? $data['fullname'] : null); ?>"></td>
                                </tr>
                                <tr>
                                    <td>Username </td>
                                    <td><input type="text" required name="username" value="<?php echo e(old('username',isset($data)) ? $data['username'] : null); ?>"></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td><input type="password" name="password"></td>
                                </tr>
                                <tr>
                                    <td>Re-Password</td>
                                    <td><input type="password" name="repassword"></td>
                                </tr>
                                <tr>
                                    <td>Email </td>
                                    <td><input type="email" required name="email" value="<?php echo e(old('email',isset($data)) ? $data['email'] : null); ?>" pattern="/^[a-zA-Z]{1}[a-zA-Z0-9]{3,50}\@[a-zA-Z0-9]{3,20}\.[a-zA-Z]{2,5}$/"  disabled></td> 
                                </tr>
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td><input type="text" name="phone" value="<?php echo e(old('phone',isset($data)) ? $data['phone'] : null); ?>"></td>
                                </tr>
                               
                                <tr>
                                    <td>Giới tính </td>
                                    <td><input type="radio" name="sex" value="0" 
                                            <?php if($data['sex'] == 0): ?>
                                              checked="checked" 
                                            <?php endif; ?>> Nam 
                                        <input type="radio" name="sex" value="1"
                                            <?php if($data['sex'] == 1): ?>
                                              checked="checked"
                                            <?php endif; ?>> Nữ
                                    </td> 
                                </tr>
                                <tr>
                                    <td>Role</td>
                                    <td>
                                        <select required name="role" >       
                                            <option value="0"
                                                <?php if($data['is_admin'] == 0): ?>
                                                    selected="selected" 
                                                <?php endif; ?>>Admin</option>
                                            <option value="1"
                                                <?php if($data['is_admin'] == 1): ?>
                                                    selected="selected" 
                                                <?php endif; ?>>Recruiter</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" name="submit" value="Cập nhật">
                                    </td>
                                </tr>
                            
                            </tbody>
                        </table>

            </div>
    
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>