//chercher et afficher pour modifier ou supprimer


<?php
class IndexController extends Controller {
   
    public function display() {
       
    
        $template = $this->twig->loadTemplate('le lien');
        echo $template->render(array(
            
        ));
    }
}
?>