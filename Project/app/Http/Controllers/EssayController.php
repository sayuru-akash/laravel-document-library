<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Essay;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Image;

class EssayController extends Controller
{
    public function addEssay()
    {
        return View('add-essay');
    }

    public function createEssay(Request $request)
    {
        if ($request['project_name'] == null){
            return redirect()->back()->with('essay_not_added', 'Please enter the project name');
        }
        if ($request['student_id'] == null){
            return redirect()->back()->with('essay_not_added', 'Please enter the student id');
        }
        if ($request['student_name'] == null){
            return redirect()->back()->with('essay_not_added', 'Please enter the student name');
        }
        if ($request['file_code'] == null){
            return redirect()->back()->with('essay_not_added', 'Please enter the gdrive file code');
        }
        if ($request['post_image'] == null){
            return redirect()->back()->with('essay_not_added', 'Please upload the cover image');
        }

        $validate = $request->validate([
            'project_name' => 'required',
            'student_id' => 'required',
            'student_name' => 'required',
            'file_code' => 'required',
            'post_image' => 'required',
        ]);

        if($validate)
        {
        $essay = new Essay();
        $essay -> project_name = $request->get('project_name');
        $essay -> student_id = $request->get('student_id');
        $essay -> student_name = $request->get('student_name');
        $essay -> file_code = $request->get('file_code');
        if ($request->hasFile('post_image')) {
            $file = $request->file('post_image')->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            $ldate = date('Y-m-d H-i-s');
            $filename = $ldate." ".$filename." thumb.".$extension;
            $filenameoriginal = $ldate." ".$filename.".".$extension;
            $resize = Image::make($request->file('post_image'))->resize(null, 300, function ($constraint) {
                $constraint->aspectRatio();
              })->save('post thumbnail/'. $filename);
            $image = $request->file('post_image')->move('post images/', $filenameoriginal);
        }
        $essay -> post_image = $image;
        $essay -> post_thumbnail = $filename;
        $essay -> Save();
        return back()->with('essay_added', 'Document Submitted Successfully');
        }
        else
        {
            return back()->with('essay_not_added', 'Document Not Submitted');
        }
    }
    public function getEssay()
    {
        $auth = resolve('littlegatekeeper');

        if($auth->isAuthenticated())
        {
        $essays = Essay::orderBy('id','DESC')->where('isapproved','=',0)->get();
        return view('view-essay',compact('essays'));
        }
        else
        {
            return Redirect::to('/login');
        }
    }

    public function getEssayApproved()
    {
        $essays = Essay::orderBy('id','DESC')->where('isapproved','=',1)->get();
        return view('view-essay-approved',compact('essays'));
    }

    public function getEssayByID($id)
    {
        $auth = resolve('littlegatekeeper');

        if($auth->isAuthenticated())
        {
        $essay = Essay::where('id',$id)->first();
        return view('essay-approval',compact('essay'));
        }
        else
        {
            return Redirect::to('/login');
        }
    }
    public function getEssayApprovedByID($id)
    {
        $essay = Essay::where('id',$id)->first();
        return view('view-approved-essay',compact('essay'));
    }
    public function deleteEssay($id)
    {
        $auth = resolve('littlegatekeeper');

        if($auth->isAuthenticated())
        {
        Essay::where('id',$id)->delete();
        return Redirect('admin')->with('essay-deleted','Essay Rejected Successfully');
        }
        else
        {
            return Redirect::to('/login');
        }
    }

    public function searchEssay(Request $request)
    {
        $auth = resolve('littlegatekeeper');

        if($auth->isAuthenticated())
        {
        $essay= Essay::where('student_id','=',$request->search)->get();
        return view('view-essay',['essays'=>$essay]);
        }
        else
        {
            return Redirect::to('/login');
        }
    }


    public function approveEssay($id)
    {
        $auth = resolve('littlegatekeeper');

        if($auth->isAuthenticated())
        {
        $essay = Essay::find($id);
        $essay->isapproved = 1;
        $essay->save();
        return Redirect('admin')->with('essay-Approved','Essay Published');
        }
        else
        {
            return Redirect::to('/login');
        }
    }

    public function addCredentials(Request $request)
    {

        $auth = resolve('littlegatekeeper');

        $loginSuccess = $auth->attempt($request->only([
            'username',
            'password'
        ]));

        if ($loginSuccess) {
            return redirect('/admin')->with('success', 'Thank You for authorizing. Please proceed.');
        }
        else{
            return redirect('/login')->with('error', 'You entered the wrong credentials');
        }

    }

    public function logout()
    {
        $auth = resolve('littlegatekeeper');

        if($auth->isAuthenticated())
        {
            $auth->logout();
            return redirect('/login');
        }

        return redirect('/login');;
    }
}
