<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Khodam Online</title>
    <link href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('https://i.pinimg.com/736x/5b/17/2e/5b172e3746ff5e0dacc7fa39d5f7f126.jpg') no-repeat center center fixed;
            background-size: 2000px 1000px;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            position: relative;
        }

        .card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            padding: 20px;
        }

        .result {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            padding: 20px;
            width: 100%;
            max-width: 500px;
        }

        .watermark {
            position: absolute;
            bottom: 10px;
            text-align: center;
            width: 100%;
            font-size: 14px;
            font-style: italic;
            color: #555;
        }

        .text-center {
            text-align: center;
        }

        .font-bold {
            font-weight: bold;
        }

        .text-3xl {
            font-size: 1.875rem;
        }

        .text-2xl {
            font-size: 1.5rem;
        }
    </style>
</head>

<body>
    <h1 class="text-white text-center text-3xl font-bold mb-6">Cek Khodam Online</h1>
    <div class="card">
        <form action="/cek-khodam" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama_user" class="block text-gray-700 font-bold mb-2">Nama:</label>
                <input type="text" id="nama_user" name="nama_user" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required autocomplete="off">
            </div>
            <button type="submit" class="w-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cek Khodam</button>
        </form>
    </div>

    @if (isset($nama_khodam))
        <div class="result mt-6">
            <h2 class="text-center text-2xl font-bold mb-4">Hasil Cek Khodam</h2>
            <p><strong>Nama User:</strong> {{ $nama_user }}</p>
            <p><strong>Nama Khodam:</strong> {{ $nama_khodam }}</p>
            <div class="text-center">
                <a href="/" class="mt-4 inline-block bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cek Lagi</a>
            </div>
        </div>
    @endif

    <div class="watermark">
        <p>Developed by <a href="https://www.instagram.com/choerul_ram/" target="_blank" style="color: #007bff; text-decoration: none; font-size: 16px; font-weight: bold;">Choerul</a></p>
    </div>

    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>

</html>
