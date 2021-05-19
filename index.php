<?php
require_once "vendor/autoload.php";

$loader = new \Twig\Loader\FilesystemLoader('view');
$twig = new \Twig\Environment($loader);

$arrDetailPacket = [
  "resPower" => "Resource Power",
  "diskSpace" => "Disk Space",
  "bandwith" => "Bandwith",
  "pop3" => "POP3 Mail",
  "database" => "Databases",
  "addon_domain" => "Domain",
  "backupRestore" => "Backup",
  "freeDomain" => "Domain Gratis Selamanya",
  "unlimitedSSL" => "Gratis Selamanya",
  "nameServer" => "Name Server",
  "support" => "Layanan Support",
  "stars" => 5,
  "mailProtection" => "Mail Protection"
];

$arrPacket = [
  [
    "title" => "Bayi",
    "normalPrice" => 19900,
    "specialPrice" => 14900,
    "priceDuration" => "bln",
    "totalRegistered" => 938,
    "bestSeller" => false,
    "detail" =>
    [
      [
        "strong" => "0.5X RESOURCE POWER",
        "normal" => ""
      ],
      [
        "strong" => "500 MB",
        "normal" => "Disk Space"
      ],
      [
        "strong" => "Unlimited",
        "normal" => "Bandwith"
      ],
      [
        "strong" => "Unlimited",
        "normal" => "Databases"
      ],
      [
        "strong" => "1",
        "normal" => "Domain"
      ],
      [
        "strong" => "Instant",
        "normal" => "Backup"
      ],
      [
        "strong" => "Unlimited SSL",
        "normal" => "Gratis Selamanya"
      ],
    ]
  ],
  [
    "title" => "Pelajar",
    "normalPrice" => 46900,
    "specialPrice" => 23450,
    "priceDuration" => "bln",
    "totalRegistered" => 4168,
    "bestSeller" => false,
    "detail" =>
    [
      [
        "strong" => "1X RESOURCE POWER",
        "normal" => ""
      ],
      [
        "strong" => "Unlimited",
        "normal" => "Disk Space"
      ],
      [
        "strong" => "Unlimited",
        "normal" => "Bandwith"
      ],
      [
        "strong" => "Unlimited",
        "normal" => "POP3 Email"
      ],
      [
        "strong" => "Unlimited",
        "normal" => "Databases"
      ],
      [
        "strong" => "10",
        "normal" => "Add Domains"
      ],
      [
        "strong" => "Instant",
        "normal" => "Backup"
      ],
      [
        "strong" => "Domain Gratis",
        "normal" => "Selamanya"
      ],
      [
        "strong" => "Unlimited SSL",
        "normal" => "Gratis Selamanya"
      ],
    ]
  ],
  [
    "title" => "Personal",
    "normalPrice" => 58900,
    "specialPrice" => 38900,
    "priceDuration" => "bln",
    "totalRegistered" => 10017,
    "bestSeller" => true,
    "detail" =>
    [
      [
        "strong" => "2X RESOURCE POWER",
        "normal" => ""
      ],
      [
        "strong" => "Unlimited",
        "normal" => "Disk Space"
      ],
      [
        "strong" => "Unlimited",
        "normal" => "Bandwith"
      ],
      [
        "strong" => "Unlimited",
        "normal" => "POP3 Email"
      ],
      [
        "strong" => "Unlimited",
        "normal" => "Databases"
      ],
      [
        "strong" => "Unlimited",
        "normal" => "Add Domains"
      ],
      [
        "strong" => "Instant",
        "normal" => "Backup"
      ],
      [
        "strong" => "Domain Gratis",
        "normal" => "Selamanya"
      ],
      [
        "strong" => "Unlimited SSL",
        "normal" => "Gratis Selamanya"
      ],
      [
        "strong" => "Private",
        "normal" => "Name Server"
      ],
      [
        "strong" => "SpamAssasin",
        "normal" => "Mail Protection"
      ],
    ]
  ],
  [
    "title" => "Bisnis",
    "normalPrice" => 109900,
    "specialPrice" => 65900,
    "priceDuration" => "bln",
    "totalRegistered" => 3552,
    "bestSeller" => false,
    "detail" =>
    [

      [
        "strong" => "3X RESOURCE POWER",
        "normal" => ""
      ],
      [
        "strong" => "Unlimited",
        "normal" => "Disk Space"
      ],
      [
        "strong" => "Unlimited",
        "normal" => "Bandwith"
      ],
      [
        "strong" => "Unlimited",
        "normal" => "POP3 Email"
      ],
      [
        "strong" => "Unlimited",
        "normal" => "Databases"
      ],
      [
        "strong" => "Unlimited",
        "normal" => "Add Domains"
      ],
      [
        "strong" => "Magic Auto",
        "normal" => "Backup & Restore"
      ],
      [
        "strong" => "Domain Gratis",
        "normal" => "Selamanya"
      ],
      [
        "strong" => "Unlimited SSL",
        "normal" => "Gratis Selamanya"
      ],
      [
        "strong" => "Private",
        "normal" => "Name Server"
      ],
      [
        "strong" => "Prioritas",
        "normal" => "Layanan Support"
      ],
      "star",
      [
        "strong" => "SpamExpert",
        "normal" => "Pro Mail Protection"
      ],
    ]
  ]
];

foreach ($arrPacket as $key => $arrVal) {
  $arrPacket[$key]["normalPriceFormat"] = number_format($arrVal["normalPrice"]);
  $specialPriceFormat = number_format($arrVal["specialPrice"]);
  $arrPacket[$key]["specialPriceFormat"] = $specialPriceFormat;
  $arrPacket[$key]["specialPriceArray"] = explode(",", $specialPriceFormat);

  $arrPacket[$key]["totalRegisteredFormat"] = number_format($arrVal["totalRegistered"]);

  // $arrTempDetail = [];
  // foreach ($arrDetailPacket as $key2 => $val) {
  //   $arrTempDetail[$key2] = false;

  //   if (isset($arrVal["detail"][$key2])) {
  //     $arrTempDetail[$key2] = 
  //   } 
  // }
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
