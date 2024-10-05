<?php
date(string $format [, int $timestamp = time() ])
$timestamp = mktime(12, 30, 0, 7, 27, 2023);
echo date('Y年m月d日 H時i分s秒', $timestamp);