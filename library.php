<!DOCTYPE html>
<html>
    <head>
        <title>Online Library</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
                <div class="name-container"><h1>M&N Library</h1></div>
        <nav>
            <ul class="nav_links">
                <li><a href="#">Home</a></li>
                <li><a href="#top-books">Top Books</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </nav>
        <div class="container-btn"><a class="logout-btn" href="logout.php"><button type="button">Logout</button></a></div>
</header>
    <div class="first-section">
        <div class="description">
                <h1>Welcome to the Online Library of Constantine, Algeria!</h1>

                <p>Discover a treasure trove of knowledge right at your fingertips. Our virtual library offers a diverse collection of books catering to a wide range of interests and academic pursuits. From timeless classics to contemporary literature, educational resources to research materials, there's something for everyone in our digital shelves.</p>
                <p>Explore our curated selection of fiction and non-fiction titles, spanning genres such as literature, history, science, philosophy, and more. Whether you're seeking literary escapades, expanding your horizons, or delving into scholarly texts, our library has you covered.</p>
                <p>Experience the joy of reading with our online library, where knowledge knows no boundaries. Join us in the pursuit of learning, enlightenment, and the endless possibilities that books offer. Start your literary journey today with the Online Library of Constantine, Algeria.</p>
                <p>Happy reading!</p>
        </div>
        <!--<div class="image-section">
            <img src="c:\Users\ZY LAPTOP\Desktop\STUDIES\miniprojs\abd\assets\books.avif" alt="book stack">
        </div>-->
    </div>
    <div class="second-section"> 
        <div class="top-books" id="top-books">

         <h2>Top 10 most popular books</h2>
        <hr style="width:50%; margin: auto;">
           
            <?php include 'query.php'; ?>
        
        </div>
    </div>
   
    </body>

</html>
