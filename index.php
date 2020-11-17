<?php
echo "<table border='2'> ";
echo "<tr>";

/////////////////Question1///////////////
echo"<th>Question1</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo"<td>To Uppercase letters</td>";
$str = "coding acadmy by orange";
echo"<td>".strtoupper($str)."</td>";
echo "</tr>";
echo "<tr>";
echo"<td>To lowercase letters</td>";
echo"<td>".strtolower($str)."</td>";
echo "</tr>";
echo "<tr>";
echo"<td>String's first character uppercase</td>";
echo"<td>".ucfirst($str)."</td>";
echo "</tr>";
echo "<tr>";
echo"<td>String's first character of all words uppercase</td>";
echo"<td>".ucwords ($str)."</td>";
echo "</tr>";

/////////////////Question2///////////////
echo "<tr>";
echo"<th>Question2</th>";
echo"<th>Answer</th>";
echo "</tr>";
$str1='082307';
$array=str_split($str1,2);

echo "<tr>";
echo"<td>split string</td>" ; 
echo"<td>".implode(":", $array)."</td>" ;
echo "</tr>";

/////////////////Question3///////////////
echo "<tr>";
echo"<th>Question3</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
$str2="The quick brown fox jumps over the lazy dog ";
$findme="jumps";
echo "<td> Check said '$findme'</td>";
$pos = strpos($str2, $findme);
if ($pos !== false){
    echo"<td> The string '$findme' was found </td>" ;
}
else {
    echo"<td> The string '$findme' was not found </td>" ; 
}
echo"</tr>";

/////////////////Question4///////////////
echo "<tr>";
echo"<th>Question4</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td>convert to string </td>";
$num= 5.30;

echo "<td>".strval( $num ).":".gettype(strval( $num ))." </td>";
echo "</tr>";
echo "<tr>";

/////////////////Question5///////////////
echo"<th>Question5</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td> extract the file name</td>";
$str3="www.example.com/public_value/index.php";
echo "<td>".substr("$str3", -9)." </td>";
echo "</tr>";

/////////////////Question6///////////////
echo "<tr>";
echo"<th>Question6</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td> extract the user name</td>";
$str4="Lana@example.com";

/* echo "<td>".substr("$str4",0,-11 )." </td>"; */
echo "<td>".strstr($str4, '@', true)." </td>";

echo "</tr>";

/////////////////Question7///////////////
echo "<tr>";
echo"<th>Question7</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td> get the last three charecter</td>";
echo "<td>".substr("$str4",-3)." </td>"; 
 echo "</tr>";

/////////////////Question8///////////////
echo "<tr>";
echo"<th>Question8</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td> currencey style</td>";
$value1=65.45;
$value2=104.35;
$value3=$value1 + $value2 ;
$english_format_number = number_format($value3, 2, '.', '');
echo "<td> $english_format_number </td>"; 
echo "</tr>";

/////////////////Question9///////////////
echo "<tr>";
echo"<th>Question9</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td> generate simple random passwords </td>";


function password_generator ($length){
    $str5="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
    return substr( str_shuffle( $str5 ), 0, $length );
}
$password=password_generator (8);

echo "<td> $password </td>"; 

echo "</tr>";

/////////////////Question10///////////////
echo "<tr>";
echo"<th>Question10</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td> replace the with that </td>";
$str6='the quick brown fox jumps over the lazy dog.' ;
$word='the';
$newWord='that';

echo "<td> ".str_replace($word, $newWord, $str6)." </td>"; 

echo "</tr>";

/////////////////Question11///////////////
echo "<tr>";
echo"<th>Question11</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td> find the first different character  </td>";
$str7='football' ;
$str8='footboll' ;
$str_pos = strspn($str7 ^ $str8 ,"\0");
/* printf("<td>".'First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str7[$str_pos], $str8[$str_pos]."</"); */
echo "<td> First difference between two strings at position $str_pos: \"$str7[$str_pos]\" vs \"$str8[$str_pos]\"  </td>";
echo "</tr>";

/////////////////Question12///////////////
echo" Question 12 :";
echo " put a string in an array ";
echo "<hr>";
echo "Answer :: ";

echo "<tr>";

$str9="Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky."; 

