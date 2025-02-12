<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
          $nums = [15, 4, 18, 23, 10];

          function sort_2way(array $nums, bool $order) {
            if ($order == TRUE) {
              asort($nums);
              echo "昇順にソートします。<br>";
            } else {
              arsort($nums);
              echo "降順にソートします。<br>";
            }
            foreach ($nums as $sum) {
                echo "$sum <br>";
            }
          }

          sort_2way($nums, TRUE);
          sort_2way($nums, FALSE);
        ?>
    </p>
</body>
</html>
