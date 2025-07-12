<?php
    function create_tile() {
        return "<select>
            <option>Select</option>
            <option value='0'>0</option>
            <option value='x'>x</option>
        </select>";
    }

    $board = [
        [3,3,3],
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