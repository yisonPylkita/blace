<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- REMOVED IN CAUSE OF PROBLEMS WITH FLAT-UI
    <link rel="stylesheet" href="jquery.mobile-1.4.5.min.css">
    -->
    <link rel="stylesheet" type="text/css" href="jquery.mobile.flatui.css" />

    <script src="jquery-2.1.3.min.js"></script>
    <script src="jquery.mobile-1.4.5.min.js"></script>

    <style type="text/css">
        html, body {
            margin: 0;
            padding: 0;
        }
        #settings-panel {
            width: 150px;
            height: 100%;
            position: fixed;
            right: -150px;
            top: 0px;
            background-color: red;
        }
        #setting-panel-accesor {
            width: 200px;
            height: 100%;
            position: fixed;
            right: 0px;
            top: 0px;
            background-color: transparent;
        }
        #data_and_batery {
            width: 20%;
            height: 15%;
            position: fixed;
            left: 10%;
            bottom: 20%;
            background-color: red;
            display: none;
        }
        #content {
            background-color: #c0c0c0;
            width: 100%;
            height: 100%;
        }
        #bottom_music_bar {
            position: fixed;
            width: 100%;
            height: 5%;
            bottom: 0px;
            left: 0px;
            padding-top: 1%;
            padding-bottom: 1%;
            background-color: #333;
        }
        #bottom_music_bar_slider{
            position: fixed;
            width: 50%;
            left: 20%;
        }
        #bottom_music_bar_controls {
            width: 15%;
            float: right;
        }
        .music_control_button {
            display: inline-block;
            width: 50px;
            height: 50px;
            background-color: purple;
            margin: auto;
        }
        /* Hide the number input */
        .full-width-slider input {
            display: none;
        }
        .full-width-slider .ui-slider-track {
            margin-left: 15px;
        }
        #artist_left_panel {
            width: 25%;
            height: 95%;
            background-color: grey;
        }
        #artist_left_panel_header {
            width: 100%;
            background-color: green;
            text-align: center;
            font-size: 3em;
            margin: 0;
        }
        #albums_and_tracks {
            width: 75%;
            height: 95%;
            right: 0px;
        }
    </style>

</head>
<body>
<div data-role="page">
    <div id="content">
        <div id="artist_left_panel">
            <p id="artist_left_panel_header">Artist</p>

            <ul data-role="listview" data-autodividers="true" data-filter="true" data-inset="true">
                <li></li>
                <li>Gojira</li>
                <li>Dope</li>
                <li>Metallica</li>
                <li>Disturbed</li>
                <li>Dragonforce</li>
                <?php
                    echo(shell_exec('python library_parser.py'));
                ?>
            </ul>
        </div>

        <div id="albums_and_tracks">

        </div>

        <div id="bottom_music_bar">
            <div id="bottom_music_bar_slider">
                <form class="full-width-slider">
                    <label for="slider-12" class="ui-hidden-accessible">Slider:</label>
                    <input name="slider-12" id="slider-12" data-corners="false" data-highlight="true" min="0" max="100" value="50" type="range">
                </form>
            </div>

            <div id="bottom_music_bar_controls">
                <div data-role="controlgroup" data-type="horizontal" data-mini="true">
                    <a href="#" id="previous_song" class="ui-btn ui-icon-arrow-l ui-btn-icon-notext">Previous song</a>
                    <a href="#" id="play_stop_song" class="ui-btn ui-icon-carat-r ui-btn-icon-notext">Play Pause song</a>
                    <a href="#" id="next_song" class="ui-btn ui-icon-arrow-r ui-btn-icon-notext">Next song</a> <!-- ERROR HERE. PROBLEMS WITH EVENTS -->
                </div>

            </div>
        </div>
    </div>



    <div id="settings-panel">
    </div>

    <div id="setting-panel-accesor">
    </div>

    <div id="data_and_batery">
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#setting-panel-accesor').on('swipeleft', function () {
    	   $('#settings-panel').css('right', '0px');
    	   $('#data_and_batery').show();
        });
        $('#setting-panel-accesor').on('swiperight', function () {
    	   $('#settings-panel').css('right', '-150px');
    	   $('#data_and_batery').hide();
        });
        $('#play_stop_song').on('tap', function () {
        	$.post('player_access.php', {toggle_play: 'YES'});
        });
        $('#previous_song').on('tap', function () {
        	$.post('player_access.php', {previous_song: 'YES'});
        });
        //$('#next_song').on('tap', function () {
        //    alert('It works');
        //	$.post('player_access.php', {next_song: 'YES'});
        //});
    });
</script>

</body>
</html>

