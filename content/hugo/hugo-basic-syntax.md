+++
title = "Partial, Template, Shortcodeのまとめ"
description = "Hugoの基本的な文法について解説します。"
date = 2023-04-05
tag = ["Hugo"]
contributor = ["lin-24-ia"]
+++

混乱しやすのでまとめました。

# Partial

## 呼び出し方

`{{ partial "foo.html" . }}`

## 定義の仕方

`layout/partials`に置く

## 注意点

- mdの中では使用できない
- 引数は使用できない

# Template

- `{{ template "foo" . }}` で呼び出す
- 本来はHugo内部で決められたものを呼び出すもの
- `partial` の中で `{{ define "foo" }}` と定義する
- 引数を使用できる
- `{{ template "foo" dict ("x" 100 "y" 200) }}` とすることで `.x` と `.y` に代入される
- 最初に `{{ $x := .x }}`、`{{ $y := .y }}` と書いておく慣習がある
- `{{ return $z }}` と定義して `{{ $result := partial "foo" 100 }}` と呼び出すと値を返すことができる

# ShortCode

- `{{</* foo key="value" */>}}` と呼び出すと中身をそのまま出力する
- `{{%/* foo key="value" */%}}` と呼び出すと中身をMarkdownとしてパースする
- mdの中でのみ使用可能
- 引数を使用できる
- `layout/shortcodes` に保存する