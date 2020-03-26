<?php
class ModelFest extends CI_Model{
	function festival(){
		return [['id'=>'dfq','name'=>'Defqon.1'],['id'=>'tml','name'=>'Tomorrowland']];
	}
	
	function lineup($id){
		$lineup = [];
		if($id == 'dfq') {
			$lineup = ['Headhunterz','Da Tweekaz', 'Coone','Sefa'];
		}elseif($id == 'tml'){
			$lineup = ['Armin van Buuren','Timmy Trumpet', 'Steve Aoki', 'Charlotte de Witte'];
		}

		return $lineup;
	}
	function festName($name){
		$festName = '';

		if($name == 'dfq') {
			$festName = 'Defqon.1';
		}elseif($name == 'tml'){
			$festName = 'Tomorrowland';
		}

		return $festName;
	}
}
?>