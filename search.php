
 <form action="search.php" method="GET">
 <input type="text" name="keres" />
 <input type="submit" />
</form>

<?php

class search extends CI_Controller {
public function index()
	{


#mysqli kapcsolódás
$db = mysqli_connect();
 
if(isset($_GET['keres'])){
# az isset függvény segítségével megvizsgáljuk,hogy létezik-e a GET tömbben lévő 'keres' kulcs
$keres = $_GET['keres']; 
 
if(!empty($keres)){
# ellenőrizzük nem-e üres a kapott változó
$keres = trim($keres); # eltávolítjuk a szóközt az elejéről és végéről

$query = mysqli_query($dbh,"SELECT * FROM `receptek` WHERE `nev` LIKE '%$keres%' ");
 
if(mysqli_affected_rows($dbh) > 0){
#amennyiben van találat kiírjuk
echo 'Találatok:';
while($sor = mysqli_fetch_assoc($query)){
echo $sor['nev'];
echo '<br/>';
}
}else{
echo 'Nincs találat';
}
 
}else{
echo 'Üres keresőmező';
# esetleg visszairányítás: 
//header('Location: kereso.html');
}
 
}else{
echo 'Közvetlen meghívás nem engedélyezett!';
}
}
}
?>
