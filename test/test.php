<?php
$firstname = $_POST['fname'];
$lastname = $_POST['lastname'];
echo "Welcome $firstname!";
$dab = @mysql_connect('localhost', $firstname, $lastname);
if(!$dab)
{
	echo '<p>Unable to connect to database.</p>' ;
	
}
else
{
	echo '<p>Connection successful!</p>' ;

$conn = mysql_select_db('vehicle', $dab);
if(!$conn)
{
	echo 'Database does not exist' ;
}
else
{
	echo '<p>Database selected.</p>' ;
}
$result = @mysql_query('SELECT * from bike') ;

if(!$result)
{
	echo '<p>Error</p>';
}
while($row = mysql_fetch_array($result))
{
	echo '<p>' . $row['No'] .'  ' .$row['Name'] . '</p>' ;
}
}
?>
