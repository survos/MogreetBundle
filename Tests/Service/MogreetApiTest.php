<?php
namespace Survos\MogreetBundle\Tests\Service;

use Survos\MogreetBundle\Service\MogreetApi;

/**
 * Test the MogreetApi
 *
 * @author Peter Grochowski <piogrek@gmail.com>
 *
 */
class MogreetApiTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Survos\MogreetBundle\Service\MogreetApi()
     */
    public function testMogreetApi()
    {
        $mogreet = new MogreetApi('1', '2');
        //check if instance
        $this->assertInstanceOf('Survos\MogreetBundle\Service\MogreetApi', $mogreet);
    }

}