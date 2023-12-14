// <!-- Author 1: Lei Zhao 041086365 -->
// <!-- Author 2: Zhicheng He 041086226 -->
// <!-- Author 3: Yuling Guo 041069402 -->
// <!-- Author 4: Yu Song 040873597 -->
// <!-- Section: CST8285_301 -->
// <!-- Professor: Shehzeen Shehzeen -->
// <!-- File name: showData.js -->
// <!-- Date: Jul. 23, 2023 -->
// <!-- Description: showData.js -->

// Function to handle the search and filter
function handleSearchAndFilter() {
    const trackSearchInput = document.getElementById("track-search").value;
    const artistSearchInput = document.getElementById("artist-search").value;
    const selectedFilter = document.getElementById("track-filter").value;

    // Filter the trackData based on search input
    const filteredTracks = trackData.filter((track) => {
        const trackNameMatches = track.Track_Name.toLowerCase().includes(trackSearchInput.toLowerCase());
        const artistNameMatches = track.Artist_Name.toLowerCase().includes(artistSearchInput.toLowerCase());
        return trackNameMatches && artistNameMatches;
    });

    // Filter the tracks further based on the selected filter option
    const filteredAndSortedTracks = filteredTracks.filter((track) => {
        if (selectedFilter === "all") {
            return true; // Show all tracks if "All" filter is selected
        } else {
            const firstThreeCharsOfFilter = selectedFilter.substring(0, 3);
            const firstThreeCharsOfReleaseDate = track.Release_Date.substring(0, 3);

            if (firstThreeCharsOfFilter === "196") {
                return firstThreeCharsOfReleaseDate < "196";
            } else if (firstThreeCharsOfFilter === "197") {
                return firstThreeCharsOfReleaseDate >= "197" && firstThreeCharsOfReleaseDate < "198";
            } else if (firstThreeCharsOfFilter === "198") {
                return firstThreeCharsOfReleaseDate >= "198" && firstThreeCharsOfReleaseDate < "199";
            } else if (firstThreeCharsOfFilter === "199") {
                return firstThreeCharsOfReleaseDate >= "199" && firstThreeCharsOfReleaseDate < "200";
            } else if (firstThreeCharsOfFilter === "200") {
                return firstThreeCharsOfReleaseDate >= "200" && firstThreeCharsOfReleaseDate < "201";
            } else {
                return true;
            }
        }
    });

    // Clear the existing track items
    const tracksContainer = document.querySelector(".tracks-container");
    tracksContainer.innerHTML = "";

    // Display the filtered tracks
    filteredAndSortedTracks.forEach((track) => {
        const trackItemHTML = createTrackItem(track);
        tracksContainer.innerHTML += trackItemHTML;
    });
}

// Add event listener to the submit button and track filter dropdown
const submitButton = document.getElementById("submit-btn");
const trackFilterDropdown = document.getElementById("track-filter");
submitButton.addEventListener("click", handleSearchAndFilter);
//trackFilterDropdown.addEventListener("change", handleSearchAndFilter);

// Call the function initially to load all tracks
handleSearchAndFilter();



