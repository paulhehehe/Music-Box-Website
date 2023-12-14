<!-- Author 1: Lei Zhao 041086365 -->
<!-- Author 2: Zhicheng He 041086226 -->
<!-- Author 3: Yuling Guo 041069402 -->
<!-- Author 4: Yu Song 040873597 -->
<!-- Section: CST8285_301 -->
<!-- Professor: Shehzeen Shehzeen -->
<!-- File name: user.php -->
<!-- Date: Jul. 23, 2023 -->
<!-- Description: user.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Group Music Box">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Work+Sans:300" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./user.css">
    <title>MusicBox - User Page</title>
</head>

<body>
    <header>
        <img id="logo-img" src="../image/logo.png" alt="logo">
        <p id="logo-text"> <span class="double-shadows">MusicBox</span>
        <p>
    </header>
    <main>
        <div id="main-left">
            <section class="user-profile">
                <a href="./logout.php">
                    <button class="logout-button">Logout</button></a>
                <div class="user-avatar">
                    <img src="../image/logo.png" id="user-avatar" name="user-avatar" alt="User Avatar">
                </div>
                <div class="user-info">
                    <h3 id="user-name" name="user-name">Username</h3>
                </div>
            </section>
            <hr id="user-playlist">
            <section class="playlist">
                <div class="formcontainer form-playlist" id="form-playlist"></div>
                <h3>My Playlist</h3>
                <form action="removeTrack.php" method="post" onsubmit="" id="form-playlist">
                    <ul class="playlist-ul">
                        <!-- Sample track item -->
                        <?php include 'showPlaylist.php'; ?>

                        <!-- Add more track items dynamically based on user's playlist -->
                    </ul>
                    <button type="submit" class="confirm-remove">Delete</button>
                    <!-- This button will be used to remove selected tracks from the playlist -->
                </form>
        </div>
        </section>
        </div>
        <div id="main-right">
            <section class="track-search-filter">
                <!-- Content for the "Track Search and Filter" section -->
                <!--            <h3>Track Search and Filter</h3>-->
                <div class="track-search-filter-container">
                    <!-- <div class="search-filter" id="search-filter-track"> -->
                    <div id="search-filter-track-search">
                        <!-- <label for="track-search">Search by Track:</label> -->
                        <input type="text" id="track-search" placeholder="Search by Track">
                    </div>
                    <div id="search-filter-artist-search">
                        <!-- <label for="artist-search">Search by Artist:</label> -->
                        <input type="text" id="artist-search" placeholder="Search by Artist">
                    </div>
                    <div id="search-filter-track-fliter">
                        <!-- <label for="track-filter">Filter by Track:</label> -->
                        <select id="track-filter">
                            <option value="">All Eras</option>
                            <option value="196">Before 1960</option>
                            <option value="197">1970s</option>
                            <option value="198">1980s</option>
                            <option value="199">1990s</option>
                            <option value="20">2000+</option>
                        </select>
                    </div>
                    <div id="search-filter-artist-button">
                        <button id="submit-btn">Search</button>
                    </div>
                    <!-- </div> -->
                </div>
            </section>

            <section class="tracks">
                <form action="./addSongToPlaylist.php" method="post">
                    <div id="tracks-h3-button">
                        <span></span>
                        <h3>Tracks</h3>
                        <button type="submit" class="confirm-add-btn" id="add-track-btn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                    </div>
                    <div class="tracks-container">
                        <!-- Add tracks dynamically using JavaScript -->
                        <!-- Each track item should have the following structure -->
                        <div class="track-item-title">
                            <span class="id-track-title id-track">ID</span>
                            <span class="track-name-title track-name">Track Name</span>
                            <span class="artist-name-title artist-name">Artist Name</span>
                            <span class="popularity-title popularity">Pop</span>
                            <span class="release-date-title release-date">Published</span>
                            <span class="add-track-title add-track">☑</span>
                        </div>
                        <div class="tracks-container-in">
                            <?php include 'showData.php'; ?>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </main>
    <footer>
        <div class="CopyRight">Author: Lei Zhao, Zhicheng He, Yuling Guo, Yu Song</div>
        <div class="CopyRight">Date: 2023-08-03 &copy;All copyright reserved</div>
    </footer>
</body>

</html>