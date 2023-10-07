<?php
    $word = $_POST['word'];
    $meaning = $_POST['meaning'];
    $level = $_POST['level'];

    $formData = array(
        'word' => $word,
        'meaning' => $meaning,
        'level' => $level
    );

    echo "<script>
            localStorage.setItem('formData', JSON.stringify(" . json_encode($formData) . "));
            window.location.href = 'view.html';
          </script>";
    exit; // PHP 실행 종료
?>
