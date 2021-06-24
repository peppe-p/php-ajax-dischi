<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/style.css">
    <title>Spotify - Dischi</title>
</head>

<body>
    <header>
        <img src="./dist/images/logo.png" alt="" id="logo">
    </header>

    <main id="root">
        <div class="discList">

            <div class="disc" v-for="disc in discList">
                <img class="poster" :src="disc.poster" alt="">
                <h2>{{disc.title}}</h2>
                <h4>{{disc.author}}</h4>
                <h4>{{disc.year}}</h4>
            </div>

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./dist/js/main.js"></script>
</body>

</html>