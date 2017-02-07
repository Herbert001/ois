<?php Header("Content-Type: text/html; charset=utf-8");

error_reporting(0); //Fehler nicht anzeigen auf 0 setzen!
$host = "localhost";
$username = "karsten";
$passwd = "klemens";
$dbname = "ois";

$db = mysqli_init();
$db -> options (MYSQLI_INIT_COMMAND, 'SET NAMES \'utf8\'');
$db -> real_connect($host, $username, $passwd, $dbname);
     

//$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if($db->connect_errno) {
    die('SoS, wir haben Probleme die Datenbank zu erreichen!' . $db->connect_error);
}
else
{
echo "ÖÄÜ Verbindung zur Datenbank erfolgreich hergestellt!";
}
$query = 'SELECT * FROM air_compressor';
$result = $db->query($query);
//while ($row = mysqli_fetch_assoc($result)) {
while ($row = $result->fetch_assoc()){
echo '<pre>';
    print_r($row);
    echo '<pre>';
}

?>

