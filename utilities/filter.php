<?php
function filterData($datas, $filters) {
    $filteredData = [];

    foreach($datas['response'] as $singleData) {
        $validData = true;

        foreach($filters as $filterKey => $filterValue) {
            if($filterValue) {

                $dataType = gettype($singleData[$filterKey]);

                switch ($dataType) {
                    case "integer":
                        $result = $singleData[$filterKey] == (int) $filterValue;

                        break;
                    case "string":
                        $result = stristr($singleData[$filterKey], $filterValue);

                        break;
                    default:        
                }


                if($result == false) {
                    $validData = false;
                }
            }

            
        }

        if($validData) {
            $filteredData[] = $singleData;
        }

    }

    return $filteredData;

}