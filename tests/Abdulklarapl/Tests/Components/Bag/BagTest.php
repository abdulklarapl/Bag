<?php

namespace Abdulklarapl\Tests\Components\Bag;

use Abdulklarapl\Components\Bag\Bag;

/**
 * Class BagTest
 *
 * @package Abdulklarapl\Tests\Components\BagTest
 * @author Patryk (Abdulklarapl) Szlagowski <szlagowskipatryk@gmail.com>
 */
class BagTest extends \PHPUnit_Framework_TestCase
{

    public function testSetGetExistingItem()
    {
        $item = array(
           "foo" => "bar"
        );

        $bag = new Bag();
        $bag->set('foobar', $item);
        $this->assertNotEmpty($bag->get('foobar'));
    }

    public function testSetGetNonExistingItem()
    {
        $bag = new Bag();
        $this->assertEquals("test", $bag->get("foobar", "test"));
    }

    public function testCountItems()
    {
        $bag = new Bag();
        $bag->set("foo", "foo");
        $bag->set("bar", "bar");

        $this->assertEquals(2, $bag->count());
    }
}