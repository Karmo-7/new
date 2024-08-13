<?php

// namespace App\Http\Controllers;


// namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;

// use Illuminate\Http\Request;
// use Illuminate\Http\jsonResponse;

// use App\Models\User;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Validator;
// use Laravel\Sanctum\HasApiTokens;



// class Registercontroller extends Controller
// {
//     public function register(Request $request)
//     {
//         $validator = Validator::make($request->all(), [
//             'name' => ['required', 'string'],
//             'email' => ['required', 'email', 'unique:users'],
//             'password' => ['required', 'min:8', 'same:password_confirmation'],
//             'password_confirmation' => ['required', 'min:8'],
//             'role' => ['string', 'in:admin,bloger',],

//         ]);

//         if ($validator->fails()) {
//             return response()->json(['error validate' => $validator->errors()], 422);
//         }
//         $input = $request->all();
//         $input['password'] = Hash::make($input['password']);

//         $user = User::create($input);
//         $token = $user->createToken('auth_token')->plainTextToken;

//        return view('blogs.index');

//         // return redirect()->route('login');
//     }

//     public function login(Request $request)
//     {
//         $validator=validator::make($request->all(),[

//              'email' => 'required|email',
//              'password' => 'required'
//         ]);
//         if($validator->fails()){
//             return response(['message'=>$validator->errors()],401);
//         }
//         if (Auth::attempt($request->all()))
//         {
//              $user =Auth::user();
//              $success=$user->createToken('MyApp')->plainTextToken;

//        return view('blogs.index');


//         }

//          return response(['message' => 'Bad credentials'], 401);
//     }


//      public function logout(Request $request)
//     {

//         $user = Auth::user();
//         $user->currentAccessToken()->delete();
//         return view('auth.login');


//     }


// }








