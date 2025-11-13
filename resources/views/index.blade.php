<html>
    <body>
        <a href="/form/create">Tambah</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Majors Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($majors as $major)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $major->majors_name }}</td>
                    <td>
                        <a href="/form/edit/{{ $major->id }}">Edit</a>

                        <form action="/form/delete/{{ $major->id }}" method="post" style= "display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <span>Data Not Found</span>
                @endforelse
            </tbody>
        </table>
    </body>
</html>
