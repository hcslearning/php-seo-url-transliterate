<?php
$v = "Alguien anda en camello o ñandú en Chile";
echo $v;
echo "\n";
echo transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $v);
echo "\n";


