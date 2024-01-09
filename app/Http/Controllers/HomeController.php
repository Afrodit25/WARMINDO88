<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');

    //     // $this->middleware('permission:home', ['only' => ['index','show']]);
    //     $this->middleware('permission:home_superadmin', ['only' => ['home_superadmin']]);
    //     $this->middleware('permission:home_admin', ['only' => ['home_Admin']]);
    //     $this->middleware('permission:home_employee', ['only' => ['home_employee']]);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $auth = auth()->user();
        if ($auth) {
            if(auth()->user()->hasRole('super-admin')){
                // return redirect()->intended('home_superadmin');
                return $this->home_superadmin();
            }
            elseif (auth()->user()->hasRole('admin')) {
                // return redirect()->intended('home_admin');
                return $this->home_admin();
            }
            elseif (auth()->user()->hasRole('sales')) {
                // return redirect()->intended('home_sales');
                return $this->home_sales();
            }
            elseif (auth()->user()->hasRole('member')) {
                return $this->home_member();
            }
        }

        return redirect()->intended('login');
    }

    public function cpanel_login()
    {
        return view('login');
    }

    public function home_superadmin()
    {
        return view('dashboard.home_SuperAdmin');
    }

    public function home_admin()
    {
        return view('dashboard.home_Admin');
    }

    public function home_sales()
    {
        $userid = auth()->user()->id;
        // return $userid;
        $kary = Karyawan::where('user_id', $userid)->first();
        $kode_ref = $kary->kode_refferal;
        // return $kode_ref;
        return view('dashboard.home_Sales', compact('kode_ref'));
    }

    public function home_member()
    {
        // return view('dashboard.home_member');
        return redirect()->intended('apps');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }


}
