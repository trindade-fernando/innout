<?php
//controller temporarios

echo 'TESTE<br>';

loadModel('WorkingHours');

$wh = WorkingHours::loadFromUserAndDate(1, date('Y-m-d'));

$workedIntervalString = $wh->getWorkedInterval()->format('%H:%I:%S');
print_r($workedIntervalString);
echo '<br>';

$launchIntervalString = $wh->getLunchInterval()->format('%H:%I:%S');
print_r($launchIntervalString);
echo '<br>';

print_r($wh->getExitTime());