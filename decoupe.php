<?php require("controle.php");?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Movable and Re-sizable Raphael JS Shape</title>
	</head>
	<body>
		<div id="paper" style="margin:-8px"></div>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js"></script>
		<script type="text/javascript">
			(function(){
				var dragStart = function() {
					// Save some starting values
					this.ox = this.attr('x');
					this.oy = this.attr('y');
					this.ow = this.attr('width');
					this.oh = this.attr('height');

					this.dragging = true;
				};

				var dragMove = function(dx, dy) {
					$(document).ready(function(){
						$("div#output>a#x").html(shapes[0].node.x.animVal.value);
						$("div#output>a#y").html(shapes[0].node.y.animVal.value);
						$("div#output>a#w").html(shapes[0].node.width.animVal.value);
						$("div#output>a#h").html(shapes[0].node.height.animVal.value);
					});
					// Inspect cursor to determine which resize/move process to use
					switch (this.attr('cursor')) {
						case 'nw-resize' :
							this.attr({
								x: this.ox + dx,
								y: this.oy + dy,
								width: this.ow - dx,
								height: this.oh - dy
							});
							break;

						case 'ne-resize' :
							this.attr({
								y: this.oy + dy ,
								width: this.ow + dx,
								height: this.oh - dy
							});
							break;

						case 'se-resize' :
							this.attr({
								width: this.ow + dx,
								height: this.oh + dy
							});
							break;

						case 'sw-resize' :
							this.attr({
								x: this.ox + dx,
								width: this.ow - dx,
								height: this.oh + dy
							});
							break;

						default :
							this.attr({
								x: this.ox + dx,
								y: this.oy + dy
							});
							break;
					}
				};

				var dragEnd = function() {
					this.dragging = false;
				};

				var changeCursor = function(e, mouseX, mouseY) {
					// Don't change cursor during a drag operation
					if (this.dragging === true) {
						return;
					}

					// X,Y Coordinates relative to shape's orgin
					var relativeX = mouseX - $('#paper').offset().left - this.attr('x');
					var relativeY = mouseY - $('#paper').offset().top - this.attr('y');

					var shapeWidth = this.attr('width');
					var shapeHeight = this.attr('height');

					var resizeBorder = 10;

					// Change cursor
					if (relativeX < resizeBorder && relativeY < resizeBorder) {
						this.attr('cursor', 'nw-resize');
					} else if (relativeX > shapeWidth-resizeBorder && relativeY < resizeBorder) {
						this.attr('cursor', 'ne-resize');
					} else if (relativeX > shapeWidth-resizeBorder && relativeY > shapeHeight-resizeBorder) {
						this.attr('cursor', 'se-resize');
					} else if (relativeX < resizeBorder && relativeY > shapeHeight-resizeBorder) {
						this.attr('cursor', 'sw-resize');
					} else {
						this.attr('cursor', 'move');
					}
				};

				// Create drawing area
				var paper = Raphael("paper",<?=$_POST["lon1"];?>,<?=$_POST["lon2"];?>);

				// Add a rectangle
				var shapes = paper.add([{
					'type' : 'rect',
					'x' : 0,
					'y' : 0,
					'width' : 100,
					'height' : 100,
					'fill' : 'rgba(255, 255, 255, 0.5)',
					'stroke' : 'black',
					'stroke-width' : 2
				}]);

				// Attach "Mouse Over" handler to rectangle
				shapes[0].mousemove(changeCursor);

				// Attach "Drag" handlers to rectangle
				shapes[0].drag(dragMove,dragStart,dragEnd);
			})();
			$(window).ready(function(){
				$("button#send").on("click",function(){
					window.location = "http://corentinp.dijon.codeur.online/Project_J/.final/verification";
				});
			});
		</script>

		<style>svg{background:url(data/imgs/<?=$_POST["mat"];?>.jpg);}</style>

		<button type="button" id="send">Send Data</button>
		<div id="output">
			x: <a id="x">0</a><br />
			y: <a id="y">0</a><br />
			w: <a id="w">100</a><br />
			h: <a id="h">100</a>
		</div><hr>
		<div>
			<?=$_POST["ref"];?><br />
			<?=$_POST["mat"];?><br />
			<?=$_POST["lon1"];?><br />
			<?=$_POST["lon2"];?><br />
			<?=$_POST["epa"];?>
		</div>
	</body>
</html>