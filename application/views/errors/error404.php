<html>
<head>
  <style>
  @import url(https://fonts.googleapis.com/css?family=Black+Ops+One);
* {
  box-sizing: border-box;
}

html, body {
  background: #e6e6e6;
  width: 100%;
  min-height: 100%;
  font-weight: bold;
  font-size: 1em;
  display: flex;
  justify-content: center;
  flex-direction: column;
  font-family: 'Black Ops One', cursive;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

canvas {
  left: 50%;
  position: absolute;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.text .wrap {
  fill: #FFF;
}

.overlay {
  height: 0;
  width: 0;
  overflow: hidden;
  position: absolute;
}
.overlay .txt {
  font-size: 14rem;
  text-transform: uppercase;
  font-weight: 900;
  letter-spacing: -.5rem;
  text-shadow: 0 -3px 0 #0d0d0d, 0 6px 8px rgba(13, 13, 13, 0.55), 0 9px 10px rgba(13, 13, 13, 0.25);
}
.overlay .txt2 {
  font-size: 4rem;
}

section {
  align-self: center;
}

h1 {
  position: relative;
  font-size: 8em;
  font-weight: bold;
  line-height: 1;
  display: inline-block;
  width: 900px;
  height: 400px;
}
h1 .fill {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
}
h1 .inv {
  position: absolute;
  width: 900px;
  height: 400px;
  top: 0;
  left: 0;
}
h1 .rect {
  fill: #e6e6e6;
}
h1 .clear {
  fill: transparent;
}

  </style>
</head>
  <body>
<svg class="overlay text" viewBox="0 0 900 400">

		<symbol id="main">
			<text text-anchor="middle" x="50%" y="50%" dy="0.25em" class="txt">404</text>
      <text text-anchor="middle" x="50%" y="90%" dy="0.25em" class="txt2">Not Found</text>
		</symbol>
		<mask id="msk" maskunits="userSpaceOnUse" maskcontentunits="userSpaceOnUse">
			<rect width="100%" height="100%" class="wrap">
			</rect>
			<use xlink:href="#main" class="mtxt"></use>
		</mask>
	</svg>
			<section>
				<h1 href="#">
					<div class="fill">
<canvas id="canv" width = "460" height = "360" style=background: hsla(0, 0%, 0%, 1);>
</canvas>
					</div>
					<svg viewBox="0 0 100% 100%" class="inv">
						<rect width="100%" height="100%" mask="url(#msk)"
      class="rect" />
						<use xlink:href="#main" class="clear"></use>
					</svg>
				</h1>
			</section>
    </body>
    <script>
    c = document.getElementById("canv");
$ = c.getContext("2d");
w = c.width;
h = c.height;
id = $.createImageData(w, h);

function draw() {
  window.requestAnimationFrame(draw);
    var r;
    for (var p = 4 * (w * h - 1); p >= 0; p -= 4) {
        r = Math.random();
        id.data[p] = id.data[p+1] = id.data[p+2] = 255 * Math.pow(r, 1.6);
        id.data[p+3] = 255;
    }
    $.putImageData(id, 0, 0);
}

draw();
    </script>

    </html>
