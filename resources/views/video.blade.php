<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Plyr - A simple, customizable HTML5 Video, Audio, YouTube and Vimeo player</title>
    <meta
      name="description"
      property="og:description"
      content="A simple HTML5 media player with custom controls and WebVTT captions."
    />
    <meta name="author" content="Sam Potts" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.2/plyr.css" />
    <link rel="icon" href="https://cdn.plyr.io/static/icons/favicon.ico" />
    <link rel="icon" type="image/png" href="https://cdn.plyr.io/static/icons/32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="https://cdn.plyr.io/static/icons/16x16.png" sizes="16x16" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://cdn.plyr.io/static/icons/180x180.png" />

    <!-- Open Graph -->
    <meta property="og:title" content="Plyr - A simple, customizable HTML5 Video, Audio, YouTube and Vimeo player" />
    <meta property="og:site_name" content="Plyr" />
    <meta property="og:url" content="https://plyr.io" />
    <meta property="og:image" content="https://cdn.plyr.io/static/icons/1200x630.png" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@sam_potts" />
    <meta name="twitter:creator" content="@sam_potts" />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- Docs styles -->
    <link rel="stylesheet" href="dist/demo.css" />

    <!-- Preload -->
    <link
      rel="preload"
      as="font"
      crossorigin
      type="font/woff2"
      href="https://cdn.plyr.io/static/fonts/gordita-medium.woff2"
    />
    <link
      rel="preload"
      as="font"
      crossorigin
      type="font/woff2"
      href="https://cdn.plyr.io/static/fonts/gordita-bold.woff2"
    />

    <!-- Google Analytics-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132699580-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-132699580-1');
    </script>
  </head>

  <body>
    <div class="grid">
      <header>
        <h1>Pl<span>a</span>y<span>e</span>r</h1>
        <p>
          A simple, accessible and customisable media player for
          <button type="button" class="faux-link" data-source="video">
            <svg class="icon">
              <title>HTML5</title>
              <path
                d="M14.738.326C14.548.118 14.28 0 14 0H2c-.28 0-.55.118-.738.326S.98.81 1.004 1.09l1 11c.03.317.208.603.48.767l5 3c.16.095.338.143.516.143s.356-.048.515-.143l5-3c.273-.164.452-.45.48-.767l1-11c.026-.28-.067-.557-.257-.764zM12 4H6v2h6v5.72l-4 1.334-4-1.333V9h2v1.28l2 .666 2-.667V8H4V2h8v2z"
              ></path></svg>Video</button
          >,
          <button type="button" class="faux-link" data-source="audio">
            <svg class="icon">
              <title>HTML5</title>
              <path
                d="M14.738.326C14.548.118 14.28 0 14 0H2c-.28 0-.55.118-.738.326S.98.81 1.004 1.09l1 11c.03.317.208.603.48.767l5 3c.16.095.338.143.516.143s.356-.048.515-.143l5-3c.273-.164.452-.45.48-.767l1-11c.026-.28-.067-.557-.257-.764zM12 4H6v2h6v5.72l-4 1.334-4-1.333V9h2v1.28l2 .666 2-.667V8H4V2h8v2z"
              ></path></svg>Audio</button
          >,
          <button type="button" class="faux-link" data-source="youtube">
            <svg class="icon" role="presentation">
              <title>YouTube</title>
              <path
                d="M15.8,4.8c-0.2-1.3-0.8-2.2-2.2-2.4C11.4,2,8,2,8,2S4.6,2,2.4,2.4C1,2.6,0.3,3.5,0.2,4.8C0,6.1,0,8,0,8
                   s0,1.9,0.2,3.2c0.2,1.3,0.8,2.2,2.2,2.4C4.6,14,8,14,8,14s3.4,0,5.6-0.4c1.4-0.3,2-1.1,2.2-2.4C16,9.9,16,8,16,8S16,6.1,15.8,4.8z
                    M6,11V5l5,3L6,11z"></path></svg>YouTube
          </button>
          and
          <button type="button" class="faux-link" data-source="vimeo">
            <svg class="icon" role="presentation">
              <title>Vimeo</title>
              <path
                d="M16,4.3c-0.1,1.6-1.2,3.7-3.3,6.4c-2.2,2.8-4,4.2-5.5,4.2c-0.9,0-1.7-0.9-2.4-2.6C4,9.9,3.4,5,2,5
                       C1.9,5,1.5,5.3,0.8,5.8L0,4.8c0.8-0.7,3.5-3.4,4.7-3.5C5.9,1.2,6.7,2,7,3.8c0.3,2,0.8,6.1,1.8,6.1c0.9,0,2.5-3.4,2.6-4
                       c0.1-0.9-0.3-1.9-2.3-1.1c0.8-2.6,2.3-3.8,4.5-3.8C15.3,1.1,16.1,2.2,16,4.3z"
              ></path></svg>Vimeo
          </button>
        </p>
        <div class="plyr__video-embed" id="player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY">
            <iframe
              src="https://youtube.com/embed/kxhntG-mVes"
              allowfullscreen
              allowtransparency
              allow="autoplay"
            ></iframe>
          </div>
        <div class="call-to-action">
          <a href="https://github.com/sampotts/plyr" target="_blank" class="button js-shr">
            <svg class="icon" role="presentation">
              <title>GitHub</title>
              <path
                d="M8,0.2c-4.4,0-8,3.6-8,8c0,3.5,2.3,6.5,5.5,7.6
               C5.9,15.9,6,15.6,6,15.4c0-0.2,0-0.7,0-1.4C3.8,14.5,3.3,13,3.3,13c-0.4-0.9-0.9-1.2-0.9-1.2c-0.7-0.5,0.1-0.5,0.1-0.5
               c0.8,0.1,1.2,0.8,1.2,0.8C4.4,13.4,5.6,13,6,12.8c0.1-0.5,0.3-0.9,0.5-1.1c-1.8-0.2-3.6-0.9-3.6-4c0-0.9,0.3-1.6,0.8-2.1
               c-0.1-0.2-0.4-1,0.1-2.1c0,0,0.7-0.2,2.2,0.8c0.6-0.2,1.3-0.3,2-0.3c0.7,0,1.4,0.1,2,0.3c1.5-1,2.2-0.8,2.2-0.8
               c0.4,1.1,0.2,1.9,0.1,2.1c0.5,0.6,0.8,1.3,0.8,2.1c0,3.1-1.9,3.7-3.7,3.9C9.7,12,10,12.5,10,13.2c0,1.1,0,1.9,0,2.2
               c0,0.2,0.1,0.5,0.6,0.4c3.2-1.1,5.5-4.1,5.5-7.6C16,3.8,12.4,0.2,8,0.2z"
              ></path>
            </svg>
            Download on GitHub
          </a>
        </div>
      </header>
      <main>
        <div id="container">
          <video
            controls
            crossorigin
            playsinline
            data-poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg"
            id="player"
          >
            <!-- Video files -->
            <source
              src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
              type="video/mp4"
              size="576"
            />
            <source
              src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4"
              type="video/mp4"
              size="720"
            />
            <source
              src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4"
              type="video/mp4"
              size="1080"
            />

            <!-- Caption files -->
            <track
              kind="captions"
              label="English"
              srclang="en"
              src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
              default
            />
            <track
              kind="captions"
              label="Français"
              srclang="fr"
              src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt"
            />

            <!-- Fallback for browsers that don't support the <video> element -->
            <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download>Download</a>
          </video>
        </div>

        <ul>
          <li class="plyr__cite plyr__cite--video" hidden>
            <small>
              <svg class="icon">
                <title>HTML5</title>
                <path
                  d="M14.738.326C14.548.118 14.28 0 14 0H2c-.28 0-.55.118-.738.326S.98.81 1.004 1.09l1 11c.03.317.208.603.48.767l5 3c.16.095.338.143.516.143s.356-.048.515-.143l5-3c.273-.164.452-.45.48-.767l1-11c.026-.28-.067-.557-.257-.764zM12 4H6v2h6v5.72l-4 1.334-4-1.333V9h2v1.28l2 .666 2-.667V8H4V2h8v2z"
                ></path>
              </svg>
              <a href="https://itunes.apple.com/au/movie/view-from-a-blue-moon/id1041586323" target="_blank"
                >View From A Blue Moon</a
              >
              &copy; Brainfarm
            </small>
          </li>
          <li class="plyr__cite plyr__cite--audio" hidden>
            <small>
              <svg class="icon" title="HTML5">
                <title>HTML5</title>
                <path
                  d="M14.738.326C14.548.118 14.28 0 14 0H2c-.28 0-.55.118-.738.326S.98.81 1.004 1.09l1 11c.03.317.208.603.48.767l5 3c.16.095.338.143.516.143s.356-.048.515-.143l5-3c.273-.164.452-.45.48-.767l1-11c.026-.28-.067-.557-.257-.764zM12 4H6v2h6v5.72l-4 1.334-4-1.333V9h2v1.28l2 .666 2-.667V8H4V2h8v2z"
                ></path>
              </svg>
              <a href="http://www.kishibashi.com/" target="_blank"
                >Kishi Bashi &ndash; &ldquo;It All Began With A Burst&rdquo;</a
              >
              &copy; Kishi Bashi
            </small>
          </li>
          <li class="plyr__cite plyr__cite--youtube" hidden>
            <small>
              <a href="https://www.youtube.com/watch?v=bTqVqk7FSmY" target="_blank">View From A Blue Moon</a>
              on&nbsp;
              <span class="color--youtube">
                <svg class="icon" role="presentation">
                  <title>YouTube</title>
                  <path
                    d="M15.8,4.8c-0.2-1.3-0.8-2.2-2.2-2.4C11.4,2,8,2,8,2S4.6,2,2.4,2.4C1,2.6,0.3,3.5,0.2,4.8C0,6.1,0,8,0,8
                                   s0,1.9,0.2,3.2c0.2,1.3,0.8,2.2,2.2,2.4C4.6,14,8,14,8,14s3.4,0,5.6-0.4c1.4-0.3,2-1.1,2.2-2.4C16,9.9,16,8,16,8S16,6.1,15.8,4.8z
                                    M6,11V5l5,3L6,11z"
                  ></path></svg>YouTube
              </span>
            </small>
          </li>
          <li class="plyr__cite plyr__cite--vimeo" hidden>
            <small>
              <a href="https://vimeo.com/40648169" target="_blank">Toob “Wavaphon” Music Video</a>
              on&nbsp;
              <span class="color--vimeo">
                <svg class="icon" role="presentation">
                  <title>Vimeo</title>
                  <path
                    d="M16,4.3c-0.1,1.6-1.2,3.7-3.3,6.4c-2.2,2.8-4,4.2-5.5,4.2c-0.9,0-1.7-0.9-2.4-2.6C4,9.9,3.4,5,2,5
                               C1.9,5,1.5,5.3,0.8,5.8L0,4.8c0.8-0.7,3.5-3.4,4.7-3.5C5.9,1.2,6.7,2,7,3.8c0.3,2,0.8,6.1,1.8,6.1c0.9,0,2.5-3.4,2.6-4
                               c0.1-0.9-0.3-1.9-2.3-1.1c0.8-2.6,2.3-3.8,4.5-3.8C15.3,1.1,16.1,2.2,16,4.3z"
                  ></path></svg>Vimeo
              </span>
            </small>
          </li>
        </ul>
      </main>
    </div>

    <aside>
      <svg class="icon">
        <title>Twitter</title>
        <path
          d="M16,3c-0.6,0.3-1.2,0.4-1.9,0.5c0.7-0.4,1.2-1,1.4-1.8c-0.6,0.4-1.3,0.6-2.1,0.8c-0.6-0.6-1.5-1-2.4-1
       C9.3,1.5,7.8,3,7.8,4.8c0,0.3,0,0.5,0.1,0.7C5.2,5.4,2.7,4.1,1.1,2.1c-0.3,0.5-0.4,1-0.4,1.7c0,1.1,0.6,2.1,1.5,2.7
       c-0.5,0-1-0.2-1.5-0.4c0,0,0,0,0,0c0,1.6,1.1,2.9,2.6,3.2C3,9.4,2.7,9.4,2.4,9.4c-0.2,0-0.4,0-0.6-0.1c0.4,1.3,1.6,2.3,3.1,2.3
       c-1.1,0.9-2.5,1.4-4.1,1.4c-0.3,0-0.5,0-0.8,0c1.5,0.9,3.2,1.5,5,1.5c6,0,9.3-5,9.3-9.3c0-0.1,0-0.3,0-0.4C15,4.3,15.6,3.7,16,3z"
        ></path>
      </svg>
      <p>
        If you think Plyr's good,
        <a
          href="https://twitter.com/intent/tweet?text=A+simple+HTML5+media+player+with+custom+controls+and+WebVTT+captions.&amp;url=http%3A%2F%2Fplyr.io&amp;via=Sam_Potts"
          target="_blank"
          class="js-shr"
          >tweet it</a
        >
        👍
      </p>
    </aside>

    <script src="asset/js/demo.js" crossorigin="anonymous"></script>
  </body>
</html>
