<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="music-player-2.css">

</head>

<body>

<div class="player">

    <div class="player__header">

      <div class="player__img player__img--absolute slider">

        <button class="player__button player__button--absolute--nw playlist">

          <img src="http://physical-authority.surge.sh/imgs/icon/playlist.svg" alt="playlist-icon">

        </button>

        <button class="player__button player__button--absolute--center play">

          <img src="http://physical-authority.surge.sh/imgs/icon/play.svg" alt="play-icon">
          <img src="http://physical-authority.surge.sh/imgs/icon/pause.svg" alt="pause-icon">

        </button>

        <div class="slider__content">

          <img class="img slider__img" src="http://physical-authority.surge.sh/imgs/1.jpg" alt="cover">
          <img class="img slider__img" src="http://physical-authority.surge.sh/imgs/2.jpg" alt="cover">
          <img class="img slider__img" src="http://physical-authority.surge.sh/imgs/3.jpg" alt="cover">
          <img class="img slider__img" src="http://physical-authority.surge.sh/imgs/4.jpg" alt="cover">
          <img class="img slider__img" src="http://physical-authority.surge.sh/imgs/5.jpg" alt="cover">
          <img class="img slider__img" src="http://physical-authority.surge.sh/imgs/6.jpg" alt="cover">
          <img class="img slider__img" src="http://physical-authority.surge.sh/imgs/7.jpg" alt="cover">

        </div>

      </div>

      <div class="player__controls">

        <button class="player__button back">

          <img class="img" src="http://physical-authority.surge.sh/imgs/icon/back.svg" alt="back-icon">

        </button>
        
        <p class="player__context slider__context">

          <strong class="slider__name"></strong>
          <span class="player__title slider__title"></span>

        </p>

        <button class="player__button next">

          <img class="img" src="http://physical-authority.surge.sh/imgs/icon/next.svg" alt="next-icon">

        </button>

        <div class="progres">

          <div class="progres__filled"></div>

        </div>

      </div>

    </div>

    <ul class="player__playlist list">

      <li class="player__song">

        <img class="player__img img" src="http://physical-authority.surge.sh/imgs/1.jpg" alt="cover">

        <p class="player__context">

          <b class="player__song-name">no time</b>
          <span class="flex">

            <span class="player__title">lastlings</span>
            <span class="player__song-time"></span>

          </span>

        </p>

        <audio class="audio" src="http://physical-authority.surge.sh/music/1.mp3"></audio>

      </li>

      <li class="player__song">

        <img class="player__img img" src="http://physical-authority.surge.sh/imgs/2.jpg" alt="cover">

        <p class="player__context">

          <b class="player__song-name">blinding lights</b>
          <span class="flex">

            <span class="player__title">the weeknd</span>
            <span class="player__song-time"></span>

          </span>
          
        </p>

        <audio class="audio" src="http://physical-authority.surge.sh/music/2.mp3"></audio>

      </li>

      <li class="player__song">

        <img class="player__img img" src="http://physical-authority.surge.sh/imgs/3.jpg" alt="cover">

        <p class="player__context">

          <b class="player__song-name">джованна</b>
          <span class="flex">

            <span class="player__title">enrasta</span>
            <span class="player__song-time"></span>

          </span>
            
        </p>

        <audio class="audio" src="http://physical-authority.surge.sh/music/3.mp3"></audio>

      </li>

      <li class="player__song">

        <img class="player__img img" src="http://physical-authority.surge.sh/imgs/4.jpg" alt="cover">

        <p class="player__context">

          <b class="player__song-name">a man</b>
          <span class="flex">

            <span class="player__title">travis scott</span>
            <span class="player__song-time"></span>

          </span>
          
        </p>

        <audio class="audio" src="http://physical-authority.surge.sh/music/4.mp3"></audio>

      </li>

      <li class="player__song">

        <img class="player__img img" src="http://physical-authority.surge.sh/imgs/5.jpg" alt="cover">

        <p class="player__context ">

          <b class="player__song-name">unforgetting</b>
          <span class="flex">

            <span class="player__title">zaxx</span>
            <span class="player__song-time"></span>

          </span>

        </p>

        <audio class="audio" src="http://physical-authority.surge.sh/music/5.mp3"></audio>

      </li>

      <li class="player__song">

        <img class="player__img img" src="http://physical-authority.surge.sh/imgs/6.jpg" alt="cover">

        <p class="player__context">

          <b class="player__song-name">waharan</b>
          <span class="flex">

            <span class="player__title">Randall</span>
            <span class="player__song-time"></span>

          </span>

        </p>

        <audio class="audio" src="http://physical-authority.surge.sh/music/6.mp3"></audio>

      </li>

      <li class="player__song">

        <img class="player__img img" src="http://physical-authority.surge.sh/imgs/7.jpg" alt="cover">

        <p class="player__context ">

          <b class="player__song-name">starlight feat mr gabriel <span class="uppercase">4am</span> remix</b>
          <span class="flex">

            <span class="player__title">jai wolf</span>
            <span class="player__song-time"></span>

          </span>

        </p>

        <audio class="audio" src="http://physical-authority.surge.sh/music/7.mp3"></audio>

      </li>

    </ul>

  </div>

</div>
  
<script src="music-player-2.js"></script>

</body>
</html>