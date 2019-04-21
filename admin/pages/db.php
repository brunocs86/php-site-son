<?php

$pages_all = function () use ($conn) {
    $result = $conn->query('SELECT * FROM pages');
    return $result->fetch_all(MYSQLI_ASSOC);
};

$pages_create = function (){
    flash('Registro criado com sucesso.', 'success');
};

$page_one = function ($id){

};

$pages_edit = function ($id){
    flash('Registro atualizado com sucesso.', 'success');
};

$pages_delete = function ($id){
    flash('Registro removido com sucesso.', 'success');
};