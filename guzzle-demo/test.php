<?php

require('vendor/autoload.php');

class BooksTest extends PHPUnit_Framework_TestCase
{
    protected $client;

    protected function setUp()
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://localhost/'
        ]);
    }

    public function testGet_ValidInput_TB1()
    {
        $response = $this->client->get('/index.html', [
            'query' => [
                'bookId' => 'hitchhikers-guide-to-the-galaxy'
            ]
        ]);

        $this->assertEquals(200, $response->getStatusCode());

	$body = $response->getBody();
	// Implicitly cast the body to a string and echo it
	//echo $body;

	$this->assertRegexp('/tom/i', "$body");
	$this->assertContains('Tom', "$body");
	$this->assertContains('tom', "$body", '', true); // with ignore case

    }

    public function testGet_ValidInput_TB2()
    {
        $response = $this->client->get('/index.html', [
            'query' => [
                'bookId' => 'hitchhikers-guide-to-the-galaxy'
            ]
        ]);

        $this->assertEquals(200, $response->getStatusCode());

	$body = $response->getBody();
	$this->assertRegexp('/error/i', "$body");



    }
}
