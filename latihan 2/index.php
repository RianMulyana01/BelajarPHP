<?php 

$mhs = [
    [
       "prodi" => "iformatika",
       "nim" => "22416255201284",
       "nama" => "Akbar",
       "alamat" => "cikampek",
     ],
     [
       "nim" => "22416255201158",
       "nama" => "Yusuf",
       "alamat" => "teluk jambe",
       "prodi" => "infomatika"
    ],
    [
        "nim" => "22416255201178",
       "nama" => "fajar",
       "alamat" => "telagasari",
       "prodi" => "infomatika"
    ],
    [
        "nim" => "22416255201198",
       "nama" => "bisma",
       "alamat" => "isekai",
       "prodi" => "infomatika"
    ],
    [
        "nim" => "22416255201118",
       "nama" => "putra",
       "alamat" => "purwasari",
       "prodi" => "infomatika"  
    ],
]

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
          <h1 align="center"> Daftar  Mahasiswa </h1>
          <table border="1" cellpadding="5" cellspacing="0" align="center">
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Prodi</th>
            </tr>
            <?php foreach ($mhs as $m): ?> 
                <tr>
                    <td><?php echo $m["nim"];?></td>
                    <td><?php echo $m["nama"];?></td>
                    <td><?php echo $m["alamat"];?></td>
                    <td><?php echo $m["prodi"];?></td>
                </tr>
                <?php endforeach; ?>
          </table>
    </body>
    </html>
