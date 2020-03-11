<?php

$prod = ProductionManager::findById($_GET['id']);

$prod->setDateHeureFinProd(date_format(new DateTime(), "Y-m-d H:i:s"));

ProductionManager::update($prod);

header("Location: index.php?action=productionRecap&id=".$_GET['id']);
