<?php
echo "Handling Dates Tutorial";
echo "<br>";
echo date(DATE_RFC2822);
echo "<br>";
echo date("l");
echo "<br>";

echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
echo "<br>";
echo "<br>";
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
echo "<br>";


?>