<?php
$url = array(
"https://i.imgur.com/WHuWqkn.mp4",
"https://i.imgur.com/xSm0Zd4.mp4",
"https://i.imgur.com/sb7jUeA.mp4",
"https://i.imgur.com/fYa6ObQ.mp4",
"https://i.imgur.com/ME6kPAR.mp4",
"https://i.imgur.com/FbPTvNO.mp4",
"https://i.imgur.com/dUQP0jS.mp4",
"https://i.imgur.com/cxPMJ0s.mp4",
"https://i.imgur.com/hB7EUWd.mp4",
"https://i.imgur.com/fTrxYYu.mp4",
"https://i.imgur.com/yU7srOD.mp4",
"https://i.imgur.com/HtA95oO.mp4",
"https://i.imgur.com/RDY7yQC.mp4",
"https://i.imgur.com/LZ5Nu8b.mp4",
"https://i.imgur.com/U3y67Dj.mp4",
"https://i.imgur.com/Un7Af9t.mp4",
"https://i.imgur.com/lvLW12l.mp4",
"https://i.imgur.com/H5jpSAO.mp4",
"https://i.imgur.com/j2YT5Jn.mp4",
"https://i.imgur.com/gi4Lmb4.mp4",
"https://i.imgur.com/0dc1sgt.mp4",
"https://i.imgur.com/lyBMJ1O.mp4",
"https://i.imgur.com/1nl7tFO.mp4",
"https://i.imgur.com/dUQP0jS.mp4",
"https://i.imgur.com/1nl7tFO.mp4",
"https://i.imgur.com/H5jpSAO.mp4",
"https://i.imgur.com/j2YT5Jn.mp4",
"https://i.imgur.com/0dc1sgt.mp4",
"https://i.imgur.com/U3y67Dj.mp4",
"https://i.imgur.com/yU7srOD.mp4",
"https://i.imgur.com/fTrxYYu.mp4",
"https://i.imgur.com/FbPTvNO.mp4",
"https://i.imgur.com/sb7jUeA.mp4",
"https://i.imgur.com/RDY7yQC.mp4",
"https://i.imgur.com/dUQP0jS.mp4",
"https://i.imgur.com/lvLW12l.mp4",
"https://i.imgur.com/Un7Af9t.mp4",
"https://i.imgur.com/gi4Lmb4.mp4",
"https://i.imgur.com/H5jpSAO.mp4",
"https://i.imgur.com/hB7EUWd.mp4",
"https://i.imgur.com/fTrxYYu.mp4",
"https://i.imgur.com/xSm0Zd4.mp4",
"https://i.imgur.com/WHuWqkn.mp4",
"https://i.imgur.com/ME6kPAR.mp4",
"https://i.imgur.com/fTrxYYu.mp4",
"https://i.imgur.com/dUQP0jS.mp4",
"https://i.imgur.com/cxPMJ0s.mp4",
);
$tuandz = array_rand($url);
$tuandeeptry = $url [$tuandz];
$videosex = array(
"data" => $tuandeeptry,
"author" => "Tuấn DeepTry",
"success" => "true",
);
$rdimg = json_encode($videosex);

$i = ['\/v\/','\/','Tuấn DeepTry'];
$t = ['/v/','/','Tuấn DeepTry'];
$j = str_replace($i, $t, $rdimg);
echo $j;
