<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GURU</title>
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
        <li><a href="/dashboard" class="text-black">DASHBOARD</a></li>
        <li tabindex="0">
          <a class="rounded-lg text-black" href="/presensisiswa">PRESENSI SISWA</a>
        </li>
        <li tabindex="0">
          <a class="rounded-lg text-black" href="/presensiguru">PRESENSI GURU</a>
        </li>
        <li tabindex="0" class="text-black">
          <a class="rounded-lg" href="/siswa">DAFTAR SISWA</a>
        </li>
        <li>
          <a href="/guru" class="text-black">DAFTAR GURU</a>
        </li>
        <li>
        <a class="rounded-xl text-lg  text-black" href="/tingkatan">DAFTAR TINGKATAN</a>
      </li>
      <li>
        <a class="rounded-xl text-lg  text-black" href="/jurusan">DAFTAR JURUSAN</a>
      </li>
      </ul>
    </div>
    <a class="btn btn-ghost normal-case text-xl" href="/about">ALINGGAM</a>
  </div>



  
  <!-- BUAT KOMPUTER -->
  <div class="navbar-center hidden lg:flex z-10">
    <ul class="menu menu-horizontal p-0">
    <li><a class="rounded-xl text-lg  text-black" href="/dashboard">DASHBOARD</a></li>
      <li tabindex="0">
        <a class="rounded-lg text-black" href="/presensisiswa">PRESENSI SISWA</a>
      </li>
      <li tabindex="0">
        <a class="rounded-lg text-black" href="/presensiguru">PRESENSI GURU</a>
      </li>
      <li tabindex="0">
        <a class="rounded-lg text-black" href="/siswa">DAFTAR SISWA</a>
      </li>
      <li>
        <a class="rounded-xl text-lg  text-black" href="/guru">DAFTAR GURU</a>
      </li>
      <li>
        <a class="rounded-xl text-lg  text-black" href="/tingkatan">DAFTAR TINGKATAN</a>
      </li>
      <li>
        <a class="rounded-xl text-lg  text-black" href="/jurusan">DAFTAR JURUSAN</a>
      </li>
    </ul>
    </div>
    <div class="navbar-end">
      <a class="btn bg-red-400 text-black" href="">LOGOUT</a>
    </div>
  </div>
</div>




<!-- <div class="navbar  bg-primary">
  <div class="flex-1">
    <a class="btn btn-ghost normal-case text-xl text-white" href="/about">ALINGGAM</a>
  </div>
  <div class="flex-none">
    <ul class="menu menu-horizontal p-0">
      <li><a class="rounded-xl text-lg  text-white" href="/dashboard">DASHBOARD</a></li>
      <li tabindex="0">
        <a class="rounded-xl text-white">
          PRESENSI
          <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
        </a>
          <ul class="p-2 bg-green-100 rounded-lg">
            <div class="dropdown dropdown-left">
                <label tabindex="0" class="btn m-1 bg-primary">MURID</label>
              </div>
              <div class="dropdown dropdown-left">
                <label tabindex="0" class="btn m-1 bg-primary">GURU</label>
              </div>
          </ul>  
      </li>
      <li tabindex="0">
        <a class="rounded-xl text-white">
          KELAS
          <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
        </a>
        <ul class="p-2 bg-green-100 rounded-lg">
          <div class="dropdown dropdown-left">
            <label tabindex="0" class="btn m-1 bg-primary">X</label>
                 <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-green-100 rounded-box w-52">
                    <li><a href="/xrpl">RPL</a></li>
                    <li><a href="/xmm">MM</a></li>
                    <li><a href="/xtkj">TKJ</a></li>
                    <li><a href="/xak">AK</a></li>
                    <li><a href="/xbb">BB</a></li>
                    <li><a href="/xtp">TP</a></li>
                    <li><a href="/xtpl">TPL</a></li>
                    <li><a href="/xtkr">TKR</a></li>
                </ul>
          </div>
          <div class="dropdown dropdown-left">
            <label tabindex="0" class="btn m-1 bg-primary">XI</label>
                 <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-green-100 rounded-box w-52">
                    <li><a href="/xirpl">RPL</a></li>
                    <li><a href="/ximm">MM</a></li>
                    <li><a href="/xitkj">TKJ</a></li>
                    <li><a href="/xiak">AK</a></li>
                    <li><a href="/xibb">BB</a></li>
                    <li><a href="/xitp">TP</a></li>
                    <li><a href="/xitpl">TPL</a></li>
                    <li><a href="/xitkr">TKR</a></li>
                </ul>
          </div> 
          <div class="dropdown dropdown-left">
            <label tabindex="0" class="btn m-1 bg-primary">XII</label>
                 <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-green-100 rounded-box w-52">
                    <li><a href="/xiirpl">RPL</a></li>
                    <li><a href="/xiimm">MM</a></li>
                    <li><a href="/xiitkj">TKJ</a></li>
                    <li><a href="/xiiak">AK</a></li>
                    <li><a href="/xiibb">BB</a></li>
                    <li><a href="/xiitp">TP</a></li>
                    <li><a href="/xiitpl">TPL</a></li>
                    <li><a href="/xiitkr">TKR</a></li>
                </ul>
          </div>        
        </ul>
      </li>
      <li><a class="rounded-xl text-lg  text-white" href="/guru">GURU</a></li>
    </ul>
    
  </div>
