<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PENGGUNA</title>
  @vite('resources/css/app.css')
</head>
<body>

<div class="navbar bg-green-600">
  <!-- BUAT MOBILE -->
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-green-600 rounded-box w-52">
        <li><a href="/dashboard" class="rounded-lg  text-black font-medium">DASHBOARD</a></li>
          <div class="dropdown dropdown-bottom">
              <div tabindex="0" class="collapse collapse-arrow border border-base-300 bg-green-600 rounded-box">
                <div class="collapse-title text-base font-medium text-black">
                  PRESENSI
                </div>
                    <div class="collapse-content"> 
                          <li>
                          <a class="rounded-lg text-black" href="/presensisiswa">SISWA</a>
                          </li>
                          <li>
                          <a class="rounded-lg text-black" href="/presensiguru">GURU</a>
                          </li>
                    </div>
              </div>

              <div tabindex="0" class="collapse collapse-arrow border border-base-300 bg-green-600 rounded-box">
                <div class="collapse-title text-base font-medium text-black">
                  LIST INFO
                </div>
                    <div class="collapse-content"> 
                          <li>
                          <a class="rounded-lg text-black" href="/siswa">SISWA</a>
                          </li>
                          <li>
                          <a class="rounded-lg text-black" href="/guru">GURU</a>
                          </li>
                          <li>
                          <a class="rounded-lg text-black" href="/tingkatan">TINGKATAN</a>
                          </li>
                          <li>
                          <a class="rounded-lg text-black" href="/jurusan">JURUSAN</a>
                          </li>
                    </div>
              </div>
              
              <div tabindex="0" class="collapse collapse-arrow border border-base-300 bg-green-600 rounded-box">
                <div class="collapse-title text-base font-medium text-black">
                  HISTORI HAPUS
                </div>
                    <div class="collapse-content"> 
                          <li>
                          <a class="rounded-lg text-black" href="/historisiswa">SISWA</a>
                          </li>
                          <li>
                          <a class="rounded-lg text-black" href="/historiguru">GURU</a>
                          </li>
                    </div>
              </div>

              <div tabindex="0" class="collapse collapse-arrow border border-base-300 bg-green-600 rounded-box">
                <div class="collapse-title text-base font-medium text-black">
                  PENGGUNA
                </div>
                    <div class="collapse-content"> 
                          <li>
                          <a class="rounded-lg text-black" href="/historisiswa">DAFTAR PENGGUNA</a>
                          </li>
                          <li>
                          <a class="rounded-lg text-black" href="/historiguru">LEVEL PENGGUNA</a>
                          </li>
                    </div>
              </div>

          </div>
      </ul>
    </div>
    <a class="btn btn-ghost normal-case text-xl text-black" href="/about">ALINGGAM</a>
  </div>



  
  <!-- BUAT KOMPUTER -->
  <div class="navbar-center hidden lg:flex z-10">
    <ul class="menu menu-horizontal p-0">
    <li><a class="rounded-lg  text-black font-medium" href="/dashboard">DASHBOARD</a></li>
    <div class="dropdown dropdown-bottom">
      <label tabindex="0" class="btn m-1 text-black bg-green-600">PRESENSI</label>
        <ul tabindex="0" class="dropdown-content menu p-2 shadow rounded-box w-52 bg-green-400">
            <li tabindex="0">
              <a class="rounded-lg text-black" href="/presensisiswa">SISWA</a>
            </li>
            <li tabindex="0">
              <a class="rounded-lg text-black" href="/presensiguru">GURU</a>
            </li>
        </ul>
    </div>
            <div class="dropdown">
            <label tabindex="0" class="btn m-1 text-black bg-green-600">LIST INFO</label>
                <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-green-400 rounded-box w-52">
                <li tabindex="0">
                    <a class="rounded-lg text-black" href="/siswa">SISWA</a>
                </li>
                <li>
                    <a class="rounded-lg  text-black" href="/guru">GURU</a>
                </li>
                <li>
                    <a class="rounded-lg  text-black" href="/tingkatan">TINGKATAN</a>
                </li>
                <li>
                    <a class="rounded-lg  text-black" href="/jurusan">JURUSAN</a>
                </li>
                </ul>
            </div>
            <div class="dropdown dropdown-bottom">
            <label tabindex="0" class="btn m-1 text-black bg-green-600">HISTORI HAPUS</label>
                <ul tabindex="0" class="dropdown-content menu p-2 shadow rounded-box w-52 bg-green-400">
                    <li tabindex="0">
                    <a class="rounded-lg text-black" href="/historisiswa">SISWA</a>
                    </li>
                    <li tabindex="0">
                    <a class="rounded-lg text-black" href="/historiguru">GURU</a>
                    </li>
                </ul>
            </div>
            <div class="dropdown dropdown-bottom">
            <label tabindex="0" class="btn m-1 text-black bg-green-600">PENGGUNA</label>
                <ul tabindex="0" class="dropdown-content menu p-2 shadow rounded-box w-52 bg-green-400">
                    <li tabindex="0">
                    <a class="rounded-lg text-black" href="/user">DAFTAR PENGGUNA</a>
                    </li>
                    <li tabindex="0">
                    <a class="rounded-lg text-black" href="/leveluser">LEVEL PENGGUNA</a>
                    </li>
                    
                </ul>
            </div>
    </ul>
    </div>
    <div class="navbar-end">
      <a class="btn bg-red-400 text-black" href="">LOGOUT</a>
    </div>
  </div>
