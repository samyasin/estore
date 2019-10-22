<?php

$x = "10";

echo gettype($x);
settype($x, "integer");
echo "<hr>";
echo gettype($x);