 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>praktek login</title>
   </head>
   <style media="screen">
   body{
     background-image: url("background.jpg");
   }
   .container{
       margin-top: 175px ;
       margin-left: 350px ;
       width: 25%;
     }
   </style>
   <body>
     <h1 align ="center" ><font color = "white">Selamat datang!</font></h1>
     <h1 align ="center" ><font color = "white">Masukkan identitas anda</font></h1>
       <div class="container">
         <form action="data.jadi.php" method="post">
           <table cellpadding="3">
             <tr>
               <td>NIS</td>
               <td><input type="number" name="nis"  placeholder="NIS" autocomplete="off" required></td>
              </tr>
              <tr>
                <td>nama depan</td>
                <td><input type="text" name="namad"  placeholder="Nama Depan" autocomplete="off" required></td>
                  </tr>
                  <tr>
                    <td>Nama Belakang</td>
                    <td><input type="text" name="namab"  placeholder="Nama Belakang" autocomplete="off" required></td>
                  </tr>
                  <tr>
                    <td>tempat lahir</td>
                    <td><input type="text" name="temp"  placeholder="tempat lahir" autocomplete="off" size = "25" required></td>
                  </tr>
                  <tr>
                    <td>Tanggal lahir</td>
                    <td><input type="date" name="tanggal"  placeholder="tanggal lahir" autocomplete="off" required></td>
                  </tr>
                  <tr>
                    <td>agama</td>
                    <td><input type="text" name="agama"  placeholder="agama" autocomplete="off" required></td>
                  </tr>
                  <tr>
                  <td>jenis kelamin</td>
                  <td>
                    <input type="radio" name="gender" value="Pria" required> Pria
                    <input type="radio" name="gender" value="Wanita" required> Wanita
                  </td>
                </tr>s
                  <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"  placeholder="email" autocomplete="off" required></td>
                  </tr>
                  <tr>
                    <td>Telepon</td>
                    <td><input type="number" name="notelp"  placeholder="no telpon" autocomplete="off" required></td>
                  </tr>
                  <tr>
                    <td>facebook</td>
                    <td><input type="text" name="face"  placeholder="facebook" autocomplete="off" required></td>
                  </tr>
                  <tr>
                    <td>Instagram</td>
                    <td><input type="text" name="ins"  placeholder="instagram" autocomplete="off" required></td>
                  </tr>
                  <tr>
                    <td>Website</td>
                    <td><input type="text" name="web"  placeholder="http://" autocomplete="off" required></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                     <td><textarea name="alamat" rows="5" cols="25" placeholder="Alamat Lengkap" required></textarea></td>
                      </tr>
                      <tr>
                         <td>Jurusan</td>
                         <td>
                           <select name="jurusan" required>
                             <option value="">>>Pilih Jurusan<<</option>
                             <option value="RPL" required>Rekayasa Perangkat Lunak</option>
                             <option value="TKJ" required>Teknik Komputer dan Jaringan</option>
                           </select>
                         </td>
                       </tr>
                       <tr>
                          <td>Kelas</td>
                          <td>
                            <select name="kelas" required>
                              <option value="">>>Pilih kelas<<</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td>username</td>
                          <td><input type="text" name="username"  placeholder="username" autocomplete="off" required></td>
                        </tr>
                        <tr>
                          <td>password</td>
                          <td><input type="password" name="password"  placeholder="password" autocomplete="off" required></td>
                        </tr>
                        <tr>
                          <td>pesan</td>
                           <td><textarea name="pesan" rows="5" cols="25" placeholder="pesan anda" required></textarea></td>
                          </tr>

                   </table>
                     <input type = "submit" name = "simpan" class = "btn btn-success" value = "Simpan">
                     <input type = "submit" name = "batal" class = "btn btn-success" value = "Batal">
                 </form>
       </div>
   </body>
 </html>