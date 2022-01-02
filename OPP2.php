<?php
    class Komputer{

        // Property
        public $nama;
        public $merk;

        // Method
        public function __construct($nama, $merk)
        {
            $this->nama = $nama;
            $this->merk = $merk;

            echo 'komputer punya '.$this->nama. 'mereknya adalah ' . $this->merk . '<br>'; 
        }

        function tes ()
        {
            echo "tes <br>";
        }
        // public function __destruct()
        // {
        //     echo 'berhasil di bersihkan';
        // }

    }

    $komputer_1 = new Komputer('Rambox ', 'ASUS');
    $komputer_2  = new Komputer('Ujey ', 'Acer');
    $komputer_1->tes();


    class Hello {
        protected $jam;
        protected $nama;

        public function __construct($jam, $nama)
        {
         $this->jam = $jam;   
         $this->nama = $nama;
         
         if ($this->jam < 12) {
             echo "selamat pagi ".$this->nama;
         } elseif ($this->jam >12 && $this->jam < 18) {
             echo "selamat sore ".$this->nama;
         } else {
             echo "selamat malam ".$this->nama;
         }
        }
    }

    $say_hello = new Hello(10, 'pet <br>');
    $say_hello = new Hello(16, 'rama <br>');
    $say_hello = new Hello(19, 'ujey');

    echo "<br>";

    class Pagi extends Hello {
        public function __construct()
        {
            
        }
    }
?>