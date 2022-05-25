<div class="container mt-5 ml-5">

    <table class="table table-bordeless">
        <?php
        $HtmlProvider::navInfo(
            $dataNavInfos['text'],
            $dataNavInfos['color'],
            $dataNavInfos['textSize'],
            $dataNavInfos['textBtn'],
            $dataNavInfos['btnColor'],
            $dataNavInfos['link'],
        );
        $HtmlProvider::thead($enTete);
        $HtmlProvider::tbody($etudiants, $columns, $btns);
        ?>
    </table>
    </table>

</div>