</div> -->

<!-- <div class="w-1/2 mx-auto">
  <div class="lg:flex gap-5 mx-auto mt-56">
          <div class="basis-1/2">
              <div class="card w-96 bg-primary text-primary-content mb-5">
                <div class="card-body">
                  <h2 class="card-title">Card title 1</h2>
                  <p>If a dog chews shoes whose shoes does he choose?</p>
                  <div class="card-actions justify-end">
                    <button class="btn">Buy Now</button>
                  </div>
                </div>
              </div>
              <div class="card w-96 bg-primary text-primary-content mb-5">
                <div class="card-body">
                  <h2 class="card-title">Card title 2</h2>
                  <p>If a dog chews shoes whose shoes does he choose?</p>
                  <div class="card-actions justify-end">
                    <button class="btn">Buy Now</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="basis-1/2">
              <div class="card w-96 bg-primary text-primary-content mb-5">
                <div class="card-body">
                  <h2 class="card-title">Card title 1</h2>
                  <p>If a dog chews shoes whose shoes does he choose?</p>
                  <div class="card-actions justify-end">
                    <button class="btn">Buy Now</button>
                  </div>
                </div>
              </div>
              <div class="card w-96 bg-primary text-primary-content mb-5">
                <div class="card-body">
                  <h2 class="card-title">Card title 2</h2>
                  <p>If a dog chews shoes whose shoes does he choose?</p>
                  <div class="card-actions justify-end">
                    <button class="btn">Buy Now</button>
                  </div>
                </div>
              </div>
          </div>
   </div>
</div> -->

  <div class="card w-1/2 bg-green-600 shadow-xl text-primary-content mx-auto mt-8">
      <div class="card-body">
        <div class="overflow-x-auto shadow-xl text-primary-content">
          <table class="table w-full text-primary-content">
            <thead>
              <div class="card-actions justify-end">
                    		<a class="btn bg-blue-400 text-black" href="/guru/create">TAMBAH</a>
              </div>
              <tr class="space-x-4 text-white text-center">
                  <th>NO</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th></th>
                  <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach($gurus as $guru)
                <tr class="text-white">
                  <th class="text-center">{{ $loop->iteration }}</th>
                  <td class="text-center">{{ $guru->nama_guru }}</td>
                  <td class="text-center">{{ $guru->jk_guru }}</td>
                  <td><a class="btn btn-sm bg-yellow-400 text-black" href="/guru/{{ $guru->id }}/edit">EDIT</a></td>
                  <td>
                        <form action="/guru/{{ $guru->id }}" method="post">
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