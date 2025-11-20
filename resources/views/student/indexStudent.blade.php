<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student List</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    
    td, th {
      border: 1px solid white;
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
  </style>
</head>

<body class="bg-slate-950 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-slate-900 via-[#0a0a0a] to-black min-h-[100vh] text-slate-200 p-10 flex flex-col items-center selection:bg-cyan-500 selection:text-black relative">

  <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0 fixed">
    <div class="absolute top-[10%] left-[10%] w-[500px] h-[500px] bg-blue-600/10 rounded-full blur-[128px]"></div>
    <div class="absolute bottom-[10%] right-[10%] w-[500px] h-[500px] bg-cyan-500/10 rounded-full blur-[128px]"></div>
  </div>

  <a href="/student" class="relative z-10 group flex items-center gap-2 bg-gradient-to-r from-cyan-600 to-blue-600 text-white font-bold py-3 px-8 rounded-full shadow-[0_0_20px_-5px_rgba(6,182,212,0.5)] hover:shadow-[0_0_30px_-5px_rgba(6,182,212,0.7)] transform hover:-translate-y-1 transition-all duration-300 uppercase tracking-widest text-xs mb-10">
    <span class="text-lg leading-none">+</span> Tambah Student
  </a>

  <div class="relative z-10 w-full max-w-7xl overflow-x-auto rounded-2xl shadow-2xl shadow-black/50 backdrop-blur-xl bg-white/5 border border-white/10">
      <table class="w-full text-left border-separate border-spacing-0">
        <thead class="bg-white/5 text-cyan-400">
          <tr>
            <th class="p-5 font-extrabold uppercase text-xs tracking-[0.15em] border-b border-white/10 text-center whitespace-nowrap">No</th>
            <th class="p-5 font-extrabold uppercase text-xs tracking-[0.15em] border-b border-white/10 whitespace-nowrap">Name</th>
            <th class="p-5 font-extrabold uppercase text-xs tracking-[0.15em] border-b border-white/10 whitespace-nowrap">Class</th>
            <th class="p-5 font-extrabold uppercase text-xs tracking-[0.15em] border-b border-white/10 whitespace-nowrap">Phone</th>
            <th class="p-5 font-extrabold uppercase text-xs tracking-[0.15em] border-b border-white/10 whitespace-nowrap">Email</th>
            <th class="p-5 font-extrabold uppercase text-xs tracking-[0.15em] border-b border-white/10 whitespace-nowrap">Gender</th>
            <th class="p-5 font-extrabold uppercase text-xs tracking-[0.15em] border-b border-white/10 whitespace-nowrap">NISN</th>
            <th class="p-5 font-extrabold uppercase text-xs tracking-[0.15em] border-b border-white/10 text-center whitespace-nowrap">Action</th>
          </tr>
        </thead>

        <tbody class="text-sm text-slate-300">
          @forelse ($students as $student)
          <tr class="group transition-colors duration-200">
            
            <td class="p-4 border-b border-white/5 text-center font-mono text-slate-500 group-hover:text-cyan-300 transition-colors">
              {{ $loop->iteration }}
            </td>

            <td class="p-4 border-b border-white/5 font-medium text-slate-200 group-hover:text-white transition-colors whitespace-nowrap">
              {{ $student->name }}
            </td>

            <td class="p-4 border-b border-white/5 whitespace-nowrap">
              {{ $student->class }}
            </td>

            <td class="p-4 border-b border-white/5 whitespace-nowrap">
              {{ $student->phone }}
            </td>

            <td class="p-4 border-b border-white/5 text-slate-400 whitespace-nowrap">
              {{ $student->email }}
            </td>

             <td class="p-4 border-b border-white/5 capitalize whitespace-nowrap">
                {{ $student->gender }}
            </td>

            <td class="p-4 border-b border-white/5 font-mono text-xs whitespace-nowrap">
                {{ $student->nisn }}
            </td>

            <td class="p-4 border-b border-white/5">
              <div class="flex justify-center items-center gap-3">
                <a class="text-xs font-bold text-amber-400 border border-amber-500/30 bg-amber-500/10 py-2 px-4 rounded-lg hover:bg-amber-500 hover:text-white transition-all duration-300 shadow-sm hover:shadow-[0_0_15px_-3px_rgba(245,158,11,0.5)]" 
                   href="/student/edit/{{ $student->id }}">
                  Edit
                </a>

                <form action="/student/delete/{{ $student->id }}" method="post" style="display:inline">
                  @csrf
                  @method('DELETE')
                  <button class="text-xs font-bold text-rose-400 border border-rose-500/30 bg-rose-500/10 py-2 px-4 rounded-lg hover:bg-rose-600 hover:text-white transition-all duration-300 shadow-sm hover:shadow-[0_0_15px_-3px_rgba(225,29,72,0.5)]" 
                          type="submit">
                    Delete
                  </button>
                </form>
              </div>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="8" class="p-10 text-center">
              <span class="block text-slate-500 text-lg font-light italic bg-white/5 py-8 rounded-xl border border-dashed border-slate-700">
                Data tidak ditemukan.
              </span>
            </td>
          </tr>
          @endforelse
        </tbody>
      </table>
  </div>

</body>
</html>
