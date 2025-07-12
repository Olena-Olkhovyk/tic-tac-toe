<?php

    $board = [
        [1,0,3],
        [3,3,3],
        [3,3,3]
    ];

    function create_tile($value, $id) {
        $o="";
        $name = "row_" . $id;
        if($value == 0 || $value == 1) {
            $o = "<select  name='".$name."' disabled='disabled'>";
        }else{
            $o = "<select name='".$name."'>";
        }
        $o .= " <option>Select</option>";
        if($value == 0){
            $o .= "<option selected='selected'>0</option>";
        } else{
             $o .= "<option>0</option>";
        }

        if($value == 1){
            $o .= "<option selected='selected'>x</option>";
        } else{
             $o .= "<option>x</option>";
        }
        $o .= "</select>";

        return $o;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['play'])){
        $board = isset($_POST['board']) ? json_encode($_POST['board']) : [];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic-Tac-Toe</title>
</head>
<body>
    <h1>Tic-Tac-Toe Game</h1>
    <form method="post">
        <input type="hidden" name="board" value="<?php json_encode($board); ?>">
        <table class="tic-tac-table" border="1">
            <caption>Play Now!</caption>
            <tbody>
                <?php $count=0; foreach($board as $row): ?>
                    <tr>
                        <?php foreach($row as $tile): ?>
                            <td>
                                <?php  echo create_tile($tile, $count) ?>
                            </td>
                        <?php $count++; endforeach; ?>
                    </tr>
                <?php  endforeach; ?>
            </tbody>
            <button name="play">End Turn</button>
        </table>
    </form>
</body>
</html>