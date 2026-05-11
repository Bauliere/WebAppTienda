<?php
$palette = 'default';
if (isset($_COOKIE['palette'])) {
    $savedPalette = $_COOKIE['palette'];
    $allowedPalettes = ['default', 'pink', 'dark', 'red', 'purple'];
    if (in_array($savedPalette, $allowedPalettes)) {
        $palette = $savedPalette;
    }
}
?>
<script src="scripts/palette.js"></script>
<div class="sidebar">
    <h1> Menú </h1>
    <p> Cambiar el tema de la aplicación </p>
    <div class="paletteChange">
        <span class="mainTheme" title="Tema principal" onclick="PaletteManager.apply('default')"></span>
        <span class="pinkTheme" title="Rosa Pastel" onclick="PaletteManager.apply('pink')"></span>
        <span class="darkTheme" title="Modo Oscuro" onclick="PaletteManager.apply('dark')"></span>
        <span class="velvetTheme" title="Rojo Intenso"></span>
        <span class="purpleTheme" title="Morado Profundo"></span>
    </div>
    <a href="index.php"> Lista de productos </a>
    <a href="about.php"> Sobre nosotros </a>
    <p> Síguenos </p>
    <div class="socials">
        <a class="fb" href="https://www.facebook.com"></a>
        <a class="ig" href="https://www.instagram.com"></a>
        <a class="tk" href="https://www.tiktok.com"></a>
    </div>
</div>
<span class="floating-button" onclick="SideBarAction()">
    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 6L15 12L9 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
</span>
<script src="scripts/sidebar.js"></script>