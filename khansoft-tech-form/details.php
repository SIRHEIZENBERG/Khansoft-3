<?php

// Retrieve name, phone, and database from GET request
$name = $_GET['name'];
$phone = $_GET['phone'];
$selectedDatabase = $_GET['database'];

// Display database selection form if the database is not selected
if (!isset($selectedDatabase)) {
    // Display a form with options to select the database
    echo '
        <form method="GET" action="details.php">
            <label for="database">Select Database:</label>
            <select name="database" id="database">
                <option value="students">Students</option>
                <option value="contacts">Contacts</option>
                <option value="job_application">Job Applications</option>
                <option value="lpn_application">LPN Applications</option>
            </select>
            <br>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone">
            <br>
            <input type="submit" value="Submit">
        </form>
    ';
} else {
    // Database retrieval based on the selected database
    if ($selectedDatabase === 'students') {
        // Retrieve student data from the database based on the ID
        $id = $_GET['id'];
        echo '<h2>Student Details</h2>';
        echo '<p><strong>Name:</strong> ' . $name . '</p>';
        echo '<p><strong>Phone:</strong> ' . $phone . '</p>';
        // Output other student details retrieved from the database
    } elseif ($selectedDatabase === 'contacts') {
        // Retrieve contact data from the database based on the ID
        $id = $_GET['id'];
        echo '<h2>Contact Details</h2>';
        echo '<p><strong>Name:</strong> ' . $name . '</p>';
        echo '<p><strong>Phone:</strong> ' . $phone . '</p>';
        // Output other contact details retrieved from the database
    } elseif ($selectedDatabase === 'job_application') {
        // Retrieve job application data from the database based on the ID
        $id = $_GET['id'];
        echo '<h2>Job Application Details</h2>';
        echo '<p><strong>Name:</strong> ' . $name . '</p>';
        echo '<p><strong>Phone:</strong> ' . $phone . '</p>';
        // Output other job application details retrieved from the database
    } elseif ($selectedDatabase === 'lpn_application') {
        // Retrieve LPN application data from the database based on the ID
        $id = $_GET['id'];
        echo '<h2>LPN Application Details</h2>';
        echo '<p><strong>Name:</strong> ' . $name . '</p>';
        echo '<p><strong>Phone:</strong> ' . $phone . '</p>';
        // Output other LPN application details retrieved from the database
    }
}

?>
