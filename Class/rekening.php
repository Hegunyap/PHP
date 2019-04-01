<?php
class RekeningTabungan {
    public $saldo;

    function __construct ()
    {
        $this->saldo = 0;    
    }

    public function cekSaldo() 
    {
        return $this->saldo;
    }

    public function setor($jumlah_uang) 
    {
        $this->saldo = $this->saldo + $jumlah_uang;
    }

    public function ambil($jumlah_uang) 
    {
        $this->saldo = $this->saldo - $jumlah_uang;
    }
}
?>