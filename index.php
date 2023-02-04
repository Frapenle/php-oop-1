<?php
include_once __DIR__ . '/models/Movie.php';
include_once __DIR__ . '/db/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <h1 class="text-6xl text-center">Movies</h1>
    </header>
    <main class="">
        <ul class="flex flex-wrap"> <?php foreach ($movies as $movie) { ?>
                <li class="w-full md:w-1/2 p-4">
                    <div class="mb-8 max-w-sm w-full lg:max-w-full lg:flex">
                        <div class="h-48 bg-cover bg-center lg:h-auto lg:w-48 flex-none rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('<?php echo $movie->getImage() ?>')" title="<?php echo ($movie->getTitle()) ?>">
                        </div>
                        <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                            <div class="">
                                <div>
                                    <p class="text-sm text-gray-600 flex items-center">
                                        <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                                        </svg>
                                        Members only
                                    </p>
                                    <div class="title flex items-start">
                                        <div class="text-gray-900 font-bold text-xl mb-2 mr-5"><?php echo $movie->getTitle() ?></div>
                                        <img class="w-6 h-6 rounded-full mr-1" src="<?php echo ($movie->isProhibited()) ?>" alt="#">
                                    </div>

                                    <p class="text-gray-500 text-base mb-5"><?php echo $movie->getPlot() ?></p>
                                </div>
                                <div class="flex justify-between">
                                    <div class="info">
                                        <p class="text-gray-500 text-base"><span class="text-black font-medium">Attori: </span> <?php echo $movie->getActors() ?></p>
                                        <p class="text-gray-500 text-base"><span class="text-black font-medium">Genere: </span><?php echo $movie->getGenres() ?></p>
                                    </div>
                                    <div class="img">
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="text-sm">
                                    <h1 class="text-gray-900 leading-none"></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </main>

</body>

</html>