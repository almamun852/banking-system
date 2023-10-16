<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\RedirectResponse;
use App\Repositories\UserRepository;
use App\Http\Requests\LoginRequest;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Hash;
use Auth;

class LoginController extends Controller
{
    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function loginPage(): View
    {
        return view('login');
    }

    public function loginAction(): JsonResponse
    {
        $userInfo = $this->repository->isUserExists(request()->userName);

        if (!empty($userInfo)) {
            if (Hash::check(request()->password, $userInfo->password)) {
                Auth::login($userInfo);

                session()->flash('message', "Logged In Successfully");

                return response()->json([
                    'status' => true,
                    'message' => 'Logged In Successfully',
                    'redirectUrl' => route('dashboard')
                ]);
            } else {
                session()->flash('warningMessage', "Wrong Password. Please Enter Valid Password.");

                return response()->json([
                    'status' => false,
                    'warningMessage' => 'Wrong Password. Please Enter Valid Password.'
                ]);
            }
        } else {
            session()->flash('warningMessage', "Invalid Username. Please Enter Valid Username.");

            return response()->json([
                'status' => false,
                'warningMessage' => 'Invalid Username. Please Enter Valid Username.'
            ]);
        }
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        session()->flash('message', "Successfully Logged Out.");

        return redirect()->route('login');
    }
}
