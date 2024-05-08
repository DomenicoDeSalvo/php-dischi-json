

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
            <!-- HEADER -->
            <?php
            include __DIR__ . '/partials/templates/header.php';
            ?>
            <!-- MAIN -->
            <main class="flex-grow-1 py-2">
                <div class="container">
                    <div class="row row-cols-3">
                        <!-- V-FOR -->
                        <div v-for="vinyl in vinyls" class="col">
                            <!-- CARD -->
                            <div class="ms_card  my-4 mx-5 border-0 card" data-bs-toggle="modal" data-bs-target="#vinylModal">
                                <img :src="vinyl.poster" class="card-img-top px-5 py-3" alt="...">
                                <div class="text-center card-body">
                                    <h5 class="name card-title">{{vinyl.title}}</h5>
                                    <p class="author card-text">{{vinyl.author}}</p>
                                    <p class="year card-text">{{vinyl.year}}</p>
                                </div>
                            <?php
                                include __DIR__ . '/partials/templates/modal.php';
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <script src="./js/app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
    </body>
</html>

<style>
    /* HEADER */
    .logo{
        max-width: 30px;
    }

    header{
        background-color: #112030;  
    }

    /* MAIN */
    main{
        background-color: #1D2D3C;
    }

    /* CARD */
    .ms_card{
        background-color: #112030;
        color: white;
        cursor: pointer;
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

    /* MODAL */
    .modal_background{
        background-color: #112030;
    }

    .modal_content{
        color: white;
    }

    .modal_img{
        max-width: 350px; 
    }

</style>