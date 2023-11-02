<?php

class Company
{
    private $name;
    private $city;
    private $tel;

    public function setDisplayCompany($name, $city, $tel)
    {
        $this->name = $name;
        $this->city = $city;
        $this->tel = $tel;
    }

    ///部署名、部長を表示させる///
    public function getDisplayCompany()
    {
        echo "会社名：", $this->name;
        echo "\n";
        echo "住所：", $this->city;
        echo "\n";
        echo "電話番号：", $this->tel;
        echo "\n";
    }
}

class Department extends Company
{
    private $section;
    private $manager;

    public function setDisplayDepartment($section, $manager)
    {
        $this->section = $section;
        $this->manager = $manager;
    }

    ///部署名、部長を表示させる///
    public function getDisplayDepartment()
    {
        echo "部署名：", $this->section;
        echo "\n";
        echo "部長：", $this->manager;
        echo "\n";
    }
}

$companyA = new Department();
$companyA->setDisplayCompany("サンプルA", "市ヶ谷", "080-XXXX-XXXX");
$companyA->setDisplayDepartment("人事", "高田");

$companyB = new Department();
$companyB->setDisplayCompany("サンプルB", "池袋", "090-XXXX-XXXX");
$companyB->setDisplayDepartment("総務", "田中");

$companyC = new Department();
$companyC->setDisplayCompany("サンプルC", "新宿", "070-XXXX-XXXX");
$companyC->setDisplayDepartment("営業", "高橋");

$array = array($companyA, $companyB, $companyC);
// 配列の中身チェック
// echo $array[0]->getDisplayCompany();
// echo $array[0]->getDisplayDepartment();
// echo "\n";
// echo $array[1]->getDisplayCompany();
// echo $array[1]->getDisplayDepartment();
// echo "\n";
// echo $array[2]->getDisplayCompany();
// echo $array[2]->getDisplayDepartment();
// echo "\n";


foreach ($array as $value) {
    echo $value->getDisplayCompany();
    echo $value->getDisplayDepartment();
    echo "\n";
}
