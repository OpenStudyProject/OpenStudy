+++
title = "クイックスタート"
description = "Hugoのインストールと基本的なサイトの構築まで説明します。"
date = 2023-04-05
tags = ["Hugo"]
author = ["lin-24-ia"]
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

任意のディレクトリで以下のコマンドを実行するとフォルダが作成されます。

```shell
$ hugo new site YOUR_SITE
```

このままではHugoのテーマが入ってないので白紙です。

作成したフォルダに入ります。

```shell
$ cd YOUR_SITE
```

とりあえずmainroadというテーマを入れてみます。

```shell
$ git clone https://github.com/vimux/mainroad
```