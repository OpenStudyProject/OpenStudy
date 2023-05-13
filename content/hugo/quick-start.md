+++
title = "クイックスタート"
description = "Hugoのインストールと基本的なサイトの構築まで説明します。"
date = 2023-04-05
tags = ["Hugo"]
author = ["lin-24-ia"]
weight = 1
+++

# Hugoのインストール

Macの場合はHomebrewでインストールできます。

```shell
$ brew install hugo
```

Hugoのバージョンは以下で確認できます。

```shell
$ hugo version
```

# Hugoのサイトを生成する

任意のディレクトリで以下のコマンドを実行するとフォルダが作成されます。

```shell
$ hugo new site YOUR_SITE
```

# テーマをインストールする

このままではHugoのテーマが入ってないので白紙です。

作成したフォルダに入ります。

```shell
$ cd YOUR_SITE
```

とりあえずmainroadというテーマを入れてみます。

```shell
$ git clone https://github.com/vimux/mainroad
```

`YOUR_SITE/config.toml`にテーマの設定をします。

```toml
theme = "mainroad"
```

# 記事を書いてみる

早速記事を書いてみましょう。`posts`ディレクトリに`helloworld.md`を作成し、以下の内容を入力します。

```
+++
title = "Hello, World!"
date = 2023-05-31
+++

# Introduction

Hi, there!
```

冒頭の`+++`で囲まれた部分は`FrontMatter`といい、その記事のメタデータを示します。Hugoで決められた値の他にも独自で変数を指定できます。詳しくはリンクを参照してください。

それでは、ブラウザで確認してみましょう。

```shell
$ hugo
```

このコマンドによってサイトがビルドされます。`public`フォルダ内に幾つかのHTMLファイルが生成されたと思います。サーバーにサイトをアップロードする際はこの`public`フォルダをアップロードすればいいわけです。

ローカルで確認するには、ターミナルでHugoのサーバーを立ち上げます。

```shell
$ hugo server
```

この状態でブラウザから`localhost:1313`にアクセスすると、Hugoでビルドしたサイトを見ることができます。