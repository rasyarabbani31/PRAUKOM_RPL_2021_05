<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HISTORI GURU</title>
  @vite('resources/css/app.css')
</head>
<body>

<div class="navbar bg-green-600">
  <!-- BUAT MOBILE -->
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-green-600 rounded-box w-52">
        <li><a href="/dashboard" class="rounded-lg  text-black font-medium">DASHBOARD</a></li>
          <div tabindex="0" class="collapse collapse-arrow border border-base-300 bg-base-100 rounded-box">
            <div class="collapse-title text-xl font-medium">
                PRESENSI
            </div>
            <li tabindex="0">
              <a class="rounded-lg text-black" href="/presensisiswa">SISWA</a>
            </li>
            <li tabindex="0">
              <a class="rounded-lg text-black" href="/presensiguru">GURU</a>
            </li>
          </div>
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
        <p class="text-black text-center font-medium text-xl">Histori Hapus Guru</P>
        <br>
          <table class="table w-full text-primary-content">
            <thead>
              <tr class="space-x-4 text-white text-center">
                  <th>NO</th>
                  <th>Nama Guru</th>
                  <th>NIP</th>
                  <th>Aktivitas</th>
                  <th>Tanggal</th>
              </tr>
            </thead>
            <tbody>
                @foreach($hg as $hgs)
                <tr class="text-white text-center">
                  <th>{{ $loop->iteration }}</th>
                  <td class="text-center">{{ $hgs->nama_guru}}</td>
                  <td class="text-center">{{ $hgs->nip}}</td>
                  <td class="text-center">{{ $hgs->aktivitas}}</td>
                  <td class="text-center">{{ $hgs->tgl}}</td>
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