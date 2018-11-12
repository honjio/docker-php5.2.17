<?php
    // ini_set("display_errors", On);
    // error_reporting(E_ALL);

    $tvInfos = array(
        "tv1" => array(
            array(
                "year" => "2018",
                "models"=> array(
                    array("name" => "A1", "isSupport" => true ),
                    array("name" => "A2", "isSupport" => true ),
                    array("name" => "A3", "isSupport" => true ),
                    array("name" => "A4", "isSupport" => true ),
                    array("name" => "A5", "isSupport" => true ),
                    array("name" => "A6", "isSupport" => true ),
                )
            ),
            array(
                "year" => "2017",
                "models" => array(
                    array( "name"  => "B1", "isSupport" => true ),
                    array( "name"  => "B2", "isSupport" => true ),
                    array( "name"  => "B3", "isSupport" => true ),
                    array( "name"  => "B4", "isSupport" => true ),
                    array( "name"  => "B5", "isSupport" => true ),
                    array( "name"  => "B6", "isSupport" => true )
                )
            ),
            array(
                "year" => "2016",
                "models" => array(
                    array( "name"  => "C1", "isSupport" => true ),
                    array( "name"  => "C2", "isSupport" => true ),
                    array( "name"  => "C3", "isSupport" => true ),
                    array( "name"  => "C4", "isSupport" => true ),
                    array( "name"  => "C5", "isSupport" => true ),
                    array( "name"  => "C6", "isSupport" => true )
                )
            )
        ),
        "tv2"  => array(
            array(
                "year" => "2018",
                "models" => array(
                    array( "name"  => "D1", "isSupport" => true ),
                    array( "name"  => "D2", "isSupport" => true ),
                    array( "name"  => "D3", "isSupport" => true ),
                    array( "name"  => "D4", "isSupport" => true ),
                    array( "name"  => "D5", "isSupport" => false ),
                    array( "name"  => "D6", "isSupport" => false ),
                    array( "name"  => "D7", "isSupport" => false ),
                    array( "name"  => "D8", "isSupport" => false )
                )
            ),
            array(
                "year" => "2017",
                "models" => array(
                    array( "name"  => "E1", "isSupport" => true ),
                    array( "name"  => "E2", "isSupport" => true ),
                    array( "name"  => "E3", "isSupport" => true ),
                    array( "name"  => "E4", "isSupport" => true ),
                    array( "name"  => "E5", "isSupport" => true ),
                    array( "name"  => "E6", "isSupport" => true ),
                    array( "name"  => "E7", "isSupport" => false ),
                    array( "name"  => "E8", "isSupport" => false ),
                    array( "name"  => "E9", "isSupport" => false ),
                    array( "name"  => "E10", "isSupport" => false )
                )
            )
        )
    );

    class SearchArea {
        private $modelsHtml = '';
        private $html = '';
        private $className = '';

        public function getCreatedHtml($tvInfos) {
            foreach ($tvInfos as $info) {
                foreach ($info['models'] as $model) {
                    if ($model['isSupport']) {
                        $this->className = '-support';
                    } else {
                        $this->className = '-un-support';
                    }
                    $this->modelsHtml .= "<li class=\"list-item {$this->className}\">${model['name']}</li>";
                }
                $this->html .= "<li class=\"item\">${info['year']}".
                    "<ul class=\"list\">{$this->modelsHtml}</ul>".
                    "</li>";
            }
            return $this->html;
        }
    }
    $searchArea = new SearchArea;
    $html = $searchArea->getCreatedHtml($tvInfos['tv1']);
    echo $html;
