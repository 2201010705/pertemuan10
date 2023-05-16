<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latiahn form 1</title>
</head>
<body>
    
<form name="latihan1" method="POST" onsubmit="return checkform(this)">
<div>
    NIM
    <Input type="text" name="txNIM">
</DIV>
</div>
    jenis kelamin
    <input type="radio" name="txJK" value="L">Laki-Laki 
    <input type="radio" name="txJK" value="P">Perempuan
<div> 
</div>
     Jurusan 
     <select name="txJURUSAN">
        <option value="MTI">MTI</option>
        <option value="KAB">KAB</option>
        <option value="DSN">Desain</option>
</select>
</div>
<div>
      Hobi
      <input type="checkbox" name="txhobibola" value="1">sepak bolah 
      <input type="checkbox" name="txhobibulutangkis" value="1">buluh tangkis 
      <input type="checkbox" name="txbolavoly" value="1">boli voly
</div>
<div>
    <button type="submit"> kirim data </button>
</div>

</form>

<script type="text/javascript">
function checkform(frm){
  let form = frm.elements;
  let NIM  = form.namedItem("txNIM").value;
  let jnskel = form.namedItem("txJK").value;
   let jur = form.namedItem("txJURUSAN").value;
   let hobi =[
       form.namedItem("txhobibola").checked,
       form.namedItem("txhobibulutangkis").checked,
       form.namedItem("txbolavoly").checked
    ];


    console.log("NIM: "+NIM);
    console.log("Jenis Kelamin: "+jnskel);
    console.log("Jurusan "+jur);
    console.log("hobi "+hobi);


    return false;
}
</script>

</body>
</html>