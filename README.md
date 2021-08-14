# php file to demonstrate the json encode / decode
+                   | Encode to JSON        | Decode from JSON
+     JavaScript    | JSON.stringify(data)  | JSON.parse(s)
+     PHP           | json_encode($data)    | json_decode($s)
 
> # json_encode

>> (PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL json >= 1.2.0)

>> json_encode — Returns the JSON representation of a value
> ## Description 
>> json_encode(mixed $value, int $flags = 0, int $depth = 512): string|false

>> Returns a string containing the JSON representation of the supplied value. 
