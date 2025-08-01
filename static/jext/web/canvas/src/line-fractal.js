$.task.push(function(){
	_('[canvas-src^="line-fractal,"]').each(function () {
		var thi = $(this);
		var canvas;
		thi.append('<canvas width="1920" height="572"></canvas>');

		const PHI = (1 + Math.sqrt(5)) / 2, // 1.618033988749895
		  maxGeneration = (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) ? 5 : 6,
		  frameDuration = 1000 / 60,
		  duration = 3000,
		  rotationSpeed = 0.3,
		  totalIterations = Math.floor(duration / frameDuration),
		  maxBaseSize = 100,
		  baseSizeSpeed = 0.02;

		var canvas = thi.find('canvas')[0],
		  ctx = canvas.getContext("2d"),
		  canvasWidth = thi.width(),
		  canvasHeight = thi.height(),
		  shapes = [],
		  sizeVariation,
		  iteration = 0,
		  animationDirection = 1,
		  sizeVariationRange = .15,
		  baseRotation = 0,
		  baseSize = 50,
		  c1 = 43,
		  c1S = 1,
		  c2 = 205,
		  c2S = 1,
		  c3 = 255,
		  c3S = 1;

		canvas.setAttribute("width", canvasWidth);
		canvas.setAttribute("height", canvasHeight);

		function Shape(gen, x, y, size, rotation) {
		  this.generation = gen;
		  this.size = size;
		  this.rotation = -rotation;
		  this.start = {
		    x: x,
		    y: y
		  };
		  this.end = {
		    x_1: this.start.x + Math.cos(degToRad(this.rotation)) * this.size,
		    y_1: this.start.y + Math.sin(degToRad(this.rotation)) * this.size,
		    x_2: this.start.x + Math.cos(degToRad(this.rotation + 360 / 3)) * this.size,
		    y_2: this.start.y + Math.sin(degToRad(this.rotation + 360 / 3)) * this.size,
		    x_3:
		      this.start.x +
		      Math.cos(degToRad(this.rotation + 360 / 3 * 2)) * this.size,
		    y_3:
		      this.start.y + Math.sin(degToRad(this.rotation + 360 / 3 * 2)) * this.size
		  };

		  this.init();
		}

		Shape.prototype.init = function() {
		  if (this.generation < maxGeneration) {
		    var gen = this.generation + 1,
		      newSize = this.size * sizeVariation,
		      newRotation = this.rotation;

		    shapes.push(
		      new Shape(gen, this.end.x_1, this.end.y_1, newSize, newRotation)
		    );
		    shapes.push(
		      new Shape(gen, this.end.x_2, this.end.y_2, newSize, newRotation)
		    );
		    shapes.push(
		      new Shape(gen, this.end.x_3, this.end.y_3, newSize, newRotation)
		    );
		  }
		  this.draw();
		};

		Shape.prototype.draw = function() {
		  ctx.beginPath();
		  ctx.moveTo(this.start.x, this.start.y);
		  ctx.lineTo(this.end.x_1, this.end.y_1);
		  ctx.moveTo(this.start.x, this.start.y);
		  ctx.lineTo(this.end.x_2, this.end.y_2);
		  ctx.moveTo(this.start.x, this.start.y);
		  ctx.lineTo(this.end.x_3, this.end.y_3);
		  //ctx.closePath();
		  ctx.strokeStyle =
		    "rgba(" + c1 + "," + c2 + "," + c3 + "," + 1 / this.generation / 5 + ")";
		  ctx.stroke();
		  //ctx.fill();
		};

		function animate() {
		  //ctx.clearRect(0, 0, canvasWidth, canvasHeight);
		  ctx.globalCompositeOperation = "source-over";
		  ctx.fillStyle = "rgba(0,0,0,.1)";
		  ctx.fillRect(0, 0, canvasWidth, canvasHeight);
		  ctx.globalCompositeOperation = "lighter";
		  shapes = [];
		  shapes.push(
		    new Shape(0, canvasWidth / 2, canvasHeight / 2, baseSize, baseRotation)
		  );

		  changeColor();
		  iteration++;
		  if (baseSize < maxBaseSize) baseSize += baseSizeSpeed;
		  baseRotation += rotationSpeed;
		  sizeVariation = easeInOutSine(
		    iteration,
		    1 - sizeVariationRange * animationDirection,
		    sizeVariationRange * 2 * animationDirection,
		    totalIterations
		  );
		  if (iteration >= totalIterations) {
		    iteration = 0;
		    animationDirection *= -1;
		  }
		  requestAnimationFrame(animate);
		}

		function degToRad(deg) {
		  return Math.PI / 180 * deg;
		}

		function easeInOutSine(
		  currentIteration,
		  startValue,
		  changeInValue,
		  totalIterations
		) {
		  return (
		    changeInValue /
		      2 *
		      (1 - Math.cos(Math.PI * currentIteration / totalIterations)) +
		    startValue
		  );
		}

		function changeColor() {
		  if (c1 == 0 || c1 == 255) c1S *= -1;
		  if (c2 == 0 || c2 == 255) c2S *= -1;
		  if (c3 == 0 || c3 == 255) c3S *= -1;
		  c1 += 1 * c1S;
		  c2 += 1 * c2S;
		  c3 += 1 * c3S;
		}

		ctx.globalCompositeOperation = "lighter";
		animate();

		window.addEventListener("resize", function() {
		  canvasWidth = thi.width();
		  canvasHeight = thi.height();

		  canvas.setAttribute("width", canvasWidth);
		  canvas.setAttribute("height", canvasHeight);
		  ctx.strokeStyle = "rgba(66,134,240,.3)";
		  ctx.globalCompositeOperation = "lighter";
		});

	})
});