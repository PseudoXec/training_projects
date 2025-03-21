<?php
include("php/db-connect.php");
// Handle update form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_button'])) {


    // Get form data
    $commentIdToUpdate = $_POST['comment_id'];
    $updateName = $_POST['update_name'];
    $updateComment = $_POST['update_comment'];

    // Perform the update operation in the database
    $updateSql = "UPDATE com_sec SET Name = ?, Comment = ? WHERE Userid = ?";
    $stmt = $conn->prepare($updateSql);
    $stmt->bind_param('ssi', $updateName, $updateComment, $commentIdToUpdate);
    $stmt->execute();
    $stmt->close();

}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_button'])) {
    // Get the comment ID from the form submission
    $commentIdToDelete = $_POST['comment_id'];

    // Perform the delete operation in the database
    $deleteSql = "DELETE FROM com_sec WHERE Userid = ?";
    $stmt = $conn->prepare($deleteSql);
    $stmt->bind_param('i', $commentIdToDelete);
    $stmt->execute();
    $stmt->close();
}

// Fetch data from the database
$sql = "SELECT Userid, Name, Comment FROM com_sec";
$result = $conn->query($sql);

// Check if there are rows in the result set
if ($result->num_rows > 0) {
    $com_sec = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $com_sec = array(); // No rows found, initialize an empty array
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleadmin.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>PetFave | Stories</title>
</head>
<body>
<nav>
    <div class="logo">
        <img src="homeimages/LOGO.png" alt="Logo">
    </div>
    <ul class="nav-links">
        <li><a href="http://localhost/DynamicWebprog/admin.php">Admin</a></li>
        <li><a href="http://localhost/DynamicWebprog/category.php">Gallery</a></li>
        <li><a href="http://localhost/DynamicWebprog/story.php">Stories</a></li>
        <li><a href="index.html" >Home</a></li>
    </ul>
</nav>
    <h1 class="wqw">Stories Section</h1>
    <table>
        <tr>
            <th>Userid</th>
            <th>Name</th>
            <th>Comment</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($com_sec as $comment): ?>
            <tr>
                <td><?php echo isset($comment['Userid']) ? $comment['Userid'] : ''; ?></td>
                <td><?php echo isset($comment['Name']) ? $comment['Name'] : ''; ?></td>
                <td><?php echo isset($comment['Comment']) ? $comment['Comment'] : ''; ?></td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal<?php echo $comment['Userid']; ?>">Update</button>
                    <!-- Update Modal -->
                    <div class="modal" id="updateModal<?php echo $comment['Userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Comment</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Add your form elements for updating here -->
                                    <form method="post">
                                        <input type="hidden" name="comment_id" value="<?php echo $comment['Userid']; ?>">
                                        <!-- Add form elements for updating Name and Comment -->
                                        <label for="update_name">Name:</label>
                                        <input type="text" name="update_name" value="<?php echo $comment['Name']; ?>">
                                        <br>
                                        <label for="update_comment">Comment:</label>
                                        <textarea name="update_comment"><?php echo $comment['Comment']; ?></textarea>
                                        <br>
                                        <button type="submit" name="update_button" class="btn btn-primary">Save Changes</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Update Modal -->
                </td>
                <td>
                    <form method="post" style="display: inline-block; margin-right: 5px;">
                        <input type="hidden" name="comment_id" value="<?php echo isset($comment['Userid']) ? $comment['Userid'] : ''; ?>">
                        <button type="submit" name="delete_button" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>