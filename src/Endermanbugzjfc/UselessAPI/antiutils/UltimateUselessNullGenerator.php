<?php

/*

     					_________	  ______________		
     				   /        /_____|_           /
					  /————/   /        |  _______/_____    
						  /   /_     ___| |_____       /
						 /   /__|    ||    ____/______/
						/   /    \   ||   |   |   
					   /__________\  | \   \  |
					       /        /   \   \ |
						  /________/     \___\|______
						                   |         \ 
							  PRODUCTION   \__________\	

							   翡翠出品 。 正宗廢品  
 
*/

declare(strict_types=1);
namespace Endermanbugzjfc\UselessAPI\antiutils;

final class UltimateUselessNullGenerator {
	
	public static function getNull() {
		return self::getNullMixed();
	}

	public static function getNullMixed() {
		return null;
	}

	public static function getNullString() : ?string {
		return null;
	}

	public static function getNullInt() : ?int {
		return null;
	}

	public static function getNullFloat() : ?float {
		return null;
	}

	public static function getNullBool() : ?bool {
		return null;
	}

	public static function getNullCallable() : ?callable {
		return null;
	}

	public static function getNullObject() : ?object {
		return null;
	}
	
}
