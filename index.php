<?php
echo "Hello World";
include_once('lib/class.brood.php');
include_once('lib/class.hen.php');

$brood = new Brood();

$brood->addHen(new Hen('Henrietta', new DateTime('2013-02-28')));
$brood->addHen(new Hen('Prudence', new DateTime('2013-02-24')));
$brood->addHen(new Hen('Dotty', new DateTime('2013-02-25')));

/** @var Hen $hen */
foreach($brood->getHens() as $hen)
{
    printf("%s is %s days old (%s weeks) and has %s laid eggs.\n",
        $hen->getName(),
        $hen->getAgeInDays(),
        $hen->getAgeInWeeks(),
        $hen->hasProbablyLaidEggs() ? 'probably' : 'probably not'
    );
}

/*
 * Sample Output:
 *
 * > php -f hens.php
 * Henrietta is 133 days old (19 weeks) and has probably not laid eggs.
 * Prudence is 137 days old (19 weeks) and has probably not laid eggs.
 * Dotty is 136 days old (19 weeks) and has probably not laid eggs.
 */
