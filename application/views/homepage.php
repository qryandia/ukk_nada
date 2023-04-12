<!doctype html>
<html>
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            bg1: '#E1EDE5',
            primary: '#46893B',
            button: '#62BB66',
            tulisan: '#555555',
            efek: '#90B889',
            judul: '#0EBB7F',
            lingkaran: '#80C194',
          }
        }
      }
    }
  </script>
  <!-- cdn -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
<!-- Navbar -->
<nav class="bg-bg1">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">

                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <img class="block h-36 w-auto lg:hidden" src="<?= base_url() ?>assets/img/basicg.png" alt="">
                    <img class="hidden h-36 w-auto lg:block" src="<?= base_url() ?>assets/img/basicg.png" alt="">
                </div>
                <!-- <div class="hidden mx-auto sm:block ">
                    <div class="flex space-x-4 ">
                        <a href="#" class=" text-button px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
            
                        <a href="#" class="text-tulisan hover:text-button px-3 py-2 text-sm font-medium">About us</a>
            
                        <a href="#" class="text-tulisan hover:text-button px-3 py-2 text-sm font-medium">Reviews</a>
            
                    </div>
                </div> -->
                </div>
                <!-- button -->
                <div>
                    <button type="submit" class="group relative flex w-full justify-center rounded-full border border-transparent bg-button py-2 px-4 text-sm font-medium text-white hover:bg-button focus:outline-none focus:ring-2 focus:ring-button focus:ring-offset-2">
                      Log in
                    </button>
                  </div>
                <!-- button -->
      </div>
    </div>
  

  </nav>

<!-- Navbar -->

<!-- Home -->
<!-- <div class="flex flex-wrap hover:flex-wrap-reverse bg-bg1">
    <img class=" block h-24 ml-28 mt-20 " src="img/awan.png" alt="">
</div> -->

<div class="flex">

    <div class="flex-auto bg-bg1">
      <img class=" block h-24 ml-20 mt-20 px-4 " src="<?= base_url() ?>assets/img/awan.png" alt="">
    </div>
    <div class="flex-auto bg-bg1 mx-auto  w-96 text-center">
      <br>   <br>
        <p class="text-judul font-bold text-4xl">Indonesia Complaint</p>
     
        <p class="text-primary mt-4" > Layanan Masyarakan yang siap membantu keluhan anda, dengan berbagai fitur pembantu yang mampu menyampaikan keluhan anda dengan baik.</p>
        <!-- button -->
        <p><center>
          <button type="submit" class="group relative flex w-48 justify-center rounded-full border border-transparent bg-button py-2 px-4 text-sm font-medium text-white hover:bg-button focus:outline-none focus:ring-2 focus:ring-button focus:ring-offset-2 mt-8"> <a href="<?php echo base_url('Auth/LoginController') ?>">
          Mulai</a>
        </button></center>
        </p>
        <!-- button -->
    </div>
    <div class="flex-auto bg-bg1">
      <img class=" block h-24 mt-18 px-4 " src="<?= base_url() ?>assets/img/awan2.png" alt="">
    </div>
</div>
      <!-- gambar bg -->
      <div class="flex">
        <div class="flex-auto bg-bg1">
          <img class="h-40" src="<?= base_url() ?>assets/img/daun.png">
        </div>
        <div class="flex bg-bg1">
          <img class="h-40" src="<?= base_url() ?>assets/img/daun1.png" alt="">
        </div>
      </div>
      <!-- gambar bg -->
<!-- Home -->

<!-- About -->

<div class="flex flex-wrap mt-20 mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
  <div class="flex-auto w-64 ">
  <div data-aos="fade-right">
    <p class="font-bold text-primary text-3xl w-64">Apa itu Indonesia Complaint??</p>
    <p class="text-tulisan mt-8 w-2/3 text-base">
    <span class="text-primary font-bold">Indonesia Complaint </span>adalah aplikasi yang mempermudah masyarakat dalam menyampaikan keluhan yang mereka alami mengenai Infratruktur Negara, Pemerintahan, dan lain sebagainya. Aplikasi ini didukung penuh oleh Pemerintah untuk menangani keluhan Masyarakat Indonesia, sebagai bentuk kepedulian Pemerintah terhadap Masyarakatnya.</p>
  </div>
  </div>
  <div class="flex-auto w-12   ...">
    <img class="h-auto" src="<?= base_url() ?>assets/img/gambar.png" alt="">
  </div>
