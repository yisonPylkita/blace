<?php

#session_start();
putenv("HOME=/srv/http");
putenv("USER=http");


# TO DO: FIRSTLY CHECK IF THIS VARIABLES EXISTS IN $_POST TABLE
$toggle_play = $_POST['toggle_play'];
$previous_song = $_POST['previous_song'];
$next_song = $_POST['next_song'];


if ($toggle_play) {
    exec('cmus-remote --server /run/user/1000/cmus-socket -u');
} elseif ($previous_song) {
    exec('cmus-remote --server /run/user/1000/cmus-socket -r');
} elseif ($next_song) {
    exec('cmus-remote --server /run/user/1000/cmus-socket -n');
}

#    echo(shell_exec('cat ~/.config/cmus/lib.pl'));



class Player {

    static private function _startPlayer() {

    }

    static public function playPauseSong() {

    }

    static public function previousSong() {

    }

    static public function nextSong() {

    }

    static public function playerGetVol() {

    }

    static public function playerSetVol($new_volume) {

    }

    static public function toggleRepeat() {

    }

    static public function toggleShuffle() {

    }
}


?>
