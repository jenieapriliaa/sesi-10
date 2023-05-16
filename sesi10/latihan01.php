<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 01</title>
</head>
<body>
    
<form name="Latihan 01" method="POST" onsubmit="return checkform(this)">
     <div>
        NIM
        <input type="text" name="txNIM">
    </div>
    <div>
        NAMA
        <input type="text" name="txNAMA">
    </div>
    <div>
        Jenis kelamin
        <input type="radio" name="txJK" value="L">Laki-laki
        <input type="radio" name="txJK" value="P">Perempuan
    </div>
    <div>
        Jurusan
        <select name="txJURUSAN">
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
        <input type="checkbox" name="musik">Musik
        <input type="checkbox" name="tari">Tari
        <input type="checkbox" name="tidur">Tidur
        <input type="checkbox" name="membaca">Membaca
        <input type="checkbox" name="Lari">Lari
        <input type="checkbox" name="joging">Joging
        <input type="checkbox" name="menangis">Menangis
        <input type="checkbox" name="healing">healing
        
    </div>
     <div>
        <button type="submit"> Kirim Data </button>
     </div>
</form>
       <script>
        function checkform(frm){
                let f = frm.elements;
                let nim = f.namedItem("txNIM").value;
                let nama = f.namedItem("txNAMA").value;
                let jeniskelamin = f.namedItem("txJK").value;
                let jurusan = f.namedItem("txJURUSAN").value;
                let hobi_musik = f.namedItem("musik").checked;
                let hobi_tidur = f.namedItem("tidur").checked;

                console.log("NIM: "+nim);
                console.log("NAMA: "+nama);
                console.log("JenisKelamin: "+jeniskelamin);
                console.log("Jurusan: "+jurusan);
                console.log("Nama: "+hobi_musik);
                console.log("Nama: "+hobi_tidur);
               
                return false;
        }
       </script>
</body>
</html>