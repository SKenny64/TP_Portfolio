<?php
    $url = $_SERVER['REQUEST_URI']; 

    echo $url;

?>
<ul >
    <li style="display:inline"><a aria-current="page" href="index.php" title="acceuil">
        <?php 
            if ($url == "/php/tp_portfolio/index.php"){
                echo "<strong>Acceuil</strong>";
            }else{
                echo "Acceuil";
            }
        ?>
    </a></li>
    <li style="display:inline"><a aria-current="page" class="active" href="cv.php" title="cv">
        <?php 
            if ($url == "/php/tp_portfolio/cv.php"){
                echo "<strong>CV</strong>";
            }else{
                echo "CV";
            }
        ?>
    </a></li>
    <li style="display:inline"><a aria-current="page" class="active" href="contact.php" title="contact">
        <?php 
            if ($url == "/php/tp_portfolio/contact.php"){
                echo "<strong>Contact</strong>";
            }else{
                echo "Contact";
            }
        ?>
    </a></li>
</ul>
</header>
<hr>