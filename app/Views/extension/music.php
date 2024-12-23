
<div class="player" style="position: relative; margin-top: 100px;">
	<span id="arm"></span>
	<ul>
		<li class="artwork">
		</li>
		<li class="info">
			<h1 id="artist" class="mt-2">loading</h1>
			<h4 id="album" class="mt-2">loading</h4>
			<h2 id="song">loading</h2>
			<div class="button-items">
				<audio id="music" preload="auto">
				</audio>
				<div id="slider">
					<div id="elapsed"></div>
					<div id="buffered"></div>
				</div>
				<p id="timer">0:00</p>
				<div class="controls">
					<span class="expend">
						<svg id="previous" class="step-backward" viewBox="0 0 25 25" xml:space="preserve">
							<g>
								<polygon points="4.9,4.3 9,4.3 9,11.6 21.4,4.3 21.4,20.7 9,13.4 9,20.7 4.9,20.7"/>
							</g>
						</svg>
					</span>
					<svg id="play" viewBox="0 0 25 25" xml:space="preserve">
						<defs>
							<rect x="-49.5" y="-132.9" width="446.4" height="366.4"/>
						</defs>
						<g>
							<circle fill="none" cx="12.5" cy="12.5" r="10.8"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M8.7,6.9V18c0,0,0.2,1.4,1.8,0l8.1-4.8c0,0,1.2-1.1-1-2L9.8,6.5 C9.8,6.5,9.1,6,8.7,6.9z"/>
						</g>
					</svg>
					<svg id="pause" viewBox="0 0 25 25" xml:space="preserve">
						<g>
							<rect x="6" y="4.6" width="3.8" height="15.7"/>
							<rect x="14" y="4.6" width="3.9" height="15.7"/>
						</g>
					</svg>
					<span class="expend">
						<svg id="next" class="step-foreward" viewBox="0 0 25 25" xml:space="preserve">
							<g>
								<polygon points="20.7,4.3 16.6,4.3 16.6,11.6 4.3,4.3 4.3,20.7 16.7,13.4 16.6,20.7 20.7,20.7"/>
							</g>
						</svg>
					</span>
					<div class="slider">
						<div class="volume"></div>
						<input type="range" id="volume" min="0" max="1" step="0.01" value="1" />
					</div>
				</div>
			</div>
		</li>
	</ul>
    <div id="lyrics-container" class="lyrics"></div>
</div>



<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

.lyrics { 
    font-size: 20px; 
    text-align: center; 
    margin-top: 65px; 
    background-color: #5e0984;
    height: 30px;
    width: 280px;
    border-radius: 40px;
    position: absolute;
    top: 70%;
    left: 12%;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.7);
}

