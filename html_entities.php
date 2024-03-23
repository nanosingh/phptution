<?php

//html entities

$str = '<a href ="#"> Hello and .$copy .Welcome</a>';
echo $str;
echo "<br>";
echo htmlentities($str);
echo "<br>";


?>

// ampersand entity
<p> I will display ampersand = &#x26;</p>
<p> I will display ampersand = &#38;</p>
<p> I will display less than = &#60;</p>
<p> I will display less than = &lt;</p>
<p> I will display greater than = &#62;</p>
<p> I will display greater than = &gt;</p>
<p> I will display no-break space &nbsp= &#160;</p>
<p> I will display copyright sign = &#169;</p>
<p> I will display rigistered trade mark sign = &#174;</p>
