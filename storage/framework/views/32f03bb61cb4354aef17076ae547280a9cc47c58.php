<?php $__env->startSection('Content'); ?>      
        <div id="page-wrapper" >
            <div id="page-inner">
                                       
                  <hr />

                <form method="post" action="">
                 <input type="hidden" name="_token" value = "<?php echo e(csrf_token()); ?>">
                <table class="table table-striped table-bordered table-hover">

                <h2>Edit Candidate</h2>
                            
                            <tbody>
                                
                                <tr>
                                    <td>Họ tên </td>
                                    <td><input type="text" name="fullname" value="<?php echo e(old('fullname',isset($data)) ? $data['fullname'] : null); ?>"></td>
                                </tr> 
                                <tr>
                                    <td>Email </td>
                                    <td><input type="email" name="email" disabled pattern="/^[a-zA-Z]{1}[a-zA-Z0-9]{3,50}\@[a-zA-Z0-9]{3,20}\.[a-zA-Z]{2,5}$/" value="<?php echo e(old('email',isset($data)) ? $data['email'] : null); ?>"></td> 
                                </tr>
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td><input type="text" name="phone" value="<?php echo e(old('phone',isset($data)) ? $data['phone'] : null); ?>"></td>
                                </tr>
                                <tr>
                                    <td>Ngày sinh </td>
                                    <td><input type="date" name="birthday" value="<?php echo e(old('phone',isset($data)) ? $data['birthday'] : null); ?>"></td> 
                                </tr>
                                    <td>Giới tính </td>
                                    <td><input type="radio" name="sex" value="0"
                                        <?php if($data['sex'] == 0): ?> 
                                            checked="checked"
                                        <?php endif; ?> > Nam 
                                        <input type="radio" name="sex" value="1"
                                        <?php if($data['sex'] == 1): ?>
                                            checked="checked"
                                        <?php endif; ?>> Nữ
                                    </td> 
                                </tr>
                                <tr>
                                    <td>Kinh nghiệm (năm) </td>
                                    <td><input type="text" name="experience" value="<?php echo e(old('experience',isset($data)) ? $data['experience'] : null); ?>"></td> 
                                </tr>
                                <tr>
                                    <td>Trường </td>
                                    <td><input type="text" name="school" value="<?php echo e(old('school',isset($data)) ? $data['school'] : null); ?>"></td> 
                                </tr>
                                <tr>
                                    <td>Chứng chỉ </td>
                                    <td><input type="text" name="certificate" value="<?php echo e(old('certificate',isset($data)) ? $data['certificate'] : null); ?>"></td> 
                                </tr>
                                <tr>
                                    <td>Loại ứng viên </td>
                                    <td>
                                        <select required name="type_work" >       
                                            <option value="0" <?php if($data['type_work'] == 0): ?> selected="selected" <?php endif; ?> >Fresher</option>
                                            <option value="1" <?php if($data['type_work'] == 1): ?> selected="selected" <?php endif; ?> >Junior</option>
                                            <option value="2" <?php if($data['type_work'] == 2): ?> selected="selected" <?php endif; ?> >Senior</option>
                                        </select>
                                    </td> 
                                </tr>
                                <tr>
                                    <td>Ngôn ngữ</td>
                                    <td><input type="text" name="language" value="<?php echo e(old('language',isset($data)) ? $data['language'] : null); ?>"></td> 
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