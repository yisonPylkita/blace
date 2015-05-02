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
            background-color: #CE5757;
            position: fixed;
            width: 100%;
            height: 100%;
        }
    </style>

</head>
<body>
<div data-role="page">
    <div id="content">

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
    });
</script>

</body>
</html>

