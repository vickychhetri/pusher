<!DOCTYPE html>
<head>
    <title>Pusher Test</title>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>


        async function getapi(url) {

            // Storing response
            const response = await fetch(url);

            // Storing data in form of JSON
            var data = await response.json();
            console.log(data.data);
            var div1 = document.getElementById('prod');
            div1.innerHTML = JSON.stringify(data.data.price);
        }

            window.onload= ()=>{
                getapi("http://127.0.0.1:8000/api/product/1");
            }
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
        var pusher = new Pusher('a9972065278d3e0300d6', {
            cluster: 'ap2'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            var div = document.getElementById('messageNote');
            let a=JSON.parse(JSON.stringify(data));
            if(a.message==='price_updated'){
                getapi("http://127.0.0.1:8000/api/product/1");
            }
            div.innerHTML += a.message;
        });
    </script>
</head>
<body>
<h1>Pusher Test</h1>
<p>
{{-- <div id="messageNote"></div>--}}
<div id="prod"></div>
</p>
</body>
