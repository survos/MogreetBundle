<?php
namespace Survos\MogreetBundle\Tests\DependencyInjection;

use Survos\MogreetBundle\DependencyInjection\Configuration;

/**
 * Test the configuration tree
 *
 * @author Peter Grochowski <piogrek@gmail.com>
 *
 */
class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Survos\MogreetBundle\Tests\DependencyInjection::getConfigTreeBuilder()
     */
    public function testGetConfigTreeBuilder()
    {
        $config = new Configuration();
        /** @var \Symfony\Component\Config\Definition\ArrayNode $node  */
        $node = $config->getConfigTreeBuilder()->buildTree();
        //check root path
        $this->assertEquals('mogreet', $node->getPath());
        //get child nodes and check them
        /** @var \Symfony\Component\Config\Definition\ScalarNode[] $children  */
        $children = $node->getChildren();
        //check length
        $this->assertEquals(2, count($children));
        //check if all config values are available
        $this->assertArrayHasKey('client_id', $children);
        $this->assertArrayHasKey('token', $children);
    }
}