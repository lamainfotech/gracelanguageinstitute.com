<html>
    <head>
        <title>General Proficiency/IELTS Placement Test</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'Windows NT') !== false || 
            strpos($_SERVER['HTTP_USER_AGENT'], 'Macintosh') !== false) { ?>
            <div style="text-align: center; height: 100vh; margin: 0; padding: 0">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScwlJGIfj7qaYaq3JZSJ8bk-cJw7rdNgk4U4bQQMU1DswbdIg/viewform?embedded=true" width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            </div>
            <!--device is a desktop-->
        <?php } else { ?>
            <div style="display: flex; justify-content: center; align-items: center; width: 100vw; height: 100vh">
                <h1>Please open on the PC</h1>
            </div>
            <!--device is not a desktop-->
        <?php } ?>
    </body>
</html>