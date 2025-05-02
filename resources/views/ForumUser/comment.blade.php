<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Postingan</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylekomen.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="homeForum.html" class="navbar-brand">Forum Diskusi</a>
            <ul class="navbar-menu">
                <li><a href="#"><i class="fas fa-home"></i> Beranda</a></li>
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

    <div class="forum-container">
        <button onclick="history.back()" class="back-button">
            <i class="fas fa-arrow-left"></i>
        </button>        
        <!-- Postingan Utama -->
        <div class="post">
            <div class="post-header">
                <img src="bdg.jpg" alt="Profile Picture" class="profile-pic">
                <div class="post-info">
                    <span class="handle">@johndoe</span>
                    <span class="timestamp">10 Okt 2023</span>
                </div>
            </div>
            <div class="post-content">
                <p>Ini adalah contoh postingan dengan gambar.</p>
                <img src="bdg.jpg" alt="Contoh Gambar" class="post-image">
            </div>
            <!-- Tombol Reply untuk postingan utama -->
            <button id="reply-button" class="reply-button">
                <i class="fas fa-reply"></i> Reply
            </button>
        </div>

        <!-- Kolom Komentar -->
        <div class="comments-section">
            <h3>Komentar</h3>

            <!-- Daftar Komentar -->
            <div class="comment-list">
                <div class="comment">
                    <img src="https://via.placeholder.com/40" class="profile-pic"> 
                    <div class="comment-info">
                        <span class="handle">@janesmith</span>
                        <span class="timestamp">6 Januari 2025</span>
                    </div>
                </div>
                <div class="comment-content">
                    <p>Ini adalah contoh postingan dengan gambar.</p>
                    <img src="https://via.placeholder.com/600x400" alt="Contoh Gambar" class="post-image">
                </div>
            </div>
            <div class="comment-list">
                <div class="comment">
                    <img src="https://via.placeholder.com/40" class="profile-pic"> 
                    <div class="comment-info">
                        <span class="handle">@janesmith</span>
                        <span class="timestamp">6 Januari 2025</span>
                    </div>
                </div>
                <div class="comment-content">
                    <p>Ini adalah contoh postingan dengan gambar.</p>
                    <img src="https://via.placeholder.com/600x400" alt="Contoh Gambar" class="post-image">
                </div>
            </div>
        </div>
    </div>

    <!-- Popup untuk reply (mengikuti format upload-popup) -->
    <div id="reply-popup" class="reply-popup">
        <div class="reply-popup-content">
            <!-- Header -->
            <div class="reply-header">
                <button id="options-reply"><i class="fa-solid fa-ellipsis"></i></button>
                <h2>Reply to Post</h2>
                <button id="cancel-reply"><i class="fa-solid fa-xmark"></i></button>
            </div>

            <!-- Form Reply -->
            <form id="reply-form">
                <!-- Profil & Input -->
                <div class="reply-input-section">
                    <img src="https://via.placeholder.com/40" alt="Profile Picture" class="profile-pic">
                    <span id="username-display">John Doe</span>
                </div>
                <p class="replying-to">Replying to <span>@johndoe</span></p>
                <textarea id="reply-description" placeholder="Write your reply..." maxlength="800" required
                    style="margin-top: 15px;"></textarea>

                <!-- Ikon fitur -->
                <!-- Ikon upload gambar -->
                <div class="reply-actions">
                    <label for="reply-file-input" class="upload-label">
                        <i class="fa-regular fa-images"></i>
                    </label>
                    <input type="file" id="reply-file-input" accept="image/*" hidden>
                </div>

                <!-- Preview Gambar -->
                <div class="reply-image-preview" id="reply-image-preview">
                    <img id="reply-preview-img" src="" alt="Preview Gambar" style="display: none;">
                </div>

                <!-- Tombol Submit -->
                <button type="submit" id="submit-reply" disabled>Reply</button>
            </form>
        </div>
    </div>

</body>

<script src="{{ asset('js/comment.js') }}"></script>

</html>