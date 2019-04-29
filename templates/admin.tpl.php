<!doctype html>
<html lang="pt_BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Trix CSS -->
    <link rel="stylesheet" href="/resource/trix/trix.css">

    <!-- Pnotify CSS -->
    <link rel="stylesheet" href="/resource/pnotify/pnotify.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <title>Painel Administrativo - SoN!</title>
</head>
<body class="d-flex flex-column">

<div id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="" class="navbar-brand">AdminSoN</a>
        <span class="navbar-text">
            Painel Administrativo - SoN
        </span>
    </nav>
</div>
<div id="main">
    <div class="row">
        <div class="col">
            <ul id="main-menu" class="nav flex-column nav-pills bg-secondary text-white p-2">
                <li class="nav-item">
                    <span class="nav-link text-white-50"><small>Menu</small></span>
                </li>
                <li class="nav-item">
                    <a href="/admin/pages" class="nav-link <?php if (resolve('/admin/pages.*')): ?> active<?php endif;?>">Páginas</a>
                </li>
                <li class="nav-item">
                    <a href="/admin/users" class="nav-link <?php if (resolve('/admin/users.*')): ?> active<?php endif;?>">Usuários</a>
                </li>
            </ul>
        </div>
        <div id="content" class="col-10">
            <?php include $content ?>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="/resource/trix/trix.js"></script>
<script src="/resource/pnotify/pnotify.js"></script>

<script>

    document.addEventListener('trix-attachment-add', function () {
        const attachment = event.attachment;
        if(!attachment.file){
            return;
        }
        const form = new FormData();
        form.append('file', attachment.file);

        $.ajax({
            url: '/admin/upload/image',
            method: 'POST',
            data: form,
            contentType: false,
            processData: false,
            xhr: function () {
                const xhr = $.ajaxSettings.xhr();
                xhr.upload.addEventListener('progress', function (e) {
                    let progress = e.loaded / e.total * 100;
                    attachment.setUploadProgress(progress);
                })

                return xhr;

            }
        }).done(function (response) {
            console.log(response);
            attachment.setAttributes({
                url: response,
                href: response
            });
        }).fail(function () {
            console.log('deu errado');
        });
    });

    <?php flash() ?>

    const confirmeEl = document.querySelector('.confirm');

    if(confirmeEl){
        confirmeEl.addEventListener('click', function(e){
            e.preventDefault();
            if(confirm('Tem certeza que quer remover o registro?')){
                window.location = e.target.getAttribute('href');
            }
        });
    }
</script>
</body>
</html>