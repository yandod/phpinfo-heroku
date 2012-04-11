<?php
phpinfo();


$euc = mb_convert_encoding("俳句","EUC-JP","UTF-8");
echo mb_convert_encoding($euc,"UTF-8","EUC-JP");
