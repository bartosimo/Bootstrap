<?php
echo "<div align=center>";
echo ("<h1>BENVENUTO NEL REGISTRO -$_GET[username]-</h1>");
echo "<br>";
echo ("<h4>DATI PERSONALI: Username - $_GET[username] | Password - $_GET[password]</h4> ");
echo "<br>";
echo "</div>";
echo "<div align=center>";
echo "<style>
table  {
    border-collapse:collapse
}
td, th {
    border:1px solid #5b6fdd;
	padding:8px;
}
</style>";
echo("<table>");
echo ("<tr><td>Lista Username</td><td>Lista Password</td></tr>");
echo "<br>";
    echo("<tr><td>$_GET[username]</td><td>$_GET[password]</td></tr>");
    echo("</table>");
echo "<br>";
echo ("<a href=http://localhost:63342/Bootstrap/02esercizio.html?_ijt=sre2pe45aq611c56jprhf08uiv class=btn btn-primary> Ritorna alla Home </a>");
echo "</div>";
