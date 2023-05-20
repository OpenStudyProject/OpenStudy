+++
title = "Templateについて"
description = "HugoのTemplate"
date = 2023-04-05
tags = ["Hugo"]
author = ["lin-24-ia"]
+++

TemplateはHugoをカスタマイズする上で重要です。HTMLファイルに書くことができます。MDに書いても機能しません。HugoはGo言語のhtml/templateとtext/templateライブラリーを使用しています。

# 基本的な文法

- `{{ }}`の中に書く

各ページには`Page`オブジェクトがあります。デフォルトで`.`はそのページのページオブジェクトを示します。

```
{{ . }}

-> Page(/hugo/template.md)
```

`.`に続く文字はそのオブジェクト内の変数を表します。メンバ変数のようなものです。例えば`.Title`は現在のページのタイトルを出力します。

```
{{ .Title }}

-> Templateについて
```

変数はたくさんあります。詳しくは一覧を参照してください。

https://gohugo.io/variables/page/

変数を定義することもできます。

- 変数の前には`$`を付ける
- 定義するときは`:=`と書く
- 変数に別の値を代入するときは`=`を使う

```
{{ $name := "World" }}
Hello, {{ $name }}!

{{ $name = "Hugo" }}
Hello, {{ $name }}!

-> Hello, World!
-> Hello, Hugo!
```

# Partials

`partial`は他のHTMLファイルを読み込むために使われます。`layout/partials`に置く必要があります。最後の`.`も忘れずに書いてください。

```
{{ partial "header.html" . }}
```

# Template

`template`はHugoの内部に組み込まれたHTMLファイルを読み込むために使われます。

```
{{ template "_internal/opengraph.html" . }}
```

# ループ

ループブロック内の`.`はループの各要素を示します。もともとの要素を表したいときは。`$`を使います。

```
{{ range .Pages }}
    <a href="{{ .RelPermalink }}">
        {{ .Title }}
    </a>
    {{ $.Language }}
{{ end }}
```

# デバッグ

`printf "%#v" FOO`でデバッグできます。