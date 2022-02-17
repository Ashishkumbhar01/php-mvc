<table border="1">
   <tr>
      <th>Title</th>
       <th>Author</th>
       <th>Description</th>
   </tr>
   <?php
   foreach ($books as $book)
   {
  
   ?>
   <tr>
      <td>
         <a href="index.php?book=<?php echo $book->title; ?>">
         <?php echo $book->title; ?>
         </a>
         </td>
      <td><?php echo $book->author; ?></td>
      <td><?php echo $book->description; ?></td>
   </tr>
 <?php
   }
 ?>  
   
</table>
