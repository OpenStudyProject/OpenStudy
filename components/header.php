<header>
    <nav>
        <a <?php echo isset($isHome) ? '' : 'href="' . $path . '"' ?> class="logo"> 
            <img src="<?php echo $path ?>images/OpenStudyTransparent.png" alt="logo">
            <h1>OpenStudy</h1>
        </a>
        
        <ul>
            <a href=""><li>Menu1</li></a>
            <a href=""><li>Menu2</li></a>
            <a href=""><li>Menu3</li></a>
            <a href=""><li>Menu4</li></a>
        </ul>

        <img src="<?php echo $path ?>images/bars.svg" alt="menuBar" class="sp-menu">
    </nav>
</header>