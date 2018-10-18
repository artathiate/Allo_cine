<?php
class ErrorController extends controller {
    public function error404(){
        $template = $this->twig->loadTemplate('/Error/404.html.twig');
        echo $template->render(array());
    }
}


<?php
echo $_SERVER['REQUEST_URI'];
echo '<br>';
echo basename($_SERVER['REQUEST_URI']);
?>
<?php
require('models/film.php');
function listPosts()
{
    $posts = listFilms();
   
}
function post()
{
    $film = film();
    
}