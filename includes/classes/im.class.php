<?php

class Img{

	static function creerMin($img,$chemin,$nom,$mlargeur=100,$mhauteur=100){
		// On supprime l'extension du nom
		$nom = substr($nom,0,-4);
		// On r�cup�re les dimensions de l'image
		$dimension=getimagesize($img);
		// On cr� une image � partir du fichier r�cup
		if(substr(strtolower($img),-4)==".jpg"){$image = imagecreatefromjpeg($img); }
		else if(substr(strtolower($img),-4)==".png"){$image = imagecreatefrompng($img); }
		else if(substr(strtolower($img),-4)==".gif"){$image = imagecreatefromgif($img); }
		// L'image ne peut etre redimensionne
		else{return false; }
		
		// Cr�ation des miniatures
		// On cr� une image vide de la largeur et hauteur voulue
		$miniature =imagecreatetruecolor ($mlargeur,$mhauteur); 
		// On va g�rer la position et le redimensionnement de la grande image
		if($dimension[0]>($mlargeur/$mhauteur)*$dimension[1] ){ $dimY=$mhauteur; $dimX=$mhauteur*$dimension[0]/$dimension[1]; $decalX=-($dimX-$mlargeur)/2; $decalY=0;}
		if($dimension[0]<($mlargeur/$mhauteur)*$dimension[1]){ $dimX=$mlargeur; $dimY=$mlargeur*$dimension[1]/$dimension[0]; $decalY=-($dimY-$mhauteur)/2; $decalX=0;}
		if($dimension[0]==($mlargeur/$mhauteur)*$dimension[1]){ $dimX=$mlargeur; $dimY=$mhauteur; $decalX=0; $decalY=0;}
		// on modifie l'image cr�e en y pla�ant la grande image redimensionn� et d�cal�e
		imagecopyresampled($miniature,$image,$decalX,$decalY,0,0,$dimX,$dimY,$dimension[0],$dimension[1]);
		// On sauvegarde le tout
		imagejpeg($miniature,$chemin."/".$nom.".jpg",90);
		return true;
	}
}

?>
