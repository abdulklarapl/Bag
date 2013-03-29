<?php

namespace Abdulklarapl\Components\Bag;

/**
 * Class Bag
 *
 * @package Abdulklarapl\Components\Bag
 * @author Patryk (Abdulklarapl) Szlagowski <szlagowskipatryk@gmail.com>
 */
class Bag
{

    /**
     * @var array
     */
    private $bag;

    /**
     * @param array $bag
     */
    public function __construct(array $bag = array())
    {
        $this->bag = $bag;
    }

    /**
     * get item from bag by key
     *
     * @param string $key
     * @param null $default
     *
     * @return mixed
     */
    public function get($key, $default = null)
    {
        if (isset($this->bag[$key])) {
            return $this->bag[$key];
        }

        return $default;
    }

    /**
     * setter
     *
     * @param string $key
     * @param mixed $value
     *
     * @return $this
     */
    public function set($key, $value)
    {
        $this->bag[$key] = $value;

        return $this;
    }

    /**
     * get all items
     *
     * @return array
     */
    public function all()
    {
        return $this->bag;
    }

    /**
     * get number of all items
     *
     * @return int
     */
    public function count()
    {
        return count($this->bag);
    }
}