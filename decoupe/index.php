<?php require("../connexion/controle.php");
if(isset($_POST["ref"])) : ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<title>Découpe</title>
	</head>
	<body>
		<?php require("../menu_principal.php");?>
		<div id="paper" style="margin:8px -8px"></div>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js"></script>
		<script type="text/javascript">
			(function(){
				var dragStart = function(){
					// Save some starting values
					this.ox = this.attr("x");
					this.oy = this.attr("y");
					this.ow = this.attr("width");
					this.oh = this.attr("height");

					this.dragging = true;
				};

				var dragMove = function(dx,dy){
					$(document).ready(function(){
						$("form input.x").val(shapes[0].node.x.animVal.value);
						$("form input.y").val(shapes[0].node.x.animVal.value);
						$("form input.w").val(shapes[0].node.x.animVal.value);
						$("form input.h").val(shapes[0].node.x.animVal.value);
					});

					// Inspect cursor to determine which resize/move process to use
					switch(this.attr("cursor")){
						case "nw-resize":
							this.attr({
								x:this.ox + dx, 
								y:this.oy + dy, 
								width:this.ow - dx, 
								height:this.oh - dy
							});
							break;
						case "ne-resize":
							this.attr({ 
								y:this.oy + dy , 
								width:this.ow + dx, 
								height:this.oh - dy
							});
							break;
						case "se-resize":
							this.attr({
								width:this.ow + dx, 
								height:this.oh + dy
							});
							break;
						case "sw-resize":
							this.attr({ 
								x:this.ox + dx, 
								width:this.ow - dx, 
								height:this.oh + dy
							});
							break;
						default:
							this.attr({
								x:this.ox + dx, 
								y:this.oy + dy
							});
							break;
					}
				};

				var dragEnd = function(){
					this.dragging = false;
				};

				var changeCursor = function(e,mouseX,mouseY){
					// Don't change cursor during a drag operation
					if(this.dragging === true){
						return;
					}

					// X,Y Coordinates relative to shape's orgin
					var relativeX = mouseX - $("#paper").offset().left - this.attr("x");
					var relativeY = mouseY - $("#paper").offset().top - this.attr("y");

					var shapeWidth = this.attr("width");
					var shapeHeight = this.attr("height");

					var resizeBorder = 10;

					// Change cursor
					if(relativeX < resizeBorder && relativeY < resizeBorder){ 
						this.attr("cursor","nw-resize");
					}
					else if(relativeX > shapeWidth-resizeBorder && relativeY < resizeBorder){ 
						this.attr("cursor","ne-resize");
					}
					else if(relativeX > shapeWidth-resizeBorder && relativeY > shapeHeight - resizeBorder){ 
						this.attr("cursor","se-resize");
					}
					else if(relativeX < resizeBorder && relativeY > shapeHeight - resizeBorder){ 
						this.attr("cursor","sw-resize");
					}
					else{ 
						this.attr("cursor","move");
					}
				};
				// Create drawing area
				var paper = Raphael("paper",<?=$_POST["lon1"];?>,<?=$_POST["lon2"];?>);

				// Add a rectangle
				var shapes = paper.add([{
					"type":"rect",
					"x":0,
					"y":0,
					"width":100,
					"height":100,
					"fill":"rgba(255,255,255,0.5)",
					"stroke":"black",
					"stroke-width":2
				}]);

				// Attach "Mouse Over" handler to rectangle
				shapes[0].mousemove(changeCursor);

				// Attach "Drag" handlers to rectangle
				shapes[0].drag(dragMove,dragStart,dragEnd);
			})();
		</script>

		<style>svg{background:url(../.data/img/<?=$_POST["mat"];?>.jpg);}</style>

		<form action="../verification/devisd" method="post" accept-charset="utf-8">
			<input type="hidden" class="x" name="x" value="" />
			<input type="hidden" class="y" name="y" value="" />
			<input type="hidden" class="w" name="w" value="" />
			<input type="hidden" class="h" name="h" value="" />

			<input type="hidden" name="ref" value="<?=$_POST["ref"];?>" />
			<input type="hidden" name="mat" value="<?=$_POST["mat"];?>" />
			<input type="hidden" name="lon" value="<?=$_POST["lon1"];?>" />
			<input type="hidden" name="lar" value="<?=$_POST["lon2"];?>" />
			<input type="hidden" name="epa" value="<?=$_POST["epa"];?>" />

			<input type="submit" value="Valider les modifications" />
		</form>
	</body>
</html>
<?php
else :
	header("Location: http://corentinp.dijon.codeur.online/Project_J/catalogue");
endif;