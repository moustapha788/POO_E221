<div class="container my-5 p-5">
    <table class="table table-striped text-light  bg-gradient">
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
        $HtmlProvider::tbody($acs, $columns, $btns);
        ?>
    </table>
</div>