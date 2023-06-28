+++
title = "Hugo"
description = "Go言語で書かれた世界最速の静的サイトジェネレーター"
type = "default"
layout = "single"
color = "hsl(321, 100%, 50%)"
categoryImage = "hugo.svg"
contributor = ["lin-24-ia"]
+++

# 静的サイトジェネレーターとは

Markdownなどのテキストから、HTMLのウェブサイトを生成するプログラムです。静的サイトはサーバー側でデータを処理する必要がないため、動的サイトに比べてシンプルで高速でセキュリティーが高いです。

## HTMLのウェブページを1枚ずつ作る場合

- ヘッダーなどの共通部分を変更したいとき、すべてのHTMLを変更する必要がある
- 文章をタグで囲むため、読みづらいし書きづらい
- カテゴリやタグで分類するときにリンクが複雑になる
- などなど

## 静的サイトジェネレーターを使った場合

- 読みやすくて書きやすいMarkdownが使える
- 共通部分を1つのファイルにまとめることができる
- よく使うコードをスニペット化できる
- などなど

## CMSとの比較

WordPressなどのCMS(Contents Management System)は、ユーザーがサーバーにアクセスされるたびに、データベースにあるファイルを集めてウェブページを生成します。プログラミングの知識不要で使えるものが多いです。

### 静的サイトジェネレーターのメリット

- ページの読み込みが速い
- セキュリティーが高い

### CMSのメリット

- サーバー側でデータを処理できる
- プログラミングの知識不要で使える

## Hugo以外の有名な静的サイトジェネレーター

### [Next.js](https://nextjs.org)

Reactベースです。開発元はVercel。

### [Gatsby](https://www.gatsbyjs.com)

同じくReactベース。

### [jekyll](https://jekyllrb.com)

Ruby製です。

# Hugoの特徴とできること

Hugoを使うにあたってGo言語の知識は不要です。

### ビルドが高速

他の静的サイトジェネレーターに比べてビルドが非常に速いです。平均的なサイトであれば1秒未満でビルドが完了します。

### 編集内容が即座に反映される

LiveReload機能があります。

### たくさんのテーマから選べる

オープンソースのHugoテーマがあり、簡単に始められます。

### 簡単にサイトを公開できる

Netlify、Heroku、GoDaddy、DreamHost、GitHub Pages、GitLab Pages、Surge、Firebase、Google Cloud Storage、Amazon S3、Rackspace、Azure、CloudFrontなどの有名なCDNへ簡単にデプロイできます。

### 柔軟性が高い

- それぞれの記事のURLを指定できる
- カテゴリやタグで分類できる
- レイアウトをカスタマイズできる
- 目次を自動生成できる
- リダイレクト機能
- Markdownで書ける
- コードブロックのハイライト
- 変数の使用
- 動的なAPIが利用できる
- 複数の言語に対応できる