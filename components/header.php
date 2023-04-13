<header>
    <nav class="pc">
        <?php
            if (isset($isHome)) {
                echo '<div class="home-link">';
                    echo '<img src="' . $path . 'images/OpenStudyTransparent.png" alt="Logo">';
                    echo '<h1>OpenStudy</h1>';
                echo '</div>';
            } else {
                echo '<a href="' . $path . '" class="home-link">';
                    echo '<img src="' . $path . 'images/OpenStudyTransparent.png" alt="Logo">';
                    echo '<h1>OpenStudy</h1>';
                echo '</a>';
            }
        ?>
    
        <ul>
            <a href="<?php echo $path ?>about"><li>OpenStudyとは</li></a>
            <a href="<?php echo $path ?>contribute"><li>作成に参加する</li></a>
        </ul>
    </nav>

    <nav class="sp">
        <input type="checkbox" id="abc">
        <div class="topbar">
            <?php
                if (isset($isHome)) {
                    echo '<div class="home-link">';
                        echo '<img src="' . $path . 'images/OpenStudyTransparent.png" alt="Logo">';
                        echo '<h1>OpenStudy</h1>';
                    echo '</div>';
                } else {
                    echo '<a href="' . $path . '" class="home-link">';
                        echo '<img src="' . $path . 'images/OpenStudyTransparent.png" alt="Logo">';
                        echo '<h1>OpenStudy</h1>';
                    echo '</a>';
                }
            ?>
            <button id="open-menu">
                <svg viewbox="0 0 500 500">
                    <rect width="374.05966" height="33.398186" x="62.970169" y="113.10377" ry="16.699093"/>
                    <rect width="374.05966" height="33.398186" x="62.970169" y="233.3009" ry="16.699093" />
                    <rect width="374.05966" height="33.398186" x="62.970169" y="353.49805" ry="16.699093" />
                </svg>
            </button>
        </div>
        
        <input type="checkbox" id="trigger-checkbox2">
        <ul>
            <a href="">Menu1</a>
            <a href="">Menu2</a>
            <a href="">Menu3</a>
            <a href="">Menu4</a>
        </ul>
    </nav>
</header>