<?php

namespace App\Http\Controllers;

use App\Models\Job;

use App\Models\Career;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\University;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class CareerController extends Controller
{
    public function home() {

        $gal=Gallery::get();
        $job=Career::get();
           
     return view('frontend.home',compact("gal","job"));




    }
    
    public function jobview(Request $request,$id)
    {
        $job = Career::findOrFail($id);
        // dd($property);

        return view('frontend.careerview')->with('Job', $job);
    }

    public function contact() {
        
        return view('frontend.contact');
    
        }
        public function gallery() {
        $gal=Gallery::get();
           
            return view('frontend.gallery',compact("gal"));
        
            }
        public function about() {
        
            return view('frontend.aboutus');
        
            }

                public function career() {

                    $jobs = Career::where('title', 'NOT LIKE', '%intern%')
                    ->where('title', 'NOT LIKE', '%training%')
                    ->get();
    
            
                    return view('frontend.career', compact('jobs'));
                
                    }


                    public function intern() {

                        $jobs = Career::where('title', 'LIKE', '%intern%')
                        ->orwhere('title', 'LIKE', '%workshop%')
                        ->get();
        
                
                        return view('frontend.intern', compact('jobs'));
                    
                        }


                        public function training() {

                            $jobs = Career::where('title', 'LIKE', '%training%')
                            ->orwhere('title', 'LIKE', '%trainings%')
                            ->get();
            
                    
                            return view('frontend.training', compact('jobs'));
                        
                            }


                            public function reg() {
        
                                return view('frontend.pwd_registration');
                                
                            
                                }

                                public function university() {
        
                                    return view('frontend.university');
                                    
                                
                                    }


                public function register() {
        
                    return view('frontend.registration');
                    
                
                    }

                  
                        public function store(Request $request) {

                            $request->validate([
                                'idno' => 'nullable|unique:jobs,idno',
                                
                                // other validation rules for other fields
                            ]);
    
                            $job = new Job();
                            $job->fullname = $request->input('fullname');
                            $job->birth_date = $request->input('dob');
                            $job->education = $request->input('education');
                            $job->qualification = $request->input('qualification');
                            $job->mobile = $request->input('mobile');
                            $job->subcounty = $request->input('subcounty');
                            $job->ward = $request->input('ward');
                            $job->idno = $request->input('idno');
                            $job->gender = $request->input('gender');
                            $job->grade = $request->input('grade');
                           
                            $job->email = $request->input('email');
                            $job->passport = $request->input('passport');
                            $job->passport_date = $request->input('passdate');
                            $job->pwd = $request->input('pwd');
                            $job->parent_name = $request->input('emergency');
                            $job->parent_no = $request->input('emobile');
                            $job->employer = $request->input('employer');
                            $job->exp_year = $request->input('experience');
                            $job->position = $request->input('job');
                            $job->work = $request->input('work');
                            $job->passport_no = $request->input('passportNumber');
                            if ($request->hasfile('image')) {
                                $avatar = $request->file('image');
                                $filename = time().'.'.$avatar->getClientOriginalExtension();
                                Image::make($avatar)->resize(300, 300)->save(public_path('uploads/image_files/'.$filename));
                                $avatar->move('public/uploads/image_files/', $filename);
                                $job->image = $filename;
                            }
                            if ($request->hasfile('id_copy')) {
                                $avatar = $request->file('id_copy');
                                $filename = time().'.'.$avatar->getClientOriginalExtension();
                                Image::make($avatar)->resize(300, 300)->save(public_path('uploads/image_files/'.$filename));
                                $avatar->move('public/uploads/image_files/', $filename);
                                $job->id_copy = $filename;
                            }
                            $job->save();

                            
                            $request->session()->flash('success', 'Job application submitted successfully! Good luck!');
    
            return redirect('/youth-employment')->with('status', 'record added successfully');
        }                
    public function womanreg() {
        
        return view('frontend.woman_registration');
        
    
        }

        public function storewoman(Request $request) {
            $request->validate([
               
                'regno' => 'nullable|unique:registrations,reg_number',
                // other validation rules for other fields
            ]);

            $register = new Registration();
           
            $register->group_type = $request->input('grouptype');
            $register->group_name = $request->input('gname');
            $register->reg_date = $request->input('regdate');
            $register->reg_number = $request->input('regno');
            $register->contact_person = $request->input('contact');
            $register->contant_no = $request->input('contno');
            $register->subcounty = $request->input('subcounty');
            $register->ward = $request->input('ward');
            $register->total_member = $request->input('member');
            if ($request->hasfile('reg_cert')) {
                $avatar = $request->file('reg_cert');
                $filename = time().'.'.$avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(300, 300)->save(public_path('uploads/image_files/'.$filename));
                $avatar->move('public/uploads/image_files/', $filename);
                $register->reg_cert = $filename;
            }

            $register->save();
            $request->session()->flash('success', 'Data submitted successfully.');

return redirect('/registered-group')->with('status', 'record added successfully');
}

public function uni(Request $request) {
    $request->validate([
       
        'idno' => 'nullable|unique:universities,idno',
       
    ]);

    $uni = new University();
   
    $uni->fullname = $request->input('fullname');
    $uni->idno = $request->input('idno');
    $uni->school = $request->input('school');
    $uni->birth_date = $request->input('dob');
    $uni->kcse_date = $request->input('kcse');
    $uni->grade = $request->input('grade');
    $uni->id_copy = $request->input('idcopy');
    $uni->mobile = $request->input('mobile');
    $uni->gender = $request->input('gender');
    $uni->subcounty = $request->input('subcounty');
    $uni->ward = $request->input('ward');
    $uni->course1 = $request->input('course1');
    $uni->course2 = $request->input('course2');
    $uni->course3 = $request->input('course3');
    $uni->pwd = $request->input('pwd');
    $uni->passport = $request->input('passport');
    $uni->passport_no = $request->input('passportNumber');
    $uni->passport_date = $request->input('passdate');
    $uni->cont_person = $request->input('emergency');
    $uni->cont_number = $request->input('emobile');
    $uni->email = $request->input('email');
    
    if ($request->hasfile('image')) {
        $avatar = $request->file('image');
        $filename = time().'.'.$avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save(public_path('uploads/image_files/'.$filename));
        $avatar->move('public/uploads/image_files/', $filename);
        $uni->image = $filename;
    }
    if ($request->hasfile('id_copy')) {
        $avatar = $request->file('id_copy');
        $filename = time().'.'.$avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save(public_path('uploads/image_files/'.$filename));
        $avatar->move('public/uploads/image_files/', $filename);
        $uni->id_copy = $filename;
    }
   
    $uni->save();
    $request->session()->flash('success', 'Your university application has been successfully submitted. Our team will review your application, and we will get in touch with you soon. Thank you');

return redirect('/university-placement');
}

public function contactus(Request $request) {
   

    $msg = new Message();
   
    $msg->name = $request->input('name');
    $msg->email = $request->input('email');
    $msg->message = $request->input('message');

    $msg->save();
    $request->session()->flash('success', 'Message Received. Thank you!');

return redirect('/contact');
}



    
}