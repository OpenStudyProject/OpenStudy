+++
title = "SafeHTML"
description = "HTMLタグをエスケープせずに表示するためのものです。"
contributor = ["lin-24-ia"]
+++

# safeHTMLを使わない場合

通常、HTMLのコードをパラメータとして渡すと、自動的にタグがエスケープされます。

例えば、フッターに表示する用のコピーライトを`config.toml`に書いたとしましょう。

```toml { title="config.toml" }
copyright = "&copy; 2015 Jane Doe / <a href="https://creativecommons.org/licenses/by/4.0/">Some rights reserved</a>"
```

これを`{{ .Site.Copyright }}`として出力した場合、HTMLタグはエスケープされるため、以下のように`<a>`タグが機能しなくなってしまいます。

```html { title="そのままの場合" }
<p>© 2015 Jane Doe.  &lt;a href=&#34;https://creativecommons.org/licenses by/4.0/&#34;&gt;Some rights reserved&lt;/a&gt;.</p>
```

# safeHTMLを使ったとき

ここで、`{{ .Site.Copyright | safeHTML }}`とすることで、エスケープされなくなります。

{{< alert "warning" "使用上の注意" >}}
生のコードが意図せずに実行されないように、渡されるパラメータは悪意のないコードであることが保証される必要があります。
{{< /alert >}}

```html { title="safeHTMLを使ったとき" }
© 2015 Jane Doe. <a href="https://creativecommons.org/licenses/by/4.0/">Some rights reserved</a>.
```