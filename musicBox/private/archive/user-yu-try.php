<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Group Music Box">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Work+Sans:300" rel="stylesheet">
    <link rel="stylesheet" href="./user.css">
    <script src="showAllData.php"></script>
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
                <button class="logout-button">Logout</button>
                <div class="user-avatar">
                    <img src="../image/logo.png" id="user-avatar" name="user-avatar" alt="User Avatar">
                </div>
                <div class="user-info">
                    <h3 id="user-name" name="user-name">Username</h3>

                    <script>
                        // Get the URL parameters
                        const urlParams = new URLSearchParams(window.location.search);
                        const username = urlParams.get('username');
                        const userid = urlParams.get('id');

                        // Use the username to replace the content of the <h3> element
                        const userNameElement = document.getElementById('user-name');
                        userNameElement.textContent = username;
                    </script>
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
                        <table>
                            <tr class="track-item-title">
                                <th class="id-track-title id-track">ID</th>
                                <th class="track-name-title track-name">Track Name</th>
                                <th class="artist-name-title artist-name">Artist Name</th>
                                <th class="popularity-title popularity">Popularity</th>
                                <th class="release-date-title release-date">Release Date</th>
                                <th class="add-track-title add-track">&nbsp;&nbsp;&nbsp;&nbsp;</th><!--占位符-->
                            </tr>
                            <div class="tracks-container-in">
                                <?php include 'getData.php'; ?>
                                <script>
                                    // Get the track data from PHP and parse it as a JavaScript object
                                    const trackData = <?php echo json_encode($data); ?>;

                                    const itemsPerPage = 20;
                                    let currentPage = 1;
                                    let filteredAndSortedTracks = [];

                                    const tracksContainer = document.querySelector(".tracks-container-in");

                                    function createTrackItem(track) {
                                        return `
            <div class="track-item">
                <label class="add-track-switch">
                    <input type="checkbox" class="add-track-checkbox" name="selectedTracks[]" value="${track.ID_Track}">
                    <span class="slider"></span>
                </label>
                <span class="id-track">${track.ID_Track}</span>
                <span class="track-name">${track.Track_Name}</span>
                <span class="artist-name">${track.Artist_Name}</span>
                <span class="popularity">${track.Popularity}</span>
                <span class="release-date">${track.Release_Date}</span>
            </div>
        `;
                                    }


                                    function displayCurrentPage() {
                                        const startIndex = (currentPage - 1) * itemsPerPage;
                                        const endIndex = startIndex + itemsPerPage;
                                        const currentItems = filteredAndSortedTracks.slice(startIndex, endIndex);
                                        tracksContainer.innerHTML = currentItems.map(createTrackItem).join('');

                                        const paginationContainer = document.createElement('div');
                                        paginationContainer.classList.add('pagination');

                                        for (let i = 1; i <= totalPages; i++) {
                                            const pageLink = document.createElement('a');
                                            pageLink.href = 'javascript:void(0)';
                                            pageLink.innerText = i;
                                            pageLink.classList.add('page-link', i === currentPage ? 'active' : null);
                                            pageLink.addEventListener('click', () => navigateToPage(i));
                                            paginationContainer.appendChild(pageLink);
                                        }

                                        tracksContainer.appendChild(paginationContainer);
                                    }

                                    function navigateToPage(page) {
                                        if (page < 1 || page > totalPages)
                                            return;
                                        currentPage = page;
                                        displayCurrentPage();
                                    }

                                    function handleSearchAndFilter() {
                                        const trackSearchInput = document.getElementById("track-search").value;
                                        const artistSearchInput = document.getElementById("artist-search").value;
                                        const selectedFilter = document.getElementById("track-filter").value;

                                        filteredAndSortedTracks = trackData.filter((track) => {
                                            const trackNameMatches = track.Track_Name.toLowerCase().includes(trackSearchInput.toLowerCase());
                                            const artistNameMatches = track.Artist_Name.toLowerCase().includes(artistSearchInput.toLowerCase());
                                            return trackNameMatches && artistNameMatches;
                                        }).filter((track) => {
                                            if (selectedFilter === "all") {
                                                return true;
                                            } else {
                                                const firstThreeCharsOfFilter = selectedFilter.substring(0, 3);
                                                const firstThreeCharsOfReleaseDate = track.Release_Date.substring(0, 3);
                                                if (firstThreeCharsOfFilter === "196") {
                                                    return firstThreeCharsOfReleaseDate < `${parseInt(firstThreeCharsOfFilter) + 1}`;
                                                } else {
                                                    return firstThreeCharsOfReleaseDate >= firstThreeCharsOfFilter &&
                                                        firstThreeCharsOfReleaseDate < `${parseInt(firstThreeCharsOfFilter) + 1}`;
                                                }
                                            }
                                        });

                                        totalPages = Math.ceil(filteredAndSortedTracks.length / itemsPerPage);
                                        currentPage = Math.min(currentPage, totalPages);
                                        displayCurrentPage();
                                    }

                                    const submitButton = document.getElementById("submit-btn");
                                    const trackFilterDropdown = document.getElementById("track-filter");
                                    submitButton.addEventListener("click", handleSearchAndFilter);

                                    // Call the function initially to load all tracks
                                    handleSearchAndFilter();
                                </script>

                            </div>
                        </table>
                    </div>


                </form>
            </section>
        </div>
    </main>
</body>

</html>