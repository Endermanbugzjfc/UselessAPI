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
namespace Endermanbugzjfc\UselessAPI\things;

final class UsefulTerminator {
	
	/**
	 * Do nothing
	 * @param mixed $useful_thing Useful things that you want to terminate
	 * @return bool This will always return true no matter the input is useful or not
	 * 
	 * @todo I will try to make it so it return true only when the input is a useful thing
	 */
	public static function terminateUsefulThing($useful_thing) : bool {
		unset($useful_thing);
		return true;
	}
	
}
