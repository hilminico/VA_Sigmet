<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-weight: 50;
                font-size:14px;
                margin: 0;
            }

        </style>
    </head>
    <body>
    <table>
    <tr>
    <td>
    index
    </td>
    <td style="width:600px;">
    data mentah
    </td>
    <td style="width:600px;">
    data parsing
    </td>
    <td style="width:600px;">
    translite kasar
    </td>
    </tr>

    <?php $index=0;
        while($index < count($getdata)){
    ?>
    <tr>
    <td>
    <?php print $index;?>
    </td>
    
    <td>
    {{ $getdata[$index][1] }}
            
    </td>

    <td>
    {{ $getdata[$index][0] }}

    </td>
    <td>
    ini

    </td>

    </tr>
    <?php $index++; }?>

    </table>
    </body>
</html>
