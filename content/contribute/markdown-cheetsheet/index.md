+++
title = "Markdownの書き方"
description = "一般的な記法に加えて、OpenStudyで使える記法を説明します。記事を作成する際の参考にしてください。"
date = 2023-04-05
tag = ["Markdown"]
contributor = ["lin-24-ia"]
+++

# 見出し

```text
# 大見出し
## 見出し
### 小見出し
```

OpenStudyでは、HTMLにレンダリングされるとそれぞれが`<h2>`、`<h3>`、`<h4>`に対応します。目次に表示されるのは大見出しと見出しのみです。

# リスト

## 番号なしリスト

ハイフン`-`、プラス`+`、アスタリスク`*`のいずれかを先頭に記述します。スペース4つでネストできます。

```text
* パン
* ハム
* 野菜
    - レタス
    - トマト
    - 卵
* 調味料
    - 砂糖
    - 塩こしょう
    + マヨネーズ
        - 卵
        - 塩
        - サラダ油
        - お酢
```

* パン
* ハム
* 野菜
    - レタス
    - トマト
    - 卵
* 調味料
    - 砂糖
    - 塩こしょう
    + マヨネーズ
        - 卵
        - 塩
        - サラダ油
        - お酢

## 番号つきリスト

`1.`を先頭に記述します。スペース4つでネストできます。

```text
1. パン
1. ハム
1. 野菜
    1. レタス
    1. トマト
    1. 卵
1. 調味料
    1. 砂糖
    1. 塩こしょう
    1. マヨネーズ
        1. 卵
        1. 塩
        1. サラダ油
        1. お酢
```

1. パン
1. ハム
1. 野菜
    1. レタス
    1. トマト
    1. 卵
1. 調味料
    1. 砂糖
    1. 塩こしょう
    1. マヨネーズ
        1. 卵
        1. 塩
        1. サラダ油
        1. お酢

# リンク

`[表示文字](画像のURL)`と書きます。URLのベタ書きもできます。

```text
[Google](https://www.google.co.jp/)
```

