Class Mobil {
    // ini adalah atribut/properties dari mobil
    var $jumlahRoda=4;
    var $warna="Merah";
    var $bahanBakar="Pertamax";
    var $merek='A';
}

        //deklarasi method
        public function statusHarga ()
        {
            if ($this->harga > 50000000) $status = 'Mahal';
            else $status = 'Murah';
            return $status;
        }