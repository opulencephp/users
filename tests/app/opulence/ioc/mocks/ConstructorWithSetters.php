<?php
/**
 * Copyright (C) 2015 David Young
 *
 * Mocks a class with setters for use in IoC tests
 */
namespace Opulence\Tests\IoC\Mocks;

class ConstructorWithSetters
{
    /** @var string A primitive */
    private $primitive = "";
    /** @var IFoo An interface dependency */
    private $interface = null;
    /** @var Bar A concrete dependency */
    private $concrete = null;

    /**
     * @return Bar
     */
    public function getConcrete()
    {
        return $this->concrete;
    }

    /**
     * @return IFoo
     */
    public function getInterface()
    {
        return $this->interface;
    }

    /**
     * @return string
     */
    public function getPrimitive()
    {
        return $this->primitive;
    }

    /**
     * @param IFoo $interface The dependency to set
     * @param mixed $primitive The primitive to set
     */
    public function setBoth(IFoo $interface, $primitive)
    {
        $this->setInterface($interface);
        $this->setPrimitive($primitive);
    }

    /**
     * @param Bar $concrete
     */
    public function setConcrete($concrete)
    {
        $this->concrete = $concrete;
    }

    /**
     * @param IFoo $interface
     */
    public function setInterface(IFoo $interface)
    {
        $this->interface = $interface;
    }

    /**
     * @param string $foo
     */
    public function setPrimitive($foo)
    {
        $this->primitive = $foo;
    }
} 