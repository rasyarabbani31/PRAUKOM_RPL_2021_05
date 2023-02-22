<?php

namespace App\Providers;

use App\Models\user;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
//
// use Illuminate\Http\Request;
//

class AuthServiceProvider extends ServiceProvider
{
	/**
	 * The model to policy mappings for the application.
	 *
	 * @var array<class-string, class-string>
	 */
	protected $policies = [
		// 'App\Models\Model' => 'App\Policies\ModelPolicy',
	];

	/*
	 * Register any authentication / authorization services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->registerPolicies();

		//	gate untuk operasi create, update & delete data siswa
		Gate::define('cud_siswa', function(user $u){
			//	mengembalikan true jika kode level user lebih kecil atau sama dengan 2 (super admin & admin)
			return $u->kode_level<=2;
		});
        
		//	gate untuk operasi create, update & delete data guru
		Gate::define('cud_guru', function(user $u){
			// mengembalikan true jika kode level user lebih kecil atau sama dengan 2 (super admin & admin)
			return $u->kode_level<=2;
		});

		//	gate untuk operasi create, update & delete data user
		Gate::define('cud_user', function(user $u){
			// mengembalikan true jika kode level user adalah 1 (super admin)
			return $u->kode_level==1;
		});
			// //
			// Gate::define('cud_info', function (user $u){
			// 	// mengembalikan true jika kode level user lebih kecil atau sama dengan 2 (super admin & admin)
			// 	return $u->kode_level<=2;
			// });

		//	gate untuk operasi create, update & delete data jurusan
		Gate::define('cud_jurusan', function (user $u){
			// mengembalikan true jika kode level user adalah 1 (super admin)
			return $u->kode_level==1;
		});
        
		//	gate untuk operasi create, update & delete data tingkatan()
		Gate::define('cud_tingkatan', function (user $u){
			// mengembalikan true jika kode level user adalah 1(super admin)
			return $u->kode_level==1;
		});
	}
}
