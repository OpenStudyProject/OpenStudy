<header>
    <nav>
        <a <?php echo isset($isHome) ? '' : 'href="' . $path . '"' ?> class="logo"> 
            <img src="<?php echo $path ?>images/OpenStudyTransparent.png" alt="logo">
            <h1>OpenStudy</h1>
        </a>
        
        <ul>
            <a href="<?php echo $path ?>lists"><li>最新のコンテンツ</li></a>
            <a href=""><li>Menu2</li></a>
            <a href=""><li>Menu3</li></a>
            <a href=""><li>Menu4</li></a>
        </ul>

        <a href="<?php echo $path ?>lists" class="sp-menu">
            <svg class="sp-menu" viewbox="0 0 500 500">
                <rect
                width="374.05966"
                height="33.398186"
                x="62.970169"
                y="113.10377"
                ry="16.699093" />
                <rect
                width="374.05966"
                height="33.398186"
                x="62.970169"
                y="233.3009"
                ry="16.699093" />
                <rect
                width="374.05966"
                height="33.398186"
                x="62.970169"
                y="353.49805"
                ry="16.699093" />
            </svg>
        </a>
    </nav>
</header>