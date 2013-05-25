<?php
	//var_dump ($_FILES);
	 $dos = "images/minFriends/";
	//var_dump ($dos);
	$dir = opendir($dos);
	?>
	<!-- DEBUT DU SCRIPT CARROUSEL -->
				 
				 <script type="text/javascript">
				
				/***********************************************
				PARAMETRES DE REGLAGE
				***********************************************/
				// Sp&eacute;cifiez la largeur du diaporama (en pixel)
				var sliderwidth="2000px"
				// Sp&eacute;cifiez la hauteur du diaporama (en pixel)
				var sliderheight="200px"
				// Sp&eacute;cifiez la vitesse de d&eacute;filement (de 1 &agrave; 10)
				var slidespeed=2
				// Sp&eacute;cifiez la couleur du fond
				slidebgcolor="#FFFFFF"
				// SPECIFICATIONS DU CARROUSEL : chemin des images
				// Vous pouvez rendre l'image cliquable
				var leftrightslide=new Array()
				var finalslide=''
				<?php 
				$count = 0;
				while($file = readdir($dir))
				{
					$allow_ext = array("jpg","png","gif");
					$ext = strtolower(substr($file, -3));
					
					if (in_array($ext, $allow_ext) && $count<=20)
					{
					
				?>
				
				leftrightslide[<?php echo $count; $count++;?>]='<img src="<?php echo ($dos); echo($file);?>" style="height:200px;" border=0>' 
				<?php }}?>
				// Sp&eacute;cifiez l'espace entre chaque image (se servir du HTML):
				var imagegap=" "
				// Sp&eacute;cifiez le nombre de pixels/espace entre chaque rotation du carrousel (nombre entier)
				var slideshowgap=5 
				////NE RIEN EDITER A PARTIR D'ICI////////////
				var copyspeed=slidespeed
				leftrightslide='<nobr>'+leftrightslide.join(imagegap)+'</nobr>'
				var iedom=document.all||document.getElementById
				if (iedom)
				document.write('<span id="temp" style="visibility:hidden;position:absolute;top:-100px;left:-9000px">'+leftrightslide+'</span>')
				var actualwidth=''
				var cross_slide, ns_slide
				function fillup(){
				if (iedom){
				cross_slide=document.getElementById? document.getElementById("test2") : document.all.test2
				cross_slide2=document.getElementById? document.getElementById("test3") : document.all.test3
				cross_slide.innerHTML=cross_slide2.innerHTML=leftrightslide
				actualwidth=document.all? cross_slide.offsetWidth : document.getElementById("temp").offsetWidth
				cross_slide2.style.left=actualwidth+slideshowgap+"px"
				}
				else if (document.layers){
				ns_slide=document.ns_slidemenu.document.ns_slidemenu2
				ns_slide2=document.ns_slidemenu.document.ns_slidemenu3
				ns_slide.document.write(leftrightslide)
				ns_slide.document.close()
				actualwidth=ns_slide.document.width
				ns_slide2.left=actualwidth+slideshowgap
				ns_slide2.document.write(leftrightslide)
				ns_slide2.document.close()
				}
				lefttime=setInterval("slideleft()",30)
				}
				window.onload=fillup
				function slideleft(){
				if (iedom){
				if (parseInt(cross_slide.style.left)>(actualwidth*(-1)+8))
				cross_slide.style.left=parseInt(cross_slide.style.left)-copyspeed+"px"
				else
				cross_slide.style.left=parseInt(cross_slide2.style.left)+actualwidth+slideshowgap+"px"
				if (parseInt(cross_slide2.style.left)>(actualwidth*(-1)+8))
				cross_slide2.style.left=parseInt(cross_slide2.style.left)-copyspeed+"px"
				else
				cross_slide2.style.left=parseInt(cross_slide.style.left)+actualwidth+slideshowgap+"px"
				}
				else if (document.layers){
				if (ns_slide.left>(actualwidth*(-1)+8))
				ns_slide.left-=copyspeed
				else
				ns_slide.left=ns_slide2.left+actualwidth+slideshowgap
				if (ns_slide2.left>(actualwidth*(-1)+8))
				ns_slide2.left-=copyspeed
				else
				ns_slide2.left=ns_slide.left+actualwidth+slideshowgap
				}
				}
				if (iedom||document.layers){
				with (document){
				document.write('<table border="0" cellspacing="0" cellpadding="0"><td>')
				if (iedom){
				write('<div style="position:relative;width:'+sliderwidth+';height:'+sliderheight+';overflow:hidden">')
				write('<div style="position:absolute;width:'+sliderwidth+';height:'+sliderheight+';background-color:'+slidebgcolor+'" onmouseover="copyspeed=0" onmouseout="copyspeed=slidespeed">')
				write('<div id="test2" style="position:absolute;left:0px;top:0px"></div>')
				write('<div id="test3" style="position:absolute;left:-1000px;top:0px"></div>')
				write('</div></div>')
				}
				else if (document.layers){
				write('<ilayer width='+sliderwidth+' height='+sliderheight+' name="ns_slidemenu" bgcolor='+slidebgcolor+'>')
				write('<layer name="ns_slidemenu2" left=0 top=0 onmouseover="copyspeed=0" onmouseout="copyspeed=slidespeed"></layer>')
				write('<layer name="ns_slidemenu3" left=0 top=0 onmouseover="copyspeed=0" onmouseout="copyspeed=slidespeed"></layer>')
				write('</ilayer>')
				}
				document.write('</td></table>')
				}
				}
						  </script> <!-- FIN DU SCRIPT CARROUSEL -->
						  
