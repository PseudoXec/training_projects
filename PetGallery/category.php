<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylecategory.css?v=<?php echo time(); ?>">
    <title>PetFave | Gallery</title>
</head>
<body>
    <nav>
        <div class="logo">
          <img src="homeimages/LOGO.png" alt="Logo">
        </div>
        <ul class="nav-links">
          <li><a href="http://localhost/DynamicWebprog/admin.php">Admin</a></li>
          <li><a class="cur" href="#gallery">Gallery</a></li>
          <li><a href="http://localhost/DynamicWebprog/story.php">Stories</a></li>
          <li><a href="index.html" >Home</a></li>
        </ul>
    </nav>

    <h1 class="Title1">---Pets Gallery---</h1>
<?php
    include("php/db-connect.php");
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the 'Like' button is clicked
    if (isset($_POST['fb_button'])) {
        updateLikeCount('French Bulldog');
    } elseif (isset($_POST['gr_button'])) {
        updateLikeCount('Golden Retriever');
    } elseif (isset($_POST['gs_button'])) {
        updateLikeCount('German Sheperd');
    } elseif (isset($_POST['persian_button'])) {
        updateLikeCount('Persian');
    } elseif (isset($_POST['siamese_button'])) {
        updateLikeCount('Siamese');
    } elseif (isset($_POST['maine_button'])) {
        updateLikeCount('Maine Coon');
    } elseif (isset($_POST['cockatoos_button'])) {
        updateLikeCount('Cockatoos');
    } elseif (isset($_POST['parak_button'])) {
        updateLikeCount('Parakeets');
    } elseif (isset($_POST['finch_button'])) {
        updateLikeCount('Finch');
    }
}

    function updateLikeCount($petName) {
        global $conn; 
        $stmt = $conn->prepare('UPDATE pet_likes SET count_value = count_value + 1 WHERE pet_name = ?');
        $stmt->bind_param('s', $petName);
        $stmt->execute();
        $stmt->close();

        // Redirect back to the previous page or display a success message
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    ?>
    <h2 class="sub_Title">Dogs</h2>
    <section class="dogs">
        <div class="container-wrapper">
            <div class="container">		
                <div class="card">
                    <div class="imgBx">
                        <img src="animalimages/fb.jpg">

                        <h2>French Bulldog</h2>
                        <p><br>French Bulldogs are cherished for their affectionate nature, 
                            intelligence, and minimal barking, solidifying their reputation 
                            as a beloved and sought-after dog breed.
                        </p>
                        <form method="post">
                        <button type="submit" name="fb_button" data-category="dogs">Like</button>
                        <span>Total Likes: <?php echo getLikeCount('French Bulldog'); ?></span>
                        </form>
                    </div>
                </div>
            
                <div class="card">
                    <div class="imgBx">
                        <img src="animalimages/gr.jpg">
                        <h2>Golden Retriever </h2>
                        <p><br>
                        Golden Retrievers are celebrated for their friendly disposition, intelligence, and gentle demeanor, 
                        affirming their status as a beloved and highly desirable canine companion.
                        </p>
                        <form method="post">					
                        <button type="submit" name="gr_button" data-category="dogs" >Like</button>
                        <span>Total Likes: <?php echo getLikeCount('Golden Retriever'); ?></span>
                        </form>
                    </div>	
                </div>	
                
                <div class="card">
                    <div class="imgBx">
                        <img src="animalimages/gs.jpg">
                        <h2>German Sheperd</h2>
                        <p><br>German Shepherd, known for its intelligence, loyalty, and
                             versatility, is a highly esteemed breed often utilized as police, service, and search-and-rescue dogs.
                        </p>
                        <form method="post">
                        <button type="submit" name="gs_button" data-category="dogs" >Like</button>
                        <span>Total Likes: <?php echo getLikeCount('German Sheperd'); ?></span>
                        </form>
                    </div>	
                </div>	
            </div>
        </div>
    </section>
    <h2 class="sub_Title">Cats</h2>
    <section class="cats">
        <div class="container-wrapper">
            <div class="container">		
                <div class="card">
                    <div class="imgBx">

                        <img src="animalimages/persian.jpg">
                    
                        <h2>Persian</h2>
                        <p><br>
                            Persian cats, known for their long fur and gentle demeanor, 
                            are cherished for their regal appearance as affectionate companions.
                        </p>
                        <form method="post">
                        <button type="submit" name="persian_button" data-category="cats" >Like</button>
                        <span>Total Likes: <?php echo getLikeCount('Persian'); ?></span>
                        </form>
                    </div>
                </div>
            
                <div class="card">
                    <div class="imgBx">

                        <img src="animalimages/siamese.jpg">

                        <h2>Siamese</h2>
                        <p><br>
                            The Siamese cat, with its striking blue eyes and vocal nature,
                             is a captivating and affectionate feline companion.
                        </p>
                        <form method="post">					
                        <button type="submit" name="siamese_button" data-category="cats" >Like</button>
                        <span>Total Likes: <?php echo getLikeCount('Siamese'); ?></span>
                        </form>
                    </div>	
                </div>	
                
                <div class="card">
                    <div class="imgBx">
                        <img src="animalimages/maine.jpg">
                        <h2>Maine Coon</h2>
                        <p><br>
                            The Maine Coon, recognized for its large size, tufted ears,
                             bushy tail, and friendly demeanor, is a majestic and gentle giant among cat breeds.
                        </p>
                        <form method="post">
                        <button type="submit" name="maine_button" data-category="cats" >Like</button>
                        <span>Total Likes: <?php echo getLikeCount('Maine Coon'); ?></span>
                        </form>
                    </div>	
                </div>	
            </div>
        </div>
    </section>
    <h2 class="sub_Title">Birds</h2>
    <section class="birds">
        <div class="container-wrapper">
            <div class="container">		
                <div class="card">
                    <div class="imgBx">

                        <img src="animalimages/cockatoos.jpg">
                    
                        <h2>Cockatoos</h2>
                        <p><br>
                            Cockatoos, with their vibrant plumage, distinctive crests, 
                            and playful personalities, are charismatic and sociable parrots 
                            cherished for their engaging nature as pets.
                        </p>
                        <form method="post">
                        <button type="submit" name="cockatoos_button" data-category="birds" >Like</button>
                        <span>Total Likes: <?php echo getLikeCount('Cockatoos'); ?></span>
                        </form>
                    </div>
                </div>
            
                <div class="card">
                    <div class="imgBx">
                        <img src="animalimages/parak.jpg">
                        <h2>Parakeets</h2>
                        <p><br>Parakeets, with their small size and vibrant plumage,
                             are beloved for their lively personalities and entertaining 
                             ability to mimic sounds as charming companions.
                        </p>
                        <form method="post">					
                        <button type="submit" name="parak_button"data-category="birds" >Like</button>
                        <span>Total Likes: <?php echo getLikeCount('Parakeets'); ?></span>
                        </form>
                    </div>	
                </div>	
                
                <div class="card">
                    <div class="imgBx">
                        <img src="animalimages/finch.jpg">
                        <h2>Finch</h2>
                        <p><br>
                            Finches, with their small size, colorful plumage, 
                            and melodious songs, bring delightful charm to aviaries and households
                             as low-maintenance and enchanting companions.
                        </p>
                        <form method="post">
                        <button type="submit" name="finch_button" data-category="birds" >Like</button>
                        <span>Total Likes: <?php echo getLikeCount('Finch'); ?></span>
                        </form>
                    </div>	
                </div>	
            </div>
        </div>
    </section>
    <?php
    function getLikeCount($petName) {
        global $conn;
        $stmt = $conn->prepare('SELECT count_value FROM pet_likes WHERE pet_name = ?');
        $stmt->bind_param('s', $petName);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        return $count;
    }
    
    ?>

</body>
</html>