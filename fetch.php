<?php
//fetch.php
$conn = mysqli_connect("localhost", "root", "", "library");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "
  SELECT * FROM book 
  WHERE bid LIKE '%".$search."%'
  OR bname LIKE '%".$search."%' 
  OR author LIKE '%".$search."%' 
  OR pub LIKE '%".$search."%' 
  OR bran LIKE '%".$search."%'
  OR no LIKE '%".$search."%' 
  OR image LIKE '%".$search."%' 
  
 ";
}
else
{
 $query = "
  SELECT * FROM book ORDER BY bid DESC
 ";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Book id</th>
     <th>Book Title</th>
     <th>Book author</th>
     <th>Publishar</th>
      <th>branch</th>
      <th>category</th>
      <th>image</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    
    <td>' . $row["bid"] .' </td>
    <td>' . $row["bname"] . '</td>
    <td>' . $row["author"] . '</td>
    <td>' . $row["pub"] . '</td>
    <td>' . $row["bran"] . '</td>
    <td>' . $row["no"] . '</td>
    <td><center>' .$row["image"].'</center></td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}
?>