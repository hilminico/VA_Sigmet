<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
 
        <!-- Styles -->
        <style>

        body {
        margin: 0;
        padding: 0;
        font-family: "Lobster", cursive;
        background: linear-gradient(-90deg, #2a1e5c, #3cbbb1);
        }

        h2 {
        text-align: center;
        }

        .search {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80px;
        height: 80px;
        background: #fff;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        border-radius: 4px;
        transition: width 0.5s;
        overflow: hidden;
        }

        .search.active {
        width: 600px;
        }

        .search.active .icon {
        background: #3cbbb1;
        }

        .search.active .icon::before {
        content: "";
        position: absolute;
        top: 7px;
        left: 13px;
        width: 18px;
        height: 30px;
        background: transparent;
        border: none;
        border-radius: 0;
        border-right: 2px solid #fff;
        transform: rotate(45deg);
        transition: 0.5s;
        }

        .search.active .icon::after {
        content: "";
        position: absolute;
        top: 20px;
        left: 13px;
        width: 18px;
        height: 30px;
        background: transparent;
        border: none;
        border-radius: 0;
        border-right: 2px solid #fff;
        transform: rotate(-45deg);
        transition: 0.5s;
        }

        .search input {
        position: absolute;
        top: 10px;
        left: 10px;
        width: calc(100% - 90px);
        height: 60px;
        border: none;
        outline: none;
        font-size: 36px;
        padding: 0 10px;
        color: #666;
        font-family: "Lobster", cursive;
        }

        .icon {
        width: 60px;
        height: 60px;
        background: #fff;
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        transition: 0.5s;
        border-radius: 4px;
        }

        .icon::before {
        content: "";
        position: absolute;
        top: 10px;
        left: 10px;
        width: 24px;
        height: 24px;
        background: transparent;
        border: 2px solid #262626;
        border-radius: 50%;
        }

        .icon::after {
        content: "";
        position: absolute;
        top: 25px;
        left: 35px;
        width: 18px;
        height: 18px;
        background: transparent;
        border-left: 2px solid #262626;
        transform: rotate(-45deg);
        }
        table{
          position:absolute;
          top: 60%;
          margin:5%;
          text-transform:uppercase;
        }
        table thead th{
          border:2px solid #fff;
        }
        table tr td{
          border:2px solid #fff;
          padding:5px;
        }

        </style>

    </head>

<body>
  <h2>Expanding Search Navigation</h2>
  <div class="search">
    <form action="/actioninput">
        <input type="text" placeholder="Search For Jobs..." id="input" name="command">
    <div class="icon" onclick="toggleSearch()"></div>
  </div>
        <input type="submit" placeholder="Scanner" id="input" name="scanner">
        <input type="submit" placeholder="Token" id="input" name="token">
        <input type="submit" placeholder="Parsing" id="input" name="parsing">
    </form>


    <table>
      <thead>
      @for($i=0;$i < sizeof($data[3]); $i++)
        <th>{{$data[3][$i]}}</th>
        @endfor
      </thead>
      <tbody>
      @for($i=0;$i < sizeof($data[7]); $i++)
        <tr>
          <td>{{ $data[7][$i] }}</td>
        </tr>
        @endfor
      </tbody>
    </table>

</body>


    <!-- <table style="width:90%;margin:auto;background:#ecf0f1">
        <tr>
            <td>Kata Tanya</td>
            <td>Kata Perintah</td>
            <td>Kata Pelengkap</td>
            <td>Kata Keterangan</td>
            <td>Attribut</td>
            <td>Kata Sambung</td>
        </tr>
        <tr>
            <td>Dimana</td>
            <td>Tampilkan</td>
            <td>Saja</td>
            <td>Di</td>
            <td>Detail</td>
            <td>Dan</td>
        </tr>
        <tr>
            <td>Apa</td>
            <td>Tampil</td>
            <td>Daftar</td>
            <td>Pada</td>
            <td>Tempat</td>
            <td>,</td>
        </tr>
        <tr>
            <td>Apa saja</td>
            <td>Cari</td>
            <td>Data</td>
            <td>Dari</td>
            <td>Waktu</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>List</td>
            <td>Yang</td>
            <td>Semua</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Info</td>
            <td>Oleh</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Dengan</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>VA</td>
            <td></td>
            <td></td>
        </tr>
    </table> -->
    </body>
    <script>
    function toggleSearch() {
    const search = document.querySelector(".search");
    search.classList.toggle("active");
    }

    </script>
</html>
