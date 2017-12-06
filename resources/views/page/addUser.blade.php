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

                <form method="post" action="{{route('user.getadd')}}">
                 <input type="hidden" name="_token" value = "{{csrf_token()}}">
                <table class="table table-striped table-bordered table-hover">

                <h2>Add User</h2>
                            
                            <tbody>
                                 <tr>
                                    <td>Họ tên </td>
                                    <td><input type="text" required name="fullname"></td>
                                </tr>
                                <tr>
                                    <td>Username </td>
                                    <td><input type="text" required name="username"></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td><input type="password" required name="password"></td>
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
                                    <td>Giới tính </td>
                                    <td><input type="radio" name="sex" value="0"> Nam 
                                        <input type="radio" name="sex" value="1"> Nữ
                                    </td> 
                                </tr>
                                <tr>
                                    <td>Role</td>
                                    <td>
                                        <select required name="role" >       
                                            <option value="0">Admin</option>
                                            <option value="1">Recruiter</option>
                                        </select>
                                    </td>
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
@endsection