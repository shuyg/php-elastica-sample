<?php

require "bootstrap.php";

// Load index
$elasticaIndex = $elasticaClient->getIndex('games');

// Create index
$elasticaIndex->create(array(), true);

// Get type
$elasticaType = $elasticaIndex->getType('game');

// Games
$game1 = array(
    'name'      => 'World of Warcraft',
    'description' => 'World of Warcraft (often abbreviated as WoW) is a massively multiplayer online role-playing game (MMORPG) by Blizzard Entertainment' );

$game2 = array('name' => 'StarCraft',
'description' => 'StarCraft is a military science fiction real-time strategy video game developed and published by Blizzard Entertainment');

// Document addition
$gameDocument1 = new Elastica_Document("1",$game1);
$gameDocument2 = new Elastica_Document("2",$game2);

// Add games to type
$elasticaType->addDocument($gameDocument1);
$elasticaType->addDocument($gameDocument2);

?>

<?php include("layout/head.php"); ?>
<h2>Operation Result</h2>

<div class="lift:documentCreator.handle">
    Operation Result : 2 Documents are indexed
</div>
</hr>

<?php include("layout/footer.php"); ?>