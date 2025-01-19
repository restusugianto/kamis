<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Belajar SMP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        .question {
            margin-bottom: 20px;
        }
        .question h2 {
            margin: 0;
        }
        .options {
            margin-top: 10px;
        }
        .options label {
            display: block;
            padding: 8px;
            margin: 5px 0;
            background-color: #f1f1f1;
            border-radius: 5px;
            cursor: pointer;
        }
        .options input {
            margin-right: 10px;
        }
        .result {
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Media Belajar Matematika SMP</h1>
    <p>Jawab soal berikut dengan benar!</p>

    <?php
    // Daftar soal dan jawaban
    $questions = [
        [
            'question' => 'Berapa hasil dari 7 + 5?',
            'options' => [10, 11, 12, 13],
            'correct_answer' => 12
        ],
        [
            'question' => 'Berapa hasil dari 15 - 8?',
            'options' => [5, 6, 7, 8],
            'correct_answer' => 7
        ],
        [
            'question' => 'Berapa hasil dari 9 x 3?',
            'options' => [24, 27, 30, 33],
            'correct_answer' => 27
        ]
    ];

    // Cek jika form sudah disubmit
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $score = 0;
        foreach ($questions as $index => $question) {
            if (isset($_POST['answer' . $index]) && $_POST['answer' . $index] == $question['correct_answer']) {
                $score++;
            }
        }
        echo "<div class='result'>Skor Anda: $score / " . count($questions) . "</div>";
    }
    ?>

    <form method="POST">
        <?php foreach ($questions as $index => $question) : ?>
            <div class="question">
                <h2><?php echo $question['question']; ?></h2>
                <div class="options">
                    <?php foreach ($question['options'] as $option) : ?>
                        <label>
                            <input type="radio" name="answer<?php echo $index; ?>" value="<?php echo $option; ?>">
                            <?php echo $option; ?>
                        </label>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

        <button type="submit">Kirim Jawaban</button>
    </form>
</div>

</body>
</html>