<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Majors</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>

<body class="bg-slate-950 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-slate-900 via-[#0a0a0a] to-black h-[100vh] flex justify-center items-center text-slate-200 overflow-hidden relative selection:bg-amber-500 selection:text-black">

  <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
    <div class="absolute top-[-10%] right-[20%] w-96 h-96 bg-amber-500/10 rounded-full blur-[128px]"></div>
    <div class="absolute bottom-[-10%] left-[20%] w-96 h-96 bg-blue-600/20 rounded-full blur-[128px]"></div>
  </div>

  <div class="relative z-10 border border-white/10 bg-white/5 backdrop-blur-xl py-12 px-8 rounded-2xl w-full max-w-md shadow-[0_0_40px_-10px_rgba(245,158,11,0.15)] hover:shadow-[0_0_60px_-15px_rgba(245,158,11,0.2)] transition-all duration-500">
    
    <h1 class="text-3xl text-center font-black tracking-[0.2em] text-transparent bg-clip-text bg-gradient-to-r from-amber-200 via-orange-400 to-amber-600 uppercase mb-10 drop-shadow-sm">
      Edit Majors
    </h1>

    <form class="mt-5 space-y-6" action="/form/update/{{ $majors->id }}" method="post">
      @csrf
      @method('PUT')

      <div class="relative group/input">
        <label for="name" class="text-xs font-bold text-amber-400 uppercase tracking-widest mb-2 block pl-1">
          Edit Data
        </label>
        
        <br />
        
        <input
          class="w-full bg-slate-900/50 border border-slate-700 text-slate-100 rounded-lg px-4 py-3 outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 focus:bg-slate-900 transition-all duration-300 placeholder-slate-600 shadow-inner"
          type="text"
          name="majors_name"
          id="name"
          value="{{ $majors->majors_name }}"
          placeholder="Masukkan teks"
        >

        @error('majors_name')
        <span class="error-message text-xs text-rose-400 mt-2 block font-medium animate-pulse pl-1">
          ⚠ {{ $message }}
        </span>
        @enderror
      </div>

      <button
        type="submit"
        class="w-full cursor-pointer bg-gradient-to-r from-amber-600 to-orange-600 hover:from-amber-500 hover:to-orange-500 text-white font-bold py-3 px-6 rounded-lg shadow-lg shadow-amber-500/20 hover:shadow-amber-500/40 transform hover:-translate-y-0.5 transition-all duration-300 uppercase tracking-wider text-sm border-none mt-4 block"
      >
        Update Data
      </button>

      <a
        href="/form/index"
        class="block text-center text-xs text-slate-500 hover:text-amber-300 transition-colors duration-300 mt-6 hover:underline underline-offset-4 decoration-amber-500/50"
      >
        &larr; Batalkan & Kembali
      </a>
    </form>
  </div>
</body>

</html>
