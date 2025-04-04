<?php

return [
    'seeders' => [
        'attribute' => [
            'attribute-families' => 'Standard',
            'attribute-groups'   => [
                'description'      => 'Beskrivning',
                'general'          => 'Allmän',
                'inventories'      => 'Inventarier',
                'meta-description' => 'Meta Beskrivning',
                'price'            => 'Pris',
                'technical'        => 'Teknisk',
                'shipping'         => 'Frakt',
            ],
            'attributes' => [
                'brand'                => 'Märke',
                'color'                => 'Färg',
                'cost'                 => 'Kostnad',
                'description'          => 'Beskrivning',
                'featured'             => 'Funktioner',
                'guest-checkout'       => 'Gästkassa',
                'height'               => 'Höjd',
                'length'               => 'Längd',
                'manage-stock'         => 'Hantera lager',
                'meta-description'     => 'Meta Beskrivning',
                'meta-keywords'        => 'Meta Nyckelord',
                'meta-title'           => 'Meta Titel',
                'name'                 => 'Namn',
                'new'                  => 'Ny',
                'price'                => 'Pris',
                'product-number'       => 'Produktnummer',
                'short-description'    => 'Kort beskrivning',
                'size'                 => 'Storlek',
                'sku'                  => 'SKU',
                'special-price-from'   => 'Speciellt pris från',
                'special-price-to'     => 'Speciellt pris till',
                'special-price'        => 'Speciellt pris',
                'status'               => 'Status',
                'tax-category'         => 'Skattekategori',
                'url-key'              => 'URL Nyckel',
                'visible-individually' => 'Synlig individuellt',
                'weight'               => 'Vikt',
                'width'                => 'Bredd',
            ],
            'attribute-options' => [
                'black'  => 'Svart',
                'green'  => 'Grön',
                'l'      => 'L',
                'm'      => 'M',
                'red'    => 'Röd',
                's'      => 'S',
                'white'  => 'Vit',
                'xl'     => 'XL',
                'yellow' => 'Gul',
            ],
        ],
        'category' => [
            'categories' => [
                'description' => 'Rotkategoribeskrivning',
                'name'        => 'Rot',
            ],
            'category_fields' => [
                'name'        => 'Namn',
                'description' => 'Beskrivning',
            ],
        ],
        'cms' => [
            'pages' => [
                'about-us' => [
                    'content' => 'Om oss sida innehåll',
                    'title'   => 'Om oss',
                ],
                'contact-us' => [
                    'content' => 'Kontakt oss sida innehåll',
                    'title'   => 'Kontakta oss',
                ],
                'customer-service' => [
                    'content' => 'Kundservice sida innehåll',
                    'title'   => 'Kundservice',
                ],
                'payment-policy' => [
                    'content' => 'Betalningspolicy sida innehåll',
                    'title'   => 'Betalningspolicy',
                ],
                'privacy-policy' => [
                    'content' => 'Sekretesspolicy sida innehåll',
                    'title'   => 'Sekretesspolicy',
                ],
                'refund-policy' => [
                    'content' => 'Återbetalningspolicy sida innehåll',
                    'title'   => 'Återbetalningspolicy',
                ],
                'return-policy' => [
                    'content' => 'Returpolicy sida innehåll',
                    'title'   => 'Returpolicy',
                ],
                'shipping-policy' => [
                    'content' => 'Fraktpolicy sida innehåll',
                    'title'   => 'Fraktpolicy',
                ],
                'terms-conditions' => [
                    'content' => 'Villkor sida innehåll',
                    'title'   => 'Villkor',
                ],
                'terms-of-use' => [
                    'content' => 'Villkor för användning sida innehåll',
                    'title'   => 'Villkor för användning',
                ],
                'whats-new' => [
                    'content' => 'Vad är nytt sida innehåll',
                    'title'   => 'Vad är nytt',
                ],
            ],
        ],
        'core' => [
            'channels' => [
                'meta-title'       => 'Demobutik',
                'meta-keywords'    => 'Demobutik nyckelord',
                'meta-description' => 'Demobutik meta beskrivning',
                'name'             => 'Standard',
            ],
            'currencies' => [
                'AED' => 'Dirham',
                'AFN' => 'Afghansk afghani',
                'CNY' => 'Kinesisk yuan',
                'EUR' => 'Euro',
                'GBP' => 'Brittiskt pund',
                'INR' => 'Indisk rupie',
                'IRR' => 'Iransk rial',
                'JPY' => 'Japansk yen',
                'RUB' => 'Rysk rubel',
                'SAR' => 'Saudi riyal',
                'TRY' => 'Turkisk lira',
                'UAH' => 'Ukrainsk hryvnia',
                'USD' => 'Amerikansk dollar',
            ],
        ],
        'customer' => [
            'customer-groups' => [
                'general'   => 'Allmänt',
                'guest'     => 'Gäst',
                'wholesale' => 'Grossist',
            ],
        ],
        'inventory' => [
            'inventory-sources' => [
                'name' => 'Standard',
            ],
        ],
        'shop' => [
            'theme-customizations' => [
                'all-products' => [
                    'name'    => 'Alla produkter',
                    'options' => [
                        'title' => 'Alla produkter',
                    ],
                ],
                'bold-collections' => [
                    'content' => [
                        'btn-title'   => 'Visa alla',
                        'description' => 'Utforska våra nya modiga kollektioner! Höj din stil med djärva mönster och vibrerande färger. Upptäck slående mönster och djärva toner som redefinierar din garderob. Gör dig redo att omfamna det extraordinära!',
                        'title'       => 'Förbered dig för våra nya djärva kollektioner!',
                    ],
                    'name' => 'Djärva kollektioner',
                ],
                'categories-collections' => [
                    'name' => 'Kategoriens kollektioner',
                ],
                'featured-collections' => [
                    'name'    => 'Utvalda kollektioner',
                    'options' => [
                        'title' => 'Utvalda produkter',
                    ],
                ],
                'footer-links' => [
                    'name'    => 'Sidfotslänkar',
                    'options' => [
                        'about-us'         => 'Om oss',
                        'contact-us'       => 'Kontakta oss',
                        'customer-service' => 'Kundservice',
                        'payment-policy'   => 'Betalningspolicy',
                        'privacy-policy'   => 'Sekretesspolicy',
                        'refund-policy'    => 'Återbetalningspolicy',
                        'return-policy'    => 'Returpolicy',
                        'shipping-policy'  => 'Fraktpolicy',
                        'terms-conditions' => 'Villkor',
                        'terms-of-use'     => 'Villkor för användning',
                        'whats-new'        => 'Vad är nytt',
                    ],
                ],
                'game-container' => [
                    'content' => [
                        'sub-title-1' => 'Våra kollektioner',
                        'sub-title-2' => 'Våra kollektioner',
                        'title'       => 'Spela med våra nya släpp!',
                    ],
                    'name' => 'Spelcontainer',
                ],
                'image-carousel' => [
                    'name'    => 'Bildkarusell',
                    'sliders' => [
                        'title' => 'Förbered dig för en ny kollektion',
                    ],
                ],
                'new-products' => [
                    'name'    => 'Nya produkter',
                    'options' => [
                        'title' => 'Nya produkter',
                    ],
                ],
                'offer-information' => [
                    'content' => [
                        'title' => 'BÖRJA MED 40% RABATT PÅ DITT FÖRSTA KÖP',
                    ],
                    'name' => 'Erbjudande information',
                ],
                'services-content' => [
                    'description' => [
                        'emi-available-info'   => 'Finansiering utan extra kostnad finns tillgänglig på alla större kreditkort',
                        'free-shipping-info'   => 'Fri frakt på alla beställningar',
                        'product-replace-info' => 'Lätt produktutbyte tillgängligt!',
                        'time-support-info'    => 'Dedikerad support dygnet runt via chatt och e-post',
                    ],
                    'name'  => 'Tjänsteinnehåll',
                    'title' => [
                        'emi-available'   => 'EMI Tillgänglig',
                        'free-shipping'   => 'Fri frakt',
                        'product-replace' => 'Produktbyte',
                        'time-support'    => 'Support dygnet runt',
                    ],
                ],
                'top-collections' => [
                    'content' => [
                        'sub-title-1' => 'Våra kollektioner',
                        'sub-title-2' => 'Våra kollektioner',
                        'sub-title-3' => 'Våra kollektioner',
                        'sub-title-4' => 'Våra kollektioner',
                        'sub-title-5' => 'Våra kollektioner',
                        'sub-title-6' => 'Våra kollektioner',
                        'title'       => 'Förbered dig för ett spel med våra nya lanseringar!',
                    ],
                    'name' => 'Huvudkollektioner',
                ],
            ],
        ],
        'user' => [
            'roles' => [
                'description' => 'Denna roll kommer att ha alla åtkomster',
                'name'        => 'Administratör',
            ],
            'users' => [
                'name' => 'Exempel',
            ],
        ],
    ],

    'installer' => [
        'index' => [
            'create-administrator' => [
                'admin'            => 'Administratör',
                'unopim'           => 'UnoPim',
                'confirm-password' => 'Bekräfta Lösenord',
                'email-address'    => 'admin@example.com',
                'email'            => 'E-post',
                'password'         => 'Lösenord',
                'title'            => 'Skapa Administratör',
            ],

            'environment-configuration' => [
                'allowed-currencies'  => 'Tillåtna Valutor',
                'allowed-locales'     => 'Tillåtna Språk',
                'application-name'    => 'Applikationsnamn',
                'unopim'              => 'UnoPim',
                'chinese-yuan'        => 'Kinesisk Yuan (CNY)',
                'database-connection' => 'Databasanslutning',
                'database-hostname'   => 'Databasens Värdnamn',
                'database-name'       => 'Databasens Namn',
                'database-password'   => 'Databasens Lösenord',
                'database-port'       => 'Databasens Port',
                'database-prefix'     => 'Databasens Prefix',
                'database-username'   => 'Databasens Användarnamn',
                'default-currency'    => 'Standardvaluta',
                'default-locale'      => 'Standardspråk',
                'default-timezone'    => 'Standardtidszon',
                'default-url-link'    => 'https://localhost',
                'default-url'         => 'Standard-URL',
                'dirham'              => 'Dirham (AED)',
                'euro'                => 'Euro (EUR)',
                'iranian'             => 'Iransk Rial (IRR)',
                'israeli'             => 'Israelisk Shekel (ILS)',
                'japanese-yen'        => 'Japansk Yen (JPY)',
                'mysql'               => 'MySQL',
                'pgsql'               => 'pgSQL',
                'pound'               => 'Brittiskt Pund (GBP)',
                'rupee'               => 'Indisk Rupie (INR)',
                'russian-ruble'       => 'Rysk Rubel (RUB)',
                'saudi'               => 'Saudisk Riyal (SAR)',
                'select-timezone'     => 'Välj Tidszon',
                'sqlsrv'              => 'SQLSRV',
                'title'               => 'Databaskonfiguration',
                'turkish-lira'        => 'Turkisk Lira (TRY)',
                'ukrainian-hryvnia'   => 'Ukrainsk Hryvnia (UAH)',
                'usd'                 => 'Amerikansk Dollar (USD)',
                'warning-message'     => 'Varning! Standardspråk och standardvaluta kan inte ändras senare.',
            ],

            'installation-processing' => [
                'unopim'      => 'Installerar UnoPim',
                'unopim-info' => 'Skapar tabeller i databasen, detta kan ta några minuter.',
                'title'       => 'Installationsprocess',
            ],

            'installation-completed' => [
                'admin-panel'               => 'Administrationspanel',
                'unopim-forums'             => 'UnoPim Forum',
                'explore-unopim-extensions' => 'Utforska UnoPim-tillägg',
                'title-info'                => 'UnoPim har installerats framgångsrikt.',
                'title'                     => 'Installation Slutförd',
            ],

            'ready-for-installation' => [
                'create-databsae-table'   => 'Skapa Databastabeller',
                'install-info-button'     => 'Klicka på knappen nedan för att börja',
                'install-info'            => 'installationen av UnoPim',
                'install'                 => 'Installera',
                'populate-database-table' => 'Fyll i Databastabeller',
                'start-installation'      => 'Starta Installation',
                'title'                   => 'Redo för Installation',
            ],

            'start' => [
                'locale'        => 'Språk',
                'main'          => 'Start',
                'select-locale' => 'Välj Språk',
                'title'         => 'Installera UnoPim',
                'welcome-title' => 'Välkommen till UnoPim :version',
            ],

            'server-requirements' => [
                'calendar'    => 'Kalender',
                'ctype'       => 'cType',
                'curl'        => 'cURL',
                'dom'         => 'DOM',
                'fileinfo'    => 'Filinformation',
                'filter'      => 'Filter',
                'gd'          => 'GD',
                'hash'        => 'Hash',
                'intl'        => 'Internationellisering',
                'json'        => 'JSON',
                'mbstring'    => 'MbString',
                'openssl'     => 'OpenSSL',
                'pcre'        => 'PCRE',
                'pdo'         => 'PDO',
                'php-version' => '8.2 eller högre',
                'php'         => 'PHP',
                'session'     => 'Session',
                'title'       => 'Systemkrav',
                'tokenizer'   => 'Tokenizer',
                'xml'         => 'XML',
            ],

            'back'                     => 'Tillbaka',
            'unopim-info'              => 'Gemenskapsprojekt',
            'unopim-logo'              => 'UnoPim-logotyp',
            'unopim'                   => 'UnoPim',
            'continue'                 => 'Fortsätt',
            'installation-description' => 'Installationen av UnoPim består av flera steg. Här är en översikt:',
            'wizard-language'          => 'Installationsassistentens Språk',
            'installation-info'        => 'Tack för att du är här!',
            'installation-title'       => 'Välkommen till Installationen',
            'save-configuration'       => 'Spara Konfiguration',
            'skip'                     => 'Hoppa Över',
            'title'                    => 'UnoPim Installationsassistent',
            'webkul'                   => 'Webkul',
        ],
    ],
];
