<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use Auth;

class CandidateController extends Controller
{
    public function getListCandidate(){
    	$objCandidate = new Candidate();
    	$listCandidates = $objCandidate->all()->toArray();
    	return view('page.listCandidate')->with('listCandidates', $listCandidates);
    }
    public function getAddCandidate(){
    	return view('page.addCandidate');
    }

    //lưu user mới khi form submit
    public function postAddCandidate(Request $request){
    	$this->validate($request,
    		[
    			'fullname'=>'required',
                'email'=>'required|unique:candidates'
    		],
    		[
                'fullname.required'=>'Vui lòng nhập tên ứng viên',
                'email.required'=>'Vui lòng nhập email ứng viên',
                'email.unique'=>'Email đã có người dùng'
    		]);
       

            $candidate = new Candidate();
            $candidate->fullname = $request->fullname;
            $candidate->email = $request->email;
            $candidate->phone = $request->phone;
            $candidate->birthday = $request->birthday;
            $candidate->sex = $request->sex;
            $candidate->experience = $request->experience;
            $candidate->school = $request->school;
            $candidate->certificate = $request->certificate;
            $candidate->type_work = $request->type_work;
            $candidate->language = $request->language;
            $candidate->user_create = Auth::user()->username;
            $candidate->save();
            return redirect()->route('list.candidate')->with(['flash_level'=>'success', 'flash_message'=>'Thêm ứng viên thành công']);
    }

    public function getEditCandidate($id){
        $data = Candidate::find($id);
        return view('page.editCandidate', compact('data','id'));
    }

    public function updateCandidate($id, Request $request){
        $candidate = Candidate::find($id);
        $candidate->fullname = $request->fullname;
        $candidate->phone = $request->phone;
        $candidate->birthday = $request->birthday;
        $candidate->sex = $request->sex;
        $candidate->experience = $request->experience;
        $candidate->school = $request->school;
        $candidate->certificate = $request->certificate;
        $candidate->type_work = $request->type_work;
        $candidate->language = $request->language;
        $candidate->save();
        return redirect()->route('list.candidate')->with(['flash_level'=>'success', 'flash_message'=>'Cập nhật ứng viên thành công']);
    }

    public function deleteCandidate($id){
        $candidate = Candidate::find($id);
        $candidate->delete($id);
        return redirect()->route('list.candidate')->with(['flash_level'=>'success', 'flash_message'=>'Xóa ứng viên thành công']);
    }
}
