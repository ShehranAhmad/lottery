<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function saveInquiry(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);

        Inquiry::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ]);

        return redirect()->back()->with('message','Your inquiry has been submitted');
    }


    public function saveNewsLetter(Request $request)
    {

        $request->validate([
            'email'=>'required|email'
        ]);
        $email = NewsFeed::where('email',$request->email)->first();
        if($email !=null)
        {
            return response()->json(['success'=>false]);
        }
        NewsFeed::create([
            'email'=>$request->email,
        ]);
        sendMail([
            'view' => 'email.save_news_feed',
            'to' => $request->email,
            'subject' => 'NewsFeed Notification',
            'name'=>'Bantu Notification',
            'data' => [ 'email' => $request->email

            ]
        ]);
        return response()->json(['success'=>true]);
    }

    public function passwordReset(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {

            $password_broker = app(PasswordBroker::class);
            //create reset password token
            $token = $password_broker->createToken($user);
            \DB::table('password_resets')->insert(['email' => $user->email, 'token' => $token, 'created_at' => new Carbon]);
            $url = url('/reset-password') . '/' . $token . '?email=' . $request->email;

            $this->sendMail([
                'view' => 'email.reset-password',
                'to' => $user->email,
                'subject' => 'Reset Password Email Link',
                'name' => $user->name,
                'data' => ['url' => $url, 'user' => $user

                ]
            ]);
            dd('end');
            return back()->with('status', 'Link has been sent to your email');
        }
        else
        {
            // dd('else');
            return back()->with('error', 'Whoops your email is wrong');
        }
    }

    public function sendMail($data)
    {
        Mail::send($data['view'], ['data' => $data['data']], function ($message) use ($data) {
            $message->to($data['to'], $data['name'])->subject($data['subject']);
        });
    }
}
