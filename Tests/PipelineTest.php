<?php

namespace Pipeline\Tests;

use Pipeline\Pipeline;

/**
 * Class PipelineTest
 *
 * @package Pipeline\Tests
 * @author  Christian Jost <christian.jost@mapudo.com>
 */
class PipelineTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests whether default title is like expected
     */
    public function testDefaultTitle()
    {
        $pipeline = new Pipeline();
        $this->assertEquals('default-title', $pipeline->getTitle());
    }

    /**
     * Tests whether change of title works like expected
     */
    public function testChangeTitle()
    {
        $pipeline = new Pipeline();
        $this->assertEquals('default-title', $pipeline->getTitle());
        $pipeline->setTitle('mein-title');
        $this->assertEquals('mein-title', $pipeline->getTitle());
    }
}
