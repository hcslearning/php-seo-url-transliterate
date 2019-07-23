<?php
$v = "Alguien anda en camello o ñandú en Chile";
$v2 = str_replace(' ', '-', $v);
echo $v2;
echo "\n";
echo transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_\-] remove; Lower()', $v2);
echo "\n";


