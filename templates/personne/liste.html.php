<div class="container-fluid ">
    <table class="table table-bordeless mx-0">
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
        $HtmlProvider::tbody($persons, $columns, $btns);
        ?>

    </table>
</div>