<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="dist/style.css">

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id="app">
        <main>
            <div class="filterBox">
                <form @submit.prevent="onFilterSubmit()">
                    <label for="genre">Filtra per genere:</label>
                    <select name="genre" id="genre" v-model="filters.fGenre">
                        <option value="">Tutti i brani</option>
                        <option value="Pop">Pop</option>
                        <option value="Jazz">Jazz</option>
                        <option value="Metal">Metal</option>
                        <option value="Rock">Rock</option>
                    </select>
                    <button type="submit">Filtra</button>
                </form>
            </div>

            <div class="container">
                <div class="discBox" v-for="disc in discsList">
                    <img :src="disc.poster" alt="immagine disco">
                    <h4>{{ disc.title }}</h4>
                    <span>{{ disc.author }}</span>
                    <span>{{ disc.year }}</span>
                    <p><small>{{ disc.genre }}</small></p>
                </div>
            </div>
        </main>
    </div>

    <script src="scripts/main.js"></script>
</body>
</html>