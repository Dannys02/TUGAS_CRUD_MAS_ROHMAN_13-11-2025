<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="p-5 flex justify-center items-center min-h-screen bg-gray-100">

    <div class="bg-white border border-gray-300 shadow-lg py-10 px-7 rounded-xl w-full max-w-md">
        <h1 class="text-3xl text-center font-bold text-blue-700">Edit Student</h1>

        <form class="mt-7 space-y-5" action="/student/update/{{ $students->id }}" method="post">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="font-semibold">Name</label>
                <input
                    class="border border-gray-400 mt-2 w-full rounded-lg p-2"
                    type="text"
                    name="name"
                    id="name"
                    value="{{ $students->name }}"
                    placeholder="Contoh: Andi Pratama"
                >
                @error('name')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="class" class="font-semibold">Class</label>
                <input
                    class="border border-gray-400 mt-2 w-full rounded-lg p-2"
                    type="text"
                    name="class"
                    id="class"
                    value="{{ $students->class }}"
                    placeholder="Contoh: X IPA 1"
                >
                @error('class')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="phone" class="font-semibold">Phone</label>
                <input
                    class="border border-gray-400 mt-2 w-full rounded-lg p-2"
                    type="text"
                    name="phone"
                    id="phone"
                    maxlength="20"
                    value="{{ $students->phone }}"
                    placeholder="Contoh: 081234567890"
                >
                @error('phone')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="email" class="font-semibold">Email</label>
                <input
                    class="border border-gray-400 mt-2 w-full rounded-lg p-2"
                    type="email"
                    name="email"
                    id="email"
                    value="{{ $students->email }}"
                    placeholder="Contoh: andi@gmail.com"
                >
                @error('email')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="gender" class="font-semibold">Gender</label>
                <select
                    name="gender"
                    id="gender"
                    class="border border-gray-400 mt-2 w-full rounded-lg p-2 bg-white"
                >
                    <option value="">-- Pilih Gender --</option>
                    <option value="laki-laki" {{ $students->gender === 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="perempuan" {{ $students->gender === 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
                @error('gender')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="nisn" class="font-semibold">NISN</label>
                <input
                    class="border border-gray-400 mt-2 w-full rounded-lg p-2"
                    type="text"
                    name="nisn"
                    id="nisn"
                    maxlength="20"
                    value="{{ $students->nisn }}"
                    placeholder="Contoh: 006xxxxxxx"
                >
                @error('nisn')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button
                type="submit"
                class="w-full text-white bg-blue-600 py-2 rounded-lg font-semibold hover:bg-blue-700 transition"
            >
                Update
            </button>

            <a href="/student/index" class="block text-center text-blue-600 underline mt-3">Kembali ke index →</a>

        </form>
    </div>

</body>

</html>
