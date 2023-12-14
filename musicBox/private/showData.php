<!-- Author 1: Lei Zhao 041086365 -->
<!-- Author 2: Zhicheng He 041086226 -->
<!-- Author 3: Yuling Guo 041069402 -->
<!-- Author 4: Yu Song 040873597 -->
<!-- Section: CST8285_301 -->
<!-- Professor: Shehzeen Shehzeen -->
<!-- File name: showData.php -->
<!-- Date: Jul. 23, 2023 -->
<!-- Description: showData.php -->
<script>
    // Get the URL parameters
    const urlParams = new URLSearchParams(window.location.search);
    const username = urlParams.get('username');
    const userid = urlParams.get('id');

    // Use the username to replace the content of the <h3> element
    const userName = document.getElementById('user-name');
    userName.textContent = username;
</script>

<?php include 'getData.php'; ?>
<script>
    // Get the track data from PHP and parse it as a JavaScript object
    const trackData = <?php echo json_encode($data); ?>;

    const itemsPerPage = 20;
    let currentPage = 1;
    let filteredTracks = [];

    const tracksContainer = document.querySelector(".tracks-container-in");

    function createTrackItem(track) {
        return `
<div class="track-item">

                
<span class="id-track">${track.ID_Track}</span>
<span class="track-name">${track.Track_Name}</span>
<span class="artist-name">${track.Artist_Name}</span>
<span class="popularity">${track.Popularity}</span>
<span class="release-date">${track.Release_Date}</span>
<label class="add-track-switch">
<input type="checkbox" class="add-track-checkbox" name="selectedTracks[]" value="${track.ID_Track}">

</div>
`;
    }


    function displayPage() {
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;
        const currentItems = filteredTracks.slice(startIndex, endIndex);
        tracksContainer.innerHTML = currentItems.map(createTrackItem).join('');

        const pageContainer = document.createElement('div');
        pageContainer.classList.add('pagination');

        for (let i = 1; i <= totalPages; i++) {
            const pageLink = document.createElement('a');
            pageLink.href = 'javascript:void(0)';
            pageLink.innerText = i;
            pageLink.classList.add('page-link', i === currentPage ? 'active' : null);
            pageLink.addEventListener('click', () => navigateToPage(i));
            pageContainer.appendChild(pageLink);
        }

        tracksContainer.appendChild(pageContainer);
    }

    function navigateToPage(page) {
        if (page < 1 || page > totalPages)
            return;
        currentPage = page;
        displayPage();
    }

    function searchFilter() {
        const trackSearch = document.getElementById("track-search").value;
        const artistSearch = document.getElementById("artist-search").value;
        const selectedFilter = document.getElementById("track-filter").value;

        filteredTracks = trackData.filter((track) => {
            const trackName = track.Track_Name.toLowerCase().includes(trackSearch.toLowerCase());
            const artistName = track.Artist_Name.toLowerCase().includes(artistSearch.toLowerCase());
            return trackName && artistName;
        }).filter((track) => {
            if (selectedFilter === "all") {
                return true;
            } else {
                const filterValue = selectedFilter.substring(0, 3);
                const textValue = track.Release_Date.substring(0, 3);
                if (filterValue === "196") {
                    return textValue < `${parseInt(filterValue) + 1}`;
                } else {
                    return textValue >= filterValue &&
                        textValue < `${parseInt(filterValue) + 1}`;
                }
            }
        });

        totalPages = Math.ceil(filteredTracks.length / itemsPerPage);
        currentPage = Math.min(currentPage, totalPages);

        // If filteredTracks is empty, set currentPage to 1
        if (filteredTracks.length === 0) {
            currentPage = 1;
        }

        displayPage();
    }

    const submitBtn = document.getElementById("submit-btn");
    //    const trackFilterDropdown = document.getElementById("track-filter");
    submitBtn.addEventListener("click", searchFilter);

    // Call the function initially to load all tracks
    searchFilter();
</script>