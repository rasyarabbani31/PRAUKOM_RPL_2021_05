<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\user;
use App\Models\level_user;



class LoginController extends Controller{
	function loginPage(){
		$lu=DB::table('level_user')->get();


		return view('login', ['title'=>'LOGIN', 'level_user'=>$lu]);
	}


	public function authenticate(Request $request){
		// $credentials == hasil validasi
        $credentials=$request->validate([
			'username'=>'required',
			'password'=>'required',
			'kode_level'=>'required'
		]);


		$user=DB::table('user')->where('username', $credentials['username'])->first();
		if( Auth::attempt($credentials) ){
			$request->session()->regenerate();
			return redirect()->intended('/dashboard');
		}else{
			if(DB::table('user')->where('username',$credentials['username'])->count() == 0 ){
			    return back()->withErrors([
			        'username' => 'Username tidak valid'
			    ])->onlyInput('username');
			}elseif(!Hash::check($credentials['password'], $user->password)){
			    return back()->withErrors([
			        'password' => 'Password tidak valid'
			    ])->onlyInput('password');
			}else{
				return back()->withErrors([
					'kode_level' => 'level pengguna tidak valid'
				])->onlyInput('kode_level');
			}
		}


		// }elseif(DB::table('user')->where('username',$credentials['username'])->count() > 0 and Hash::check($credentials['password'], $user->password)){
		// 	echo('username & password is correct <br>');
		// 	$vkl=DB::table('level_user')->where('id', $credentials['kode_level'])->count();
            
		// 	if($credentials['kode_level'] > $user->kode_level and $vkl > 0){
		// 		Auth::attempt(['username'=>$credentials['username'], 'password'=>$credentials['password']]);
		// 		echo('<br> user : ');
		// 		echo(Auth::user());
		// 		$request->session()->put('roleAs', $credentials['kode_level']); 
		// 		echo('<br>role : ');
		// 		echo($request->session()->get('roleAs')); 
		// 		$request->session()->regenerate();

		// 		return redirect()->intended('/dashboard');

		// 	}else{
		// 		if(Auth::check()){
		// 			Auth::logout();
		// 			$request->session()->invalidate();
		// 			$request->session()->regenerateToken();
		// 		}


		// 		return redirect('/login')->withErrors(['kode_level'=>'ping']);
		// 	}
		// 	echo("<a href='/login'>login</a>");
		// }else{
        //     if(DB::table('user')->where('username',$credentials['username'])->count() == 0 ){
        //         return back()->withErrors([
        //             'username' => 'Username tidak valid'
        //         ])->onlyInput('username');
        //     }elseif(!Hash::check($credentials['password'], $user->password)){
        //         return back()->withErrors([
        //             'password' => 'Password tidak valid'
        //         ])->onlyInput('password');
        //     }
		// 
	}


	function logout(Request $request){
		Auth::logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();

		return redirect('/login');
	}
}

// 	function users(Request $request){
// 		if(Gate::allows('crud_user', ($request->session()
//         ->has('roleAs'))?$request->session()
//         ->get('roleAs'):null )) 
        
//         {
// 			$userser=DB::table('user')
//             ->get();


// 			return view('user/index', ['title'=>'USERS'], compact('user'));
// 		}else{
// 			return redirect('dashboard');
// 		}
// 	}


// 	function create(){
// 		if(Gate::allows('crud_user')){
// 			//
// 			$userser=DB::table('user')
//             ->get();
// 			$level_user=DB::table('level_user')
//             ->get();


// 			return view('user/create', ['title'=>'USERS'], compact('level_user', 'user'));
// 		}else{
// 			return redirect('dashboard');
// 		}
// 	}


// 	 function edit($id){
// 		if(Gate::allows('crud_user')){
// 			$userser=DB::table('user')->find($id);
// 			$level_user=DB::table('level_user')->get();
// 			return view('user/edit', ['title'=>'USERS'], compact('level_user', 'user'));
// 		}
// 	}

    
// 	function insert(Request $request){
// 		if(Gate::allows('crud_user')){
// 			$credentials=$request->validate([
// 				'username'=>'required',
// 				'password'=>'required',
// 				'level_user'=>'required'
// 			]);
// 			user::insert([
// 				'username'=>$request->username,
// 				'password'=>Hash::make($request->password),
// 				'kode_level'=>$request->level_user,
// 			]);
            
// 			return redirect('/users');
// 		}else{
// 			return redirect('dashboard');
// 		}
// 	}


// 	function update(Request $request, $id){
// 		if(Gate::allows('crud_user')){
// 			$credentials=$request->validate([
// 				'id'=>'required',
// 				'username'=>'required',
// 				'password'=>'password',
// 				'kode_level'=>'required'
// 			]);
// 			user::where('id',$credentials['id'])->update([
// 				'username'=>$credentials->username,
// 				'password'=>$credentials->password,
// 				'kode_level'=>$credentials->level_user
// 			]);
// 		}else{
// 			return redirect('/users');
// 		}
// 	}


// 	function delete($id){
// 		if(Gate::allows('crud_user')){
// 			user::where('id', $id)->delete();
// 			return back();
// 		}else{
// 			return redirect('/users');
// 		}
// 	}