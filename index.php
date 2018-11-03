<?php
if(isset($_POST['submit']))
{ 
    $bgcolor=$_POST['bgcolor'];
    $textcolor=$_POST['textcolor'];
    echo "<body style='background-color:".$bgcolor.";'>";
    echo "<p style='color:".$textcolor."';>'; 
    echo "Your Text:<b>$bgcolor $textcolor</p></b>";  
}
echo"<form method='post' avtion=".$_SERVER['PHP_SELF'].">";
echo"Background <input type='text'name='bgcolor'><br>";
echo"Text <input type='text'name='textcolor'><br>";
echo "<input type='submit'name='submit'value='Submit Form'><br>";
echo "</form></body>";
