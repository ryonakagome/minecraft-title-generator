<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
        <title>Minecraft Title Generator</title>

        <meta name="description" content="マインクラフトのタイトルコマンド(Bedrock Edition用)を生成するサイトです" />
        <meta property="og;site_name" content="Minecraft Title Generator" />
        <meta property="og:title" content="入力フォーム" />
        <meta property="og:description" content="マインクラフトのタイトルコマンド(Bedrock Edition用)を生成するサイトです。" />
        <meta property="og:type" content="website">
    </head>
    <body>
        <nav>
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo">MTG</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h3>コマンドを生成しました</h3>
                    <p>
                        タイトルコマンドを生成しました。<br>
                        Bedrock Editionでは、何回かに分けていくつかのコマンドを実行します。<br>
                        生成されている順番に従って、入力してください。
                    </p>
                    <table>
                        <tr><th>1. 時間を設定します。</th></tr>
                        <tr><td>
                            <?php
                                if(!isset($_POST['fadein']) or !isset($_POST['show']) or !isset($_POST['fadeout'])) {
                                    header('Location: index.php?ec=1');
                                    exit();
                                } else {
                                    print('/title '.$_POST['target'].' times '.$_POST['fadein'].' '.$_POST['show'].' '.$_POST['fadeout']);
                                }
                            ?>
                        </td></tr>
                        <tr><th>２．サブタイトル→タイトルの順で設定します。</th></tr>
                        <tr><td>
                            <?php
                                if(!isset($_POST['subtitle'])) {
                                    header('Location: index.php?ec=1');
                                    exit();
                                } else {
                                    print('/title '.$_POST['target'].' subtitle '.$_POST['subtitle']);
                                }
                            ?>
                            <br>
                            <?php
                                if(!isset($_POST['bigtitle'])) {
                                    header('Location: index.php?ec=1');
                                    exit();
                                } else {
                                    print('/title '.$_POST['target'].' title '.$_POST['bigtitle']);
                                }
                            ?>
                        </td></tr>
                    </table>
                    <a href="index.php" class="btn-large">もう一度生成する</a>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <center>
                        <p>このサイトは <a href="https://twitter.com/shuhannn">@shuhannn</a> が作成しました。</p>
                    </center>
                </div>
            </div>
        </div>
    </body>
</html>
