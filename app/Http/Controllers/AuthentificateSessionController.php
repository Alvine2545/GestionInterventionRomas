<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Pipeline;
use Laravel\Fortify\Actions\AttemptToAuthenticate;
use Laravel\Fortify\Actions\EnsureLoginIsNotThrottled;
use Laravel\Fortify\Actions\PrepareAuthenticatedSession;
use Laravel\Fortify\Actions\RedirectIfTwoFactorAuthenticatable;
use Laravel\Fortify\Contracts\LoginResponse;
use Laravel\Fortify\Contracts\LoginViewResponse;
use Laravel\Fortify\Contracts\LogoutResponse;
use Laravel\Fortify\Features;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Validator as IlluminateValidationValidator;
use Validator;


class AuthentificateSessionController extends Controller
{
    
    /**
     * The guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected $guard;

    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\StatefulGuard  $guard
     * @return void
     */
    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }

    /**
     * Show the login view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Laravel\Fortify\Contracts\LoginViewResponse
     */
    public function create(Request $request)
    {
        if (Auth::guard('expert')->user()) {
            return redirect('admin/dashboard');
        } else {
            return view('login');
        }
        
        
    }

    /**
     * Attempt to authenticate a new session.
     *
     * @param  \Laravel\Fortify\Http\Requests\LoginRequest  $request
     * @return mixed
     */
    public function store(LoginRequest $request)
    {
        $validator = FacadesValidator::make($request->all(),[
            'email' => 'required',
            'password' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $email = $request->email;
        $password = $request->password;
        if(Auth::guard('users')->attempt(['email' => $email, 'password' => $password])){
            return redirect('admin/dashboard');
        }else{
            return back()->withErrors(['gjh']);
        }
        // return $this->loginPipeline($request)->then(function ($request) {
        //     return app(LoginResponse::class);
        // });
    }

    /**
     * Get the authentication pipeline instance.
     *
     * @param  \Laravel\Fortify\Http\Requests\LoginRequest  $request
     * @return \Illuminate\Pipeline\Pipeline
     */
    // protected function loginPipeline(LoginRequest $request)
    // {
    //     if (Fortify::$authenticateThroughCallback) {
    //         return (new Pipeline(app()))->send($request)->through(array_filter(
    //             call_user_func(Fortify::$authenticateThroughCallback, $request)
    //         ));
    //     }

    //     if (is_array(config('fortify.pipelines.login'))) {
    //         return (new Pipeline(app()))->send($request)->through(array_filter(
    //             config('fortify.pipelines.login')
    //         ));
    //     }

    //     return (new Pipeline(app()))->send($request)->through(array_filter([
    //         config('fortify.limiters.login') ? null : EnsureLoginIsNotThrottled::class,
    //         Features::enabled(Features::twoFactorAuthentication()) ? RedirectIfTwoFactorAuthenticatable::class : null,
    //         AttemptToAuthenticate::class,
    //         PrepareAuthenticatedSession::class,
    //     ]));
    // }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Laravel\Fortify\Contracts\LogoutResponse
     */
    public function destroy(Request $request): LogoutResponse
    {
        $this->guard->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return app(LogoutResponse::class);
    }
}
