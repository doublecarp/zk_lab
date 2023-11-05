<?php
$a="The Quick Brown Fox";
$c=str_replace("quick brown","quick red",strtolower($a));
echo $a."<br/>";
echo $c."<br/>";
    function shiftEncrypt($c) {
        $shiftValue = 5; // 移位的值
        $encryptedString = '';
        for ($i = 0; $i < strlen($c); $i++) {
            $char = $c[$i];
            if (ctype_lower($char)) {
                // 判断是否是小写字母
                $encryptedChar = chr(((ord($char) - ord('a') + $shiftValue) % 26) + ord('a'));
                $encryptedString .= $encryptedChar;
            } else {
                $encryptedString .= $char;
            }
        }
        return $encryptedString;
    }

echo shiftEncrypt($c);