.lyrics-active { color: #fff; font-weight: bold; display: block; }
.lyrics-hidden { display: none; }

.player h1 {
	font-family: 'Open Sans', sans-serif;
	font-size: 8pt;
	font-weight: 600;
	text-transform: uppercase;
	color: rgb(255, 255, 255);
	cursor: default;
}
.player h4 {
	font-family: 'Open Sans', sans-serif;
	font-size: 8pt;
	font-weight: 400;
	cursor: default;
}
.player h2 {
	font-family: 'Open Sans', sans-serif;
	font-size: 12pt;
	font-weight: 300;
	color: rgb(255, 255, 255);
	cursor: default;
	letter-spacing: -0.5px;
}
.player {
	height: 190px;
	width: 320px;
	margin: 0;
	background-color: #5e0984;
	position: absolute;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	-webkit-transform: translate(-50%, -50%);
	border-radius: 5px;
	border-top-left-radius: 100px;
	border-bottom-left-radius: 100px;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.8);
}
.player ul {
	list-style: none;
}
.player ul li {
	display: inline-block;
}
#arm{
	width: 90px;
	height: 90px;
	position: absolute;
	z-index: 1;
	top: 15px;
	left: 110px;
	transform-origin: 77.5% 18.5%;
	transform: rotate(-45deg);
	background-image: url(https://i.imgur.com/Bzzqadh.png);
	background-size: cover;
}
.artwork {
	position: absolute;
	top: 0;
	left: 0;
	height: 190px;
	width: 190px;
	background: url(https://i.imgur.com/3idGgyU.png), url(https://i.imgur.com/Fu2Oezw.png) center no-repeat;
	background-size: 190px, 75px !important;
}
.artwork img {
  position: absolute;
  height: 72px;
  width: 72px;
  border-radius: 50px;
  top: 59px;
  left: 59px;
}
.info h1 {
	margin: 0 0 -10px;
	margin-left: 180px;
	width: 182px;
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
}
.info h4 {
	line-height: 20px;
	color: rgb(99, 99, 103);
	margin-left: 180px;
	width: 182px;
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
}
.info h2 {
	margin-left: 180px;
	width: 182px;
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
}
.button-items {
	margin-left: 180px;
}
#slider {
	width: 100px;
	height: 4px;
	background: rgb(21, 21, 24);
	border-radius: 2px;
	overflow: hidden;
}
#slider #elapsed {
	width: 0px;
	height: 4px;
	background: #fff;
	border-radius: 2px;
}
#slider #buffered {
	width: 0px;
	height: 4px;
	background: rgba(239, 109, 188, 0.3);
	border-radius: 2px;
	margin-top: -4px;
}
#timer {
	color: #fff;
	line-height: 0;
	font-size: 9pt;
	float: right;
	font-family: Arial, Sans-Serif;
    position: absolute;
    top: 110px;
    right: 10px;
}
.controls {
	margin-top: 60px;
}
.controls svg:nth-child(2) {
	margin-left: 5px;
	margin-right: 5px;
}
#play {
	padding: 0 3px;
	margin: 0 0 4px 2px;
	width: 30px;
	height: 30px;
	x: 0px;
	y: 0px;
	enable-background: new 0 0 25 25;
}
#play g {
	stroke: rgb(254, 254, 254);
	stroke-width: 1;
	stroke-miterlimit: 10;
}
#play g path {
	fill: rgb(254, 254, 254);
}

#play:hover {
	cursor: pointer;
}
#play:hover g {
	stroke: #000;
	cursor: pointer;
}
#play:hover g path {
	fill: #000;
	cursor: pointer;
}
.step-backward {
	width: 18px;
	height: 18px;
	x: 0px;
	y: 0px;
	enable-background: new 0 0 25 25;
	margin-bottom: 5px;
}
.step-backward g polygon, .step-foreward g polygon {
	fill: rgb(254, 254, 254);
}
.step-foreward {
	width: 18px;
	height: 18px;
	x: 0px;
	y: 0px;
	enable-background: new 0 0 25 25;
	margin-bottom: 5px;
}
#pause {
	x: 0px;
	y: 0px;
	enable-background: new 0 0 25 25;
	width: 22px;
	height: 22px;
	position: absolute;
	margin-top: 4px;
	margin-left: -30px;
	cursor: pointer;
}
#pause rect {
	fill: rgb(255, 255, 255);
}

