$array = ("title 1", "title 2", "title 3", "title 4", "title 5");
echo "<title>Fixed part of your title - " . $array[rand(0, count($array) - 1)] . "</title>";
