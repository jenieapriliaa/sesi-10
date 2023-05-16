<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 02</title>
</head>
<body>
    
<form name="Latihan02" id="Latihan02" method="POST" onsubmit="return checkform()">
     <div>
        NIM
        <input type="text" id="nim" name="txNIM">
    </div>
    <div>
        NAMA
        <input type="text" id="nama" name="txNAMA">
    </div>
    <div>
        Jenis kelamin
        <input type="radio" id="jk" name="txJK" value="L">Laki-laki
        <input type="radio" id="jk" name="txJK" value="P">Perempuan
    </div>
    <div>
        Jurusan
        <select name="txJURUSAN" id="jurusan">
        <option value="KAB">KAB</option>
        <option value="MTI">MTI</option>
        <option value="DGM">DGM</option>
        <option value="DKV">DKV</option>
        <option value="TIPAR">TIPAR</option>
        <option value="SK">SK</option>
        </select>
    </div>
    <div>
        Hobi
        <input type="checkbox" id="txhobi" name="musik">Musik
        <input type="checkbox" id="txhobi" name="tari">Tari
        <input type="checkbox" id="txhobi" name="tidur">Tidur
        <input type="checkbox" id="txhobi" name="membaca">Membaca
        <input type="checkbox" id="txhobi" name="Lari">Healing
      
        
    </div>
     <div>
        <button type="submit"> Kirim Data </button>
     </div>
</form>
       <script>
        function checkform(){
                let f = document.getElementById("Latihan02").elements;
                let nim = f.nim.value;
                let nama = f.nama.value;
                let jeniskelamin = f.jk.value;
                let jurusan = f.jurusan.value;
                let hobi_musik = f.txhobi[0].checked;
                let hobi_tidur = f.txhobi[2].checked;

                console.log("NIM: "+nim);
                console.log("NAMA: "+nama);
                console.log("JenisKelamin: "+jeniskelamin);
                console.log("Jurusan: "+jurusan);
                console.log("hobi Musik: "+hobi_musik);
                console.log("hobi Tidur: "+hobi_tidur);
               
                return false;
        }
       </script>
</body>
</html>