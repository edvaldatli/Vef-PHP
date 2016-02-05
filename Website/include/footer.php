<?php

?>
    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                <p><?php
                    $startYear = 2016;
                    $thisYear = date('Y');
                    if ($startYear == $thisYear) {
                        echo $startYear;
                    } else {
                        echo "{$startYear}&ndash;{$thisYear}";
                    }
                    ?> Eðvald Atli</p>
                <span class="black-text text-lighten-4 right" "></span>
            </div>
        </div>
    </footer>