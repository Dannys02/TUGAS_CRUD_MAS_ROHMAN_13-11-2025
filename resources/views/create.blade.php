<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Data Siswa</title>

</head>

<body>
    <div>
        <h1>Form Majors</h1>

        <form action="/form/store" method="post">
            @csrf

            <div>
                <label for="name">Masukan teks</label><br />
                <input type="text" name="majors_name" id="name" placeholder="Masukkan teks">
                @error('majors_name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>


            <input type="submit">
        </form>
    </div>
</body>

</html>
