<?php

namespace plugin\struct\test\mock;

class SchemaData extends \plugin\struct\meta\SchemaData {

    public function setCorrectTimestamp($page, $ts = null) {
        parent::setCorrectTimestamp($page, $ts);
    }

    public function getDataFromDB() {
        return parent::getDataFromDB();
    }

    public function buildGetDataSQL($singles, $multis) {
        return parent::buildGetDataSQL($singles, $multis);
    }
}
