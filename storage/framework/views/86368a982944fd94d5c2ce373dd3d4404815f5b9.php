<?php $__env->startSection('Content'); ?>      
        <div id="page-wrapper" >
            <div id="page-inner">
                                       
                  <hr />

                <form method="post" action="<?php echo e(route('candidate.getadd')); ?>">
                 <input type="hidden" name="_token" value = "<?php echo e(csrf_token()); ?>">
                <table class="table table-striped table-bordered table-hover">

                <h2>Add Candidate</h2>
                            
                            <tbody>
                                
                                <tr>
                                    <td>Họ tên </td>
                                    <td><input type="text" required name="fullname"></td>
                                </tr> 
                                <tr>
                                    <td>Email </td>
                                    <td><input type="email" required name="email" pattern="/^[a-zA-Z]{1}[a-zA-Z0-9]{3,50}\@[a-zA-Z0-9]{3,20}\.[a-zA-Z]{2,5}$/"></td> 
                                </tr>
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td><input type="text" name="phone"></td>
                                </tr>
                                <tr>
                                    <td>Ngày sinh </td>
                                    <td><input type="date" name="birthday"></td> 
                                </tr>
                                <tr>
                                    <td>Giới tính </td>
                                    <td><input type="radio" name="sex" value="0"> Nam 
                                        <input type="radio" name="sex" value="1"> Nữ
                                    </td> 
                                </tr>
                                <tr>
                                    <td>Kinh nghiệm (năm) </td>
                                    <td><input type="text" name="experience"></td> 
                                </tr>
                                <tr>
                                    <td>Trường </td>
                                    <td><input type="text" name="school"></td> 
                                </tr>
                                <tr>
                                    <td>Chứng chỉ </td>
                                    <td><input type="text" name="certificate"></td> 
                                </tr>
                                <tr>
                                    <td>Loại ứng viên </td>
                                    <td>
                                        <select required name="type_work" >       
                                            <option value="0">Fresher</option>
                                            <option value="1">Junior</option>
                                            <option value="2">Senior</option>
                                        </select>
                                    </td> 
                                </tr>
                                <tr>
                                    <td>Ngôn ngữ</td>
                                    <td><input type="text" name="language"></td> 
                                </tr>  
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" name="submit" value="Thêm">
                                        <input type="reset" name="reset" value="Làm mới">
                                    </td>
                                </tr>
                            
                            </tbody>
                        </table>

            </div>
    
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>