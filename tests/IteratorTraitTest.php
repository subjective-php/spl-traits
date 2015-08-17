<?php
namespace ChadicusTest\Spl\Traits;

/**
 * @coversDefaultClass Chadicus\Spl\Traits\IteratorTrait
 */
class IteratorTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Verify basic behavior of valid().
     *
     * @test
     * @covers ::valid
     *
     * @return void
     */
    public function valid()
    {
        $object = new SimpleObject();
        $this->assertFalse($object->valid());
    }

    /**
     * Verify basic behavior of current().
     *
     * @test
     * @covers ::current
     *
     * @return void
     */
    public function current()
    {
        $object = new SimpleObject(['foo' => 'bar']);
        $this->assertSame('bar', $object->current());
    }

    /**
     * Verify basic behavior of key().
     *
     * @test
     * @covers ::key
     *
     * @return void
     */
    public function key()
    {
        $object = new SimpleObject(['foo' => 'bar']);
        $this->assertSame('foo', $object->key());
    }

    /**
     * Verify basic use of iterator
     *
     * @test
     * @covers ::rewind
     * @covers ::next
     *
     * @return void
     */
    public function iterate()
    {
        $object = new SimpleObject(
            [
                'key0' => 'value0',
                'key1' => 'value1',
                'key2' => 'value2',
            ]
        );

        $count = 0;
        foreach ($object as $key => $value) {
            $this->assertSame("key{$count}", $key);
            $this->assertSame("value{$count}", $value);
            $count++;
        }

        $this->assertSame(3, $count);
    }
}
