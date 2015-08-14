<?php
/**
* Function to add empty option to select lists
*
* @param $selectList array
* @param $emptyLabel string to use as label for empty option
* @author rtconner
*/

function withEmpty($selectList, $emptyLabel='') {
    return array(''=>$emptyLabel) + $selectList;
}
 
?>