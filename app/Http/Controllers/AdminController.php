<?php

namespace App\Http\Controllers;

use App\Models\Job;

use App\Models\User;
use App\Models\Career;
use App\Models\University;
use App\Models\Registration;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index(){

        $job = Job::where('group_type', 'LIKE', 'employment')->count();
        $youth = Job::where('group_type', 'LIKE', 'youth')->count();
        $pwd = Job::where('group_type', 'LIKE', 'pwd')->count();
        $woman = Job::where('group_type', 'LIKE', 'woman')->count();
        $postgraduate = Job::where('education', 'LIKE', 'Postgraduate')->count();
        $graduate = Job::where('education', 'LIKE', 'Undergraduate')->count();
        $college = Job::where('education', 'LIKE', 'College')->count();
        $vocational = Job::where('education', 'LIKE', 'Cocational')->count();
        $kcse = Job::where('education', 'LIKE', 'Secondary')->count();
    
        return view('backend.admin', [
            'job' => $job,
            'youth' => $youth,
            'pwd' => $pwd,
            'woman' => $woman,
            'postgraduate' => $postgraduate,
            'graduate' => $graduate,
            'college' => $college,
            'vocational' => $vocational,
            'kcse' => $kcse
        ]);
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('backend.career.create');
    }

    //Registration Page

        public function store(Request $request) {

            $job = new Career();
            $job->title = $request->input('title');
            $job->description = $request->input('description');
            $job->duration = $request->input('duration');
            $job->vacancy = $request->input('vacancy');
            $job->venue = $request->input('venue');
            $job->status = $request->input('status');
    
            $job->save();

        return redirect('/view-opportunities')->with('status', 'record added successfully');
        }
       
        public function profile(Request $request,$id)
        {
            $job = Job::findOrFail($id);
            // dd($property);
    
            return view('backend.career.profile')->with('Job', $job);
        }

        public function university(Request $request,$id)
        {
            $uni = University::findOrFail($id);
            // dd($property);
            return view('backend.career.applicant')->with('University', $uni);
            
        }


        public function view(){

            $jobs= Career::get();
            return view('backend.career.index', compact('jobs'));
        }

        public function adduser(){

            $users= User::get();
            return view('backend.users.create', compact('users'));
        }

        public function viewuser(){

            $users= User::get();
            return view('backend.users.index', compact('users'));
        }

        public function userstore(Request $request){

            $users = new User();
            $users->name = $request->input('fullname');
            $users->email = $request->input('email');
            $users->password = $request->input('password');
            
    
            $users->save();

        return redirect('/users')->with('status', 'record added successfully');
        }

        public function report(){
            $register = Registration::where('group_type','youth')->get();
            
            return view('backend.reports.youth', compact('register'));
        }
        public function employment(){
            $job = Job::get();
            
            return view('backend.reports.employment', compact('job'));
        }

        public function pwd(){
            $register = Registration::where('group_type','pwd')->get();
            
            return view('backend.reports.pwd', compact('register'));
        }

        public function woman(){
            $register = Registration::where('group_type','women')->get();
            
            return view('backend.reports.woman', compact('register'));
        }
        public function postg(){
            $job = Job::where('education','Postgraduate')->get();
            
            return view('backend.reports.postgraduate', compact('job'));
        }
        public function underg(){
            $job = Job::where('education','Undergraduate')->get();
            
            return view('backend.reports.graduate', compact('job'));
        }
        public function college(){
            $job = Job::where('education','College')->get();
            
            return view('backend.reports.college', compact('job'));
        }
        public function vocational(){
            $job = Job::where('education','Vocational')->get();
            
            return view('backend.reports.vocational', compact('job'));
        }
        public function kcse(){
            $job = Job::where('education','secondary')->get();
            
            return view('backend.reports.secondary', compact('job'));
        }
        public function kcpe(){
            $job = Job::where('education','primary')->get();
            
            return view('backend.reports.primary', compact('job'));
        }
        public function uni(){
            $uni = University::get();
            
            return view('backend.reports.university', compact('uni'));
        }

}