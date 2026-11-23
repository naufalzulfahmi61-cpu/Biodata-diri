<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Biodata - Admin</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50 py-10 flex items-center justify-center min-h-screen">
    <div class="max-w-xl w-full bg-white p-8 rounded-xl shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Panel Admin: Kelola Biodata</h2>
        
        <form action="{{ route('admin.biodata.update') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" value="{{ $biodata->nama_lengkap ?? '' }}" class="mt-1 w-full p-2 border rounded-lg" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Pekerjaan</label>
                <input type="text" name="pekerjaan" value="{{ $biodata->pekerjaan ?? '' }}" class="mt-1 w-full p-2 border rounded-lg" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Tentang Saya</label>
                <textarea name="tentang" rows="3" class="mt-1 w-full p-2 border rounded-lg" required>{{ $biodata->tentang ?? '' }}</textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Keahlian (Pisahkan dengan koma)</label>
                <input type="text" name="keahlian" value="{{ $biodata->keahlian ?? '' }}" class="mt-1 w-full p-2 border rounded-lg" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" value="{{ $biodata->email ?? '' }}" class="mt-1 w-full p-2 border rounded-lg" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Telepon</label>
                <input type="text" name="telepon" value="{{ $biodata->telepon ?? '' }}" class="mt-1 w-full p-2 border rounded-lg" required>
            </div>
            <div class="flex justify-between items-center pt-4">
                <a href="{{ route('welcome') }}" class="text-sm text-gray-600 hover:underline">← Kembali ke Beranda</a>
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-indigo-700">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</body>
</html>