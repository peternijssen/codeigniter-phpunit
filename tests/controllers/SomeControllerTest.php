<?php

/**
 * @group Controller
 */
use Symfony\Component\DomCrawler\Crawler;

class SomeControllerTest extends CIUnit_TestCase
{
    public function setUp()
    {
        // Set the tested controller
        $this->CI = set_controller('welcome');
    }
    
    public function testWelcomeController()
    {

        $this->CI->index();
        
        $out = output();
        
        $crawler = New Crawler($out);

        // Check if the content is OK
        $this->assertSame(0, $crawler->filter('title:contains("Welcome to CodeIgniter")'));

        // Check if we got the expected view
        $this->assertCount(1, $crawler->filter('title:contains("Welcome to CodeIgniter")'));
    }
}