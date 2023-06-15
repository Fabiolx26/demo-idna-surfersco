<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair&family=Raleway&family=Roboto" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
        <link rel=stylesheet href=https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css>
        <style>
            body {
                color: #2b2b2b;
                font-family: "Playfair", san-serif;
            }

            .container {
                margin-left: auto;
                margin-right: auto;
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 50%;
            }

            h1 {
                text-align: center;
            }

            button {
                background-color: #00b0ff;
                color: white;
                text-transform: uppercase;
                padding: 10px;
                border: none;
                cursor: pointer;
                margin: 10px;
            }

            button:hover {
                background-color: #00d2ff;
            }

            .footer {
                background-color: grey;
                color: white;
                user-select: none;
                text-align: center;
            }

            .footer h1 {
                margin: 5px;
            }

            .social {
                margin: 5px;
            }

            .social i {
                margin: 5px;
                font-size: larger;
            }

            .footer a {
                text-decoration: none;
                color: white;
                margin: 5px;
            }

            .footer a:hover {
                text-decoration: underline;
            }

            .container-footer {
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <h1>Thanks for contacting us!</h1>
        <div class="container">
            <div>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Alias, earum iste. Maxime nam soluta earum accusamus.
                Qui alias, rem distinctio provident perferendis officia
                animi optio, rerum sequi voluptates consequuntur obcaecati.
            </div>
            <button>Button</button>
        </div>
        <div class="footer">
            <div class="container-footer">
                <h1>Surfers co.</h1>
                <div class="social">
                    <a href="#">   
                        <i class="mdi mdi-instagram"></i>
                    </a>
                    <a href="#">   
                        <i class="mdi mdi-facebook"></i>
                    </a>
                    <a href="#">   
                        <i class="mdi mdi-web"></i>
                    </a>
                </div>
                <a href="#">Unsubscribe</a>
            </div>
        </div>
    </body>

</html>