<!DOCTYPE html>
<head>
    <title>Authors Table</title>
    <style>
    body {
        font-family: arial, sans-serif;
    }

    h1 {
        text-align: center; 
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
       text-align: center;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
</head>

<body>
<?php
$username = "root";
$password = "iputra";
$database = "iputra_io";

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die ("Unable to select database");
$query = "SELECT * FROM author";
$result = mysql_query($query);
$num = mysql_numrows($result);
mysql_close();

echo "<h1>Authors Table</h1>\n";
echo "<center>\n";
echo "    <table>\n";
echo "      <tr>\n";
echo "        <th>ID Author</th>\n";
echo "        <th>First Name</th>\n";
echo "        <th>Last Name</th>\n";
echo "        <th>E-mail</th>\n";
echo "      </tr>\n";

$i = 0;
while($i < $num){
    $id_author = mysql_result($result,$i,"id_author");
    $firstname = mysql_result($result,$i,"firstname");
    $lastname = mysql_result($result,$i,"lastname");
    $email = mysql_result($result,$i,"email");
    
    echo "      <tr>\n";
    echo "        <td>$id_author</td>\n";
    echo "        <td>$firstname</td>\n";
    echo "        <td>$lastname</td>\n";
    echo "        <td>$email</td>\n";
    echo "      </tr>\n";
    $i++;
}
echo "    </table>\n";
echo "</center>\n";
?>
</body>
</html>