[Google](https://www.google.co.jp/)

{{< alert "notice" >}}
将来的にリンク先のページのタイトルと画像を自動で表示する機能を追加したいと考えています。
{{< /alert >}}

# 画像

## リンクなしの画像

`![代替文字](画像のURL)`と書きます。空白行を開けることなく`**`で囲むと、キャプションを追加できます。OpenStudyでは角丸で表示されます。

```text
![Sandwitch](/images/sandwitch.jpg)
**by Luis Covarrubias from Unsplash**
```

![Sandwitch](/images/sandwitch.jpg)
**by Luis Covarrubias from Unsplash**

## リンクつきの画像

`[![代替文字](画像のURL)](サイトのURL)`と書きます。

```text
[![Sandwitch](/images/sandwitch.jpg)](https://unsplash.com/ja/@eledeluis)
**by Luis Covarrubias from Unsplash**
```

[![Sandwitch](/images/sandwitch.jpg)](https://unsplash.com/ja/@eledeluis)
**by Luis Covarrubias from Unsplash**

# コード

## タイトルなしのコードブロック

バッククオート`` ` `` またはダッシュ`~`３つで囲みます。直後に言語を指定することで、シンタックスハイライトできます。

````text
```js
function helloWorld(param1, param2) {
    let count = 0;

    if (param2 == count - param1) {
        console.log('Hello, World!');
    } else {
        return null;
    }
}
```
````

```js
function helloWorld(param1, param2) {
    let count = 0;

    if (param2 == count - param1) {
        console.log('Hello, World!');
    } else {
        return null;
    }
}
```

## タイトルつきのコードブロック

言語に続く波かっこ`{}`の中に`title="foo"`と書くことで、コードブロックの左上にタイトルを付けることができます。

````text
```html {title="sample.html"}
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sample</title>
    </head>

    <body>
        <h1>Hello, World!</h1>
    </body>
</html>
```
````

```html {title="sample.html"}
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sample</title>
    </head>

    <body>
        <h1>Hello, World!</h1>
    </body>
</html>
```

## インラインコード

```text
`バッククオート`で単語を囲みます。
```

`バッククオート`で単語を囲みます。

## 整形済みテキスト

通常は複数のスペースや改行は無視されますが、半角スペース4個でインデントすることでそのまま表示することができます。

```text
    party/
    ┗ images/
        ┣ sushi.jpg
        ┣ yakiniku.svg
        ┗ pizza.ico
```

    party/
    ┗ images/
        ┣ sushi.jpg
        ┣ yakiniku.svg
        ┗ pizza.ico

# アコーディオンメニュー

````text
{{</* accordion title="さらに詳しく" */>}}

## 使い方

波かっこ`{}`2つと角かっこ`<>`の中に`accordion title="foo"`と記述します。最後に`/accordion`で閉じる必要があるので注意してください。

* リストも
* 作成できます

{{</* /accordion */>}}
````

{{< accordion title="さらに詳しく" >}}

## 使い方

波かっこ`{}`2つと角かっこ`<>`の中に`accordion title="foo"`と記述します。最後に`/accordion`で閉じる必要があるので注意してください。

* リストも
* 作成できます

{{< /accordion >}}

# アラート

4種類あります。

* Notice
* Success
* Warning
* Error

最初の引数には4種のいずれかを指定します。2つ目の引数は任意で、タイトルを指定できます。中身はMarkdownで書くことができます。

## Notice

````text
{{</* alert "notice" */>}}
`foo`は`bar`です。
{{</* /alert */>}}
````

{{< alert "notice" >}}
`foo`は`bar`です。
{{< /alert >}}

## Success

````text
{{</* alert "success" "新機能" */>}}
`foo`を`bar`に置換します。
{{</* /alert */>}}
````

{{< alert "success" "新機能" >}}
`foo`を`bar`に置換します。
{{< /alert >}}

## Warning

````text
{{</* alert "warning" */>}}
`foobar`は使用できなくなりました。
{{</* /alert */>}}
````

{{< alert "warning" >}}
`foobar`は使用できなくなりました。
{{< /alert >}}

## Error

````text
{{</* alert "error" "v2.0以降の場合" */>}}
`foobar`を使用するとエラーになります。
{{</* /alert */>}}
````

{{< alert "error" "v2.0以降の場合" >}}
`foobar`を使用するとエラーになります。
{{< /alert >}}

# 数式

## ブロック数式

ドル記号`$`2つで囲みます。

```text
$$
e^{i\theta} = \cos\theta + i\sin\theta
$$
```

$$
e^{i\theta} = \cos\theta + i\sin\theta
$$

## インライン数式

ドル記号`$`1つで囲みます。

```text
$e^{i\theta}$ は $\cos\theta$ と $i\sin\theta$ の和です。
```

$e^{i\theta}$ は $\cos\theta$ と $i\sin\theta$ の和です。

詳しい数式の書き方は以下のドキュメントを参照してください。

[Katex.org](https://katex.org/docs/supported.html)

# テーブル

パイプ`|`とハイフン`-`を使ってテーブルを作成できます。また、コロン`:`を使って左右揃えを指定できます。

```text
| 左揃え | 中央揃え | 右揃え |
|:---|:---:|---:|
| .topLeading | .top | .topTrailing |
| .leading | .center | .trailing |
| .bottomLeading | .bottom | .bottomTrailing |
```

| 左揃え | 中央揃え | 右揃え |
|:---|:---:|---:|
| .topLeading | .top | .topTrailing |
| .leading | .center | .trailing |
| .bottomLeading | .bottom | .bottomTrailing |

# 引用

先頭に`>`を付けます。`>`を複数付けることでネストすることもできます。1行空けたのちに先頭に`>`を付け、その後`*`で囲むことで引用元を記述できます。

```text
> Be a yardstick of quality. Some people aren’t used to an environment where excellence is expected.

> *Steve Jobs*
```

> Be a yardstick of quality. Some people aren’t used to an environment where excellence is expected.

> *Steve Jobs*

# その他の記法

## 段落

```text
空白行を挟むことで段落となります。

空白行を挟むことで段落となります。
```

空白行を挟むことで段落となります。

空白行を挟むことで段落となります。

## 改行

わかりやすくするためにスペース` `をドット`.`に書き替えています。

```text
スペースを2つ記述してから改行すると..
改行されます。
```

スペースを2つ記述してから改行すると  
改行されます。

## 脚注

角かっこ`[]`とハット`^`に続けてインデックスの数字を書きます。その後にその脚注の説明を書きます。

```text
脚注[^1]です。

[^1]: 脚注とは、言葉の意味、文章の解釈、本文の補足、文献の出典（典拠・引用文献・参考文献）などを明らかにするために付される文をいう。
```

脚注[^1]です。

[^1]: 脚注とは、言葉の意味、文章の解釈、本文の補足、文献の出典（典拠・引用文献・参考文献）などを明らかにするために付される文をいう。

## 水平線

アンダースコア`_`、アスタリスク`*`、ハイフン`-`のいずれかを3つ以上連続して記述します。

```text
---
```

---

## イタリック

```text
*アスタリスク* か _アンダースコア_ 1個で囲みます。前後にスペースが必要です。
```

*アスタリスク* か _アンダースコア_ 1個で囲みます。前後にスペースが必要です。

## 太字

```text
**アスタリスク** か __アンダースコア__ 2個で囲みます。前後にスペースが必要です。
```

**アスタリスク** か __アンダースコア__ 2個で囲みます。前後にスペースが必要です。

## 太字イタリック

```text
***アスタリスク*** か ___アンダースコア___ 3個で囲みます。前後にスペースが必要です。
```

***アスタリスク*** か ___アンダースコア___ 3個で囲みます。前後にスペースが必要です。
