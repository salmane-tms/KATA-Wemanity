<?php
use PHPUnit\Framework\TestCase;
namespace App;
    new Item('+5 Dexterity Vest', 10, 20),
    new Item('Aged Brie', 15, 12),
    new Item('Elixir of the Mongoose', 5, 7),
    new Item('Sulfuras Hand of Ragnaros', 0, 80),
    new Item('Sulfuras Hand of Ragnaros', -1, 80),
    new Item('Backstage passes to a TAFKAL80ETC concert', 15, 20),
    new Item('Backstage passes to a TAFKAL80ETC concert', 10, 49),
    new Item('Backstage passes to a TAFKAL80ETC concert', 5, 49),

class GildedRoseTest extends TestCase {
    
	public function testBackstage1() {
        $items      = [new Item("Backstage passes to a TAFKAL80ETC conce", 0, 0)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals(0, $items[0]->sell_in);
		this->assertEquals(0, $items[0]->quality);
    }
	
	public function testBackstage2() {
        $items      = [new Item("Backstage passes to a TAFKAL80ETC conce", 10, 10)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals(9, $items[0]->sell_in);
		this->assertEquals(12, $items[0]->quality);
    }
	public function testBackstage3() {
        $items      = [new Item("Backstage passes to a TAFKAL80ETC conce", 5, 20)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals(4, $items[0]->sell_in);
		this->assertEquals(23, $items[0]->quality);
    }
	
	public function testAgedBrie() {
        $items      = [new Item("Aged Brie", 10, 10)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals(9, $items[0]->sell_in);
		this->assertEquals(11, $items[0]->quality);
    }
	
	public function testAgedBrie2() {
        $items      = [new Item("Aged Brie", 0, 0)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals(0, $items[0]->sell_in);
		this->assertEquals(0, $items[0]->quality);
    }
	
	public function testSulfuras() {
        $items      = [new Item("Sulfuras Hand of Ragnaros", 10, 10)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals(10, $items[0]->sell_in);
		this->assertEquals(10, $items[0]->quality);
    }
	
	public function testSulfuras2() {
        $items      = [new Item("Sulfuras Hand of Ragnaros", 5, 80)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals(5, $items[0]->sell_in);
		this->assertEquals(80, $items[0]->quality);
    }
	
	public function testSulfuras() {
        $items      = [new Item("Sulfuras Hand of Ragnaros", 0, 73)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals(0, $items[0]->sell_in);
		this->assertEquals(73, $items[0]->quality);
    }
	
	public function testNormalElement() {
        $items      = [new Item("Normal Element", 10, 10)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals(9, $items[0]->sell_in);
		this->assertEquals(9, $items[0]->quality);
    }
	public function testNormalElement2() {
        $items      = [new Item("Normal Element", 1,1 )];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals(0, $items[0]->sell_in);
		this->assertEquals(0, $items[0]->quality);
    }
	public function testNormalElement3() {
        $items      = [new Item("Normal Element", 0, 0)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        $this->assertEquals(0, $items[0]->sell_in);
		this->assertEquals(0, $items[0]->quality);
    }
}
