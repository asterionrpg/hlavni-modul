<?php
function human_readable_filesize(int $size, int $precision = 2)
{
    $units = ['B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
    $step = 1024;
    $i = 0;
    $humanSize = $size;
    while (($humanSize / $step) > 0.9) {
        $humanSize /= $step;
        $i++;
    }
    return number_format(round($humanSize, $precision), $precision, ',', ' ') . ' ' . $units[$i];
}

?>
<a href="/pdf/runy.pdf">Runy v PDF (<?= human_readable_filesize(filesize(__DIR__ . '/../../pdf/runy.pdf') ?: 0) ?>)</a>