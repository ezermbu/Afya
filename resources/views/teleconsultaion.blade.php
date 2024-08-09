<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PeerChat</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='{{ asset('css/main.css') }}'>
</head>
<body>
    <div id="videos">
        <video class="video-player" id="user-1" autoplay playsinline></video>
        <video class="video-player" id="user-2" autoplay playsinline></video>
    </div>

    <div id="controls">
        <div class="control-container" id="camera-btn">
            <img src="{{ asset('icons/camera.png') }}" />
        </div>

        <div class="control-container" id="mic-btn">
            <img src="{{ asset('icons/mic.png') }}" />
        </div>

        <a href="{{ url('lobby') }}">
            <div class="control-container" id="leave-btn">
                <img src="{{ asset('icons/phone.png') }}" />
            </div>
        </a>
    </div>
    <script src="{{ asset('js/agora-rtm-sdk-1.4.4.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
