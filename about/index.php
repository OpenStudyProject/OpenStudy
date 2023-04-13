<?php
    $title = "OpenStudy";
    $description = "全ての受験生のための強力なプラットフォーム";
    $path = '../';
    $style = "about";
?>
<!DOCTYPE html>
<html lang="ja">
<?php require $path . 'components/head.php'; ?>
<body>
<?php require $path . 'components/header.php'; ?>
<main>
    <div class="wrapper top">
        <div class="container top2">
            <img src="<?php echo $path; ?>images/OpenStudyTransparent.png" alt="logo">
            <h1><span>全ての受験生のための</span><span>強力なプラットフォーム</span></h1>
            <p>OpenStudyは、世界中の人により洗練された<strong>圧倒的に豊富で良質なコンテンツ</strong>により、全ての高校生の<strong>受験勉強を大幅に効率的にする</strong>プロジェクトです。</p>
        </div>
    </div>

    <div class="wrapper">
        <div class="container">
            <h2><span>良質なコンテンツの</span><span>統合体</span></h2>
            <h3>勉強という共通の目的に対して、乱立したコンテンツやノウハウなどは統合されて広く共有されるべきです。</h3>
            <p>現在はインターネットを使うことで、学校や塾を超えた多くの勉強法や学ぶためのコンテンツ、ノウハウなどを見つけることができます。しかし、それらの情報は断片的で乱立しているため、これから本格的に勉強しようとする高校生は、結局何をすれば良いのか分かりません。</p>
        </div>
    </div>

    <div class="wrapper green">
        <div class="container">
            <h2><span>世界中の人により</span><span>コンテンツが</span><span>洗練されます</span></h2>
            <h3>一人ひとりの理解の仕方は異なるため、たった1つの決まりきった教え方は存在しません。</h3>
            <p>多くの人の様々なノウハウを統合して共有することで、より多くの人が効率的に勉強できるようになります。</p>
            <p>OpenStudyでは、全ての人がコンテンツの作成に参加することができます。良問とその解説、効率的な勉強法、新しい概念の説明から、勉強が捗るおすすめの文房具やお菓子まで、高校生の受験勉強に必要なコンテンツを作成できます。</p>
            <p>また、新規にコンテンツを作成する以外に、既存のコンテンツに新たな情報を追記する、情報の正確性を検証する、共通事項をまとめる、などすることで、コンテンツのクオリティーをアップデートすることができます。<strong>このようなアップデートを多くの人の間で繰り返すことにより、さらに有益なコンテンツへと洗練することができます。</strong></p>
        </div>
    </div>

    <div class="wrapper">
        <div class="container">
            <h2>OpenStudyは次世代の高校生の役に立つことを願って発足したものです</h2>
            <p>多くの人の貢献が積み重なり、ノウハウがキュレーションされることでコミュニティー全体の知的財産が豊かになり、次世代の高校生に還元されます。</p>
            <h3>初めての高校内容から旧帝大合格までを網羅</h3>
            <p>OpenStudyが役に立つのは、難関大を目指す受験生だけではありません。教科書レベルの基本的な内容も学習できます。</p>
            <h3>勉強する人にフィットするコンテンツ</h3>
            <p>OpenStudyで勉強する人はそれぞれのコンテンツに対して、理解度や改善点をフィードバックすることができます。コンテンツを作成する人々と実際に学ぶ人々の相互作用により、コンテンツはより勉強する人にとって有益なものへと洗練されます。</p>
            <h3>無料で利用できます</h3>
            <p>学問の学習のために大きな金銭的コストを負担させるべきではないという考えのもと、全ての人は無料で学ぶことができます。OpenStudyは単なる無料コンテンツではなく、コミュニティーの持つ知的財産が公平な形で分配され、<strong>学習者はコミュニティーの成長に還元される</strong>という考えのもと、広く提供されます。</p>
        </div>
    </div>

    <div class="wrapper blue">
        <div class="container">
            <h2><span>最大の目的は受験勉強を</span><span>効率的にすることです</span></h2>
            <p>受験勉強では効率が非常に重要です。同じリソース (勉強時間、体力、やる気など) を費やした場合では、<strong>効率よく勉強した方がより成績を高めることができます。</strong><p>また、勉強の結果が早く現れるため、<strong>興味の薄い科目や苦手な科目に対しての不安や苦しみを大幅に軽減できます。</strong></p>
            <p>さらに、一足早く目標に到達することができれば、勉強に費やす時間を短縮でき、<strong>他にやりたいことに時間を使うことができます。</strong>思いっきり遊んだり、興味のあることに取り組むことができます。<strong>最終的には、学ぶのって面白い、と感じる人が増えたらいいなと願っています。</strong></p>
        </div>
    </div>

    <div class="wrapper">
        <div class="container last">
            <h1><span>あなたの参加が</span><span>大きな力になります</span></h1>
            <a href="<?php echo $path . 'contribute'; ?>" class="contribute">作成に参加する</a>
        </div>
    </div>
</main>
<?php require $path . 'components/footer.php'; ?>
</body>
</html>