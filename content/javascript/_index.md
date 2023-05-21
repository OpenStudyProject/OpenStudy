+++
title = "Javascript"
description = "Javascriptはすごいです！"
date = 1970-01-01
type = "default"
layout = "single"
color = "hsl(55, 90%, 55%)"
+++

## リンク

`[表示文字](URL)`でリンクに変換されます。


[Google](https://www.google.co.jp/)

## 画像

画像の大きさなどの指定をする場合はimgタグを使用します。
直後に`* *`を書くとキャプションを追加できます

[![OpenStudy](/images/OpenStudy.png)](https://openstudy.jp/)
*caption*

## 表

`-`と`|`を使ってtableを作成します。

| 左揃え | 中央揃え | 右揃え |
|:---|:---:|---:|
|1 |2 |3 |
|4 |5 |6 |

## 段落

空白行を挟むことで段落となります。

## 数式

ブロック数式

$$
e^{i\theta} = \cos\theta + i\sin\theta
$$

インライン数式：$e^{i\theta} = \cos\theta + i\sin\theta$

## 注釈

脚注の例[^1]です。

[^1]: 脚注の内容

## 改行

改行の前に半角スペース`  `を2つ記述します。

hoge
fuga  
piyo

## Blockquotes 引用

先頭に`>`を記述します。ネストは`>`を多重に記述します。

> 引用  
> 引用
>> 多重引用

## Code コード

`` `バッククオート` `` 3つ、あるいはダッシュ`~`３つで囲みます。

```
print 'hoge'
```

## アコーディオンメニュー

{{< accordion title="さらに詳しく" >}}
この本文はデフォルトでは隠されていて、クリックで見えるようになります。

- サンプルコード
- 補足説明

などに使うと便利です。
{{< /accordion >}}

## Alert カード

{{< alert "notice" >}}
一般的な情報
{{< /alert >}}

{{< alert "success" "解決策" >}}
この形式で書いたコメントは公開されたページ上では表示されません。ただし、複数行のコメントには対応していないのでご注意ください。
{{< /alert >}}

{{< alert "warning" "v1.2以前の場合" >}}
リプライを埋め込んだ場合、デフォルトでリプライ元のツイートも含まれて表示されます。ツイートのURL?conversation=noneのようにクエリパラメータにconversation=noneを指定すると、リプライ元のツイートが含まれなくなります。
{{< /alert >}}

{{< alert "error" "\"no such directory\" と表示される場合" >}}
Zenn ではKaTeXによる数式表示に対応しています。KaTeXのバージョンは常に最新バージョンを使用します。
{{< /alert >}}

## インラインコード

`` `バッククオート` `` で単語を囲むとインラインコードになります。

```
これは `インラインコード`です。
```

これは `class Hoge`です。

## pre 整形済みテキスト

半角スペース4個deコードブロックをpre表示できます

    class Hoge
        def hoge
            print 'hoge'
        end
    end