<?php

echo 'Nama : ';
echo 'Rizal Ahmad Doni'; // String with single quote
echo "\n";

echo "Nama : ";
echo "Rizal\t Ahmad\t Doni\n"; // String with double quote

echo <<<EOD
this is not a very long text
i am not gay
i like women only
and only women with "big heart"
i made this whole text using technique called heredoc
EOD;

echo <<<'EOD'
this is not a very long text
i am not gay
i like women only
and only women with "big heart"
i made this whole text using technique called nowdoc
EOD;