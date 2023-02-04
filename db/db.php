<?php
require_once __DIR__ . '/../models/Movie.php';
require_once __DIR__ . '/../models/Genre.php';

//plot
$harry_plot1 = 'A 11 anni, Harry Potter scopre di essere il figlio orfano di due potenti maghi. Frequenta la scuola di magia e stregoneria di Hogwarts dove scopre la verità su se stesso e sulla morte dei suoi genitori.';
$harry_plot2 = 'Il secondo anno ad Hogwarts si rivela denso di pericoli per Harry Potter e i suoi amici: un mostro misterioso si aggira per la scuola pietrificando i maghi mezzosangue figli di babbani, e tutti incolpano Harry.';
$batman_plot = 'Traumatizzato dalla morte dei genitori, il giovane Bruce Wayne intraprende un addestramento fisico e psicologico con il suo mentore per prepararsi alla lotta contro il male nella città di Gotham City.';
$spiderman_plot = 'Il morso di un ragno mutante dona degli incredibili, e inaspettati, poteri al giovane Peter Parker, che li usa nella guerra contro un minaccioso nemico.';

//genres
$action = new Genre('Action');
$thriller = new Genre('Thriller');
$adventure = new Genre('Adventure');
$fantasy = new Genre('Fantasy');
$family = new Genre('Family');


$movies = [
    $harry_potter_1 = new Movie('Harry Potter', 'Daniel Radcliffe', $harry_plot1, [$adventure, $fantasy, $family], false, 'https://www.warnerbros.it/sites/default/files/HP1_MOVIE_V_DD_KA_TT_1400x2100_300dpi_IT.jpg'),
    $harry_potter_2 = new Movie('Harry Potter 2', 'Daniel Radcliffe', $harry_plot2, [$adventure, $fantasy, $family], false, 'https://picfiles.alphacoders.com/232/thumb-232115.jpg'),
    $batman = new Movie('Batman begins', 'Christian Bale', $batman_plot, [$action], true, 'https://m.media-amazon.com/images/I/51BZHCbJ-QL._SY445_.jpg'),
    $spiderman = new Movie('Spiderman', 'Tobey Maguire', $spiderman_plot, [$action, $fantasy], false, 'https://m.media-amazon.com/images/I/81jRVXCIGeL.jpg')
];
