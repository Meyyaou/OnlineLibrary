<?php

// Connect to Oracle database 
$conn = oci_connect("LibraryAdmin", "admin", "localhost/xe");

// Query database
$query = 'SELECT title, first_name, last_name FROM BookAuthor, Author, PopularBooks Where PopularBooks.Book_ID=BookAuthor.Book_ID and Author.Author_ID=BookAuthor.Author_ID';
$stid = oci_parse($conn, $query);
oci_execute($stid);

// Print list
echo '<ul class="popular-book-list">';
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo '<li class="book">' . $row['TITLE'] . ' by ' . $row['FIRST_NAME'] . ' '. $row['LAST_NAME'] .'</li>'; 
}
echo '</ul>';

?>
<style>
.popular-book-list {
  list-style: none;
  padding: 0;
}

.book {
  background:e;
  padding: 10px;
  display: flex;
  justify-content: center;
  align-items: center;   
  border-radius: 4px;
}
</style>
