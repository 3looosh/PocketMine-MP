<?php

/*

           -
         /   \
      /         \
   /   PocketMine  \
/          MP         \
|\     @shoghicp     /|
|.   \           /   .|
| ..     \   /     .. |
|    ..    |    ..    |
|       .. | ..       |
\          |          /
   \       |       /
      \    |    /
         \ | /

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Lesser General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.


*/

class WoodBlock extends SolidBlock{
	const OAK = 0;
	const SPRUCE = 1;
	const BIRCH = 2;
	public function __construct($type = 0){
		parent::__construct(WOOD, $type, "Wood");
		$names = array(
			0 => "Oak Wood",
			1 => "Spruce Wood",
			2 => "Birch Wood",
		);
		$this->name = $names[$this->type & 0x03];
	}
	
}