<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Easter egg</title>

<style>

* {
  box-sizing: border-box;
}
.truck * {
  transition: all 0.25s ease;
}
body {
  align-items: center;
  background: linear-gradient(180deg, #1a1c23, #111317 50%, #1a1a1a 50%), #1a1a1a;
  display: flex;
  justify-content: center;
  min-height: 100vh;
  overflow: hidden;
  width: 100vw;
}
:root {
  --width: 300;
}
@media (min-width: 768px) {
  :root {
    --width: 600;
  }
}
.title {
  display: none;
  --color: #b3b3b3;
  --speed: 0.1;
  text-transform: uppercase;
  color: var(--color);
  text-shadow: 0 0 20px var(--color);
  font-size: 25vh;
  font-family: 'Wallpoet', cursive;
  position: absolute;
  bottom: 42%;
  left: 50%;
  -webkit-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
}
.title span {
  -webkit-animation: flicker calc(var(--speed, 4) * 1s) calc(var(--delay, 0) * 1s) infinite steps(1);
          animation: flicker calc(var(--speed, 4) * 1s) calc(var(--delay, 0) * 1s) infinite steps(1);
  opacity: var(--opacity, 1);
  --speed: calc(var(--index) + 1);
  --delay: var(--index);
}
@-webkit-keyframes flicker {
  0%, 20% {
    --opacity: 0.25;
  }
  10%, 30%, 40%, 70%, 80%, 90%, 100% {
    --opacity: 1;
  }
}
@keyframes flicker {
  0%, 20% {
    --opacity: 0.25;
  }
  10%, 30%, 40%, 70%, 80%, 90%, 100% {
    --opacity: 1;
  }
}
.mountain {
  height: calc(var(--height) * 1vh);
  width: calc(var(--width) * 1vw);
  position: absolute;
  bottom: 50%;
  background: hsl(35, 0%, calc(var(--lightness) * 1%));
  left: 50%;
  -webkit-animation: backdrop calc(var(--speed) * 1s) calc(var(--delay) * -1s) infinite linear both;
          animation: backdrop calc(var(--speed) * 1s) calc(var(--delay) * -1s) infinite linear both;
}
.truck {
  position: relative;
  width: calc(var(--width) * 1px);
  height: calc(var(--width) * 0.33px);
}
.truck:after {
  content: '';
  height: 5%;
  width: 100%;
  background: #000;
  position: absolute;
  left: 0;
  bottom: 5%;
  border-radius: 100%;
  -webkit-filter: blur(10px);
          filter: blur(10px);
}
.truck__indicator {
  height: 2%;
  width: 3%;
  position: absolute;
  right: 1.5%;
  background: #915d08;
  top: 64%;
  opacity: 0.45;
  z-index: 10;
}
.truck__foglight {
  height: 2%;
  width: 1%;
  position: absolute;
  left: 2%;
  background: #911308;
  top: 58%;
  opacity: 0.45;
  z-index: 10;
}
.truck__taillight {
  height: 2%;
  width: 1%;
  background: radial-gradient(circle at center, #ffebeb, #f00), #f00;
  box-shadow: 0 0 30px 5px #f33;
  position: absolute;
  top: 25%;
  z-index: 10;
  left: 0;
}
.truck__taillight:after {
  content: '';
  height: 100%;
  width: 800%;
  background: #ff4d4d;
  position: absolute;
  right: 0;
  top: 0;
  border-radius: 25%;
  -webkit-filter: blur(8px);
          filter: blur(8px);
  box-shadow: 0 0 60px 5px #ff8080;
}
.truck__headlight {
  height: 5%;
  width: 4%;
  position: absolute;
  right: 0;
  border-radius: 25%;
  top: 42%;
  z-index: 10;
  -webkit-transform: rotate(4deg);
          transform: rotate(4deg);
  background: #fff;
  box-shadow: 0 0 40px 5px #9bf, 0 0 2px 2px #b3ccff inset;
}
.truck__headlight:after {
  content: '';
  position: absolute;
  top: 20%;
  left: 0;
  height: 60%;
  width: 100vw;
  background: linear-gradient(0deg, #9bf, #cfdefc, #9bf), #cdf;
  -webkit-filter: blur(6px);
          filter: blur(6px);
  box-shadow: 0 0 20px 5px #9bf, 0 0 80px 2px #9bf;
}
.truck__wheel {
  position: absolute;
}
.truck__wheel--front {
  height: 57%;
  width: 21%;
  bottom: 0;
  left: 75%;
  z-index: 4;
  -webkit-transform: rotate(2deg);
          transform: rotate(2deg);
}
.truck__wheel--rear {
  height: 57%;
  width: 21%;
  bottom: 2%;
  left: 10%;
  z-index: 4;
  -webkit-transform: rotate(2deg);
          transform: rotate(2deg);
}
.truck-wheel {
  border-radius: 100%;
  height: calc(var(--width) * 0.15px);
  width: calc(var(--width) * 0.15px);
  background: #242424;
  border-top: 1px solid #ccc;
  position: absolute;
  bottom: 0;
  left: 52%;
  -webkit-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
}
.truck-wheel__rim {
  height: 60%;
  width: 60%;
  background: radial-gradient(circle at center, transparent, #666), #0d0d0d;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  border-radius: 100%;
  -webkit-animation: spin 0.35s infinite linear;
          animation: spin 0.35s infinite linear;
}
.truck-wheel__rim:after {
  content: '';
  height: 35%;
  width: 35%;
  background: radial-gradient(circle at center, #0d0d0d, #0d0d0d 40%, transparent 40%), radial-gradient(circle at center, #262626, #262626 40%, transparent), #8c8c8c;
  border: 1px solid #1a1a1a;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  border-radius: 100%;
  z-index: 2;
}
@-webkit-keyframes spin {
  to {
    -webkit-transform: translate(-50%, -50%) rotate(360deg);
            transform: translate(-50%, -50%) rotate(360deg);
  }
}
@keyframes spin {
  to {
    -webkit-transform: translate(-50%, -50%) rotate(360deg);
            transform: translate(-50%, -50%) rotate(360deg);
  }
}
.truck-wheel__spoke {
  position: absolute;
  height: 60%;
  width: 20%;
  background: linear-gradient(0deg, transparent, #1a1a1a 50%), #808080;
  border-left: 1px solid #4d4d4d;
  border-right: 1px solid #333;
  border-radius: 0 0 25% 25%;
  top: 50%;
  left: 50%;
  -webkit-transform-origin: top center;
          transform-origin: top center;
  -webkit-transform: translate(-50%, 0) rotate(calc(360 / 7 * var(--index) * 1deg));
          transform: translate(-50%, 0) rotate(calc(360 / 7 * var(--index) * 1deg));
}
.truck__wheel-arch {
  background: #080808;
  position: absolute;
  top: 0;
  left: 0;
  right: 1%;
  height: 54%;
  -webkit-clip-path: polygon(0 100%, 23% 0, 81% 0%, 95% 60%, 95% 100%);
  clip-path: polygon(0 100%, 23% 0, 81% 0%, 95% 60%, 95% 100%);
}
.truck__wheel-arch-trim {
  position: absolute;
}
.truck__wheel-arch-trim--top {
  top: 0;
  left: 25%;
  background: #8c8c8c;
  height: 5%;
  width: 53%;
  z-index: 2;
}
.truck__wheel-arch-trim--left {
  top: 0;
  left: -20%;
  background: linear-gradient(160deg, transparent, #666), #333;
  height: 5%;
  width: 44%;
  -webkit-transform-origin: top right;
          transform-origin: top right;
  -webkit-transform: rotate(-60deg);
          transform: rotate(-60deg);
}
.truck__wheel-arch-trim--right {
  top: 0;
  left: 79%;
  background: linear-gradient(-158deg, transparent, #666), #333;
  height: 5%;
  width: 35%;
  -webkit-transform-origin: top left;
          transform-origin: top left;
  -webkit-transform: rotate(58deg);
          transform: rotate(58deg);
}
.truck__body {
  position: absolute;
  height: 100%;
  width: 100%;
}
.truck__body--top {
  background: linear-gradient(90deg, #f4f1f1, #bfbfbf 50%), #e8e3e3;
  height: 33%;
  width: 100%;
  top: 0;
  -webkit-transform: rotate(3deg);
          transform: rotate(3deg);
  -webkit-clip-path: polygon(0 100%, 58% 0, 98% 100%);
  clip-path: polygon(0 100%, 58% 0, 98% 100%);
}
.truck__body--top:before {
  --groove: #999;
  content: '';
  background: linear-gradient(95deg, transparent, transparent 2%, var(--groove) 2%, var(--groove) 3%, transparent 3%), linear-gradient(75deg, transparent, transparent 47%, var(--groove) 47%, var(--groove) 48%, transparent 48%), linear-gradient(78deg, transparent, transparent 95%, var(--groove) 95%, var(--groove) 96%, transparent 96%);
  position: absolute;
  height: 55%;
  width: 40%;
  left: 36%;
  bottom: 0;
  -webkit-clip-path: polygon(0 100%, 0 0, 100% 58%, 100% 100%);
  clip-path: polygon(0 100%, 0 0, 100% 58%, 100% 100%);
}
.truck__body--mid {
  position: absolute;
  width: 100%;
  height: 36%;
  top: 25%;
  -webkit-transform: rotate(3deg);
          transform: rotate(3deg);
  -webkit-transform-origin: top left;
          transform-origin: top left;
  z-index: 2;
}
.truck__body--mid:after {
  content: '';
  position: absolute;
  background: #1f1f1f;
  height: 20%;
  width: 5%;
  bottom: 20%;
  right: -0.25%;
  opacity: 1;
  border-left: 1px solid #1a1a1a;
}
.truck__body--mid:before {
  content: '';
  position: absolute;
  background: #0f0f0f;
  height: 20%;
  width: 5%;
  bottom: 5%;
  right: 0%;
  border-radius: 0 0 50% 25%;
  border-left: 1px solid #141414;
}
.truck__body--bottom {
  top: 50%;
  height: 32%;
}
.truck__rear-bumper {
  position: absolute;
  height: 1px;
  width: 9%;
  background: #808080;
  top: 38%;
  left: 2.5%;
  -webkit-transform-origin: top left;
          transform-origin: top left;
  -webkit-transform: rotate(3deg);
          transform: rotate(3deg);
}
.truck__side-skirt {
  height: 1px;
  width: 43%;
  position: absolute;
  bottom: 19%;
  left: 32%;
  -webkit-transform-origin: top left;
          transform-origin: top left;
  -webkit-transform: rotate(1deg);
          transform: rotate(1deg);
  background: #808080;
}
.truck__underpanel {
  background: #080808;
  height: 65%;
  width: 100%;
  position: absolute;
  bottom: 0;
  -webkit-clip-path: polygon(2% 0, 14% 100%, 88% 100%, 99% 60%, 99% 40%);
  clip-path: polygon(2% 0, 14% 100%, 88% 100%, 99% 60%, 99% 40%);
}
.truck__mid-body {
  --groove: #262626;
  height: 100%;
  width: 100%;
  background: linear-gradient(84deg, transparent, transparent 36.75%, var(--groove) 36.75%, var(--groove) 37.25%, transparent 37.25%), linear-gradient(83deg, transparent, transparent 55.75%, var(--groove) 55.75%, var(--groove) 56.25%, transparent 56.25%), linear-gradient(88deg, transparent, transparent 75%, var(--groove) 75%, var(--groove) 75.5%, transparent 75.5%), linear-gradient(90deg, transparent, transparent 96%, #1f1f1f 96%), linear-gradient(90deg, transparent, #262626), #333;
  -webkit-clip-path: polygon(0 0, 3% 100%, 80% 84%, 99.5% 78%, 100% 10%, 98% 0);
  clip-path: polygon(0 0, 3% 100%, 80% 84%, 99.5% 78%, 100% 10%, 98% 0);
}
.truck__mid-body:after,
.truck__mid-body:before {
  content: '';
  position: absolute;
  width: 4%;
  height: 4%;
  left: 38%;
  top: 6%;
  border: 1px solid #4d4d4d;
  border-radius: 25%;
}
.truck__mid-body:before {
  left: 58%;
}
.truck__window {
  --window-black: rgba(0,0,0,0.85);
  --window-white: rgba(255,255,255,0.3);
  position: absolute;
  height: 80%;
  width: 60%;
  background: #000;
  left: 37%;
  -webkit-transform: skew(-5deg);
          transform: skew(-5deg);
  -webkit-clip-path: polygon(0 100%, 0 55%, 34.5% 11%, 85% 108%);
  clip-path: polygon(0 100%, 0 55%, 34.5% 11%, 85% 108%);
}
.truck__window-glass {
  background: linear-gradient(0deg, var(--window-black) 0, var(--window-black) 15%, transparent 15%), linear-gradient(90deg, transparent, var(--window-black) 90%), linear-gradient(90deg, var(--window-white), transparent 80%), linear-gradient(68deg, transparent, transparent 30%, var(--window-black) 30%, var(--window-black) 31%, transparent 31%, transparent 55%, var(--window-black) 55%, var(--window-black) 56%, transparent 56%), var(--window-white);
  position: absolute;
  top: 55%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  height: 88%;
  width: 98%;
  -webkit-clip-path: polygon(0 100%, 0 55%, 34.5% 11%, 85% 105%);
  clip-path: polygon(0 100%, 0 55%, 34.5% 11%, 85% 105%);
}
.truck__window:before {
  content: '';
  background: #000;
  position: absolute;
  height: 10%;
  width: 100%;
  bottom: 0;
  -webkit-transform: rotate(2deg);
          transform: rotate(2deg);
  z-index: -1;
  -webkit-clip-path: polygon(40% 100%, 100% -100%, 100% 100%);
  clip-path: polygon(40% 100%, 100% -100%, 100% 100%);
}
@-webkit-keyframes backdrop {
  from {
    -webkit-transform: translate(calc(var(--distance) * 1vw), 0);
            transform: translate(calc(var(--distance) * 1vw), 0);
  }
  to {
    -webkit-transform: translate(calc(var(--distance) * -1vw), 0);
            transform: translate(calc(var(--distance) * -1vw), 0);
  }
}
@keyframes backdrop {
  from {
    -webkit-transform: translate(calc(var(--distance) * 1vw), 0);
    transform: translate(calc(var(--distance) * 1vw), 0);
  }
  to {
    -webkit-transform: translate(calc(var(--distance) * -1vw), 0);
            transform: translate(calc(var(--distance) * -1vw), 0);
  }
}


</style>

</head>
<body>
<div class="title"><span data-char="C" style="--index: 0;">C</span><span data-char="Y" style="--index: 1;">Y</span><span data-char="B" style="--index: 2;">B</span><span data-char="R" style="--index: 3;">R</span><span data-char="T" style="--index: 4;">T</span><span data-char="R" style="--index: 5;">R</span><span data-char="K" style="--index: 6;">K</span>
</div>
<div class="backdrop">
  <div class="mountain" style="--lightness: 5; --height: 29; --width: 18; --speed: 22; --distance: 156; --delay: 19;"></div>
  <div class="mountain" style="--lightness: 6; --height: 15; --width: 29; --speed: 32; --distance: 154; --delay: 20;"></div>
  <div class="mountain" style="--lightness: 8; --height: 37; --width: 20; --speed: 11; --distance: 195; --delay: 10;"></div>
  <div class="mountain" style="--lightness: 2; --height: 25; --width: 33; --speed: 24; --distance: 194; --delay: 50;"></div>
  <div class="mountain" style="--lightness: 8; --height: 20; --width: 20; --speed: 40; --distance: 168; --delay: 22;"></div>
  <div class="mountain" style="--lightness: 8; --height: 40; --width: 28; --speed: 19; --distance: 177; --delay: 29;"></div>
  <div class="mountain" style="--lightness: 4; --height: 19; --width: 22; --speed: 17; --distance: 163; --delay: 44;"></div>
  <div class="mountain" style="--lightness: 7; --height: 27; --width: 15; --speed: 20; --distance: 170; --delay: 21;"></div>
  <div class="mountain" style="--lightness: 7; --height: 16; --width: 15; --speed: 34; --distance: 172; --delay: 39;"></div>
  <div class="mountain" style="--lightness: 2; --height: 43; --width: 14; --speed: 45; --distance: 153; --delay: 29;"></div>
</div>
<div class="truck">
  <div class="truck__body">
    <div class="truck__body truck__body--top">
      <div class="truck__window">
        <div class="truck__window-glass"></div>
      </div>
    </div>
    <div class="truck__body truck__body--mid">
      <div class="truck__mid-body"></div>
    </div>
    <div class="truck__body truck__body--bottom">
      <div class="truck__underpanel"></div>
      <div class="truck__rear-bumper"></div>
      <div class="truck__side-skirt"></div>
    </div>
  </div>
  <div class="truck__wheel truck__wheel--front">
    <div class="truck__wheel-arch"></div>
    <div class="truck__wheel-arch-trim truck__wheel-arch-trim--top"></div>
    <div class="truck__wheel-arch-trim truck__wheel-arch-trim--left"></div>
    <div class="truck__wheel-arch-trim truck__wheel-arch-trim--right"></div>
    <div class="truck-wheel">
      <div class="truck-wheel__rim">
        <div class="truck-wheel__spoke" style="--index: 0;"></div>
        <div class="truck-wheel__spoke" style="--index: 1;"></div>
        <div class="truck-wheel__spoke" style="--index: 2;"></div>
        <div class="truck-wheel__spoke" style="--index: 3;"></div>
        <div class="truck-wheel__spoke" style="--index: 4;"></div>
        <div class="truck-wheel__spoke" style="--index: 5;"></div>
        <div class="truck-wheel__spoke" style="--index: 6;"></div>
      </div>
    </div>
  </div>
  <div class="truck__wheel truck__wheel--rear">
    <div class="truck__wheel-arch"></div>
    <div class="truck__wheel-arch-trim truck__wheel-arch-trim--top"></div>
    <div class="truck__wheel-arch-trim truck__wheel-arch-trim--left"></div>
    <div class="truck__wheel-arch-trim truck__wheel-arch-trim--right"></div>
    <div class="truck-wheel">
      <div class="truck-wheel__rim">
        <div class="truck-wheel__spoke" style="--index: 0;"></div>
        <div class="truck-wheel__spoke" style="--index: 1;"></div>
        <div class="truck-wheel__spoke" style="--index: 2;"></div>
        <div class="truck-wheel__spoke" style="--index: 3;"></div>
        <div class="truck-wheel__spoke" style="--index: 4;"></div>
        <div class="truck-wheel__spoke" style="--index: 5;"></div>
        <div class="truck-wheel__spoke" style="--index: 6;"></div>
      </div>
    </div>
  </div>
  <div class="truck__headlight"></div>
  <div class="truck__taillight"></div>
  <div class="truck__indicator"></div>
  <div class="truck__foglight"></div>
</div>
</body>
</html>