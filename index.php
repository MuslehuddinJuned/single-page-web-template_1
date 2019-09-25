

<?php

echo "string";





















/*

$n=10;
$s[0]=290797;
$t[0]=$s[0]%500;
$result=[];
$k=0;

for ($i=1; $i <= $n*4; $i++) { 
	$s[$i]=($s[$i-1]**2)%50515093;
	$t[$i]= $s[$i]%500; 
	if($i%8==0){
		$m1=($t[$i-4]-$t[$i-6])/($t[$i-5]-$t[$i-7]);
		$m2=($t[$i]-$t[$i-2])/($t[$i-1]-$t[$i-3]);
		$b1=$t[$i-6]/($m1*$t[$i-7]);
		$b2=$t[$i-2]/($m1*$t[$i-3]);
		$k++; $result[$k]=$m1*$t[$i-7]+$b1;
		$k++; $result[$k]=$m2*$t[$i-3]+$b2;
	}	
}
print_r($result);
// $res=array_count_values($result);
rsort($res);
echo $res[0];

====================================================================

function alternate($s) {
	$k=0;
	for ($i=0; $i < strlen($s); $i++) { 
		$fc=$s[$i].$s[$i];
		if(strpos($s, $fc) == true){$s=str_replace($s[$i], "", $s) ; $i=-1;}
		elseif (substr_count($s, $s[$i])==1) {$s=str_replace($s[$i], "", $s); $i=-1;} 
		
	}
	if(count(array_unique(str_split($s)))==2) return strlen($s);
	elseif(count(array_unique(str_split($s)))<2)return 0;
	$rr=array_count_values(str_split($s));
	rsort($rr);
	return $rr[1]*2;

}

echo alternate("uyetuppelecblwipdsqabzsvyfaezeqhpnalahnpkdbhzjglcuqfjnzpmbwprelbayyzovkhacgrglrdpmvaexkgertilnfooeazvulykxypsxicofnbyivkthovpjzhpohdhuebazlukfhaavfsssuupbyjqdxwwqlicbjirirspqhxomjdzswtsogugmbnslcalcfaxqmionsxdgpkotffycphsewyqvhqcwlufekxwoiudxjixchfqlavjwhaennkmfsdhigyeifnoskjbzgzggsmshdhzagpznkbahixqgrdnmlzogprctjggsujmqzqknvcuvdinesbwpirfasnvfjqceyrkknyvdritcfyowsgfrevzon");
*/