@extends('master')
@section('Content')

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>QUẢN TRỊ > USER</h2>   
                    </div>
                    <div class="col-lg-12">
                        @if(Session::has('flash_message'))
                             <div class="alert alert-{{Session::get('flash_level')}}">
                                 {{Session::get('flash_message')}}
                             </div>
                        @endif
                    </div>
                </div>              
                <div style="float: right;">
                    <a href="{{ route('user.getadd') }}">(+) Add User</a>
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
                            
                           @foreach ($listUsers as $user)
                            <tr>
                                    <td>{{$user['id']}}</td>
                                    <td>{{$user['fullname']}}</td>
                                    <td>{{$user['username']}}</td>
                                    <td>{{$user['email']}}</td>
                                    <td>{{$user['phone']}}</td>
                                    <td>@if($user['sex']==0) {{'nam'}} @else {{'nữ'}} @endif</td>
                                    <td>@if($user['is_admin']==0) {{'admin'}} @else {{'recruiter'}} @endif</td>
                                    <td><a href="{{route('user.getedit', $user['id'])}}">Sửa</a> | <a href="{{route('user.delete', $user['id'])}}">Xóa</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
            </div>
    
        </div>
@endsection