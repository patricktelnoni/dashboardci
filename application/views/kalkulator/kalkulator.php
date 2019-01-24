 <form action="<?=base_url()?>index.php/Blog/hitung" method="POST">
     <table>
         <tr>
             <td>Angka 1</td>
             <td>:</td>
             <td><input type="text" name="angka1"></td>
         </tr>
         <tr>
             <td>Angka 2</td>
             <td>:</td>
             <td><input type="text" name="angka2"></td>
         </tr>
         <tr>
             <td>Operasi</td>
             <td>:</td>
             <td>
                <select class="" name="operasi">
                  <option value="+">+</option>
                  <option value="-">-</option>
                  <option value="*">*</option>
                  <option value="/">/</option>
                </select>
             </td>
         </tr>
         <tr>
             <td><input type="submit" name="Kirim data"></td>
         </tr>
     </table>
 </form>
