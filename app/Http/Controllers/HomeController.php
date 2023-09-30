<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Career;
use App\Models\Gallery;
use App\Models\University;
use App\Models\Registration;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $gal=Gallery::get();
        $job=Career::get();
            
    return view('frontend.applications.home',compact("gal","job"));

    
    }

    public function contact() {
        
        return view('frontend.applications.contact');
    
        }

    public function contactus(Request $request) {


        $msg = new Message();
        
        $msg->name = $request->input('name');
        $msg->email = $request->input('email');
        $msg->message = $request->input('message');
    
        $msg->save();
        $request->session()->flash('success', 'Message Received. Thank you!');
    
    return redirect('/user/contact');
    }
    
    public function gallery() {
        $gal=Gallery::get();
            
            return view('frontend.gallery',compact("gal"));
        
            }
    public function university() {

        return view('frontend.applications.university');
        
    
        }
       
 

        public function uni(Request $request) {
            $request->validate([
               
                'idno' => 'nullable|unique:universities,idno',
               
            ]);
            $user = auth()->user();
            $uni = new University();
            $uni->user_id = $user->id;
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
        
        return redirect('/user/university-placement');
        }

        public function register() {
        
            return view('frontend.applications.jobs');
            
        
            }

            public function store(Request $request) {

                $request->validate([
                    'idno' => 'nullable|unique:jobs,idno',
                    
                    // other validation rules for other fields
                ]);
                $user = auth()->user();
                $job = new Job();
                $job->user_id = $user->id;
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
            
                return redirect('/user/youth-employment')->with('status', 'record added successfully');
                    } 


        public function womanreg() {

            return view('frontend.applications.groups');
            
        
            }

                        
        public function storewoman(Request $request) {
            $request->validate([
                
                'regno' => 'nullable|unique:registrations,reg_number',
                // other validation rules for other fields
            ]);
            $user = auth()->user();
            $register = new Registration();
            $register->user_id = $user->id;
            
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
        
        return redirect('/user/registered-group')->with('status', 'record added successfully');
        }
    
      
        public function appview()
        {
            $user = auth()->user();
            
            // Retrieve jobs, universities, and registrations associated with the current user
            $jobs = Job::where('user_id', $user->id)->get();
            // $universities = University::where('user_id', $user->id)->get();
            // $registrations = Registration::where('user_id', $user->id)->get();
        
            return view('frontend.profile', compact('jobs'));
        }
        public function profileedit(Request $request,$id)
        {
          $jobs = Job::findOrFail($id);
          return view('frontend.profile-edit')->with('Job', $jobs);
                      
        }

        public function profileupdate(Request $request,$id){

            $job = Job::find($id);
            $job->fullname = $request->input('fullname');
            
            $job->education = $request->input('education');
            $job->qualification = $request->input('qualification');
            $job->mobile = $request->input('mobile');
           
            $job->idno = $request->input('idno');
           
            $job->grade = $request->input('grade');
            
            $job->email = $request->input('email');
            $job->passport = $request->input('passport');
            $job->passport_date = $request->input('passdate');
           
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
        
            
            $request->session()->flash('success', ' application updated successfully!');
        
             return redirect('user/profile');
        }        
        
}