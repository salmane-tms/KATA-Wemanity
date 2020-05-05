<?php

namespace App;

final class GildedRose {

    private $items = [];

    public function __construct($items) {
        $this->items = $items;
    }
	private function checkName($name,$value){
		$nameSplited = explode(" ",$name);
		$finalName = $nameSplited[0];
		return $finalName == $value;
	}
	
    public function updateQuality() {
        foreach ($this->items as $item) {
			if ($item->quality ==50 && ($item->name == "Aged Brie" || $items->name== "Backstage passes") ) {
				//print(" \n Item cannot have quality value more than 50 ! \n");
			}elseif ($item->quality==0 && ($item->name != "Aged Brie" && $item->name!= "Backstage passes") ){
				//print(" \n Item cannot have quality value less than 0 ! \n");
			}elseif($this->checkName($item->name,"Sulfuras")){
				//print(" \n Impossible to alter Sulfuras item  \n");
			}elseif($item->quality==0 || $item->sell_in==0){
				//print(" \n Impossible to alter this item \n");
			}else{
				switch($item->name){
					case $this->checkName($item->name,"Conjured"):
							$item->quality= $item->quality-2;
							$item->sell_in= $item->sell_in-1;
							break;
					case $this->checkName($item->name,"Aged"):
							$item->quality= $item->quality+1;
							$item->sell_in= $item->sell_in-1;
							break;
					case $this->checkName($item->name,"Backstage"):
						if ($item->sell_in <=10 && $item->sell_in> 5 ) {
							$item->sell_in= $item->sell_in-1;
							$item->quality=$item->quality+2;
						}elseif ($item->sell_in <=5 && $item->sell_in> 1){
							$item->sell_in= $item->sell_in-1;
							$item->quality=$item->quality+3;
						}elseif($item->sell_in ==1){
							$item->quality=0;
							$item->sell_in=0;
						}else {
							$item->quality= $item->quality+1;
							$item->sell_in= $item->sell_in-1;
						}
						break;
					default:
						$item->quality=$item->quality-1;
						$item->sell_in=$item->sell_in-1;
						break;
				}
			}
        }
    }
}

