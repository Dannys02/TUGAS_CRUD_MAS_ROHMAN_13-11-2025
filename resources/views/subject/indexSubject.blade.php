<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subject List</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }

    ::-webkit-scrollbar {
      width: 8px;
      height: 8px;
    }

    ::-webkit-scrollbar-track {
      background: #0f172a;
    }

    ::-webkit-scrollbar-thumb {
      background: #334155;
      border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #475569;
    }

    th {
      text-align: center;
      border: 1px solid white;
    }

    td {
      text-align: center;
      border: 1px solid white;
    }
  </style>
</head>

<body class="bg-slate-950 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-slate-900 via-[#0a0a0a] to-black min-h-[100vh] text-slate-200 p-10 flex flex-col items-center selection:bg-cyan-500 selection:text-black relative">

  <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0 fixed">
    <div class="absolute top-[10%] left-[10%] w-[500px] h-[500px] bg-blue-600/10 rounded-full blur-[128px]"></div>
    <div class="absolute bottom-[10%] right-[10%] w-[500px] h-[500px] bg-cyan-500/10 rounded-full blur-[128px]"></div>
  </div>

  <a href="/subject" class="relative z-10 group flex items-center gap-2 bg-gradient-to-r from-cyan-600 to-blue-600 text-white font-bold py-3 px-8 rounded-full shadow-[0_0_20px_-5px_rgba(6,182,212,0.5)] hover:shadow-[0_0_30px_-5px_rgba(6,182,212,0.7)] transform hover:-translate-y-1 transition-all duration-300 uppercase tracking-widest text-xs mb-10">
    <span class="text-lg leading-none">+</span> Tambah Data
  </a>

  <table class="relative z-10 w-full max-w-4xl text-left border-separate border-spacing-0 rounded-2xl overflow-hidden shadow-2xl shadow-black/50 backdrop-blur-xl bg-white/5 border border-white/10">

    <thead class="bg-white/5 text-cyan-400">
      <tr>
        <th class="p-5 font-extrabold uppercase text-xs tracking-[0.15em] border-b border-white/10 text-center w-20">No</th>
        <th class="p-5 font-extrabold uppercase text-xs tracking-[0.15em] border-b border-white/10">Subject Name</th>
        <th class="p-5 font-extrabold uppercase text-xs tracking-[0.15em] border-b border-white/10 pr-8">Action</th>
      </tr>
    </thead>

    <tbody class="text-sm text-slate-300">
      @forelse ($subjects as $subject)
      <tr class="group hover:bg-white/5 transition-colors duration-200">

        <td class="p-4 border-b border-white/5 text-center font-mono text-slate-500 group-hover:text-cyan-300 transition-colors">
          {{ $loop->iteration }}
        </td>

        <td class="p-4 border-b border-white/5 font-medium text-slate-200 group-hover:text-white transition-colors">
          {{ $subject->subject_name }}
        </td>

        <td class="p-4 border-b border-white/5">
          <div class="flex justify-center items-center gap-3">
            <a class="text-xs font-bold text-amber-400 border border-amber-500/30 bg-amber-500/10 py-2 px-4 rounded-lg hover:bg-amber-500 hover:text-white transition-all duration-300 shadow-sm hover:shadow-[0_0_15px_-3px_rgba(245,158,11,0.5)]" href="/subject/edit/{{ $subject->id }}">
              Edit
            </a>

            <form action="/subject/delete/{{ $subject->id }}" method="post" style="display:inline">
              @csrf
              @method('DELETE')
              <button class="text-xs font-bold text-rose-400 border border-rose-500/30 bg-rose-500/10 py-2 px-4 rounded-lg hover:bg-rose-600 hover:text-white transition-all duration-300 shadow-sm hover:shadow-[0_0_15px_-3px_rgba(225,29,72,0.5)]" type="submit">
                Delete
              </button>
            </form>
          </div>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="3" class="p-10 text-center">
          <span class="block text-slate-500 text-lg font-light italic bg-white/5 py-8 rounded-xl border border-dashed border-slate-700">
            Data Not Found
          </span>
        </td>
      </tr>
      @endforelse
    </tbody>
  </table>

  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
