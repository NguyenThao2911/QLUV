@extends('master')
@section('Content')      
        <div id="page-wrapper" >
            <div id="page-inner">
                                       
                  <hr />
                <div class="col-lg-12">
                    @if(count($errors)>0)
                        @foreach($errors->all() as $err)
                            <div class="alert alert-danger">{{$err}}</div>
                        @endforeach
                    @endif
                </div>
                <form method="post" action="">
                 <input type="hidden" name="_token" value = "{{csrf_token()}}">
                <table class="table table-striped table-bordered table-hover">

                <h2>Edit User</h2>
                            
                            <tbody>
                                 <tr>
                                    <td>Họ tên </td>
                                    <td><input type="text" required name="fullname" value="{{ old('fullname',isset($data)) ? $data['fullname'] : null}}"></td>
                                </tr>
                                <tr>
                                    <td>Username </td>
                                    <td><input type="text" required name="username" value="{{ old('username',isset($data)) ? $data['username'] : null}}"></td>
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
                                    <td><input type="email" required name="email" value="{{ old('email',isset($data)) ? $data['email'] : null}}" pattern="/^[a-zA-Z]{1}[a-zA-Z0-9]{3,50}\@[a-zA-Z0-9]{3,20}\.[a-zA-Z]{2,5}$/"  disabled></td> 
                                </tr>
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td><input type="text" name="phone" value="{{ old('phone',isset($data)) ? $data['phone'] : null}}"></td>
                                </tr>
                               
                                <tr>
                                    <td>Giới tính </td>
                                    <td><input type="radio" name="sex" value="0" 
                                            @if($data['sex'] == 0)
                                              checked="checked" 
                                            @endif> Nam 
                                        <input type="radio" name="sex" value="1"
                                            @if($data['sex'] == 1)
                                              checked="checked"
                                            @endif> Nữ
                                    </td> 
                                </tr>
                                <tr>
                                    <td>Role</td>
                                    <td>
                                        <select required name="role" >       
                                            <option value="0"
                                                @if($data['is_admin'] == 0)
                                                    selected="selected" 
                                                @endif>Admin</option>
                                            <option value="1"
                                                @if($data['is_admin'] == 1)
                                                    selected="selected" 
                                                @endif>Recruiter</option>
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
@endsection