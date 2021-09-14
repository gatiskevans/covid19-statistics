<?php

    class DisplayTable extends CovidData
    {
        public function display(array $dataTable): string
        {
            $table = str_repeat("-", 220) . "\n";
            foreach($dataTable as $index => $row){
                $table .= "| ";

                $table .= $this->columnSize($this->getDate($index), 11);
                $table .= $this->columnSize($this->getCountry($index), 16);
                $table .= $this->columnSize($this->getDay($index), 6);
                $table .= $this->columnSize($this->getIncidence($index), 29);
                $table .= $this->columnSize($this->getDeparture($index), 16);
                $table .= $this->columnSize($this->getSelfIsolation($index), 3);
                $table .= $this->columnSize($this->getVaccinatedSelfIsolation($index), 3);
                $table .= $this->columnSize($this->getVaccinatedTestNeeded($index), 3);
                $table .= $this->columnSize($this->getVaccinatedTestAfter($index), 26);
                $table .= $this->columnSize($this->getOtherPersonTestBefore($index), 3);
                $table .= $this->columnSize($this->getOtherPersonTestAfter($index), 3);
                $table .= "\n". str_repeat("-", 153) . "\n";
            }
            return $table;
        }

        private function columnSize(string $column, int $length): string
        {
            return str_pad(mb_strimwidth($column, 0, $length), $length) . " | ";
        }

    }