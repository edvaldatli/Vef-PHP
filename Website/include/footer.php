<?php

?>
    <footer>
            <div class="container">
                <span class="footertext"><?php
                    $startYear = 2016;
                    $thisYear = date('Y');
                    if ($startYear == $thisYear) {
                        echo $startYear;
                    } else {
                        echo "{$startYear}&ndash;{$thisYear}";
                    }
                    ?> Eðvald Atli</span>
            </div>
    </footer>