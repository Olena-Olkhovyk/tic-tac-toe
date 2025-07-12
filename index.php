<?php
    function create_tile($value) {
        $o="";
        if($value == 0 || $value == 1) {
            $o = "<select disabled='disabled'>";
        }else{
            $o = "<select>";
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

    $board = [
        [1,0,3],
        [3,3,3],
        [3,3,3]
    ]
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
    <table class="tic-tac-table" border="1">
        <caption>Play Now!</caption>
        <tbody>
            <?php foreach($board as $row): ?>
                <tr>
                    <?php foreach($row as $tile): ?>
                        <td>
                            <?php  echo create_tile($tile) ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>