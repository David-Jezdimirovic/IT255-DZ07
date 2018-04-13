<!DOCTYPE html>
<?php 
	$val = $_GET['n'];

	function funkcija($s) {
		$niz = array();
		for($i = 0; $i < $s; $i++){
			
			$niz[$i] = rand(1,50);
			
		}
		
		
		    
		
    for ($i = 0; $i < $s; $i++) {
		for($j = 0; $j < $s; $j++){
			
			
			// sortira niz u rastucem poretku
            if($niz[$i] < $niz[$j]) {  
                $temp = $niz[$j];
                $niz[$j] = $niz[$i];
				$niz[$i]=$temp;
              
            }
       }
	}
		
		
		return $niz;
	}
	
	$niz2 = funkcija($val);
	
	echo "Nasumicno kreiran i sortiran niz pomocu GET metode: <br>";
	foreach($niz2 as $key => $value){
		
		echo $value . " ";
		
	}
	
	
	
	
	
	
	echo "<br><br>";
	
	$val2 = $_POST['br'];
	$val3 = $_POST['str'];
	
	
	echo "Konverzija velikih i malih slova u stringu pomocu POST metode i POSTMENA: <br>";
	function funkcija2($vr,$vr2) {
		
	$noviString="";
	
	for ($j = 0; $j < strlen($vr2); $j++) {
               
                $c = $vr2{$j};
				
				if(ctype_upper($c)){
					$noviString = $noviString.strtolower($c);
				}else{
					$noviString = $noviString.strtoupper($c);
					}
               
          }
		
		for($i = 0; $i < $vr; $i++){
			
			echo "Originalan string: <br>" . $vr2 . "<br><br>";
			
			echo "Konvertovani string:<br>" . $noviString . "<br><br>";
	
		}
	}
	funkcija2($val2,$val3)
?>