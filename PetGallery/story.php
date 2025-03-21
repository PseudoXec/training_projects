<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylestory.css?v=<?php echo time(); ?>">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>PetFave | STORIES</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <nav>
        <div class="logo">
          <img src="homeimages/LOGO.png" alt="Logo">
        </div>
        <ul class="nav-links">
          <li><a href="http://localhost/DynamicWebprog/admin.php">Admin</a></li>
          <li><a href="http://localhost/DynamicWebprog/category.php">Gallery</a></li>
          <li class="cur"><a href="#story">Stories</a></li>
          <li><a href="index.html" >Home</a></li>
        </ul>
    </nav>
    <div class="mhead">
      <h1>~Share your Stories Now~</h1>
    </div>
    <section>
      <div class="comment-section">
        <form action ="" method="POST">
          <label for="name">Name:</label>
              <input type="text" id="name" name="Name" placeholder="Name" required>
          <label for="comment">Stories:</label>
              <textarea id="comment" name="comment" placeholder="Let Me Hear Your Story" required></textarea>
          <button type="submit" name="submit" value="submit">Submit</button>
        </form>
      </div>
    </section>
    <?php
        include("php/db-connect.php");

        // Process form submission
        if (isset($_POST['submit'])) {
            $name = $_POST["Name"];
            $comment = $_POST["comment"];

            // Insert comment into the database
            $sql = "INSERT INTO com_sec (Name, comment) VALUES ('$name', '$comment')";

            if ($conn->query($sql) === TRUE) {
                ?>
                <script>
                    Swal.fire({
                        icon: "success",
                        title: "Your Story has been submitted successfully!",
                        showConfirmButton: false,
                        timer: 1500
                    });
                </script>
                <?php
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // Retrieve and display comments
        $sql = "SELECT Name, comment FROM com_sec";
        $result = $conn->query($sql);

        if ($result) {
            if ($result->num_rows > 0) {
                echo "<h2>Stories:</h2>";
                echo "<div class='comments-container'>";
                while ($row = $result->fetch_assoc()) {
                    echo "<p><strong>" . $row["Name"] . ":</strong> " . $row["comment"] . "</p>";
                }
                echo "</div>";
            } else {
                echo "<div class='comments-container'>";
                echo "<p>No comments yet.</p>";
                echo "</div>";
            }
        } else {
            echo "Error retrieving comments: " . $conn->error;
        }

        $conn->close();
    ?>


</body>
</html>