<!DOCTYPE html>
<html lang="en">

<body class="p-5">

    <a href="/student"
       class="text-white bg-blue-600 py-2 px-4 rounded-lg hover:bg-blue-700">
       Tambah Student
    </a>

    <table class="mt-5 w-full border-collapse">
        <thead>
            <tr>
                <th class="border-2 border-black p-3 text-center">No</th>
                <th class="border-2 border-black p-3">Name</th>
                <th class="border-2 border-black p-3">Class</th>
                <th class="border-2 border-black p-3">Phone</th>
                <th class="border-2 border-black p-3">Email</th>
                <th class="border-2 border-black p-3">Gender</th>
                <th class="border-2 border-black p-3">NISN</th>
                <th class="border-2 border-black p-3 text-center">Action</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($students as $student)
                <tr class="hover:bg-gray-100">
                    <td class="border-2 border-black p-3 text-center">{{ $loop->iteration }}</td>
                    <td class="border-2 border-black p-3">{{ $student->name }}</td>
                    <td class="border-2 border-black p-3">{{ $student->class }}</td>
                    <td class="border-2 border-black p-3">{{ $student->phone }}</td>
                    <td class="border-2 border-black p-3">{{ $student->email }}</td>
                    <td class="border-2 border-black p-3 capitalize">{{ $student->gender }}</td>
                    <td class="border-2 border-black p-3">{{ $student->nisn }}</td>
                    <td class="border-2 border-black p-3 text-center flex justify-center gap-3">

                        <a href="/student/edit/{{ $student->id }}"
                           class="text-white py-1 px-4 bg-yellow-500 rounded-lg hover:bg-yellow-600">
                           Edit
                        </a>

                        <form action="/student/delete/{{ $student->id }}"
                              method="post"
                              style="display:inline">
                            @csrf
                            @method('DELETE')

                            <button class="text-white py-1 px-4 bg-red-600 rounded-lg hover:bg-red-700"
                                    type="submit">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="8" class="p-4 text-center text-gray-600">
                        Data tidak ditemukan.
                    </td>
                </tr>

            @endforelse
        </tbody>
    </table>

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
