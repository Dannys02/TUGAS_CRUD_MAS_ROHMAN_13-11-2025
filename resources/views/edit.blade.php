<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

</head>

<body>
    <div>
        <h1>Form Majors</h1>

        <form action="/form/update/{{ $majors->id }}" method="post">
            @csrf
            @method('PUT')

            <div>
                <label for="name">Edit Data</label><br />
                <input type="text" name="majors_name" value="{{ $majors->majors_name }}" id="name"
                    placeholder="Masukkan teks">
                @error('majors_name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>


            <button type="submit">Update</button>
            <a href="/form/index">Kembali</a>
        </form>
    </div>
</body>

</html>
