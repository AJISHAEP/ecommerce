<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\catagory;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class AuthManager extends Controller
{
    public function signin()
    {
        return view('signin');
    }

    public function signup()
    {
        return view('signup');
    }

    public function signinPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect(route('welcome'));
        }

        return redirect(route('signin'))->with("message", "Sign-in details are not valid");
    }
    // Request $request

    public function signupPost( Request $request )
    {
        // $request->validate([
        //     'fname' => 'required',
        //     'lname' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'phone' => 'required|unique:users',
        //     'password' => 'required|min:8|confirmed',
        // ]);
        // return $data;
        $data = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ];
        //  return $data;
        $user = DB::table('users')->insert($data);
        if (!$user) {
            return redirect(route('signup'))->with("error", "Sign-up failed, please try again.");
        }

        return redirect(route('signin'))->with("success", "Sign up successful, please sign in.");
    }

    public function signout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('signin'));
    }
    public function welcome()
    {
        // $user = Auth::user();
        // return view('welcome', compact('user'));
        $data=product::all();
        $catagories=catagory::all();
        return view('welcome', compact('data','catagories'));
    }


    public function profile()
    {
        // $user = Auth::user();
        return view('profile');
    }

    public function new($id)
    {
        // $user = Auth::user();
        $data = product::where('catagory_id',decrypt($id) )->get();
        return view('new', compact('data'));
    }

    public function update(Request $request)
    {
        // $request->validate([
        //     'address1'=>['required','string','max:499'],
        //     'address2'=>['required','string','max:499'],
        //     'city'=>['required','string'],
        //     'state'=>['required','string'],
        //     'pin'=>['required','digits:6'],
        // ]);
        $user=User::findOrFail(Auth::user()->id);
        $user->update([
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'phone'=>$request->phone,
        ]);
        if (!$user) {
            return redirect(route('profile'))->with("error", "Sign-up failed, please try again.");
        }
        return redirect(route('profile'))->with('message','Profile updated successfully');
    }


        public function addressupdate(Request $request)
    {
        $accounts=User::findOrFail(Auth::user()->id);
        $request->validate([
            'address1'=>['required','string','max:499'],
            'address2'=>['required','string','max:499'],
            'city'=>['required','string'],
            'state'=>['required','string'],
            'pin'=>['required','digits:6'],
        ]);

        $data=[
            'user_id'=>$accounts->id,

                'address1'=>$request->address1,
                'address2'=>$request->address2,
                'city'=>$request->city,
                'state'=>$request->state,
                'pin'=>$request->pin,

        ];

        $accounts = DB::table('accounts')->insert($data);
        if (!$accounts) {
            return redirect(route('address '))->with("error", "Sign-up failed, please try again.");
        }
        return redirect(route('address'))->with('message','Address updated successfully');
    }


        // Account::updateOrCreate(
        //     [
        //         'user_id'=>$user->id,

        //         'address1'=>$request->address1,
        //         'address2'=>$request->address2,
        //         'city'=>$request->city,
        //         'state'=>$request->state,
        //         'pin'=>$request->pin,
        //     ]
        //     );



    // public function accountPost(Request $request)
    // {

    //     $data = [
    //         'name' => $request->name,
    //         'name' => $request->email,
    //         'address' => $request->address,
    //         'address2' => $request->address2,
    //         'city' =>$request->city,
    //         'state' =>$request->state,
    //         'pin' =>$request->pin,
    //     ];
    //     Account::create($data);
    //         return redirect(route('account'))->with("message", "personal info submitted.");
    //     }


        public function add()
        {
            // return view('add');
            $accounts = Account::where('user_id',Auth::user()->id)->get();
            return view('add',compact('accounts'));
        }
        public function address(){
            return view('address');
        }
        public function edits($id){
            $accounts = Account::find(decrypt($id));
            return view('edits',compact('accounts'));
            // return view('edits');
        }
        public function addressedits(Request $request)
{
    // Validate the request data if needed
    // $request->validate([
    //     'address1' => ['required', 'string', 'max:499'],
    //     'address2' => ['required', 'string', 'max:499'],
    //     'city' => ['required', 'string'],
    //     'state' => ['required', 'string'],
    //     'pin' => ['required', 'digits:6'],
    // ]);


    $user = Account::where('id',decrypt($request->account_id))->first();


    $address=([
        'address1'=>$request->address1,
        'address2'=>$request->address2,
        'city'=>$request->city,
        'state'=>$request->state,
        'pin'=>$request->pin,
    ]);

    $user = DB::table('accounts')->where('id',decrypt($request->account_id))->update($address);

    if (!$user) {
        return redirect(route('edit'))->with("error", "Update failed, please try again.");
    }

    return redirect(route('add'))->with("message", "Profile updated successfully");
}
}
