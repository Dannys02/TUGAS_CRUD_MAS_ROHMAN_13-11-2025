<html>
<body class="p-5">
  <a href="/form/create" class="text-white bg-blue-600 py-2 px-4 rounded-lg mt-5">Tambah</a>
  <table class="mt-5">
    <thead>
      <tr>
        <th class="border-2 border-black p-3 hover:bg-gray-100 text-center">No</th>
        <th class="border-2 border-black p-3 hover:bg-gray-100">Majors Name</th>
        <th class="border-2 border-black p-3 hover:bg-gray-100">Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($majors as $major)
      <tr>
        <td class="border-2 border-black p-3 hover:bg-gray-100 text-center">{{ $loop->iteration }}</td>
        <td class="border-2 border-black p-3 hover:bg-gray-100">{{ $major->majors_name }}</td>
        <td class="border-2 border-black p-3 hover:bg-gray-100">
          <a class="text-white py-1 px-4 bg-yellow-500 rounded-lg text-center hover:bg-yellow-600" href="/form/edit/{{ $major->id }}">Edit</a>

          <form action="/form/delete/{{ $major->id }}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button class="text-white py-1 px-4 bg-red-600 rounded-lg text-center hover:bg-red-700" type="submit">delete</button>
          </form>
        </td>
      </tr>
      @empty
      <span>Data Not Found</span>
      @endforelse
    </tbody>
  </table>
  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
