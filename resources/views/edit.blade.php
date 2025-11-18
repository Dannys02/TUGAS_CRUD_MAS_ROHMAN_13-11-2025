<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Majors</title>
</head>

<body class="p-5 h-[100vh] flex justify-center items-center">
  <div class="border-2 border-black py-10 px-5 rounded-lg w-full max-w-md">
    <h1 class="text-2xl text-center font-bold">Edit Majors</h1>

    <form class="mt-5" action="/form/update/{{ $majors->id }}" method="post">
      @csrf
      @method('PUT')

      <div>
        <label for="name">Edit Data :</label><br />
      <input
      class="border border-black mt-2 w-full px-2 py-1"
      type="text"
      name="majors_name"
      id="name"
      value="{{ $majors->majors_name }}"
      placeholder="Masukkan teks"
      >

      @error('majors_name')
      <span class="error-message text-red-600">{{ $message }}</span>
      @enderror
    </div>

    <button
      type="submit"
      class="text-white bg-blue-600 py-1 px-6 rounded-lg mt-5 inline-block"
      >
      Update
    </button>

    <a
      href="/form/index"
      class="text-blue-600 underline py-1 px-6 rounded-lg mt-5 inline-block"
      >
      Kembali
    </a>
  </form>
</div>

<script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
