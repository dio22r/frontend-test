<?php
require_once "vendor/autoload.php";

$loader = new \Twig\Loader\FilesystemLoader('view');
$twig = new \Twig\Environment($loader);

$json = file_get_contents('assets/price-data.json');
$obj = json_decode($json, true);
$arrPacket = $obj["data"];

foreach ($arrPacket as $key => $arrVal) {

  $arrPacket[$key]["normalPriceFormat"] = number_format($arrVal["normalPrice"]);
  $specialPriceFormat = number_format($arrVal["specialPrice"]);
  $arrPacket[$key]["specialPriceFormat"] = $specialPriceFormat;
  $arrPacket[$key]["specialPriceArray"] = explode(",", $specialPriceFormat);

  $arrPacket[$key]["totalRegisteredFormat"] = number_format($arrVal["totalRegistered"]);
}

$arrView = [
  "arrPacket" => $arrPacket,
  "arrModul" => [
    [
      "IcePhp",
      "apc",
      "apcu",
      "apm",
      "ares",
      "bcmath",
      "bcompiler",
      "big_int",
      "bitset",
      "bloomy",
      "bz2_filter",
      "clamav",
      "coin_acceptor",
      "crack",
      "dba",
    ],
    [
      "http",
      "huffman",
      "idn",
      "igbinary",
      "imagick",
      "imap",
      "inclued",
      "inotify",
      "interbase",
      "intl",
      "ioncube_loader",
      "ioncube_loader_4",
      "jsmin",
      "json",
      "ldap",
    ],
    [
      "nd_pdo_mysql",
      "oauth",
      "oci8",
      "odbc",
      "opcache",
      "pdf",
      "pdo",
      "pdo_dblib",
      "pdo_firebird",
      "pdo_mysql",
      "pdo_odbc",
      "pdo_pgsql",
      "pdo_sqlite",
      "pgsql",
      "phalcon",
    ],
    [
      "stats",
      "stem",
      "stomp",
      "sushosin",
      "sybase_ct",
      "sysvmsg",
      "sysvsem",
      "sysvshm",
      "tidy",
      "timezonedb",
      "trader",
      "translit",
      "uploadprogress",
      "uri_template",
      "uuid"
    ]
  ]
];


$arrView["itemEachCol"] = ceil(count($arrView["arrModul"]) / 4);

echo $twig->render('index.html', $arrView);