</div>

  <div class="card w-1/2 bg-green-600 shadow-xl text-primary-content mx-auto mt-8">
      <div class="card-body">
        <div class="overflow-x-auto shadow-xl text-primary-content">
        <p class="text-black text-center font-medium">DAFTAR PENGGUNA</P>
          <table class="table w-full text-primary-content">
            <thead>
            <div class="card-actions justify-end">
                    		<a class="btn bg-primary text-white" href="/user/create">TAMBAH</a>
              </div>

            <form action="/siswa/search" method="GET">
            @csrf
              <div class="form-control">
              <div class="input-group">
                <input type="search" placeholder="Cari Pengguna" name="katakunci" class="input input-bordered text-black bg-white " value="{{ Request::get('katakunci') }}" aria-label="Search" />
                  <button class="btn btn-square bg-black" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                  </button>
              </div>
            </div>
            </form>
              <br>
              <tr class="space-x-4 text-white text-center">
                  <th class="text-black bg-white">NO</th>
                  <th class="text-black bg-white">Username</th>
                  <th class="text-black bg-white">Password</th>
                  <th class="text-black bg-white">Level Pengguna</th>
                  <th class="text-black bg-white"></th>
                  <th class="text-black bg-white"></th>
              </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="text-white">
                  <th class="text-center text-black bg-white">{{ $loop->iteration }}</th>
                  <td class="text-center text-black bg-white">{{ $user->username }}</td>
                  <td class="text-center text-black bg-white">{{ $user->password }}</td>
                  <td class="text-center text-black bg-white">{{ $user->nama_level }}</td>
                  <td class="text-black bg-white"><a class="btn btn-sm bg-yellow-400 text-black" href="/user/{{ $user->id }}/edit">EDIT</a></td>
                  <td class="text-black bg-white">
                    <a href="#my-modal-2" class="btn btn-sm bg-red-400 text-black">HAPUS</a>
                        <!-- Put this part before </body> tag -->
                        <div class="modal" id="my-modal-2">
                              <div class="modal-box bg-green-600">
                                  <h3 class="font-bold text-lg text-black">APAKAH ANDA YAKIN MENGHAPUS INI?</h3>
                                  <br>
                                  <p>Data Pengguna akan dihapus dan data tidak dapat dikembalikan</p>
                                <div class="modal-action">
                                    <a href="" class="btn btn-sm bg-yellow-400 text-black">TIDAK</a>
                        <form action="/user/{{ $user->id }}" method="post">
                            @csrf
                            @method("delete")
                            <button class="btn btn-sm bg-red-400 text-black" type="submit">DELETE</button>
                        </form>
                                </div>
                              </div>
                        </div>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
   </div>



<div class="p-16">
  <div class="max-w-4xl mx-auto relative" x-data="{
      activeSlide= 1,
      slides: [
        { id 1, title: 'Hello 1', body: 'acdfg'},
        { id 2, title: 'Hello 2', body: 'acdfg'},
        { id 3, title: 'Hello 3', body: 'acdfg'},
        { id 4, title: 'Hello 4', body: 'acdfg'},
        { id 5, title: 'Hello 5', body: 'acdfg'},
        ]
  }">

      <!-- data loop -->
      <template x-for="slide in slides" :key="slide.id">
           <div x-show="activeSlide === slide.id" class="p-24 h-80 flex items-center bg-slate-500 text-white rounded-lg"></div>
      </template>

      <!-- next -->
      <div>

      </div>
      <!-- button -->
      <div>
        <template>

        </template>
      </div>

  </div>
</div>

</body>
</html>