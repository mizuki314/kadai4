<?php
$text = '<p>テスト段落。</p><!-- コメント --> その他のテキスト';
// HTMLタグをすべて取り除く
$result = strip_tags($text);
echo $result;