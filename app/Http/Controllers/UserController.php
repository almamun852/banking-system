<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $query = $this->userRepository->list();

        if(request()->filled('name'))
            $query->where('name','like',request()->name.'%');

            if(request()->filled('email'))
            $query->where('email','like',request()->email.'%');

        $users=$query->paginate(20);

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        // Create a new user using the repository
        if($this->userRepository->create($validatedData)){
            return response()->json($this->jsonReponse("Successfully Saved ",url()->previous(),[],true));
        }
        else{
            return response()->json($this->jsonReponse("Failed To Save",url()->previous(),[],false));
        }

        // Redirect or return a response
    }

    public function show($id)
    {
        $user = $this->userRepository->find($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = $this->userRepository->find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        // Update the user using the repository
        $dataInfo=$this->userRepository->update($validatedData, $id);

        if($dataInfo->wasChanged()){
            return response()->json($this->jsonReponse("Successfully Updated.",url()->previous(),[],true));
        }
        else{
            return response()->json($this->jsonReponse("Failed To Update",url()->previous(),[],false));
        }
    }

    public function destroy($id)
    {

        if($this->userRepository->delete($id)){
            return response()->json($this->jsonReponse("Deleted Successfully",url()->previous(),[],true));
        }
        else{
            return response()->json($this->jsonReponse("Failed To Delete.",url()->previous(),[],false));
        }

    }

    private function jsonReponse($message,$url,$data,$falg)
    {
        return [
            'message' => $message,
            'redirectUrl' => $url,
            'data' => $data,
            'status' => $falg,
        ];
    }
}
