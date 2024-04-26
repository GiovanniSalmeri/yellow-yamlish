<?php
// Yamlish extension, https://github.com/GiovanniSalmeri/yellow-yamlish

class YellowYamlish {
    const VERSION = "0.9.1";
    public $yellow;         // access to API

    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle page meta data
    public function onParseMetaData($page) {
        $isNotHome = $page->location!==$page->yellow->content->getHomeLocation($page->location);
        foreach ($page->metaData as $key=>&$value) {
            $isTitleHeader = $isNotHome && $key=="titleHeader";
            if ($isTitleHeader) $value = substr($value, 0, -strlen(" - ".$page->metaData["sitename"]));
            if (preg_match('/^"(.*)"$/', $value, $matches)) {
                $value = stripcslashes($matches[1]);
            } elseif (preg_match('/^\'(.*)\'$/', $value, $matches)) {
                $value = str_replace("''", "'", $matches[1]);
            }
            if ($isTitleHeader) $value .= " - ".$page->metaData["sitename"];
        }
    }
}
