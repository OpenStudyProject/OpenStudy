<header>
    <nav class="pc">
        <a <?php echo isset($isHome) ? '' : 'href="' . $path . '"' ?> class="home-link">
            <img src="<?php echo $path ?>images/OpenStudyTransparent.png" alt="Logo">
            <h1>OpenStudy</h1>
        </a>
    
        <ul>
            <a href="<?php echo $path ?>about"><li>OpenStudyとは</li></a>
            <a href="<?php echo $path ?>contribute"><li>作成に参加する</li></a>
        </ul>
    </nav>

    <nav class="sp">
        <div class="topbar">
            <a <?php echo isset($isHome) ? '' : 'href="' . $path . '"' ?> class="home-link">
                <img src="<?php echo $path ?>images/OpenStudyTransparent.png" alt="Logo">
                <h1>OpenStudy</h1>
            </a>
            <input type="checkbox" id="hidden-checkbox">
            <button id="open-menu">
                <svg viewbox="0 0 500 500">
                    <rect width="374.05966" height="33.398186" x="62.970169" y="113.10377" ry="16.699093"/>
                    <rect width="374.05966" height="33.398186" x="62.970169" y="233.3009" ry="16.699093" />
                    <rect width="374.05966" height="33.398186" x="62.970169" y="353.49805" ry="16.699093" />
                </svg>
            </button>
        </div>
        
        <ul>
            <a href="">Menu1</a>
            <a href="">Menu2</a>
            <a href="">Menu3</a>
            <a href="">Menu4</a>
        </ul>
    </nav>
</header>