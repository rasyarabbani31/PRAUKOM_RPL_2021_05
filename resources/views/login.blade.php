<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  @vite('resources/css/app.css')
</head>
<body>

<div class="navbar bg-green-600">
  <!-- BUAT MOBILE -->
  <div class="navbar-start">
    
  </div>

  
</div>

  <div class="card w-96 bg-green-600 shadow-xl mx-auto mt-8">
      @csrf
      <div class="card-body">
      <p class="text-center text-black">LOGIN</p>
        <form action='/login' method='post'>
            @csrf
            <label for="username">
              <h1 class="text-black">USERNAME</h1>              
            </label>
            <input type="text" name="username" id="username" @error("username") invalid @enderror  placeholder="username" class="input input-bordered w-full max-w-xs bg-white text-black" required/>
            @error("username")
              <div class="invalid-feedback" style="color:red;">
                {{$message}}
              </div>
            @enderror
            <label for="password">
              <h1 class="text-black">PASSWORD</h1>            
            </label>
            <input type="password" name="password" id='password' placeholder="password" class="input input-bordered w-full max-w-xs bg-white text-black" required/>
            <label for="level_user">
              <h1 class="text-black">LEVEL USER</h1>
            </label>
            <select class="select select-bordered w-full max-w-xs bg-white" name="kode_level" required>
              <option disabled selected align='center'>-- Level Aksess --</option>
              @foreach($level_user as $lu)
                <option value="{{$lu->id}}">{{$lu->id}} : {{$lu->nama_level}}</option>
              @endforeach
            </select>
            @error("kode_level")
              <div class="invalid-feedback" style="color:red;">
                {{$message}}
              </div>
            @enderror
            <div class="card-actions justify-end">
                  <button type='submit' class="btn btn-primary mx-auto">Login</button>
            </div>
        </form> 
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