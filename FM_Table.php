<?php

class FM_Table
{
	#====================================================================================================
	#GET AS OBJECT
	#====================================================================================================
	public static function getAsObject($records, $fields){
		$result = [];
		foreach ($records as $record) {
			$e = [];
			foreach ($fields as $attribute => $field) {
				$r[$attribute] = $record->getField($field);
			}
			$result[] = $r;
		}
		return $result;
	}
	#====================================================================================================
	#END GET AS OBJECT
	#====================================================================================================
}
?>