<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Mail response page</title>
    <style>
    body {
        color: #00C1FF;
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 100vw;
        height: 100vh;
        background-image: linear-gradient(60deg, rgba(236, 246, 248, 0.7) 15%, rgba(174, 188, 209, 0.7), rgba(233, 247, 250, 0.6) 85%);
        background-size: cover;
    }

    div.m-auto {
        width: 100%;
        height: 40vh;
    }

    div.row {
        padding: 10px;
        background: #284866;
        position: absolute;
        margin: auto;
        width: 100%;
        bottom: 0;
    }

    a {
        margin: auto;
    }

    img {
        width: 100%;
    }
    </style>
</head>

<body>

    <div class="m-auto text-center">
        <h2>Your message sending failed!
        </h2>
        <div class="row no-gutters text-center m-auto">
            <p class="text-center w-100"><small>Copyright © RDdesign 2020. All Rights Reserved</small></p>
        </div>
    </div>
    <?php
header("refresh:3;url=" . base_url());

?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>