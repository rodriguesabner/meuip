<?php
$realIP = file_get_contents("http://ipecho.net/plain");
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="shortcut icon" href="assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- favicon-->

    <!--  description  -->
    <meta name="description" content="Aqui você pode ver o seu IP público de forma simples e rápida.">
    <!--  description  -->

    <link rel="stylesheet" href="css/styles.css">
    <title>Meu IP</title>
</head>
<body>
<div id="App">
    <div class="container">
        <!-- Show IP -->
        <div class="layout top-container">
            <div class="central-wrapper">
                <div class="left-container">
                    <p class="tag">IP Público</p>
                    <h1 class="publicIpTitle"><?php echo $realIP ?></h1>
                    <p class="descriptionPublicIp">
                        Este é o seu IP público. Você pode usá-lo para acessar serviços que não estão disponíveis na sua
                        rede local.
                    </p>
                </div>

                <div class="right-container">
                    <div class="terminal">
                        <header class="terminal-header">
                            <p style="14px">
                                Request
                            </p>

                            <div class="terminal-right-container">
                                <div class="terminal-separator"></div>
                                <p style="font-size: 12px">
                                    cURL
                                </p>
                            </div>
                        </header>
                        <div class="terminal-content">
                            <p style="font-size: 14px">
                                curl --location --request GET
                                'https://meuip.site/api/meuip'
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Show Documentation -->
        <div class="layout bottom-container">
            <div class="central-wrapper">
                <div class="left-container">
                    <p class="tag">For Developers</p>
                    <h1 class="documentationTitle">Via API</h1>
                    <p class="documentationDescription">
                        Você pode também descobrir o seu IP público via API utilizando um endpoint simples.
                    </p>
                </div>

                <div class="right-container">
                    <div class="terminal">
                        <header class="terminal-header">
                            <p style="14px">
                                Response
                            </p>

                            <div class="terminal-right-container">
                                <div class="terminal-separator"></div>
                                <p style="font-size: 12px">
                                    JSON
                                </p>
                            </div>
                        </header>
                        <div class="terminal-content">
                            <p style="font-size: 14px">
                                { "ip": "123.456.789.000" }
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>
            Desenvolvido por Abner Rodrigues
        </p>
        <div>
            <a href="https://github.com/rodriguesabner">Github</a>
            <p id="sep">|</p>
            <a href="api/ip">API</a>
        </div>

    </div>
</div>
</body>
</html>
