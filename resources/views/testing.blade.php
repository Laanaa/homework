<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />    
</head>
<body>
    <center>
        <div style="width: 500px;">
            <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="fLdwH_E3Yfg"></div>
        </div>
    </center>
    <script src="https://cdn.plyr.io/3.6.2/plyr.polyfilled.js"></script>
    <script>
        const player = new Plyr('#player');
    </script>
</body>
</html>