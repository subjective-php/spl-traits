<?php
namespace ChadicusTest\Spl\Traits;

/**
 * @coversDefaultClass Chadicus\Spl\Traits\SerializationDisabledTrait
 */
class SerializationDisabledTraitTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Verify basic behavior of __sleep().
     *
     * @test
     * @covers ::__sleep
     * @expectedException \BadMethodCallException
     *
     * @return void
     */
    public function magicClone()
    {
        $object = $this->getObjectForTrait('\\Chadicus\\Spl\\Traits\\SerializationDisabledTrait');
        serialize($object);
    }
}
