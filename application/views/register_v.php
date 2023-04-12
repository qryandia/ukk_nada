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
            clifford: '#da373d',
            ijo: '#E1EDE5',
            hijau: '#46893B',
            button: '#62BB66',
          }
        }
      }
    }
  </script>
</head>
<body>
  <div class="h-screen grid grid-cols-12 gap-4">
    <!-- bg-gradient-to-r from-cyan-500 to-blue-500 -->
    <div class="col-span-full md:col-span-5 bg-ijo w-full pb-12">
    <div class="grid justify-center">
        <img class="h-48 " src="<?= base_url() ?>assets/img/basicg.png" alt="">
        <div class="text-lg md:text-3xl font-bold text-hijau ">Hallo Netizen +62,</div>
        <div class="text-sm md:text-2xl font-bold text-hijau ">Selamat datang di Indonesia Complaint. </div>
    </div>
    </div>
    <!-- flex-2 -->
    <div class="col-span-full md:col-span-7 w-full pb-32">
      <div class="flex min-h-full justify-center items-center pt-20 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
              
          <div>
            <h2 class=" text-lg md:text-3xl font-bold tracking-tight text-gray-900">Sign in to ICOM</h2>
          </div>

          <!-- form -->
          <?= $this->session->flashdata('msg'); ?>

          <?= form_open('Auth/RegisterController', 'class="user"') ?>
          <form class="mt-8 space-y-6" action="#" method="POST">
            <input type="hidden" name="remember" value="true">
            <div class="-space-y-px ">
              <!--  -->
              <div class="">
                <p class="font-bold">NIK</p>
                <label for="nik" class="sr-only pr-4">NIK</label>
                <input id="nik" name="nik" type="text" autocomplete="nik" required class="relative block w-full appearance-none rounded-xl bg-gray-100 px-3 py-2 my-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm md:text-base" value="<?= set_value('nik') ?>">
              </div>
              <div class="mt-2">
                <p class="font-bold">Nama Lengkap</p>
                <label for="nama_lengkap" class="sr-only pr-4">Nama Lengkap</label>
                <input id="nama" name="nama" type="text" autocomplete="nama" required class="relative block w-full appearance-none rounded-xl bg-gray-100 px-3 py-2 my-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm md:text-base" value="<?= set_value('nama') ?>">
              </div>
              <div>
                <p class="font-bold">Username</p>
                <label for="username" class="sr-only pr-4">Username</label>
                <input id="username" name="username" type="text" autocomplete="username" required class="relative block w-full appearance-none rounded-xl px-3 py-2 my-2 text-gray-900 bg-gray-100 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm md:text-base" value="<?= set_value('username') ?>">
              </div>
              <div class="mt-2">
                <p class="font-bold">Password</p>
                <label for="password" class="sr-only pr-4">Password</label>
                <input id="password" name="password" type="password" autocomplete="Password" required class="relative block w-full appearance-none rounded-xl bg-gray-100 px-3 py-2 my-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm md:text-base">
              </div>
              <div class="mt-2">
                <p class="font-bold">No Telp</p>
                <label for="telp" class="sr-only pr-4">No Telp</label>
                <input id="telp" name="telp" type="text" autocomplete="telp" required class="relative block w-full appearance-none rounded-xl bg-gray-100 px-3 py-2 my-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm md:text-base">
              </div>
            </div>
            
            <!-- button -->
            <div class="mt-8">
              <button type="submit" class="group relative flex w-full justify-center rounded-xl border border-transparent bg-button py-2 px-4 text-sm font-medium text-white hover:bg-button focus:outline-none focus:ring-2 focus:ring-button focus:ring-offset-2">
                Sign Up
            </button>

              <div class="text-center small mt-4">
                  Sudah punya akun? 
                  <a class="text-button"  href="<?= base_url('Auth/LoginController') ?>">Sign in</a>
              </div>
            </div>
            <!-- button -->
          </form>
          <!-- form -->
        </div>
      </div>
    </div>
  </div>
</body>
</html>