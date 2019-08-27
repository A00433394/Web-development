<html>
    <head>
        <title>
       Printing the table
        </title>
    </head>
<body>

<?php

function print_table($user) {
	print "<table border=1>\n";
	while ($a_row = mysqli_fetch_row($user)) {
		print "<tr>";
		foreach ($a_row as $field) print "<td>$field</td>";
		print "</tr>";
	}
	print "</table>";
}

$conn = mysqli_connect('localhost','h_joshi','A00433394');

mysqli_select_db($conn, 'h_joshi');

$user = "User";
$result = mysqli_query($conn, "select * from $user");
    $num_rows = mysqli_num_rows($result);
    print "There are $num_rows rows in the table<p>";
    print_table($result);
?>

<p>
Already have an account? <a href="login.php"> Log in here </a> <br>
Don't have an account? <a href="signup.php"> Sign Up here </a>
</p>

</body>

</html>