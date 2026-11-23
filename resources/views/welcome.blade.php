<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata Diri</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">
    <div class="max-w-xl w-full bg-white p-8 rounded-xl shadow-md">
        @if(isset($biodata))
            <h1 class="text-3xl font-bold text-gray-800">{{ $biodata->nama_lengkap }}</h1>
            <p class="text-indigo-600 font-medium mb-4">{{ $biodata->pekerjaan }}</p>
            
            <div class="mb-4">
                <h3 class="text-sm font-semibold text-gray-400 uppercase">Tentang Saya</h3>
                <p class="text-gray-600 mt-1">{{ $biodata->tentang }}</p>
            </div>

            <div class="mb-4">
                <h3 class="text-sm font-semibold text-gray-400 uppercase">Keahlian</h3>
                <p class="text-gray-600 mt-1">{{ $biodata->keahlian }}</p>
            </div>

            <div class="mb-6 border-t pt-4">
                <p class="text-sm text-gray-500">📧 Email: {{ $biodata->email }}</p>
                <p class="text-sm text-gray-500">📞 Telepon: {{ $biodata->telepon }}</p>
            </div>

            <a href="{{ route('admin.biodata.edit') }}" class="inline-block bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-indigo-700">Edit Biodata (Admin)</a>
        @else
            <p class="text-gray-500">Belum ada data biodata. Silakan isi melalui <a href="{{ route('admin.biodata.edit') }}" class="text-indigo-600 underline">halaman admin</a>.</p>
        @endif
    </div>
</body>
</html>