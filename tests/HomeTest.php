<?php

class HomeTest extends PHPUnit_Framework_TestCase
{
   public function testAdd()
   {
   $contents = file_get_contents('/tmp/workspace/poll/website/content/home.php');
   $result = substr_count($contents, 'home');
   $this->assertEquals(2, $result);
   }
}
