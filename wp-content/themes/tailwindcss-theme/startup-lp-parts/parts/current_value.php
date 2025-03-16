<?php
// 現在の日付を取得
$current_date = getdate();
$current_month = $current_date['mon']; // 現在の月

// 6つのプログラムを定義し、それぞれ2つの月に割り当てる
// 例: プログラム1は1月と7月に使用、プログラム2は2月と8月に使用
$program_map = [
    1 => [1, 7],  // プログラム1
    2 => [2, 8],  // プログラム2
    3 => [3, 9],  // プログラム3
    4 => [4, 10], // プログラム4
    5 => [5, 11], // プログラム5
    6 => [6, 12]  // プログラム6
];

// 現在の月に基づいて適用するプログラムを決定
$selected_program = 0;
foreach ($program_map as $program => $months) {
    if (in_array($current_month, $months)) {
        $selected_program = $program;
        break;
    }
}

// 各プログラムの処理
switch ($selected_program) {
    case 1:
        // プログラム1 (例: 15日未満は3、15日以上22日未満は2、22日以上29日未満は1、29日以上は0)
        if ($current_date['mday'] < 15) {
            $current_value = 3;
        } elseif ($current_date['mday'] < 22) {
            $current_value = 2;
        } elseif ($current_date['mday'] < 29) {
            $current_value = 1;
        } else {
            $current_value = 0;
        }
        break;

    case 2:
        // プログラム2 (例: 8日以下は3、8日以上18日以下は2、それ以外は1)
        if ($current_date['mday'] <= 8) {
            $current_value = 3;
        } elseif ($current_date['mday'] <= 18) {
            $current_value = 2;
        } else {
            $current_value = 1;
        }
        break;

    case 3:
        // プログラム3 (例: 10日未満は3、10日以上20日未満は2、20日以上は1)
        if ($current_date['mday'] < 10) {
            $current_value = 3;
        } elseif ($current_date['mday'] < 20) {
            $current_value = 2;
        } else {
            $current_value = 1;
        }
        break;

    case 4:
        // プログラム4 (例: 5日未満は3、5日以上15日未満は2、15日以上25日未満は1、25日以上は0)
        if ($current_date['mday'] < 5) {
            $current_value = 3;
        } elseif ($current_date['mday'] < 15) {
            $current_value = 2;
        } elseif ($current_date['mday'] < 25) {
            $current_value = 1;
        } else {
            $current_value = 0;
        }
        break;

    case 5:
        // プログラム5 (例: 12日以下は3、12日以上20日以下は2、20日以上は1)
        if ($current_date['mday'] <= 12) {
            $current_value = 3;
        } elseif ($current_date['mday'] <= 20) {
            $current_value = 2;
        } else {
            $current_value = 1;
        }
        break;

    case 6:
        // プログラム6 (例: 7日未満は3、7日以上14日未満は2、14日以上21日未満は1、それ以外は0)
        if ($current_date['mday'] < 7) {
            $current_value = 3;
        } elseif ($current_date['mday'] < 14) {
            $current_value = 2;
        } elseif ($current_date['mday'] < 21) {
            $current_value = 1;
        } else {
            $current_value = 0;
        }
        break;

    default:
        $current_value = 0; // デフォルトの値
        break;
}

// 次の月を計算
$next_month = (new DateTime())->modify('+1 month')->format('n月');
?>

<div class="fixed top-32 right-0 bg-primary rounded-tl-lg rounded-bl-lg shadow-lg border border-4 border-white z-50 text-center">
    <p class="font-bold text-regular md:text-xl text-white">
        <?= $next_month // 次の月を表示 ?>
    </p>
    <p class="text-small text-white px-2">受注可能<span class="block md:hidden"></span>件数<span class="hidden md:block"></span>残り</p>
    <p class="text-font1 font-bold bg-white"><span class="text-small md:text-large"><?= $current_value // 受注可能件数を表示 ?></span>件</p>
</div>
