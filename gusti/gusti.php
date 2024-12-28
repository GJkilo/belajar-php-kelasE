<form action="submitpercobaan.php" method="POST" onsubmit="return validateform()">
    <p style="color: red; font-family: 'Times New Roman';"><strong>Nama:</strong></p>
    <input type="text" name="username" required>
    
    <p style="color: red; font-family: 'Times New Roman';"><strong>Email:</strong></p>
    <input type="email" name="email" required>
    
    <p style="color: red; font-family: 'Times New Roman';"><strong>NIM:</strong></p> <!-- Menambahkan input NIM -->
    <input type="text" name="nim" required>
    
    <p style="color: red; font-family: 'Times New Roman';"><strong>Password:</strong></p>
    <input type="password" name="password" id="password" required> 
    <br>
    
    <!-- Checkbox dan Input Jumlah untuk Barang -->
    <p style="color:red; font-size:50px;">Barang :</p>
    <div>
        <input type="checkbox" name="barang[]" value="Topi - Rp10.000" id="Topi">
        <label for="Topi" style="color: rgb(0, 255, 255); font-family: 'Times New Roman';">Topi - Rp10.000</label>
        <input type="number" name="jumlah[]" placeholder="Jumlah" min="1" style="width: 80px">
    </div>
    <div>
        <input type="checkbox" name="barang[]" value="Tas - Rp20.000" id="Tas">
        <label for="Tas" style="color: rgb(0, 255, 255); font-family: 'Times New Roman';">Tas - Rp20.000</label>
        <input type="number" name="jumlah[]" placeholder="Jumlah" min="1" style="width: 80px">
    </div>
    <div>
        <input type="checkbox" name="barang[]" value="Celana - Rp5.000" id="Celana">
        <label for="Celana" style="color: rgb(0, 255, 225); font-family: 'Times New Roman';">Celana - Rp5.000</label>
        <input type="number" name="jumlah[]" placeholder="Jumlah" min="1" style="width: 80px">
    </div>
    
    <input type="submit" value="Submit">
</form>

<!-- Tombol Lihat Data -->
<p>
    <a href="lihatdata.php" style="text-decoration: none; padding: 10px 15px; background-color: #4CAF50; color: white; border-radius: 5px;">Lihat Data</a>
</p>

<script>
    function validateform() {
        var password = document.getElementById("password").value;
        if (password.length < 6) {
            alert("Password harus memiliki minimal 6 karakter");
            return false;
        }
        return true;
    }
</script>