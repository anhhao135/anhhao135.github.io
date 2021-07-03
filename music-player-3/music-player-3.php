<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="music-player-3.css">

</head>

<body>

<div class="c-containter">
        <div class="music-container">
            <section class="album-cover">
                
                <button class="arrow left" id="prev">
                    <img src="https://snowleo208.github.io/100-Days-of-Code/7.%20Music%20Player/img/arrow_left.svg" alt="Next Music">
                </button>
                <img src="http://res.cloudinary.com/dkzj4hdmd/image/upload/v1536400483/cover_yz2mak.jpg" class="cover" alt="From One To Nine by Marcel Pequel">
                
                <button class="arrow right" id="next">
                    <img src="https://snowleo208.github.io/100-Days-of-Code/7.%20Music%20Player/img/arrow_right.svg" alt="Next Music">
                </button>
            </section>
            <section class="music-player">
                <h1 class="music-player__title"></h1>
                <h2 class="music-player__author"></h2>
                <div class="music-time">
                    <p class="music-time__current"></p>
                    <p class="music-time__last"></p>
                </div>
                <div class="music-bar" id="progress">
                    <div id="length"></div>
                </div>
                <div class="music-order">
                    <div class="music-order__loop is-loop" id="loop">
                        <img src="https://snowleo208.github.io/100-Days-of-Code/7.%20Music%20Player/img/loop.svg" alt="Loop music">
                    </div>
                    <div class="music-order__shuffle" id="shuffle">
                        <img src="https://snowleo208.github.io/100-Days-of-Code/7.%20Music%20Player/img/shuffle.svg" alt="Shuffle music">
                    </div>
                </div>
                <div class="music-control">
                    <div class="music-control__backward" id="backward">
                        <img src="https://snowleo208.github.io/100-Days-of-Code/7.%20Music%20Player/img/backward.svg" alt="Backward">
                    </div>
                    <div class="music-control__play" id="play">
                        <img src="https://snowleo208.github.io/100-Days-of-Code/7.%20Music%20Player/img/play.svg" alt="Play" class="play">
                    </div>
                    <div class="music-control__forward" id="forward">
                        <img src="https://snowleo208.github.io/100-Days-of-Code/7.%20Music%20Player/img/forward.svg" alt="Forward">
                    </div>
                </div>
            </section>
        </div>
        <p class="disclaimer">Music by Marcel Pequel and audio from <a href="http://freemusicarchive.org/music/Marcel_Pequel/From_One_To_Nine/" target="_blank" rel="noopener">Free Music Archive</a>. Design idea from <a href="https://dribbble.com/shots/2315906-Music-player-PSD-freebie-dailyui-Day-009" target="_blank" rel="noopener">Dima Blover</a></p>
    </div>
</div>


<script src="music-player-3.js"></script>

</body>
</html>