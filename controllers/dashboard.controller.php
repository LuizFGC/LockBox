<?php 

if(!logado()){

    return  abort(404);
}

view('dashboard'); 