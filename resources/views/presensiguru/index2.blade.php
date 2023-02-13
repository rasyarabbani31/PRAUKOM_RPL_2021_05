<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PRESENSI GURU</title>
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
        <p class="text-black text-center font-medium">PRESENSI GURU</P>
          <table class="table w-full text-primary-content">
            <thead>
              <div class="card-actions justify-end">
                    		<a class="btn bg-blue-400 text-black" href="/presensiguru/create">TAMBAH</a>
              </div>

              <form action="/presensiguru/search" method="GET">
            @csrf
              <div class="form-control">
              <div class="input-group">
                <input type="search" placeholder="Cari Presensi Guru" name="katakunci" class="input input-bordered bg-black" value="{{ Request::get('katakunci') }}" aria-label="Search" />
                  <button class="btn btn-square bg-black" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                  </button>
              </div>
            </div>
            </form>

              <tr class="space-x-4 text-white text-center">
                  <th class="text-white bg-black">NO</th>
                  <th class="text-white bg-black">Tanggal</th>
                  <th class="text-white bg-black">Guru</th>
                  <th class="text-white bg-black">Keterangan Hadir</th>
                  <th class="text-white bg-black">Agenda KBM</th>
                  <th class="text-white bg-black">Bukti Foto</th>
                  <th class="text-white bg-black"></th>
                  <th class="text-white bg-black"></th>
              </tr>
            </thead>
            <tbody>
                @foreach($guru as $presensiguru)
                <tr class="text-white">
                  <th class="text-center text-white bg-black">{{ $loop->iteration }}</th>
                  <td class="text-center text-white bg-black">{{ $presensiguru->tanggal }}</td>
                  <td class="text-center text-white bg-black">{{ $presensiguru->nama_guru }}</td>
                  <td class="text-center text-white bg-black">{{ $presensiguru->keterangan }}</td>
                  <td class="text-center text-white bg-black">{{ $presensiguru->agenda_kbm }}</td>
                  <td class="text-center text-white bg-black">
                    <a href="{{ asset('storage/'.$presensiguru->gambar) }}" target="_blank" class="group">
                        <img src="{{ asset('storage/'.$presensiguru->gambar) }}" class="mx-auto shadow  group-hover:brightness-50 ">
                    </a>
                  </td>
                  <td class="text-white bg-black"><a class="btn btn-sm bg-yellow-400 text-black" href="/presensiguru/{{ $presensiguru->id }}/edit">EDIT</a></td>
                  <td class="text-white bg-black">
                        <form action="/presensiguru/{{ $presensiguru->id }}" method="post">
                            @csrf
                            @method("delete")
                            <button class="btn btn-sm bg-red-400 text-black" type="submit">DELETE</button>
                        </form>
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
           <div x-show="activeSlide === slide.id" class="p-24 h-80 flex items-center bg-slate-500 text-black rounded-lg"></div>
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