</div>
<div class="flex-auto"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#E1EDE5" fill-opacity="1" d="M0,224L120,234.7C240,245,480,267,720,250.7C960,235,1200,181,1320,154.7L1440,128L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
</div>
<!-- About -->

<!-- Kemudahan -->
<div class="flex-auto bg-bg1 text-center">
  
  <div class="font-bold text-primary text-3xl">
    Kemudahan Aplikasi kami
</div>
    <div class="grid grid-cols-3 gap-2 place-content-center h-48 ...">

      <div class="text-primary font-bold text-white text-3xl">
        <div class="border border-gray-300 mx-56 rounded-full bg-efek">1</div>
      </div>
      <div class="text-primary font-bold text-white text-3xl">
        <div class="border border-gray-300 mx-56 rounded-full bg-efek">2</div>
      </div>
      <div class="text-primary font-bold text-white text-3xl">
        <div class="border border-gray-300 mx-56 rounded-full bg-efek">3</div>
      </div>

        <div class="text-primary font-bold w-4/6 mx-auto">
          Memudahkan pengguna dalam menggunakan Aplikasi.
        </div>
    
        <div class="text-primary font-bold w-4/6 mx-auto">
          Membantu Masyarakat menyampaikan keluhan dengan mudah.
        </div>
        <div class="text-primary font-bold w-4/6 mx-auto">
          Memiliki fitur yang di desain khusus agar mudah digunakan oleh masyarakat.
        </div>
      <!-- <center>
      <div class="text-tulisan w-64">Memudahkan pengguna dalam menggunakan Aplikasi <span class="text-primary font-bold"> Indonesia Complaint.</span></div>
      </center>
      <center>
        <div class="text-tulisan w-64">Membantu Masyarakat menyampaikan keluhan dengan mudah.</div>
      </center>
      <center>
        <div class="text-tulisan w-64">Memiliki fitur yang di desain khusus agar mudah digunakan oleh masyarakat.</div>
      </center> -->
    </div>
</div>
<!-- Kemudahan -->

<!-- Coment -->
<div class="flex flex-wrap mt-20 mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">

  <div class="flex ">
    <img class="h-96	" src="<?= base_url() ?>assets/img/wanita.png" alt="">
  </div>
  <div class="flex-auto ml-20">
    <p class="font-bold text-primary text-3xl w-96 ">Kata pengguna Indonesia Complaint</p>
    <p class="text-tulisan mt-8 w-2/3 text-base">
    .</p>
  </div>

</div>
<div class="flex-auto"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#E1EDE5" fill-opacity="1" d="M0,224L120,234.7C240,245,480,267,720,250.7C960,235,1200,181,1320,154.7L1440,128L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
</div>
<!-- Coment -->

<!-- seribu -->
<div class="flex-auto bg-bg1 text-center">
  <br> <br>
  <div>
    <p  class="font-bold text-primary text-3xl"> 1000+ Pengguna Percaya</p>
    <p class="mt-4 text-tulisan">Lebih dari 1000 pengguna merasa puas dengan aplikasi kami</p>
    <img class="mx-auto mt-20 h-auto mb-16" src="<?= base_url() ?>assets/img/suka2.png" alt="">
  </div>
<!-- Seribu -->
<!-- copy -->
<div class="flex-auto bg-white">
    <div class="copyright py-4 text-center text-tulisan font-bold">
      <div class="container"> <a> Copyright © 2023 - Qotrunnada zakkiya alya - ukk - SMKTI Pelita Nusantara - <a href="https://www.instagram.com/qryandia/" class="link-light"> <span class="font-bold text-primary">@qryandia</span> </a> Copyright 2021 All Rights reserved | Template by <span class="font-bold text-primary">Nada</span>
      </div>
    </div>
</div>
<!-- copy -->
 
</body>
<!-- js -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- js -->
</html>