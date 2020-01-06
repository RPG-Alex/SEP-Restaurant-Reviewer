<?php
//This should be used for loading what data is loaded into the page (which views)
class Page {
  public function header(){ // These functions loads header and footer views modularly (can easily point to different headers/fotoers)
    require_once APPROOT.'/view/all/header.php';
  }
  public function body($bodyView){
    require_once APPROOT.'/view/'.$bodyView.'.php';
  }

/* THIS FUNCTION CURRENTLY NOT USED. CONSIDER REMOVING
  public function view($viewToGet){
    return APPROOT.'/view/'.$bodyView.'.php';
  }
  */
  public function footer(){
    require_once APPROOT.'/view/all/footer.php';
  }

}
