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
        #go_to_main_menu {
            width: 150px;
            height: 150px;
            background-color: green;
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
            background-color: #4F5865;
            position: fixed;
            width: 100%;
            height: 100%;
        }
        #result {
            position: fixed;
            width: 100%;
            height: 15%;
            background-color: whitesmoke;
        }
        #result p {
            margin: 0;
            position: inherit;
            font-size: 5em;
            right: 0px;
        }
        #input_panel {
            position: fixed;
            width: 100%;
            height: 85%;
            bottom: 0px;
        }
        #numbers {
            position: fixed;
            width: 75%;
            height: 85%;
            bottom: 0px;
            font-size: 4em;
            padding-left: 40px;
        }
        #numbers a {
            width: 8%;
            height: 8%;

        }
        #numbers a p {
            margin: 20%;
        }
        #controls {
            position: fixed;
            width: 25%;
            height: 85%;
            bottom: 0px;
            font-size: 4em;
            padding-left: 40px;
            right: 0px;
        }
    </style>

</head>
<body>
<div data-role="page">
    <div id="content">
        <div id="result">
            <p>15,4</p>
        </div>

        <div id="input_panel">
            <div id="numbers">
                <a href="#" class="ui-btn ui-btn-inline">9</a>
                <a href="#" class="ui-btn ui-btn-inline">8</a>
                <a href="#" class="ui-btn ui-btn-inline">7</a>
                <a href="#" class="ui-btn ui-btn-inline">+</a>
                <a href="#" class="ui-btn ui-btn-inline">6</a>
                <a href="#" class="ui-btn ui-btn-inline">5</a>
                <a href="#" class="ui-btn ui-btn-inline">4</a>
                <a href="#" class="ui-btn ui-btn-inline">-</a>
                <a href="#" class="ui-btn ui-btn-inline">3</a>
                <a href="#" class="ui-btn ui-btn-inline">2</a>
                <a href="#" class="ui-btn ui-btn-inline">1</a>
                <a href="#" class="ui-btn ui-btn-inline">*</a>
                <a href="#" class="ui-btn ui-btn-inline">0</a>
                <a href="#" class="ui-btn ui-btn-inline">.</a>
                <a href="#" class="ui-btn ui-btn-inline">%</a>
                <a href="#" class="ui-btn ui-btn-inline">/</a>
            </div>

            <div id="controls">
                <a href="#" class="ui-btn ui-btn-inline"><p id="Enter">Enter</p></a>
                <a href="#" class="ui-btn ui-btn-inline"><p id="Del">Del</p></a>
            </div>
        </div>
    </div>



    <div id="settings-panel">
        <div id="go_to_main_menu"></div>
    </div>

    <div id="setting-panel-accesor">
    </div>

    <div id="data_and_batery">
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        var result_value = '0';
        var empty_input = true;
        var operator_possible = false;

        $('#result p').html(result_value);

        $('#setting-panel-accesor').on('swipeleft', function () {
    	   $('#settings-panel').css('right', '0px');
    	   $('#data_and_batery').show();
        });
        $('#setting-panel-accesor').on('swiperight', function () {
    	   $('#settings-panel').css('right', '-150px');
    	   $('#data_and_batery').hide();
        });
        $('#go_to_main_menu').on('tap', function () {
        	window.open('/DE');
        });



        $('#numbers a').on('tap', function () {
            if (empty_input) {
                result_value = $(this).text();
                $('#result p').text(result_value);
                empty_input = false;
            } else {
                result_value += $(this).html();
                $('#result p').text(result_value);
            }
        });
        $('#Del').on('tap', function () {
            if (result_value.length == 1) {
                result_value = '0';
            	$('#result p').text(result_value);
            	empty_input = true;
            } else {
            	result_value = result_value.substr(0, result_value.length -1)
            	$('#result p').text(result_value);
            }
        });
        $('#Enter').on('tap', function () {
            if (empty_input) {
                return;
            } else {
                // TO DO: CALCULATE RESULT
            }
        });

    });
</script>

</body>
</html>

