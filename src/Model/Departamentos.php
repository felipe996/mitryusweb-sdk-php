<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelCollectionBase;

class Departamentos extends ModelCollectionBase
{
    protected $itemAttributeModel = [
        "Departamentos"   => "Departamento",
    ];

    protected $attributeMap = [
        "Departamentos" => "Collection",
    ];
}