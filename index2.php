<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/3/34/Icon_hacker.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cutive+Mono&display=swap">
    <script src="https://nathanprinsley-files.prinsh.com/data-1/js/deface(04-01).js" type="application/javascript"></script>
    <script src="https://cdn.prinsh.com/NathanPrinsley-effect/green-bintang-jatuh.js" type="text/javascript"></script>
    <script>
        document.addEventListener('contextmenu', function (e) {
            e.preventDefault();
        });
        document.addEventListener('mousedown', function (e) {
            if (e.button === 0) {
                e.preventDefault();
            }
        });
        document.addEventListener('keydown', function(event) {
        if (event.ctrlKey && event.key === 'u') {
        event.preventDefault();
        }
        });
        document.addEventListener('keydown', function(event) {
        if (event.ctrlKey && event.shiftKey && event.key === 'i') {
        event.preventDefault();
        }
        });
    </script>
    <title>☠️ ・ Touched By Xninze</title>
    <style>
        html{
            cursor: none; 
        }

        body {
            background-color: black;
            color: #00ff00; 
            font-family: 'Cutive Mono', monospace; 
        }

        h1 {
            color: #ff00ff; 
            font-size: 50px;
            text-align: center;
        }

        p {
            color: #e77432; 
            font-size: 20px;
            text-align: center;
            margin-left: 15%;
            margin-right: 15%;
            margin-top: 50px;
        }

        iframe {
            width: 0;
            height: 0;
            display: none; 
        }
        
        img {
            width: 300px;
            height: 300px;
            border-radius: 200px;
            display: block;
            margin: 0 auto; 
        }
        
        .centered {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="centered">
        <img src="https://img.getimg.ai/generated/img-MLp24r32d1n8txqcuU2Jl.jpeg" alt="xninze">
        <h1>Touched by Xninze</h1>
        <p>Hidup ini bagaikan hujan sepi, deras di mata namun sepi di hati. Setiap langkah penuh dengan kenangan yang merisaukan, seperti lagu sedih yang berputar di radio jiwa yang sunyi. </p>
        <p style="color: #00ff4c;">- Xninze<p>
        <!-- First Song -->
        <iframe id="song1" width="0" height="0" src="https://www.youtube.com/embed/cOkCnyDm_qs?si=yZEpVRBW7E8Hx6AT&amp;autoplay=1&amp;muted=1" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        
        <!-- Second Song -->
        <iframe id="song2" width="0" height="0" src="https://www.youtube.com/embed/B96e1Zh3rrk?si=At_PmoTwcvHwxL2h&amp;autoplay=0&amp;muted=1" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <script>
        var song1 = document.getElementById('song1');
        var song2 = document.getElementById('song2');

        function playSecondSong() {

            song1.style.display = 'none';

            song2.muted = false;
            song2.style.display = 'block';

            song2.contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
        }

        song1.addEventListener('load', function () {
            song1.contentWindow.postMessage('{"event":"command","func":"addEventListener","args":["onStateChange","onPlayerStateChange"]}', '*');
        });

        function onPlayerStateChange(event) {
            if (event.data === 0) { 
                playSecondSong();
            }
        }
        window.onPlayerStateChange = onPlayerStateChange;
    </script>
</body>
</html>