#pause:hover rect {
	fill: #000;
}
.expend {
	padding: 0.5px;
	cursor: pointer;
}
.expend svg:hover g polygon {
	fill: #000;
	cursor: pointer;
}
.slider {
	width: 77px;
	position: absolute;
	top: 130px;
	right: 32px;
	display: inline-block;
	margin: 4px 0 0 10px;
}
.slider .volume{
	width: 10px;
	height: 4px;
	border-top-left-radius: 2px;
	border-bottom-left-radius: 2px;
	margin-top: 10px;
	position: inherit;
	pointer-events: none;
}
@-moz-document url-prefix() {
	.slider .volume{
		margin-top: 11px;
	}
}
input[type="range"] {
	-webkit-appearance: none;
	-webkit-tap-highlight-color: rgba(255, 255, 255, 0);
	width: 100%;
	height: 4px;
	margin: 0;
	border: none;
	border-radius: 14px;
	padding: 0px 1px;
	background: rgb(21, 21, 24);
	outline: none;	
}
input[type="range"]::-moz-range-track {
	border: inherit;
	background: rgba(0, 0, 0, 0);
}
input[type="range"]::-ms-track {
	border: inherit;
	color: rgba(0, 0, 0, 0);
	background: rgba(0, 0, 0, 0);
}
input[type="range"]::-ms-fill-lower, input[type="range"]::-ms-fill-upper {
	background: rgba(0, 0, 0, 0);
}
input[type="range"]::-ms-tooltip {
	display: none;
}
input[type="range"]::-webkit-slider-thumb {
	-webkit-appearance: none;
	width: 12px;
	height: 12px;
	border: none;
	border-radius: 6px;
	background-color: rgb(255, 255, 255);
}
input[type="range"]::-moz-range-thumb {
	width: 12px;
	height: 12px;
	border: none;
	border-radius: 6px;
	background-color: rgb(255, 255, 255);
}
input[type="range"]::-ms-thumb {
	width: 12px;
	height: 12px;
	border-radius: 6px;
	border: 0;
	background-color: rgb(255, 255, 255);
}
input[type="range"]::-webkit-slider-thumb:hover, input[type="range"]::-webkit-slider-thumb:focus, input[type="range"]::-webkit-slider-thumb:active {
	background-color: #000;
}
input[type="range"]::-moz-range-thumb:hover, input[type="range"]::-moz-range-thumb:focus, input[type="range"]::-moz-range-thumb:active {
	background-color: #000;
}
input[type="range"]::-ms-thumb:hover, input[type="range"]::-ms-thumb:focus, input[type="range"]::-ms-thumb:active {
	background-color: #000;
}
</style>

<script>
/* Music 
======================================*/
var playlist = [
	{
		"song"    : "Lagu<br>Kemenangan",
		"album"   : "YounionCollective",
		"artist"  : "Zidan - Rere",
		"artwork" : "<?= base_url('image/music.png') ?>",
		"mp3"     : "<?= base_url('mp3/music.mp3') ?>"
	}
];

/* General Load / Variables
======================================*/
var rot = 0;
var duration;
var playPercent;
var rotate_timer;
var armrot = -45;
var bufferPercent;
var currentSong = 0;
var arm_rotate_timer;
var arm = document.getElementById("arm");
var next = document.getElementById("next");
var song = document.getElementById("song");
var timer = document.getElementById("timer");
var music = document.getElementById("music");
var album = document.getElementById("album");
var artist = document.getElementById("artist");
var volume = document.getElementById("volume");
var playButton = document.getElementById("play");
var timeline = document.getElementById("slider");
var playhead = document.getElementById("elapsed");
var previous = document.getElementById("previous");
var pauseButton = document.getElementById("pause");
var bufferhead = document.getElementById("buffered");
var artwork = document.getElementsByClassName("artwork")[0];
var timelineWidth = timeline.offsetWidth - playhead.offsetWidth;
var visablevolume = document.getElementsByClassName("volume")[0];

music.addEventListener("ended", _next, false);
music.addEventListener("timeupdate", timeUpdate, false);
music.addEventListener("progress", 	bufferUpdate, false);
load();

