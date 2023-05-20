+++
title = "Render Codeblock"
description = "コードブロックのハイライト"
date = 1970-01-01
tags = ["Hugo", "GoldMark", "Highlight"]
author = ["lin-24-ia"]
+++

Hugoのデフォルトでは、` ``` `に囲まれた部分がコードブロックとして認識されますが、自分でカスタマイズすることもできます。`lauout/_default/_markup/`に`render-codeblock.html`を作ると、そこでレイアウトを処理することができます。なお。特定の言語だけのカスタマイズもすることができます。例えば、`bash`に関するカスタマイズをしたいならば、`render-codeblock-bash.html`が適用されます。

# パラメータの種類

### Type

プログラミングの言語名です。

### Attributes

`{ }` の中に`key="value"`の形で書いたものが渡されます。`.Attribute.key`で取り出せます。

### Options

Hugoが使用しているシンタックスハイライトのChromaの持つオプションです。

### Inner

コードの中身

### Ordinal

そのページのコードブロックが何番目かです。

### Page

Pageオブジェクト

### Position

ファイルの名前とパス、エラー箇所を示します。`errorf`を一緒に使うことで、エラーコードを投げることができます。


