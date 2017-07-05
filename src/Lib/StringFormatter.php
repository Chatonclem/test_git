<?php

namespace Lib;

class StringFormatter {


	public static function concat($str1, $str2) {
		if (!is_string($str1) || !is_string($str2)) {
			return false;
		}
		return $str1 . $str2;
	}

	public static function toCamelCase($str1, $str2) {
		if (!is_string($str1) || !is_string($str2)) {
			return false;
		} 
		return ucfirst(strtolower($str1)).ucfirst(strtolower($str2));
	}

	
	public static function prefix($str1, $str2, $toCamelCase = false) {
		if (!is_string($str1) || !is_string($str2)) {
			return false;
		} 
		if ($toCamelCase) {
			return self::toCamelCase($str1, $str2);
		}
		return self::concat($str1, $str2);
	}

	public static function suffix($str1, $str2, $toCamelCase = false) {
		if (!is_string($str1) || !is_string($str2)) {
					return false;
		} 
		if ($toCamelCase) {
			return self::toCamelCase($str2, $str1);
		}
		return self::concat($str2, $str1);
	}

} 

?>