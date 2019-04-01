<?php
include "rekening.php";

$rekeningHendra = new RekeningTabungan();
$rekeningHendra->setor(100000);
$saldoHendra = $rekeningHendra->cekSaldo();

print 'Saldo Hendra = Rp. '.$saldoHendra;
?>