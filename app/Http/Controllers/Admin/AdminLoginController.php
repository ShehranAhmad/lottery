<?php

namespace App\Http\Controllers\Admin;

use App\Models\Appointment;
use App\Models\OrderDetail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;
use App\Models\Order;

class AdminLoginController extends Controller
{

    public  function adminIndexLogin(){
        if(Auth::check()) {
           return $this->checkAdmin();
        }
        return view('auth.login-admin');
    }

    public function dashboard()
    {
        $order=Order::all()->count();
        $admin_appointment_earning=Appointment::where('status','completed')->sum('admin_earning');
        $admin_order_earning=OrderDetail::where('status','!=','canceled')->sum('admin_earning');

        $this_month_appointment_earning=Appointment::whereDate('created_at','>=',Carbon::today()->subDays(30))->where('status','completed')->sum('admin_earning');
        $this_month_order_earning=OrderDetail::whereDate('created_at','>=',Carbon::today()->subDays(30))->where('status','!=','canceled')->sum('admin_earning');
        $this_month_total=$this_month_appointment_earning+$this_month_order_earning;
        $this_month_appointment_percentage=0;
        $this_month_order_percentage=0;
        if($this_month_total>0)
        {
            $this_month_total=number_format($this_month_total,0);
            $this_month_appointment_percentage=number_format(($this_month_appointment_earning/$this_month_total)*100,0);
            $this_month_order_percentage=number_format(($this_month_order_earning/$this_month_total)*100,0);
        }


        $app_chart = Appointment::where('status','!=','canceled')->whereDate('created_at','>=',Carbon::today()->subDays(30))->get();
        $order_chart = OrderDetail::where('status','!=','canceled')->whereDate('created_at','>=',Carbon::today()->subDays(30))->get();


        for ($i=0;$i<30;$i++)
        {
            $date[Carbon::today()->subDays(30)->addDays($i+1)->format('jS M')]=0;
            $app_date[Carbon::today()->subDays(30)->addDays($i+1)->format('jS M')]=0;
        }

        foreach($order_chart as $_order) {
            $data = $_order->created_at->format('jS M');
            if(isset($date[$data])) {
                $date[$data] ++;
            }
        }
        foreach($app_chart as $_app) {
            $data = $_app->created_at->format('jS M');
            if(isset($app_date[$data])) {
                $app_date[$data] ++;
            }
        }

        $labels= array_keys($date);
        $app_chart= array_values($app_date);
        $order_chart= array_values($date);


        return view('admin.dashboard',get_defined_vars());
    }

    public function checkAdmin(){

        if(Auth::user()->can('browse_admin')){
            return redirect()->route('admin.dashboard');
        }
        if(Auth::user()->role=='admin'){
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('index');
    }

    protected function AdminAttemptLogin(Request $request)
    {
        if( $this->guard()->attempt($this->credentials($request), $request->filled('remember')))
        {
            return $this->checkAdmin();
        }
        else{
            return back()->with('error', 'Whoops! These credentials do not match our records.')->withInput($request->except('password'));;

        }

    }
    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }
    protected function guard()
    {
        return Auth::guard();
    }
    public function username()
    {
        return 'email';
    }
    public function login(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        if ($response = $this->authenticated($request, $this->guard()->user())) {
            return $response;
        }

        return $request->wantsJson()
                    ? new Response('', 204)
                    : redirect()->intended($this->redirectPath());
    }
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

}
