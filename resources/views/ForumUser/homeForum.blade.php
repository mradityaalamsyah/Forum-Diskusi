<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Diskusi - Posting Gambar</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
                <button id="upload-button" class="upload-button">
                    <i class="fas fa-plus"></i>
                </button>
                <img src="bdg.jpg" alt="Profile Picture" class="profile-pic">
                <a href="{{ route('forum.profile') }}" class="username-profile">
                    <span id="username-display">John Doe</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Upload Popup -->
    <div id="upload-popup" class="upload-popup">
        <div class="upload-popup-content">
            <div class="upload-header">
                <button id="options-button"><i class="fa-solid fa-ellipsis"></i></button>
                <h2>New Discuss</h2>
                <button id="cancel-button"><i class="fa-solid fa-xmark"></i></button>
            </div>

            <form id="upload-form">
                <div class="post-input-section">
                    <img src="https://via.placeholder.com/40" alt="Profile Picture" class="profile-pic">
                    <span id="username-display">John Doe</span>
                </div>

                <textarea id="post-description" placeholder="What's new?" maxlength="800" required></textarea>

                <!-- Category Selection Section -->
                <div class="category-selection">
                    <label for="category-select">Category:</label>
                    <select id="category-select" required>
                        <option value="" disabled selected>Select category</option>
                        <option value="general">General</option>
                        <option value="technology">Technology</option>
                        <option value="sports">Sports</option>
                        <option value="entertainment">Entertainment</option>
                        <option value="health">Health</option>
                        <option value="education">Education</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="post-actions">
                    <label for="file-input" class="upload-label">
                        <i class="fa-regular fa-images"></i>
                    </label>
                    <input type="file" id="file-input" accept="image/*" hidden>
                </div>

                <div class="image-preview" id="image-preview">
                    <img id="preview-img" src="" alt="Preview Gambar" style="display: none;">
                </div>

                <button type="submit" id="post-button" disabled>Post</button>
            </form>
        </div>
    </div>

    <!-- Forum Container -->
    <div class="forum-container">
        <!-- Post with Image -->
        <div class="post" data-id="1">
            <div class="post-header">
                <img src="https://via.placeholder.com/40" alt="Profile Picture" class="profile-pic">
                <div class="post-info">
                    <span class="handle">@johndoe</span>
                    <span class="timestamp">10 Okt 2023</span>
                </div>
            </div>
            <div class="post-content">
                <p>Ini adalah contoh postingan dengan gambar.</p>
                <img src="bdg.jpg" alt="Contoh Gambar" class="post-image">
            </div>
            <div class="post-actions">
                <button><i class="far fa-comment"></i> 12</button>
            </div>
        </div>

        <!-- Posts without Images -->
        <div class="post">
            <div class="post-header">
                <img src="https://via.placeholder.com/40" alt="Profile Picture" class="profile-pic">
                <div class="post-info">
                    <span class="handle">@janesmith</span>
                    <span class="timestamp">9 Okt 2023</span>
                </div>
            </div>
            <div class="post-content">
                <p>Apa framework JavaScript yang paling populer saat ini?</p>
            </div>
            <div class="post-actions">
                <button><i class="far fa-comment"></i> 8</button>
            </div>
        </div>

        <div class="post">
            <div class="post-header">
                <img src="https://via.placeholder.com/40" alt="Profile Picture" class="profile-pic">
                <div class="post-info">
                    <span class="handle">@janesmith</span>
                    <span class="timestamp">9 Okt 2023</span>
                </div>
            </div>
            <div class="post-content">
                <p>Apa framework JavaScript yang paling populer saat ini?</p>
            </div>
            <div class="post-actions">
                <button><i class="far fa-comment"></i> 8</button>
            </div>
        </div>

        <div class="post">
            <div class="post-header">
                <img src="https://via.placeholder.com/40" alt="Profile Picture" class="profile-pic">
                <div class="post-info">
                    <span class="handle">@janesmith</span>
                    <span class="timestamp">9 Okt 2023</span>
                </div>
            </div>
            <div class="post-content">
                <p>Apa framework JavaScript yang paling populer saat ini?</p>
            </div>
            <div class="post-actions">
                <button><i class="far fa-comment"></i> 8</button>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>