<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oops... page not found</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');
    </style>
    <style>
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
            font-family: 'Montserrat', sans-serif;
        }
        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section {
            display: block;
        }
        body {
            line-height: 1;
        }
        ol, ul {
            list-style: none;
        }
        blockquote, q {
            quotes: none;
        }
        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }
        .wrap {
            background-color: #ffffff;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .mainContent
        {

        }
        #imgOops
        {
            width: 100%;
            height: 100%;

        }
        .text404
        {
            padding: 3em;
        }
        .text404 p
        {
            text-align: center;
            font-size: 30pt;
            font-weight: bold;
            color: #6d6767;
        }
        .butHome
        {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .butHome a
        {
            display: flex;
            width: 300px;
            height: 50px;
            justify-content: center;
            align-items: center;
            background-color: #3cdd18;
            color: #ffffff;
            font-size: 20pt;
            text-decoration: none;
            transition: all 500ms;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            box-shadow: 0 0 7px #cccccc;
        }
        .butHome a:hover {
            background-color: #35c415;
        }
    </style>
</head>
<body>

    <div class="wrap">
        <div class="mainContent">
            <div class="imgBlock">
                <img id="imgOops" src="./errors/oops.jpg" alt="Oops"/>
            </div>
            <div class="text404">
                <p>Sorry, page not found</p>
            </div>
            <div class="butHome">
                <a href="<?=PATH?>">
                    to Home Page
                </a>
            </div>
        </div>
    </div>

</body>
</html>