<?php
namespace SubjectivePHPTest\Spl\Traits;

/**
 * @coversDefaultClass SubjectivePHP\Spl\Traits\ArrayAccessTrait
 */
class ArrayAccessTraitTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Verify basic behavior of offsetSet().
     *
     * @test
     * @covers ::offsetSet
     *
     * @return void
     */
    public function offsetSet()
    {
        $object = new SimpleObject();
        $object['foo'] = 'bar';
        $object[] = 123;

        $this->assertSame(
            [
                'foo' => 'bar',
                0 => 123,
            ],
            $object->getContainer()
        );
    }

    /**
     * Verify behavior of offsetSet() with key which is not a string or an integer.
     *
     * @test
     * @covers ::offsetSet
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage $offset must be an integer or string
     *
     * @return void
     */
    public function offsetSetInvalidKey()
    {
        $object = new SimpleObject();
        /** @scrutinizer ignore-call */ $object->offsetSet(new \StdClass(), 'weeee!');
    }

    /**
     * Verify basic behavior of offsetExists().
     *
     * @test
     * @covers ::offsetExists
     *
     * @return void
     */
    public function offsetExists()
    {
        $object = new SimpleObject(['foo' => 'bar']);
        $this->assertTrue($object->offsetExists('foo'));
    }

    /**
     * Verify behavior of offsetExists() with key that is not an integer or string.
     *
     * @test
     * @covers ::offsetExists
     *
     * @return void
     */
    public function offsetExistsInvalidKey()
    {
        $object = new SimpleObject(['foo' => 'bar']);
        $this->assertFalse($object->offsetExists(true));
    }

    /**
     * Verify basic behavior of offsetUnset().
     *
     * @test
     * @covers ::offsetUnset
     *
     * @return void
     */
    public function offsetUnset()
    {
        $object = new SimpleObject(['foo' => 'bar']);
        $this->assertSame(['foo' => 'bar'], $object->getContainer());
        unset($object['foo']);
        $this->assertSame([], $object->getContainer());
    }

    /**
     * Verify behavior of offsetGet() with key that is not an integer or string.
     *
     * @test
     * @covers ::offsetGet
     *
     * @return void
     */
    public function offsetGet()
    {
        $object = new SimpleObject(['foo' => 'bar']);
        $this->assertSame('bar', $object['foo']);
    }

    /**
     * Verify behavior of offsetGet() with key which is not a string or an integer.
     *
     * @test
     * @covers ::offsetGet
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage $offset must be an integer or string
     *
     * @return void
     */
    public function offsetGetInvalidKey()
    {
        $object = new SimpleObject();
        /** @scrutinizer ignore-call */ $object->offsetGet(new \StdClass());
    }
}
