<?php
$user = "omega";
$password = "omega";
$database = "omega";
$table = "employee";

try {

        $db= new PDO("pgsql:host=192.168.137.137;dbname=$database", $user, $password);

  foreach($db->query("SELECT * FROM $table") as $row) {

echo "<table style='background-color:#D3D3D3' width=30% border='1'>

<tr>
<th <td>first_name</th></td>
<th>last_name</th>
<th >city_name</th>
<th width>email</th>
</tr>";

echo "<tr>";
echo "<td >" . $row['first_name'] . "</td>";
echo "<td >" . $row['last_name'] . "</td>";
echo "<td >" . $row['city_name'] . "</td>";
echo "<td >" . $row['email'] . "</td>";
echo "</tr>";
echo "<table>";

  }

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
