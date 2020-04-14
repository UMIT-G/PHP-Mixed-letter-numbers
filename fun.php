<?php
 function post($par)
 {
	 if($par)
	 {
		 return @strip_tags(htmlspecialchars(trim($_POST[$par])));
	 }
	 else
	 {
		 return false;
	 }
 }
 function get($par)
 {
	 if($par)
	 {
		 return @strip_tags(htmlspecialchars(trim(@$_GET[$par])));
	 }
	 else
	 {
		 return false;
	 }
 }




 function islem($par,$a,$b)
 {
	 if($par == "TOPLA")
	 {
		  if($a && $b)
		 {
			 return ($a + $b);
		 }
		 else
		 {
			 echo "HATA: Bir parametre eksik";
		 }
	 }
	 else if($par == "ÇIKAR")
	 {
		  if($a && $b)
		 {
			 return ($a - $b);
		 }
		 else
		 {
			 echo "HATA: Bir parametre eksik";
		 }
	 }
	 else if($par == "ÇARP")
	 {
		 if($a && $b)
		 {
			 return ($a * $b);
		 }
		 else
		 {
			 echo "HATA: Bir parametre eksik";
		 }
	 }
	 else if($par == "BÖL")
	 {
		  if($a && $b)
		 {
			 return ($a / $b);
		 }
		 else
		 {
			 echo "HATA: Bir parametre eksik";
		 }
	 }
	 else if($par == "YUZDE")
	 {
		  if($a && $b)
		 {
			 return ($a * $b) / 100;
		 }
		 else
		 {
			 echo "HATA: Bir parametre eksik";
		 }
	 }
 }



 function arith($arr)
 {
	 if(gettype($arr) == "array")
	 {
		  $top = 0;
		 foreach($arr as $d)
		 {
			$top = $top + $d;
		 }
		 return ($top / count($arr));
	 }
	 else

	 {
	    echo "HATA:Parametreyi dizi olarak girin";
	 }
 }





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




 function forArr($diziler)
	 {

		$len = count($diziler);

		for($i = 0; $i < $len; $i++)
		{
			echo $diziler[$i];
		}
   }





 class Fileupload
 {
	 private $img;
	 public $dir;
     public $par;
     public $sizeMb;
     public $type;

	 public function getImg($get,$dir,$sizeMb = 2,$type = array("image/jpeg","image/png","image/gif","image/jpg"))
	 {

			 $this->img = $get;
			 $this->dir = $dir;
			 $this->type = $type;
			 $this->sizeMb = $sizeMb;
	 }
	 public function type()
     {
         return $this->img["type"];
     }
     public function size()
     {
         return substr(($this->img["size"] / 1048576),0,5)." MB";
     }
	 public function setImg()
	 {

		 if($this->img)
		  {

              if($this->size() <= $this->sizeMb)
              {
                  if(in_array($this->type(),$this->type))
                  {
                      $resim_uzan = substr($this->img["name"],-4,4);
                      $resim_adi = ranlet("MIX",12).rand(1,999).$resim_uzan;
                      $resim_yolu = $this->dir.$resim_adi;
                      if(is_uploaded_file($this->img["tmp_name"]))
                      {
                          $ekle = @move_uploaded_file($this->img["tmp_name"],$resim_yolu);
                          if($ekle)
                          {

                              return successAlert("Resim Başarıyla Yüklendi");
                          }
                          else
                          {
                             return errorAlert("Resim Yüklenirken Hata Oluştu");
                          }

                      }

                  }
                  else
                  {
                      //resim uzanısı desteklenmiyor hatası
                      return warningAlert("Resim Uzantısı Desteklenmiyor");
                  }
              }
              else
              {
                  //resim boyutu desteklenmiyor hatası
                  return warningAlert("Resim Boyutu En Az <b>".$this->sizeMb." MB</b>  Olmalıdır");
              }


		  }
		else
		{
            return warningAlert("Resim Seçiniz");
		}
	 }
 }




function go($par)
{
    header("location: {$par}");
}


//ALERTS
function errorAlert($a)
{

    return "<div class=\"alert\">
                                        <div class=\"alert-danger\">
                                            <span class=\"alert-icon\"><i class=\"fa fa-times-circle\"></i></span>
                                            <span class=\"alert-text\">".$a."</span>
                                        </div>

                                    </div>";

}
function successAlert($a)
{

    return "<div class=\"alert\">
                                        <div class=\"alert-success\">
                                            <span class=\"alert-icon\"><i class=\"fa fa-check-circle\"></i></span>
                                            <span class=\"alert-text\">".$a."</span>
                                        </div>

                                    </div>";
}
function infoAlert($a)
{

    return "<div class=\"alert\">
                                        <div class=\"alert-info\">
                                            <span class=\"alert-icon\"><i class=\"fa fa-info-circle\"></i></span>
                                            <span class=\"alert-text\">".$a."</span>
                                        </div>

                                    </div>";
}
function warningAlert($a)
{

    return "<div class=\"alert\">
                                        <div class=\"alert-warning\">
                                            <span class=\"alert-icon\"><i class=\"fa fa-exclamation-circle\"></i></span>
                                            <span class=\"alert-text\">".$a."</span>
                                        </div>

                                    </div>";

}
//---------------------



?>