<?php
$keys = isset($_GET['key']) ? array_map('trim', explode(',', strtolower($_GET['key']))) : array();
$packages = array();

$packages[] = array(
    'name' => 'MeulenPack 1.12.2',
    'title' => 'MeulenPack 1.12.2',
    'version' => '1.1',
    'priority' => 4,
    'location' => 'meulenpack-1.12.2.json',
);

$packages[] = array(
    'name' => 'Vanilla+ 1.12',
    'title' => 'Vanilla+ 1.12',
    'version' => '2.0',
    'priority' => 2,
    'location' => 'vanilla-1.12.json',
);

$packages[] = array(
    'name' => 'Vanilla+ 1.11.2',
    'title' => 'Vanilla+ 1.11.2',
    'version' => '2.0',
    'priority' => 1,
    'location' => 'vanilla-1.11.2.json',
);

$packages[] = array(
    'name' => 'Vanilla+ 1.10.2',
    'title' => 'Vanilla+ 1.10.2',
    'version' => '2.0',
    'priority' => 0,
    'location' => 'vanilla-1.10.2.json',
);

$out = array('minimumVersion' => 1, 'packages' => $packages);
header('Content-Type: text/plain; charset=utf-8');
echo json_encode($out);
