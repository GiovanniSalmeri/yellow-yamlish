<?php
// Yamlish extension, https://github.com/GiovanniSalmeri/yellow-yamlish

class YellowYamlish {
    const VERSION = "0.8.20";
    public $yellow;         // access to API

    // Handle page meta data
    public function onParseMetaData($page) {
        foreach ($page->metaData as &$value) {
            if (preg_match('/^"(.*)"$/', $value, $matches)) {
                $value = stripcslashes($matches[1]);
            } elseif (preg_match('/^\'(.*)\'$/', $value, $matches)) {
                $value = str_replace("''", "'", $matches[1]);
            }
        }
    }
}
