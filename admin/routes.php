<?php
if(resolve('/admin')){
    render('admin/home', 'admin');
}elseif(resolve('/admin/pages')){
    render('admin/pages', 'admin');
}else{
    http_response_code(404);
    echo 'Erro 404: página não encontrada';
}