<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        // // script ajax get
        $(function() {
            let i = 0;
            $('.hitung').click(function() {
                $.ajax({
                    url : "hitung.php",
                    type: "GET",
                    data : {count: i},
                    success: function(data) {
                        i = data;
                        $('.tampil').append(" "+data);
                    },
                    error: function(data) {
                        alert("Tidak dapat memproses");
                    }
                })
            })
        });

        // script ajax post
        $(function() {
            $('#myform').submit(function() {
                $.ajax({
                    url : "simpan.php",
                    type : "POST",
                    data : $(this).serialize(),
                    success : function(data) {
                        alert(data);
                        $('[name=nama]').val("");
                        $('[name=jabatan]').val("");
                    },
                    error : function(data) {
                        alert("Tidak dapat memproses");
                    }
                });
                return false;
            })
        });

        // script Menampilkan data dengan respon ajax berupa JSON
        $(function() {
            $.ajax({
                url : "json.php",
                type : "GET",
                dataType : "JSON",
                success : function(data) {
                    for ( i = 0; i < data.length; i++) {
                        $('.tbody').append(`<tr><td> ${data[i].id_jabatan} </td><td> ${data[i].nama_jabatan} </td></tr>`);
                    }
                },
                error: function(data) {
                    alert("Tidak dapat memproses data!");
                }
            })
        });
    </script>
</head>
<body>
    <!-- ajax GET -->
    <button class="hitung">Hitung</button><br><br>
    <div class="tampil"></div>
    <br>
    
    <!-- ajax POST -->
    <h4>Masukan data pegawai</h4>
    <form id="myform">
        <table>
            <tr>
                <td>Nama Pegawai</td>
                <td>: <input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>ID Jabatan</td>
                <td>: <input type="number" name="jabatan"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button>Simpan</button>
                </td>
            </tr>
        </table>
    </form>
    <br>
    <!-- Menampilkan data dengan respon ajax berupa JSON -->
    <form id="myform1"">
        <table border="1" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID Jabatan</th>
                    <th>Nama Jabatan</th>
                </tr>
            </thead>
            <tbody class="tbody"></tbody>
        </table>
    </form>
</body>
</html>