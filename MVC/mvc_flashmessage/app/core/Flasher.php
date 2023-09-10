<?php
    class Flasher {
        public static function setFlash($pesan, $aksi, $tipe){
            $_SESSION['flash'] = [
                'pesan' => $pesan,
                'aksi' => $aksi,
                'tipe' => $tipe
            ];
        }

        public static function flash(){
            // Versi Terbaru
            // if( isset($_SESSION['flash']) ){
            //     echo '<div id="liveAlertPlaceholder"></div>
            //     <button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button>'
            // }

            // Versi Lama

            if( isset($_SESSION['flash']) ){
                echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert"> Data Smartphone <srong>' . $_SESSION['flash']['pesan'] . '</strong>' . $_SESSION['flash']['aksi'] . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <spsan aria-hidden="true">$times;</span>
                </button>
                </div>';
                unset($_SESSION['flash']);
            }

            // <div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert"> Dat''
            // </div>
        }
    }