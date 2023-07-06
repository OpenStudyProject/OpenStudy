+++
title = "ディレクトリ構造"
description = "OpenStudyのディレクトリ構造です。"
contributor = ["lin-24-ia", "nemua"]
+++

# ディレクトリ

    OpenStudy
        ┣ assets
        ┣ content
        ┣ data
        ┣ public
        ┣ resources
        ┣ static
        ┗ theme
            ┗ openstudy
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