echo "<td>".var_dump( explode( "\n", $str9 ) )."</td>";
echo "</tr>";

/////////////////Question13///////////////
echo "<tr>";
echo"<th>Question13</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td> get the filename component  </td>";
$path="https://www.orange.com/index.php";
$file = basename($path, ".php");
echo "<td> $file </td>";
echo "<td>".var_dump( explode( "\n", $str9 ) )."</td>";
echo "</tr>";

/////////////////Question14///////////////
echo "<tr>";
echo"<th>Question14</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td> print the next character  </td>";
$cha = 'z';

$next_cha = ++$cha;

if (strlen($next_cha) > 1 ) 
{
 $next_cha = $next_cha[0];
 }
 
echo "<td> $next_cha </td>";

echo "</tr>";

/////////////////Question15///////////////
echo "<tr>";
echo"<th>Question15</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td> remove part from the beginning  </td>";

$sub_string = 'rayy@';
$str10 = 'rayy@example.com';
$newStr10 = substr($str10, strlen($sub_string));

echo "<td> $newStr10 </td>";


echo "</tr>";

/////////////////Question16///////////////
echo "<tr>";
echo"<th>Question16</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td> hex dump of a string</td>";
echo "<td>".bin2hex($str10)."</td>";
echo "</tr>";


/////////////////Question17///////////////
echo "<tr>";
echo"<th>Question17</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td>  insert a string at the specified position </td>";
$original_string = 'The brown fox';
$insert_string ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $insert_string.' ', $insert_pos, 0);
echo "<td> $new_string </td>";
echo "</tr>";

/////////////////Question18///////////////
echo "<tr>";
echo"<th>Question18</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td>  get the first word </td>";
$arr1 = explode(' ',trim($original_string));

echo "<td> $arr1[0] </td>";
echo "</tr>";

/////////////////Question19///////////////
echo "<tr>";
echo"<th>Question19</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td>  remove all leading zeroes </td>";
$str11="000547023.24";
$new_str11 = ltrim($str11, '0');
echo "<td> $new_str11 </td>";
echo "</tr>";

/////////////////Question20///////////////
echo "<tr>";
echo"<th>Question20</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td>  remove part of a string </td>";
$str12="The quick brown fox jumps over the lazy dog";
$new_str12 = str_replace("fox", " ", $str12);
echo "<td> $new_str12 </td>";
echo "</tr>";

/////////////////Question21///////////////
echo "<tr>";
echo"<th>Question21</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td>  remove trailing slash from a string. </td>";
$str13="The quick brown fox jumps over the lazy dog///";
$new_str13 = rtrim($str13,'/');
echo "<td> $new_str13 </td>";
echo "</tr>";

/////////////////Question22///////////////
echo "<tr>";
echo"<th>Question22</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td>  remove trailing slash from a string. </td>";
$str14=" http://www.example.com/5478631 ";
$new_str14 = basename($str14);
echo "<td> $new_str14 </td>";
echo "</tr>";

/////////////////Question23///////////////
echo "<tr>";
echo"<th>Question23</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td>  replace multiple characters  </td>";
$str15= '\"\1+2/3*2:2-3/4*3';
echo "<td>".str_replace(str_split('\\/:*?"<>|+-'), ' ', $str15)."</td>";
echo "</tr>";

/////////////////Question24///////////////
echo "<tr>";
echo"<th>Question24</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td>  select first 5 words  </td>";
$str16=  'The quick brown fox jumps over the lazy dog';
echo "<td>".implode(' ', array_slice(explode(' ', $str16), 0, 5))."</td>";
echo "</tr>";

/////////////////Question25///////////////
echo "<tr>";
echo"<th>Question25</th>";
echo"<th>Answer</th>";
echo "</tr>";
echo "<tr>";
echo "<td>  remove comma(s)  </td>";
$str16=  '2,543.12';
$new_str16 = str_replace( ',', '', $str16);
echo "<td>$new_str16 </td>";
echo "</tr>";

/////////////////Question26///////////////
echo "<hr>";
echo"Question26 : ";

echo " print letters from 'a' to 'z' ::";
echo "<hr>";
echo "answer :: ";

for ($x = ord('a'); $x <= ord('z'); $x++){

echo chr($x);
echo "\t";
}
echo "<hr>";























?>
