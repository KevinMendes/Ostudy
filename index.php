<?php __DIR__ . require "template/header.tpl.php";
$templateName = "home";
// Mais si on me demande une page en particulier (grace à la variable d'url 'page') alors je vais afficher celle ci a la place de la home
if (isset($_GET['page'])) {
    $templateName = $_GET['page'];
} elseif ($page == "category") {
    $templateName = "category";
}
require __DIR__ . "/template/$templateName.tpl.php";
require __DIR__ . "/template/footer.tpl.php";