<?php
$vettoreusername = array();
if (!T_ISSET($vettoreusername))$i = 0;
$vettoreusername[$i] = $_GET[username];
$vettorepassword = array();
if (!T_ISSET($vettorepassword))$j = 0;
$vettorepassword[$j] = $_GET[password];
$i = $i+1;
$j = $j+1;
echo "<div align=center>";
echo ("<h1>Benvenuto nel registro $_GET[username]</h1>");
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
    border:1px solid #ddd;
	padding:8px;
}
</style>";
echo("<table>");
echo ("<tr><td>Lista Username</td><td>Lista Password</td></tr>");
echo "<br>";
    echo("<tr><td>$vettoreusername[$i]</td><td>$vettorepassword[$j]</td></tr>");
    echo("</table>");
echo "<br>";
echo ("<a href=http://localhost:63342/Bootstrap/02esercizio.html?_ijt=sre2pe45aq611c56jprhf08uiv class=btn btn-primary> Ritorna alla Home </a>");
echo "</div>";
