@extends('master')
@section('Content')

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>QUẢN TRỊ > ỨNG VIÊN</h2>   
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
                    <a href="{{route('candidate.getadd')}}">(+) Add Candidate</a>
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
                            
                           @foreach ($listCandidates as $candidate)
                            
                                <tr>
                                    <td>{{$candidate['id']}}</td>
                                    <td>{{$candidate['fullname']}}</td>
                                    <td>{{$candidate['email']}}</td>
                                    <td>{{$candidate['phone']}}</td>
                                    <td>{{$candidate['birthday']}}</td>
                                    <td> @if($candidate['sex']==0) {{'nam'}} @else {{'nữ'}} @endif</td>
                                    <td>{{$candidate['experience']}}</td>
                                    <td>{{$candidate['school']}}</td>
                                    <td>{{$candidate['certificate']}}</td>
                                    <td> @if($candidate['type_work']==0) {{'Fresher'}} @elseif($candidate['type_work']==1) {{'Junior'}} @else {{'Senior'}} @endif</td>
                                    <td><a href="{{route('candidate.getedit', $candidate['id'])}}">Sửa</a> | <a href="{{route('candidate.delete', $candidate['id'])}}">Xóa</a></td>
                                </tr>
                            
                            @endforeach
                            </tbody>
                          
                        </table>

            </div>
    
        </div>
@endsection