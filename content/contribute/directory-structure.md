+++
title = "ディレクトリ構造"
description = "Hugoの構造を説明します。"
author = ["lin-24-ia"]
+++

    (root)/
        ┣ assets
        ┣ content
        ┣ data
        ┣ public
        ┣ resources
        ┣ static
        ┗ theme
            ┗ myTheme
                ┣ archytype
                ┣ layouts
                ┗ static

### assets
sassファイルがあります。

### content
記事のMarkdownファイルがあります。ビルドすると、ディレクトリ構造がそのままHTMLに反映されます。

### data
各ページから参照できるデータがあります。変数みたいなものです。

public
ビルドして生成されたファイルがあります。

resources
Hugoのパイプを使った時のキャッシュらしいです。

static
サイト全体で使用される画像などがあります。

theme
パーシャルファイルなど。