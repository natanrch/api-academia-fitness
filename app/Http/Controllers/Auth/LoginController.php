<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Request;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/perfil';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'cpf';
    }

    public function formInstrutor()
    {
        return view('auth.instrutor.login');
    }

    public function login()
    {
        $credenciais = Request::only('cpf', 'password');
        if(Auth::attempt($credenciais)) {
            if(Auth::user()->isInstrutor()) {
                return redirect('/instrutor/perfil');
            }
            if(Auth::user()->isAdmin()) {
                return redirect('/admin');
            }
            return redirect('/aluno/ficha');
        } else {
            return redirect()->back()->withErrors([
                'invalido' => 'Login ou senha inválidos'
            ]);
        }
    }

    public function loginInstrutor()
    {
        $credenciais = Request::only('cpf', 'password');
        if(Auth::attempt($credenciais)) {
            return redirect('/perfil-instrutor');
        }   
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }

    public function loginAPI()
    {
        if(Auth::attempt(['cpf' => request('cpf'), 'password' => request('password')])){

            $user = Auth::user();

            $success['token'] = $user->createToken('myApp')->accessToken;

            return response()->json(['success' => $success, 'user' => $user], 200);
        } else {
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    public function logoutAPI(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

}
