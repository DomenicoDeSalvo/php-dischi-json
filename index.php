

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Dischi JSON</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    </head>
    <body>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <div id="app" class="d-flex flex-column vh-100">
            <main class="flex-grow-1 py-5">
                <div class="container">
                    <div class="row row-cols-3">
                        <div v-for="vinyl in vinyls" class="col">
                            <div class="ms_card border-0 card">
                                <img src="" class="card-img-top p-2" alt="...">
                                <div class="text-center card-body">
                                    <h5 class="name card-title">{{vinyl.title}}</h5>
                                    <p class="author card-text">{{vinyl.author}}</p>
                                    <p class="year card-text">{{vinyl.year}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <script src="./js/app.js"></script> 
    </body>
</html>

<style>
    .ms_card{
        background-color: #1D2D3C;
        color: white;
    }

    .name{
        font-size: 16px;
        font-weight: 900:
    }

    .author{
        font-size: 10px;
        font-weight: 300:
    }

    .year{
        font-size: 16px;
        font-weight: 900:
    }


</style>