/* Functions
======================================*/
function load(){
	pauseButton.style.visibility = "hidden";
	song.innerHTML = playlist[currentSong]['song'];
	song.title = playlist[currentSong]['song'];
	album.innerHTML = playlist[currentSong]['album'];
	album.title = playlist[currentSong]['album'];
	artist.innerHTML = playlist[currentSong]['artist'];
	artist.title = playlist[currentSong]['artist'];
	artwork.setAttribute("style", "background:url(https://i.imgur.com/3idGgyU.png), url('"+playlist[currentSong]['artwork']+"') center no-repeat;");
	music.innerHTML = '<source src="'+playlist[currentSong]['mp3']+'" type="audio/mp3">';
	music.load();
}
function reset(){ 
	rotate_reset = setInterval(function(){ 
		Rotate();
		if(rot == 0){
			clearTimeout(rotate_reset);
		}
	}, 1);
	fireEvent(pauseButton, 'click');
	armrot = -45;
	playhead.style.width = "0px";
	bufferhead.style.width = "0px";
	timer.innerHTML = "0:00";
	music.innerHTML = "";
	currentSong = 0; // set to first song, to stay on last song: currentSong = playlist.length - 1;
	song.innerHTML = playlist[currentSong]['song'];
	song.title = playlist[currentSong]['song'];
	album.innerHTML = playlist[currentSong]['album'];
	album.title = playlist[currentSong]['album'];
	artist.innerHTML = playlist[currentSong]['artist'];
	artist.title = playlist[currentSong]['artist'];
	artwork.setAttribute("style", "background:url(https://i.imgur.com/3idGgyU.png), url('"+playlist[currentSong]['artwork']+"') center no-repeat;");
	music.innerHTML = '<source src="'+playlist[currentSong]['mp3']+'" type="audio/mp3">';
	music.load();
}
function formatSecondsAsTime(secs, format) {
  var hr  = Math.floor(secs / 3600);
  var min = Math.floor((secs - (hr * 3600))/60);
  var sec = Math.floor(secs - (hr * 3600) -  (min * 60));
  if (sec < 10){ 
    sec  = "0" + sec;
  }
  return min + ':' + sec;
}
function timeUpdate() {
	bufferUpdate();
	playPercent = timelineWidth * (music.currentTime / duration);
	playhead.style.width = playPercent + "px";
	timer.innerHTML = formatSecondsAsTime(music.currentTime.toString());
}
function bufferUpdate() {
	bufferPercent = timelineWidth * (music.buffered.end(0) / duration);
	bufferhead.style.width = bufferPercent + "px";
}
function Rotate(){
	if(rot == 361){
		artwork.style.transform = 'rotate(0deg)';
		rot = 0;
	} else {
		artwork.style.transform = 'rotate('+rot+'deg)';
		rot++;
	}
}
function RotateArm(){
	if(armrot > -12){
		arm.style.transform = 'rotate(-38deg)';
		armrot = -45;
	} else {
		arm.style.transform = 'rotate('+armrot+'deg)';
		armrot = armrot + (26 / duration);
	}
}
function fireEvent(el, etype){
	if (el.fireEvent) {
		el.fireEvent('on' + etype);
	} else {
		var evObj = document.createEvent('Events');
		evObj.initEvent(etype, true, false);
		el.dispatchEvent(evObj);
	}
}
function _next(){
	if(currentSong == playlist.length - 1){
		reset();
	} else {
		fireEvent(next, 'click');
	}
}
playButton.onclick = function() {
	music.play();
}
pauseButton.onclick = function() {
	music.pause();
}
music.addEventListener("play", function () {
	playButton.style.visibility = "hidden";
	pause.style.visibility = "visible";
	rotate_timer = setInterval(function(){ 
		if(!music.paused && !music.ended && 0 < music.currentTime){
			Rotate();
		}
	}, 10);	
	if(armrot != -45){
		arm.setAttribute("style", "transition: transform 800ms;");
		arm.style.transform = 'rotate('+armrot+'deg)';
	}
	arm_rotate_timer = setInterval(function(){ 
		if(!music.paused && !music.ended && 0 < music.currentTime){
			if(armrot == -45){
				arm.setAttribute("style", "transition: transform 800ms;");
				arm.style.transform = 'rotate(-38deg)';
				armrot = -38;
			}
			if(arm.style.transition != ""){
				setTimeout(function(){
					arm.style.transition = "";
				}, 1000);
			}
			RotateArm();
		}
	}, 1000);
}, false);
music.addEventListener("pause", function () {
	arm.setAttribute("style", "transition: transform 800ms;");
	arm.style.transform = 'rotate(-45deg)';
	playButton.style.visibility = "visible";
	pause.style.visibility = "hidden";
	clearTimeout(rotate_timer);
	clearTimeout(arm_rotate_timer);
}, false);
next.onclick = function(){
	arm.setAttribute("style", "transition: transform 800ms;");
	arm.style.transform = 'rotate(-45deg)';
	clearTimeout(rotate_timer);
	clearTimeout(arm_rotate_timer);
	playhead.style.width = "0px";
	bufferhead.style.width = "0px";
	timer.innerHTML = "0:00";
	music.innerHTML = "";
	arm.style.transform = 'rotate(-45deg)';
	armrot = -45;
	if((currentSong + 1) == playlist.length){
		currentSong = 0;
		music.innerHTML = '<source src="'+playlist[currentSong]['mp3']+'" type="audio/mp3">';
	} else {
		currentSong++;
		music.innerHTML = '<source src="'+playlist[currentSong]['mp3']+'" type="audio/mp3">';
	}
	song.innerHTML = playlist[currentSong]['song'];
	song.title = playlist[currentSong]['song'];
	album.innerHTML = playlist[currentSong]['album'];
	album.title = playlist[currentSong]['album'];
	artist.innerHTML = playlist[currentSong]['artist'];
	artist.title = playlist[currentSong]['artist'];
	artwork.setAttribute("style", "transform: rotate("+rot+"deg); background:url(https://i.imgur.com/3idGgyU.png), url('"+playlist[currentSong]['artwork']+"') center no-repeat;");
	music.load();
	duration = music.duration;
	music.play();
}
previous.onclick = function(){
	arm.setAttribute("style", "transition: transform 800ms;");
	arm.style.transform = 'rotate(-45deg)';
	clearTimeout(rotate_timer);
	clearTimeout(arm_rotate_timer);
	playhead.style.width = "0px";
	bufferhead.style.width = "0px";
	timer.innerHTML = "0:00";
	music.innerHTML = "";
	arm.style.transform = 'rotate(-45deg)';
	armrot = -45;
	if((currentSong - 1) == -1){
		currentSong = playlist.length - 1;
		music.innerHTML = '<source src="'+playlist[currentSong]['mp3']+'" type="audio/mp3">';
	} else {
		currentSong--;
		music.innerHTML = '<source src="'+playlist[currentSong]['mp3']+'" type="audio/mp3">';
	}
	song.innerHTML = playlist[currentSong]['song'];
	song.title = playlist[currentSong]['song'];
	album.innerHTML = playlist[currentSong]['album'];
	album.title = playlist[currentSong]['album'];
	artist.innerHTML = playlist[currentSong]['artist'];
	artist.title = playlist[currentSong]['artist'];
	artwork.setAttribute("style", "transform: rotate("+rot+"deg); background:url(https://i.imgur.com/3idGgyU.png), url('"+playlist[currentSong]['artwork']+"') center no-repeat;");
	music.load();
	duration = music.duration;
	music.play();
}
volume.oninput = function(){
	music.volume = volume.value;
	visablevolume.style.width = (80 - 11) * volume.value + "px";
}
music.addEventListener("canplay", function () {
	duration = music.duration;
}, false);

