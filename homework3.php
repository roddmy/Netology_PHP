<?php
	$fauna = [
		"Asia" => ["Camelus bactrianus", "Ailuropoda melanoleuca", "Anthropoidea"],
		"Africa" => ["Loxodonta africana", "Syncerus caffer", "Hippopotamus amphibius"],
		"Australia" => ["Ornithorhynchus anatinus", "Macropus", "Dromaius novaehollandiae"],
		"Europe" => ["Lepus", "Sciurus", "Ursidae", "Martes Pinel"],
		"North America" => ["Nasua narica", "Antilocapra americana", "Bison americanus"],
		"South America" => ["Vicugna pacos", "Bradypodidae", "Hydrochoerus hydrochaeris"],
	];

	echo "<pre>";
	print_r($fauna);

foreach ($fauna as $key => $value) {

  	$continent = $key;
		foreach ($value as $animal) {

  				if ((strpos($animal, " ")) and substr_count($animal, " ")==1) {
  					
  					$new_array[] = substr($animal, 0);
  				}

	}
}
echo "<pre>";
print_r($new_array);

foreach ($new_array as $value1) {
  	$split[] = explode (' ', $value1);
  	}


echo "<pre>";
print_r($split);

  ?>