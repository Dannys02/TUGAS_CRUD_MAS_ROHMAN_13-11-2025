<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subject name</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>

<body class="bg-slate-950 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-slate-900 via-[#0a0a0a] to-black h-[100vh] flex justify-center items-center text-slate-200 overflow-hidden relative selection:bg-cyan-500 selection:text-black">

  <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
    <div class="absolute top-[-10%] left-[20%] w-96 h-96 bg-cyan-500/20 rounded-full blur-[128px]"></div>
    <div class="absolute bottom-[-10%] right-[20%] w-96 h-96 bg-purple-600/20 rounded-full blur-[128px]"></div>
  </div>

  <div class="relative z-10 border border-white/10 bg-white/5 backdrop-blur-xl py-12 px-8 rounded-2xl w-full max-w-md shadow-[0_0_40px_-10px_rgba(6,182,212,0.15)] hover:shadow-[0_0_60px_-15px_rgba(6,182,212,0.3)] transition-all duration-500 group">
    
    <h1 class="text-3xl text-center font-black tracking-[0.2em] text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 uppercase mb-10 drop-shadow-sm">
      Form Subject
    </h1>

    <form class="mt-2 space-y-6" action="/subject/store" method="post">
      @csrf

      <div class="relative group/input">
        <label for="name" class="text-xs font-bold text-cyan-400 uppercase tracking-widest mb-2 block pl-1">
            Input Data
        </label>
        
        <br />
        
        <input 
            class="w-full bg-slate-900/50 border border-slate-700 text-slate-100 rounded-lg px-4 py-3 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/50 focus:bg-slate-900 transition-all duration-300 placeholder-slate-600 shadow-inner" 
            type="text" 
            name="subject_name" 
            id="name" 
            placeholder="Subject Name..."
        >
        
        @error('subject_name')
        <span class="error-message text-xs text-rose-400 mt-2 block font-medium animate-pulse pl-1">
            ⚠ {{ $message }}
        </span>
        @enderror
      </div>

      <input 
        type="submit" 
        class="w-full cursor-pointer bg-gradient-to-r from-cyan-600 to-blue-600 hover:from-cyan-500 hover:to-blue-500 text-white font-bold py-3 px-6 rounded-lg shadow-lg shadow-cyan-500/20 hover:shadow-cyan-500/40 transform hover:-translate-y-0.5 transition-all duration-300 uppercase tracking-wider text-sm border-none mt-4" 
      />
    
      <a href="/subject/index" class="block text-center text-xs text-slate-500 hover:text-cyan-300 transition-colors duration-300 mt-6 hover:underline underline-offset-4 decoration-cyan-500/50">
        &larr; Kembali ke Index
      </a>
    </form>
  </div>
</body>

</html>
