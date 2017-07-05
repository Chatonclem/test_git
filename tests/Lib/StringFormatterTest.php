<?php

use Lib\StringFormatter;
use PHPUnit\Framework\TestCase;

class StringFormatterTest extends TestCase {

	private $str1;
	private $str2;

	public function setUp() {
		$this->str1 = "hello";
		$this->str2 = "world";
	}

	public function testConcat() {
		$actual = StringFormatter::concat($this->str1, $this->str2);
		$this->assertSame('helloworld', $actual);
	}

	public function testToCamelCase() {
		$actual = StringFormatter::toCamelCase($this->str1, $this->str2);
		$this->assertSame('HelloWorld', $actual);
	}

	public function testPrefix() {
		$actual = StringFormatter::prefix($this->str1, $this->str2);
		$this->assertSame('helloworld', $actual);
	}

	public function testPrefixWithCamelCase() {
		$actual = StringFormatter::prefix($this->str1, $this->str2, true);
		$this->assertSame('HelloWorld', $actual);
	}

	public function testSuffix() {
		$actual = StringFormatter::suffix($this->str1, $this->str2);
		$this->assertSame('worldhello', $actual);
	}

	public function testSuffixWithCamelCase() {
		$actual = StringFormatter::suffix($this->str1, $this->str2, true);
		$this->assertSame('WorldHello', $actual);
	}
}

?>