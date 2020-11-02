<?php 
function transliterateen($input){
    $gost = array(
    "a"=>"а","b"=>"б","v"=>"в","g"=>"г","d"=>"д","e"=>"е","yo"=>"ё",
    "j"=>"ж","z"=>"з","i"=>"и","i"=>"й","k"=>"к",
    "l"=>"л","m"=>"м","n"=>"н","o"=>"о","p"=>"п","r"=>"р","s"=>"с","t"=>"т",
    "y"=>"у","f"=>"ф","h"=>"х","c"=>"ц","' '"=>"_",
    "ch"=>"ч","sh"=>"ш","sh"=>"щ","i"=>"ы","e"=>"е","u"=>"у","ya"=>"я","A"=>"А","B"=>"Б",
    "V"=>"В","G"=>"Г","D"=>"Д", "E"=>"Е","Yo"=>"Ё","J"=>"Ж","Z"=>"З","I"=>"И","I"=>"Й","K"=>"К","L"=>"Л","M"=>"М",
    "N"=>"Н","O"=>"О","P"=>"П",
    "R"=>"Р","S"=>"С","T"=>"Т","Y"=>"Ю","F"=>"Ф","H"=>"Х","C"=>"Ц","Ch"=>"Ч","Sh"=>"Ш",
    "Sh"=>"Щ","I"=>"Ы","E"=>"Е", "U"=>"У","Ya"=>"Я","'"=>"ь","'"=>"Ь","''"=>"ъ","''"=>"Ъ","j"=>"ї","i"=>"и","g"=>"ґ",
    "ye"=>"є","J"=>"Ї","I"=>"І",
    "G"=>"Ґ","YE"=>"Є"
    );
    return strtr($input, $gost);
}
/*
*$lat='Мама мыла раму';
*$cyr=transliterateen($lat);
*echo $cyr;
*/