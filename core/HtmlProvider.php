<?php

namespace App\Core;

abstract class HtmlProvider
{

    /* 
* @param string text Description
* @param string $text = "vue",
* @param string $color = "dark", 
* @param int $textSize = 6,
* @param string $textBtn = "bouton",
* @param string $btnColor = "primary",
* @param string $link = "#"
    */
    public static function navInfo(string $text = "vue", string $color = "dark", int $textSize = 6, string $textBtn = "bouton", string $btnColor = "primary", string $link = "#")
    {
        $html = "<nav class='container bg-$color   shadow p-2 d-flex justify-content-between mb-4 '>
                    <span  class='my-4 px-2 text-mine  display-$textSize'>$text</span>
                    <a class='my-5 py-2  px-4 mx-2 d-flex align-items-center  text-white  btn btn-lg btn-$btnColor  ' href='$link'>$textBtn</a>
                </nav>";
        echo $html;
    }

    public static function thead(array $enTete): void
    {
        // echo count($enTete);
        $html = "
        <thead class='thead bg-gradient h2 text-mine'>  
            <tr >";
        foreach ($enTete as $part) :
            $html .= "<th >$part</th>";
        endforeach;
        $html .= "<th class='text-center ' >Actions</th>
            </tr>
        </thead>";
        echo $html;
    }


    public static function tbody(array $listeDeDonnees, array $columns, array $btns): void
    {
        $html = " <tbody class='text-white  tbody bg-black bg-opacity-50'>";
        $i = 0;
        foreach ($listeDeDonnees as $individu) :
            $individu->numero = ++$i;
            $html .= "<tr class='tr' >";
            $html .= self::tds($columns, $individu);
            $html .= "<td class='text-center '>";
            $html .= self::btnActions($btns, $individu);
            $html .= "</td>";
            $html .= "</tr>";
        endforeach;
        $html .= "</tbody>";
        echo $html;
    }
    public static function tds(array $columns, object $row): string
    {

        $html = "";
        foreach ($columns as $column) {
            $html .= "<td class='text-white display-mine '>" . $row->$column . "</td>";
        }
        return $html;
    }
    public static function btnActions(array $btns, $individu): string
    {

        $html = "";
        foreach ($btns as $color => $btn) :
            $html .= "<a href='$btn[0]$individu->id' class='btn btn-outline-$color mx-2 btn-sm '>$btn[1]</a>";
        endforeach;
        return $html;
    }
}
