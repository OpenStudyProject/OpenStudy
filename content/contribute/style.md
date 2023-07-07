---
title: "記事を書く上での注意点"
description: "OpenStudyで統一している書き方を説明します。"
contributor: ["lin-24-ia"]
---

# 書き方

- サイト内リンクは相対パスを使用する、そうしないと別タブが開いてしまう
- urlのディレクトリの下にindex.mdを置く
- 画像はそのディレクトリに置く
- トップレベルのカテゴリを見やすくするためにニッチな分野はその他にまとめる

##  公式噛み砕きを書いていい理由

- すべての人が公式ドキュメントを完全に理解できれば問題ない
- しかし公式ドキュメントは多過ぎて読むのはしんどい
- 特に日本人にとっては英語のドキュメントを読むのが面倒
- 初心者にとっては全体像が掴めていないため公式ドキュメントを読むのがしんどすぎる

## 書かない記事

- 個人の経歴や思考や成功体験
- 転職関係
- PR
- 現実生活へのインテグレーションなど抽象的でディスカッションベースなもの
- 資格試験の勉強法

# FrontMatter

FrontMatter とは記事のメタデータを記したものです。記事の最初に書きます。toml形式です。

[TOMLのドキュメント](https://toml.io/ja/v0.4.0)

## 記事ページ

通常の記事ページに書く FrontMatter は以下です。

    ---
    title: ""
    description: ""
    tag: []
    weight
    contributor: []
    draft: true
    ---

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

### contributor

記事にコミットしていただいた方のGitHubのユーザーIDを書きます。

{{< alert "notice" >}}
将来的にはGitHubのコミット履歴から自動でコミットしていただいた方のユーザーIDを取得できるようにしたいと考えています。
{{< /alert >}}

### draft (optional)

`draft: true`とすると下書きとして認識され、そのページはビルドされなくなります。

## カテゴリのトップページ

カテゴリのトップページに書くFrontMatterは通常の記事ページとは異なります。

    ---
    title: ""
    description: ""
    color: "hsl(321, 100%, 50%)"
    categoryImage: ""
    type: "default"
    layout: "single"
    contributor: []
    draft: true
    ---

### color

カテゴリのテーマカラーです。hsl形式で書いてください。hueは0から360まで、`saturation: 100%`、`e: 50%`にすると一番明るい色になります。

### categoryImage

カテゴリのアイキャッチ画像のファイル名を指定します。カテゴリの直下に置いてください。できればsvgがいいです。高画質で余白の小さいものを使用してください。

### type, layout

これはこのページが`themes/openstudy/layout/_default/single.html`のレイアウトを使用するように指定するために書きます。Hugoでは`_index.md`ファイルはSectionとして扱われるため、うまく記事として生成されません。そのため手動で指定する必要があります。