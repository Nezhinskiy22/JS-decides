<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/panda.css">
    <link rel="shortcut icon" href="images/iconfinder_Panda_bear_face_happy_copy_3044792.png" type="image/x-icon">
    <title>Panda tetris</title>
</head>

<body>

    <div class="container">
        <div class="header">
            <h1 class="text-center">
                Panda tetris
            </h1>
            <div class="main">
                <div class="block">
                    <div class="tetris-wrap">
                        <div id="tetris-field">

                        </div>
                    </div>
                    <div class="user-result">
                        <h3>
                            Best results
                        </h3>
                        <?php
                            require_once 'show_result.php'
                          ?>
                    </div>
                </div>
                <div class="block text-field">
                    <button class="start">Run</button>
                    <ul class="rule">
                        <li>Натискай старт!</li>
                        <li>Керуй Left Arrow, Right Arrow</li>
                        <li>Збирай три круга в горизонтальний ряд!</li>
                        <li>Кожен ряд - 10 балів!</li>
                    </ul>
                    <div class="score-field text-center">
                        0
                    </div>
                    <div class="form">

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/panda.js"></script>
</body>

</html>