const audio = document.getElementById('music');
const lyricsContainer = document.getElementById('lyrics-container');

// Memuat file JSON
fetch('<?= base_url('json/music.json') ?>')
    .then(response => response.json())
    .then(data => {
        const lyrics = data.lyrics;
        
        // Tambahkan teks lirik ke halaman
        lyrics.forEach((line, index) => {
            const p = document.createElement('p');
            p.textContent = line.text;
            p.id = `line-${index}`;
            p.classList.add('lyrics-hidden');
            lyricsContainer.appendChild(p);
        });

        // Sinkronisasi dengan waktu lagu
        audio.addEventListener('timeupdate', () => {
            lyrics.forEach((line, index) => {
                const currentLine = document.getElementById(`line-${index}`);
                const nextLine = lyrics[index + 1];

                if (audio.currentTime >= line.time && (!nextLine || audio.currentTime < nextLine.time)) {
                    currentLine.classList.add('lyrics-active');
                    currentLine.classList.remove('lyrics-hidden');
                } else {
                    currentLine.classList.remove('lyrics-active');
                    currentLine.classList.add('lyrics-hidden');
                }
            });
        });
    });

</script>

<script>
    const screenWidth = window.innerWidth;
    document.querySelector('.lp-music').style.width = `${screenWidth}px`;
    window.addEventListener('resize', () => {
        const newScreenWidth = window.innerWidth;
        document.querySelector('.lp-music').style.width = `${newScreenWidth}px`;
    });
</script>