function ranlet($par,$a)
{
	if($par == "LOW")
	{
		$lower = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');


	  $lt = [];
	  for($i = 0; $i < $a; $i++)
	 {
	   $r = rand(0,25);
	  $lt[$i] = $lower[$r];
	 }
	 return implode("",$lt);
	}
	else if($par == "UP")
	{
		$upper = array('A', 'B', 'C', 'D', 'E', 'F', 'G','H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

		  $lt = [];
			  for($i = 0; $i < $a; $i++)
			 {
			   $r = rand(0,25);
				$lt[$i] = $upper[$r];
			 }
		   return implode("",$lt);
	}
	else if($par == "MIX")
	{
		$mix = array('A', 'a','B', 'b','C','c', 'D','d', 'E', 'e', 'F', 'f', 'G','g','H','h', 'I','i', 'J', 'j','K','k', 'L','l','M', 'n', 'N','n', 'O','o', 'P', 'p','Q','q', 'R','r', 'S','s', 'T','t', 'U','u', 'V','v', 'W','w', 'X','x', 'Y','y', 'Z','z','1','2','3','4','5','6','7','8','9','0');

		  $lt = [];
			  for($i = 0; $i < $a; $i++)
			 {
			   $r = rand(0,60);
				$lt[$i] = $mix[$r];
			 }
		   return implode("",$lt);
	}

}