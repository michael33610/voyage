<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class TimeTravel {
    private $_start;
    private $_end;

    // constructeur classe
    function __construct($start,$end){
        $this->_start=$start;
        $this->_end=$end;
        //echo "<br>" . $result->m;
    }

    
    public function getTravelInfo(){
        return $this->_end->diff($this->_start)->format('Il y a %y année %m mois %d jours %h heures %i minutes %s secondes');
    }


    public function findDate($interval){

        $endEnSec=$this->_end->gettimestamp();
        $endEnSec+=$interval;
        $date= date("Y/m/d",$endEnSec);
        return $date;
    }


    public function backToFutureStepByStep($step)
    {
            $pas=new DateInterval($step);


        //$toto=$this->_start ; $toto->format("Y/m/d")
        //==
        //  $this->_start->format("Y/m/d")

//        echo "start =".$this->_start->format("Y/m/d")."<br>";
//        echo "end =".$this->_end->format("Y/m/d");


        $periode=new DatePeriod($this->_end,$pas,$this->_start);
        return $periode;
    }






// les getter

    /**
     * @return mixed
     */
    public function getStart()
    {
        return $this->_start;
    }


    /**
     * @return mixed
     */
    public function getEnd()
    {
        return $this->_end;
    }

// les setter
    public function set_start($start) {
        $this->_start=$start;
    }

    public function set_end($end) {
        $this->_end=$end;
    }    

}