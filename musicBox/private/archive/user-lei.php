<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Group Music Box">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Work+Sans:300" rel="stylesheet">
        <link rel="stylesheet" href="./user.css">
        <title>MusicBox - User Page</title>
    </head>
    <body>
        <header>
            <img id="logo-img" src="../image/logo.png" alt="logo">
            <p id="logo-text">  <span class="double-shadows">MusicBox</span><p>
        </header>
        <main>
            <div id="main-left">
                <section class="user-profile">
                    <button class="logout-button">Logout</button>
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
                    <form action="removeTrack.php" method="post" onsubmit="">
                        <ul class="playlist-ul">
                            <!-- Sample track item -->
                            <?php include 'showPlaylist.php'; ?>

                            <!-- Add more track items dynamically based on user's playlist -->
                        </ul>
                        <button type="submit" class="confirm-remove">Confirm Remove</button>
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
                <div class="search-filter" id="search-filter-track">
                    <div id="search-filter-track-search">
                        <label for="track-search">Search by Track:</label>
                        <input type="text" id="track-search" placeholder="Enter track name">
                    </div>
                    <div id="search-filter-track-fliter">
                        <label for="track-filter">Filter by Track:</label>
                        <select id="track-filter">
                            <option value="">All</option>
                            <option value="196">Before 1960</option>
                            <option value="197">1970s</option>
                            <option value="198">1980s</option>
                            <option value="199">1990s</option>
                            <option value="200">2000s</option>
                        </select>
                    </div>
                </div>
                <div class="search-filter" id="search-filter-artist">
                    <div id="search-filter-artist-search">
                        <label for="artist-search">Search by Artist:</label>
                        <input type="text" id="artist-search" placeholder="Enter artist name">
                        <!-- <label for="artist-filter">Filter by Artist:</label>
                                <select id="artist-filter">
                                    <option value="">All</option>
                                    <option value="">A-G</option>
                                    <option value="">H-N</option>
                                    <option value="">O-T</option>
                                    <option value="">U-Z</option>                        
                                </select>-->
                    </div>
                    <button id="submit-btn">Search</button>

                </div>
            </div>
        </section>

        <section class="tracks">
            <!-- Content for the "Tracks" section -->

            <form action="./addSongToPlaylist.php" method="post">
                <div id="tracks-h3-button">
                                    <span></span><!--占位符-->
                                    <h3>Tracks</h3>
                                    <button type="submit" class="confirm-add-btn">Add</button>
                                </div>
                <div class="tracks-container">
                    
                    <!-- Add tracks dynamically using JavaScript -->
                    <!-- Each track item should have the following structure -->
                    <div class="track-item-title">
                                            <span class="add-track-title add-track">&nbsp;&nbsp;&nbsp;&nbsp;</span> 
                                            <span class="id-track-title id-track">ID</span>
                                            <span class="track-name-title track-name">Track Name</span>
                                            <span class="artist-name-title artist-name">Artist Name</span>
                                            <span class="popularity-title popularity">Popularity</span>
                                            <span class="release-date-title release-date">Release Date</span>
                                        </div>
                     <div class="tracks-container-in">
                        <?php include 'showData.php'; ?>
                    <!--</div>-->
                </div>


            </form>
        </section>
    </div>
</main>
</body>
</html>