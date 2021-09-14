<?php

    class CovidData
    {
        private array $dataList = [];

        public function __construct()
        {
            if(($file = fopen('data/data.csv', 'r')) !== false){
                while(($data = fgetcsv($file, 1000, ';')) !== false) {
                    $this->dataList[] = mb_convert_encoding($data, 'UTF-8');
                }
                fclose($file);
            }


        }

        public function getDataList(): array
        {
            return $this->dataList;
        }

        public function getDate(int $input): string
        {
            return $this->dataList[$input][0];
        }
        public function getCountry(int $input): string
        {
            return $this->dataList[$input][1] = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $this->dataList[$input][1]);
        }
        public function getDay(int $input): string
        {
            return $this->dataList[$input][2] = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $this->dataList[$input][2]);
        }
        public function getIncidence(int $input): string
        {
            return $this->dataList[$input][3] = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $this->dataList[$input][3]);
        }
        public function getDeparture(int $input): string
        {
            return $this->dataList[$input][4] = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $this->dataList[$input][4]);
        }
        public function getSelfIsolation(int $input): string
        {
            return $this->dataList[$input][5] = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $this->dataList[$input][5]);
        }
        public function getVaccinatedSelfIsolation(int $input): string
        {
            return $this->dataList[$input][6] = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $this->dataList[$input][6]);
        }
        public function getVaccinatedTestNeeded(int $input): string
        {
            return $this->dataList[$input][7] = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $this->dataList[$input][7]);
        }
        public function getVaccinatedTestAfter(int $input): string
        {
            return $this->dataList[$input][8] = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $this->dataList[$input][8]);
        }
        public function getOtherPersonTestBefore(int $input): string
        {
            return $this->dataList[$input][9] = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $this->dataList[$input][9]);
        }
        public function getOtherPersonTestAfter(int $input): string
        {
            return $this->dataList[$input][10] = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $this->dataList[$input][10]);
        }

    }