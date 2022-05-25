<div class="container-fluid ">

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
        $HtmlProvider::tbody($user, $columns, $btns);
        ?>
    </table>

</div>