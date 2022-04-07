<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/style.css') ?>">
    <title>Document</title>
</head>

<body>
    <div class="container-scroller">
        <!-- Barra de navegação do cabeçalho -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex align-items-center">
                <a class="navbar-brand brand-logo" href="#">

                    <!-- Caminho para a logo -->
                    <img src="<?php echo base_url('assets/images/logo_many.png') ?>" alt="logo" class="logo-dark" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="#"><img src="" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
                <ul class="navbar-nav navbar-nav-left">
                    <li class="nav-item">
                        
                        <!-- Caminho para a view da Home do site -->
                        <!-- _view->home -->
                        <a class="nav-link" href="<?php echo site_url('main/home') ?>">
                            <span class="menu-title">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">

                        <!-- Caminho para a view da página inicial do colaborador -->
                        <!-- _view->pages->colaborador -->
                        <a class="nav-link" href="<?php echo site_url('main/colaborador') ?>">
                            <span class="menu-title">Colaborador</span>
                        </a>
                    </li>

                    <!-- Caminho para a view da página inicial do produto -->
                    <!-- _view->pages->produto -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('main/produto') ?>">
                            <span class="menu-title">Produto</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('main/sair') ?>">
                            <span class="menu-title">Sair</span>
                        </a>
                    </li>
                </ul>
            </div>