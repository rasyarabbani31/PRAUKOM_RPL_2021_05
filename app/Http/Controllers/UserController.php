<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        $users = DB::table('user')
                ->join('level_user', 'user.kode_level', '=', 'level_user.id')
                ->select('user.*', 'level_user.nama_level')
                ->orderBy('username','asc')
                ->get();
                
        return view ('user.user', compact('users'));

    }
    public function searchuser(Request $request)
    {
        $katakunci = $request->katakunci;
        $users = DB::table('user')
                ->join('level_user', 'user.kode_level', '=', 'level_user.id')
                ->select('user.*', 'level_user.*')
                ->where('username','like',"%$katakunci%")
                ->orWhere('nama_level','like',"%$katakunci%")
                ->orderBy('username','asc')
                ->orderBy('nama_level','asc')
                ->get();
                
        return view ('user.user', compact('users'));

    }

    public function createuser()

    {
        $lu = DB::table('level_user') ->get();

        return view('user.createuser', compact('lu'));
    }

    public function storeuser(Request $request)
    {
        $request->validate([
            'username'=>'required|max:50',
            'password' => 'required|max:50',
            'kode_level'=>'required'
        ]);
        
        DB::insert("CALL tambah_user(:username, :password, :kode_level)", [
            'username' => $request->input('username'), 
            'password' => $request->input('password'), 
            'kode_level' => $request->input('kode_level')
        ]);

        // User::insert([
        // 'username' => $request->username,
        // 'password' => $request->password,
        // 'kode_level' => $request->kode_level
        // ]);

        return redirect('user');
    }

    public function edituser($id)
    {
        $user = User::where('id', $id)->first();

        $lu1 = DB::table('level_user')->get();

        return view('user.edituser', ['user' => $user], compact('lu1'));

    }

    public function updateuser(Request $request, $id)
    {   
        $request->validate([
            'username'=>'required|max:50',
            'password' => 'required|max:50',
            'kode_level'=>'required'
        ]);
        
        User::where('id', $id)->update([
            'username' => $request->username,
            'password' => $request->password,
            'kode_level' => $request->kode_level
            ]);

        return redirect('user');
    }

    public function destroyuser($id = null)
    {
      
        $hapus = DB::table('user')
            ->where('id',$id)
            ->delete();
        if($hapus) {
            return redirect('user');
        }
       
    }
}
