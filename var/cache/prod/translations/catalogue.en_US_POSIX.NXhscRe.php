<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('en_US_POSIX', array (
));

$catalogueEn_US = new MessageCatalogue('en_US', array (
));
$catalogue->addFallbackCatalogue($catalogueEn_US);
$catalogueEn = new MessageCatalogue('en', array (
));
$catalogueEn_US->addFallbackCatalogue($catalogueEn);

return $catalogue;
