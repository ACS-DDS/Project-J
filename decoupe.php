<?php
require_once(".classes/clients.php");
require_once(".classes/commandes.php");
require(".data/php/controle.php");

if(isset($_POST["reference"])) : 
	if(isset($_SESSION["commandes"])) :
		$_SESSION["commandes"]->addProduit($_POST);
	else :
		$_SESSION["commandes"] = new Commandes($_POST);
	endif;?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<title>Découpe</title>
	</head>
	<body>
		<?php require(".data/php/menu_principal.php");?>
		<div id="paper" style="margin:8px -8px"></div>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js"></script>
		<script type="text/javascript">
			let init = async () => {
				let dragStart = () => { // Save some starting values
					this.ox = this.attr('x')
					this.oy = this.attr('y')
					this.ow = this.attr('width')
					this.oh = this.attr('height')
					this.dragging = true;
				}
				let dragMove = (dx, dy) => {
					$(document).ready(() => {
						$('form input.x').val(shapes[0].node.x.animVal.value)
						$('form input.y').val(shapes[0].node.y.animVal.value)
						$('form input.w').val(shapes[0].node.width.animVal.value)
						$('form input.h').val(shapes[0].node.height.animVal.value)
					})
					switch (this.attr('cursor')) { // Inspect cursor to determine which resize/move process to use
						case 'nw-resize':
							this.attr({
								x:this.ox + dx, 
								y:this.oy + dy, 
								width:this.ow - dx, 
								height:this.oh - dy
							})
							break
						case 'ne-resize':
							this.attr({ 
								y:this.oy + dy , 
								width:this.ow + dx, 
								height:this.oh - dy
							})
							break
						case 'se-resize':
							this.attr({
								width:this.ow + dx, 
								height:this.oh + dy
							})
							break
						case 'sw-resize':
							this.attr({ 
								x:this.ox + dx, 
								width:this.ow - dx, 
								height:this.oh + dy
							})
							break
						default:
							this.attr({
								x:this.ox + dx, 
								y:this.oy + dy
							})
							break
					}
				}
				let dragEnd = () => {
					this.dragging = false
				}
				let changeCursor = (e, mouseX, mouseY) => {
					if (this.dragging === true){ // Don't change cursor during a drag operation
						return
					}
					// X,Y Coordinates relative to shape's orgin
					let relativeX = mouseX - $('#paper').offset().left - this.attr('x')
					let relativeY = mouseY - $('#paper').offset().top - this.attr('y')
					let shapeWidth = this.attr('width')
					let shapeHeight = this.attr('height')
					let resizeBorder = 10
					// Change cursor
					if (relativeX < resizeBorder && relativeY < resizeBorder) { 
						this.attr('cursor', 'nw-resize')
					}
					else if (relativeX > shapeWidth-resizeBorder && relativeY < resizeBorder) { 
						this.attr('cursor', 'ne-resize')
					}
					else if (relativeX > shapeWidth-resizeBorder && relativeY > shapeHeight - resizeBorder) { 
						this.attr('cursor', 'se-resize')
					}
					else if (relativeX < resizeBorder && relativeY > shapeHeight - resizeBorder) { 
						this.attr('cursor', 'sw-resize')
					}
					else { 
						this.attr('cursor', 'move')
					}
				}
				// Create drawing area
				let paper = Raphael('paper', <?=$_POST["longueur"];?>, <?=$_POST["largeur"];?>);
				// Add a rectangle
				let shapes = paper.add([{
					'type': 'rect',
					'x': 0,
					'y': 0,
					'ry': 50,
					'rx': 50,
					'width': 100,
					'height': 100,
					'fill': 'rgba(255,255,255,0.5)',
					'stroke': 'black',
					'stroke-width': 2
				}])
				// Attach "Mouse Over" handler to rectangle
				shapes[0].mousemove(changeCursor)
				// Attach "Drag" handlers to rectangle
				shapes[0].drag(dragMove,dragStart,dragEnd)
			}
			init()
		</script>

		<style>svg{background:url(.data/img/<?=$_POST["matiere"];?>.jpg);}</style>

		<form action="devisd" method="post" accept-charset="utf-8">
			<input type="hidden" class="x" name="x" value="">
			<input type="hidden" class="y" name="y" value="">
			<input type="hidden" class="w" name="w" value="">
			<input type="hidden" class="h" name="h" value="">

			<input type="hidden" name="reference" value="<?=$_POST['reference'];?>">
			<input type="hidden" name="matiere" value="<?=$_POST['matiere'];?>">
			<input type="hidden" name="longueur" value="<?=$_POST['longueur'];?>">
			<input type="hidden" name="largeur" value="<?=$_POST['largeur'];?>">
			<input type="hidden" name="epaisseur" value="<?=$_POST['epaisseur'];?>">

			<input type="submit" value="Valider les modifications">
		</form>
	</body>
</html>
<?php
else :
	header("Location: ./shop");
endif;