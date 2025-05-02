<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil | Threads Clone</title>
    <link rel="stylesheet" href="{{ asset( 'css/styles.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styleProfile.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- <header class="bg-white p-4 shadow flex justify-between items-center">
        <button onclick="history.back()" class="text-xl">&#8592;</button>
        <h1 class="text-lg font-bold">Profile</h1>
        <button class="text-xl">&#8942;</button>
    </header> -->
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="homeForum.html" class="navbar-brand">Forum Diskusi</a>
            <ul class="navbar-menu">
                <li><a href="{{ route('home.forum') }}"><i class="fas fa-home"></i> Beranda</a></li>
                <li><a href="#"><i class="fas fa-hashtag"></i> Jelajahi</a></li>
                <li><a href="#"><i class="fas fa-bell"></i> Notifikasi</a></li>
                <li><a href="#"><i class="fas fa-envelope"></i> Pesan</a></li>
            </ul>
            <div class="navbar-profile">
                <button id="upload-button" class="upload-button" style="color: transparent; background-color: transparent;">
                    <i class="fas fa-plus"></i>
                </button>
                <img src="https://via.placeholder.com/40" alt="Profile Picture" class="profile-pic">
                <a href="profile.html" class="username-profile">
                    <span id="username-display">John Doe</span>
                </a>
            </div>
        </div>
    </nav>

    <section class="bg-white p-4 rounded-lg shadow mx-auto max-w-lg mt-4">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold">Raditt</h2>
                <p class="text-gray-500">@mrdtya_a</p>
                <p class="text-sm text-gray-600 mt-1"><span class="font-semibold">5 followers</span></p>
            </div>
            <img src="https://via.placeholder.com/80" class="rounded-full border" alt="Profile Picture">
        </div>

        <button class="w-full mt-4 bg-gray-200 text-black py-2 rounded-lg">Edit profile</button>

        <div class="flex justify-around mt-4 border-b">
            <button class="py-2 border-b-2 border-black font-semibold">Threads</button>
            <button class="py-2 text-gray-500">Replies</button>
            <button class="py-2 text-gray-500">Reposts</button>
        </div>
    </section>

    <section class="bg-white p-4 rounded-lg shadow mx-auto max-w-lg mt-4">
        <div class="flex items-center gap-2">
            <img src="https://via.placeholder.com/40" class="rounded-full" alt="Profile Picture">
            <input type="text" placeholder="What's new?" class="w-full border rounded-lg p-2">
            <button class="bg-black text-white px-4 py-2 rounded-lg">Post</button>
        </div>
    </section>
</body>
</html>
