<?php
do {
    $PlayerOne = readline("Player 1 (X) - Digite seu nome: ");
    $PlayerTwo = readline("Player 2 (O) - Digite seu nome: ");

    $player = 'X';

    $board = [
        '.', '.', '.',
        '.', '.', '.',
        '.', '.', '.'
    ];

    $winner = null;
    // exibindo tela do usuário
    while ($winner === null) {
        echo <<<EOL
        Posições: | Tabuleiro
                  |  
        0|1|2     | $board[0]|$board[1]|$board[2]  
        3|4|5     | $board[3]|$board[4]|$board[5]  
        6|7|8     | $board[6]|$board[7]|$board[8]
        \n  
        EOL;


        $position = (int) readline("Player {$player}, digite uma posição: ");
        // validações
        if (!in_array($position, [0, 1, 2, 3, 4, 5, 6, 7, 8])) {
            echo "\n Posição inexistente, digite novamente.\n";
            continue;
        }

        if ($board[$position] !== '.') {
            echo "\n Posição ocupada, digite novamente.\n";
            continue;
        }

        $board[$position]  =  $player;
        // validação de sequência
        if (
            ($board[0] === 'X' && $board[1] === 'X' && $board[2] === 'X') ||
            ($board[3] === 'X' && $board[4] === 'X' && $board[5] === 'X') ||
            ($board[6] === 'X' && $board[7] === 'X' && $board[8] === 'X') ||
            ($board[0] === 'X' && $board[3] === 'X' && $board[6] === 'X') ||
            ($board[1] === 'X' && $board[4] === 'X' && $board[7] === 'X') ||
            ($board[2] === 'X' && $board[5] === 'X' && $board[8] === 'X') ||
            ($board[0] === 'X' && $board[4] === 'X' && $board[8] === 'X') ||
            ($board[2] === 'X' && $board[4] === 'X' && $board[6] === 'X')
        ) {
            $winner = 'X';
        }

        if (($board[0] === 'O' && $board[1] === 'O' && $board[2] === 'O') ||
            ($board[3] === 'O' && $board[4] === 'O' && $board[5] === 'O') ||
            ($board[6] === 'O' && $board[7] === 'O' && $board[8] === 'O') ||
            ($board[0] === 'O' && $board[3] === 'O' && $board[6] === 'O') ||
            ($board[1] === 'O' && $board[4] === 'O' && $board[7] === 'O') ||
            ($board[2] === 'O' && $board[5] === 'O' && $board[8] === 'O') ||
            ($board[0] === 'O' && $board[4] === 'O' && $board[8] === 'O') ||
            ($board[2] === 'O' && $board[4] === 'O' && $board[6] === 'O')
        ) {
            $winner = 'O';
        }
        // alterando players

        if (!in_array('.', $board)) {
            break;
        }
        if ($player === 'X') {
            $player = 'O';
        } else {
            $player = 'X';
        }
    }

    echo <<<EOL
    Posições: | Tabuleiro
              |  
    0|1|2     | $board[0]|$board[1]|$board[2]  
    3|4|5     | $board[3]|$board[4]|$board[5]  
    6|7|8     | $board[6]|$board[7]|$board[8]  
    EOL;

    if ($winner === 'X') {
        echo "VENCEDOR: {$PlayerOne}.\n";
    } elseif ($winner === 'O') {
        echo "VENCEDOR: {$PlayerTwo}.\n";
    } else {
        echo "EMPATE.\n";
    }

    $PlayeAgain = filter_var(
        readline("\nDeseja jogar novamente ? (true/false): "),
        FILTER_VALIDATE_BOOLEAN
    );

    echo "\n";
} while ($PlayeAgain === true);
