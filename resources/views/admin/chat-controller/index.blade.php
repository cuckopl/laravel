
<meta charset='UTF-8' />
<style>
    input, textarea {border:1px solid #CCC;margin:0px;padding:0px}

    #body {max-width:800px;margin:auto}
    #log {width:100%;height:400px}
    #message {width:100%;line-height:20px}
</style>
<script src="/admin_template/js/fancywebsocket.js"></script>
<script>
    var Server;

    function log(text) {
        $log = $('#log');
        //Add text to log
        $log.append(($log.val() ? "\n" : '') + text);
        //Autoscroll
        $log[0].scrollTop = $log[0].scrollHeight - $log[0].clientHeight;
    }

    function send(text) {
        Server.send('message', text);
    }

    $(document).ready(function () {
        log('Connecting...');
        Server = new FancyWebSocket('ws://37.59.121.234:8080');

        $('#message').keypress(function (e) {
            if (e.keyCode == 13 && this.value) {
                log('You: ' + this.value);
                send(this.value);

                $(this).val('');
            }
        });

        //Let the user know we're connected
        Server.bind('open', function () {
            log("Connected.");
        });

        //OH NOES! Disconnection occurred.
        Server.bind('close', function (data) {
            log("Disconnected.");
        });

        //Log any messages sent from server
        Server.bind('message', function (payload) {
            log(payload);
        });

        Server.connect();
    });
</script>
</head>


<div id='body'>
    <textarea id='log' name='log' readonly='readonly'></textarea><br/>
    <input type='text' id='message' name='message' />
</div>
