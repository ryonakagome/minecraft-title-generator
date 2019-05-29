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
                    <h2>Minecraft タイトルジェネレーター</h2>
                    <p>
                        マインクラフトのタイトルコマンド(Bedrock Edition用)を生成するサイトです。
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <p>
                        下のフォームに、必要な情報を入力してください。<br>
                        文字の色や太さの調整は、装飾コードを使います。<br>
                        <a href="https://minecraft-ja.gamepedia.com/%E8%A3%85%E9%A3%BE%E3%82%B3%E3%83%BC%E3%83%89">こちら</a>を参照しながら、タイトルを入力してください。<br>
                        ビジュアルで編集する機能は気が向いたら実装します。
                    </p>
                    <form action="generate.php" method="POST">
                        <h4>大きいタイトル</h4>
                        <input type="text" name="bigtitle" class="validate" required>
                        <h4>小さいタイトル(サブタイトル)</h4>
                        <input type="text" name="subtitle" class="validate">
                        <h4>何秒かけて<b>表示させる</b>？(フェードイン/秒)</h4>
                        <input type="number" name="fadein" class="validate" step="0.01" required>
                        <h4>何秒間<b>表示する？</b>(秒)</h4>
                        <input type="number" name="show" class="validate" step="0.01" required>
                        <h4>何秒かけて<b>消す？</b>(フェードアウト/秒)</h4>
                        <input type="number" name="fadeout" class="validate" step="0.01" required>
                        <h4>誰に表示する?(全員の場合は@a、自分またはコマンドブロックの近くの場合は@p)</h4>
                        <input type="text" name="target" class="validate" required>
                        <button type="submit" class="btn-large">コマンドを生成する</button>
                    </form>
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