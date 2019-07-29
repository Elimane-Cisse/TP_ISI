<?php

class FormManager{

/**@brief génère la balise &lt;form&gt;avec méthode(Post,Get) et action(url)*/

public static function beginForm($method,$action,$css_class="",$extraOptions=""){
$css_class_option="";
if(!empty($css_class)){
$css_class_option="class=\"".$css_class."\"";
}
return"<form method=\"".$method."\" action=\"".$action."\""."accept−charset=\"utf−8\""//Onforcelecharset
.$css_class_option.$extraOptions.">\n";
}
/**@brief ferme le formulaire*/
public static function endForm(){
return"</form>";
}
/** méthode générique de génération d’un input
*@param $label Text texte du label correspondant à l’input
*@param $type type d’input:texte,date,checkbox,radio,submit...
*@param $name name de l’input pour la correspondance label/input
*@param $id ID de l’input pour la correspondance label/input
*@param $value valeur initiale du champs de l’input
*@param $extra Options chaine de caractères contenant les options
*supplémentaires de l’input suivant la syntaxe HTML.*/

public static function addInput($labelText,$type,$name,$id,$value=null,$extraOptions=""){
//On échappe pour éviter tout injection
$value=($value == null)?"":filter_var($value,FILTER_SANITIZE_STRING);
$valueOption="value=\"".$value."\"";
if($extraOptions == null){
$extraOptions="";
}
$returnText="<span class=\"formField\">";
if($labelText != null && $labelText!=""){
$returnText.="<label for=\"".$id."\">".$labelText."</label>\n";
}
$returnText.="<input type=\"".$type."\"name=\"".$name."\"id=\"".$id."\"".$valueOption."".$extraOptions."/>\n";
$returnText.="</span>";
return $returnText;
}
//!@condDoxygen_Suppress
/**@brief méthodepourgénéreruninputdetypetext*/

public static function addTextInput($labelText,$name,$id,$size,
$value=null,$extraOptions=""){
return self::addInput($labelText,"text",$name,$id,$value,"size=\"".$size."\"".$extraOptions);
}


?>
