<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat Application</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
<div class="app">
    <header>
        <h1>
            Chat Application
        </h1>
        <input type="text" name="username" id="username" placeholder="Enter Username ..."/>
    </header>
    <div id="messages"></div>
    <form id="message_form">
        <input type="text" name="message" id="message_input" placeholder="Message..."/>
        <button type="submit" id="message_send">Send</button>
    </form>
</div>
<script src="../js/app.js"></script>
</body>
</html>
