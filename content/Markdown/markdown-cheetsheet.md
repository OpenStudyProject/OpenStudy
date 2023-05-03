+++
title = "Markdownの記法"
description = "OpenStudyで表示されるMarkdownのプレビューです。"
date = 2022-02-01
style = ["article"]
+++

OpenStudyで表示されるMarkdownのプレビューです。

## 見出し

```
## 大見出し
### 中見出し
#### 小見出し
```

## 大見出し
### 中見出し
#### 小見出し

アクセシビリティの関係上`#`h1タグは使用できません。使用した場合エラーになります。

# h1タグを使った場合

## リスト

ハイフン`-`、プラス`+`、アスタリスク`*`のいずれかを先頭に記述します。  
ネストはタブで表現します。

- リスト
- リスト1
    - リスト1_1
        - リスト1_1_1
        - リスト1_1_2
    - hts://maku77.github.io/hugo/https://maku77.github.io/hugo/https://maku77.github.io/hugo/https://maku77.github.io/hugo/https://maku77.github.io/hugo/https://maku77.github.io/hugo/https://maku77.github.io/hugo/https://maku77.github.io/hugo/https://maku77.github.io/hugo/https://maku77.github.io/hugo/
- リスト2
- リスト3

```js:title
/**
 * Does a thing
 */
function helloWorld(param1, param2) {
  var something = 0;

  // Do something
  if (2.0 % 2 == something) {
    console.log('Hello, world!');
  } else {
    return null;
  }

  // @TODO comment
}
```

{{< code lang="java" title="sample.java" linenos="true" >}}
public class Main {
    public static void main(String... args) {
        System.out.println("Hello");
    }
}
{{< /code >}}

## 番号付きリスト

`番号.`を先頭に記述します。ネストはタブで表現します。  
番号は自動的に採番されるため、すべての行を1.と記述するのがお勧めです。

```
1. 番号付きリスト1
    1. 番号付きリスト1-1
    1. 番号付きリスト1-2
1. 番号付きリスト2
1. 番号付きリスト3
```

1. 番号付きリスト1
    1. 番号付きリスト1-1
    1. 番号付きリスト1-2
1. 番号付きリスト2
1. 番号付きリスト3

## リンク

`[表示文字](URL)`でリンクに変換されます。

```
[Google](https://www.google.co.jp/)
```

[Google](https://www.google.co.jp/)

## 画像

先頭の`!`で画像と認識されます。画像の大きさなどの指定をする場合はimgタグを使用します。

{{< figure src="/images/OpenStudy.png" title="Site Logo" link="https://apple.com/" >}}

## 段落

空白行を挟むことで段落となります。

## 改行

改行の前に半角スペース`  `を2つ記述します。

```
hoge
fuga(スペース2つ)
piyo
```

hoge
fuga  
piyo

## Blockquotes 引用

先頭に`>`を記述します。ネストは`>`を多重に記述します。

```
> 引用  
> 引用
>> 多重引用
```

> 引用  
> 引用
>> 多重引用

## Code コード

`` `バッククオート` `` 3つ、あるいはダッシュ`~`３つで囲みます。

```
print 'hoge'
```

### インラインコード

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

## Hr 水平線

アンダースコア`_` 、アスタリスク`*`、ハイフン`-`などを3つ以上連続して記述します。

```
hoge
***
hoge
___
hoge
---
```

hoge
***
hoge
___
hoge
---

## 強調
### em

アスタリスク`*`もしくはアンダースコア`_`1個で文字列を囲みます。

```
これは *イタリック* です
これは _イタリック_ です
```

これは *イタリック* です
これは _イタリック_ です

### strong

アスタリスク`*`もしくはアンダースコア`_`2個で文字列を囲みます。

```
これは **ボールド** です
これは __ボールド__ です
```

これは **ボールド** です
これは __ボールド__ です

### em + strong

アスタリスク`*`もしくはアンダースコア`_`3個で文字列を囲みます。

```
これは ***イタリック＆ボールド*** です
これは ___イタリック＆ボールド___ です
```

これは ***イタリック＆ボールド*** です
これは ___イタリック＆ボールド___ です

# Table 表

`-`と`|`を使ってtableを作成します。

```
| TH1 | TH2 |
----|---- 
| TD1 | TD3 |
| TD2 | TD4 |
```

| TH1 | TH2 |
----|---- 
| TD1 | TD3 |
| TD2 | TD4 |

```
| 左揃え | 中央揃え | 右揃え |
|:---|:---:|---:|
|1 |2 |3 |
|4 |5 |6 |
```

| 左揃え | 中央揃え | 右揃え |
|:---|:---:|---:|
|1 |2 |3 |
|4 |5 |6 |