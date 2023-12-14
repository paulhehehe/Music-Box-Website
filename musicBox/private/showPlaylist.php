<!-- Author 1: Lei Zhao 041086365 -->
<!-- Author 2: Zhicheng He 041086226 -->
<!-- Author 3: Yuling Guo 041069402 -->
<!-- Author 4: Yu Song 040873597 -->
<!-- Section: CST8285_301 -->
<!-- Professor: Shehzeen Shehzeen -->
<!-- File name: showData.php -->
<!-- Date: Jul. 23, 2023 -->
<!-- Description: showData.php -->
<?php
$server_name = "localhost";
$database_name = "assignment2";
$user_name = "test";
$user_password = "test";

$connection = new mysqli($server_name, $user_name, $user_password, $database_name) or die($connection->connect_error);

// Check if the 'username' parameter exists in the URL
if (isset($_GET['username'])) {
    $username = $_GET['username'];

    // Prepare the SQL query using a prepared statement
    $sql = "SELECT DISTINCT track.ID_Track, Track_Name FROM track "
        . "JOIN track_playlist ON track_playlist.id_track = track.ID_track "
        . "JOIN user ON in_id_playlist = ID_user WHERE user_name = ? OR Email = ? order by track.ID_Track";

    // Use prepared statements to bind the parameter securely
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ss", $username, $username);

    // Execute the query
    if ($stmt->execute()) {
        // Get the query result
        $result = $stmt->get_result();

        // Fetch the data from the query result
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        // Close the prepared statement
        $stmt->close();

        // Close the database connection
        $connection->close();

        // Send the JSON data to JavaScript
        //echo "<script>const trackData = $trackData;</script>";
    } else {
        // Query execution failed
        echo "Error: " . $stmt->error;
    }
} else {
    // If the 'username' parameter is not in the URL, handle it accordingly
    // For example, display an error message or redirect to a default page
}
?>


<script defer>
    // Get the playlist data from PHP and parse it as a JavaScript object
    const tracks = <?php echo json_encode($data); ?>;

    // Function to create the HTML for each playlist item
    function createPlaylistHTML(track) {
        return `
            <li class="playlist-li">
                <label class="playlist-remove">
                    <input type="checkbox" name="selectedTracks[]" value="${track.ID_Track}" class="track-remove-checkbox">
                    <span class="slider"></span>
                </label>
                <span class="playlist-track-id">${track.ID_Track}</span>
                <span class="playlist-track-name">${track.Track_Name}</span>
            </li>
        `;
    }

    // Get the container element to append the playlist items
    const PlContainer = document.querySelector(".playlist-ul");

    // Loop through the playlists data and add each playlist item to the container
    tracks.forEach((track) => {
        const plHTML = createPlaylistHTML(track);
        PlContainer.innerHTML += plHTML;
    });
</script>