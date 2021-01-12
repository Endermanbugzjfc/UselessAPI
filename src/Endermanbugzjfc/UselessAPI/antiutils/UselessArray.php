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

use Endermanbugzjfc\UselessAPI\stuff\{UselessInstanceGuarantee, UselessInstanceTrait};

final class UselessArray implements \ArrayAccess, UselessInstanceGuarantee {
	use UselessInstanceTrait;
	
	/**
	 * Do nothing
	 * @return mixed Return null
	 */
	public function offsetGet($key) {
		return null;
	}

	public function offsetSet($key, $value) : void {}

	/**
	 * Get a false value in boolean data type
	 * @return bool Return false
	 */
	public function offsetExists($key) : bool {
		return false;
	}

	public function offsetUnset($key) : void {}
	
}
