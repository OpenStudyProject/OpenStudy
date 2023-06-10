+++
title = "書き方"
description = "OpenStudyで統一している書き方を説明します。"
author = ["lin-24-ia"]
+++

# FrontMatter

FrontMatter とは記事のメタデータを記したものです。記事の最初に書きます。toml形式です。

[TOMLのドキュメント](https://toml.io/ja/v0.4.0)

## 記事ページ

通常の記事ページに書く FrontMatter は以下です。

    +++
    title = ""
    description = ""
    tag = []
    weight
    author = []
    draft = true
    +++

### title

記事のタイトルです。

### description

タイトルの下に表示される見出し文です。

### tag (optional)

記事にタグを追加できます。配列です。新規にタグを作成する際は、`assets/sass/_variables.scss`を編集する必要があります。

```scss {title="_variables.scss"}
    (
        class: 'markdown',
        description: 'いい言語',
        color: hsl(204, 100%, 43%),
    )
```

上のようにタグ名、そのタグの説明、カラーを指定して、配列に追加してください。なおタグ名はできるだけ英語の小文字で書いてください。

### weight (optional)

カテゴリ内の記事の順番を指定する際に使います。数値が小さいほど上位に表示されます。負の数も指定できます。ただし0は特別で、`0`を指定すると`weight`を指定していないことと同じになります。

### author

記事にコミットしていただいた方のGitHubのユーザーIDを書きます。

{{< alert "notice" >}}
将来的にはGitHubのコミット履歴から自動でコミットしていただいた方のユーザーIDを取得できるようにしたいと考えています。
{{< /alert >}}

### draft (optional)

`draft = true`とすると下書きとして認識され、そのページはビルドされなくなります。

## カテゴリのトップページ

カテゴリのトップページに書くFrontMatterは通常の記事ページとは異なります。

    +++
    title = ""
    description = ""
    color = "hsl(321, 100%, 50%)"
    categoryImage = ""
    type = "default"
    layout = "single"
    author = []
    draft = true
    +++

### color

カテゴリのテーマカラーです。hsl形式で書いてください。hueは0から360まで、`saturation: 100%`、`e: 50%`にすると一番明るい色になります。

### categoryImage

カテゴリのアイキャッチ画像のファイル名を指定します。カテゴリの直下に置いてください。できればsvgがいいです。高画質で余白の小さいものを使用してください。

### type, layout

これはこのページが`themes/myTheme/layout/_default/single.html`のレイアウトを使用するように指定するために書きます。Hugoでは`_index.md`ファイルはSectionとして扱われるため、うまく記事として生成されません。そのため手動で指定する必要があります。