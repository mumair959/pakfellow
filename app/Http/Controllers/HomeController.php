<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\ContactUsEmail;
use App\User;
use App\Models\Blog;
use Notification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Blog::where('approved',1)->with('user')->withCount(['comments','likes'])->get();
        return view('user.home', ['blogs' => $blogs]);
    }

    public function events()
    {
        return view('general.events');
    }

    public function centers()
    {
        return view('general.centers');
    }

    public function privacy()
    {
        return view('general.privacy');
    }

    public function singleEvent()
    {
        return view('general.single_event');
    }

    public function gallery()
    {
        return view('general.gallery');
    }

    public function about()
    {
        return view('general.about');
    }

    public function register()
    {
        return view('user.register');
    }

    public function contactUs()
    {
        return view('user.contact');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'name'       => 'required|max:150',
            'email'       => 'required|email|max:200',    
            'subject'       => 'required|max:400',
            'message'       => 'required|max:2000',               
        ]);

        try{
            Notification::route('mail', 'pakfellow@gmail.com')
            ->notify(new ContactUsEmail($request->all()));

            if (!empty($request->sendme)) {
                Notification::route('mail', $request->email)
                ->notify(new ContactUsEmail($request->all()));
            }

            return response()->json(['message' => 'Email has been sent, Our representative will contact you soon, Thanks','success' => true, 'status_code' => 200]);
        }
        catch(\Exception $ex){
            return response()->json(['message' => $ex->getMessage(),'success' => false, 'status_code' => 500]);
        }

    }

    public function directory(Request $request)
    {
        $per_page = 30;

        $users = User::where('user_type_id','<>',1)->with('userType');
        
        if (!empty($request->search)) {
        $users = $users->where('name', 'like', '%' . $request->search . '%');
        }

        $users = $users->paginate($per_page);
        $total = User::where('user_type_id','<>',1)->count();
        $per_page = ($total == 0 || $total <= $per_page) ?  $total : $per_page;
        
        return view('user.directory',['users' => $users, 'per_page' => $per_page, 'total' => $total]);
    }
}
