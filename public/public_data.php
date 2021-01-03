<?php

$url = 'http://openapi.airkorea.or.kr/openapi/services/rest/ArpltnInforInqireSvc/getMsrstnAcctoRltmMesureDnsty?';
$serviceKey = 'JlHOeVAm5p3vs6PcpSajE7TleSu8iKl14%2BJE1HDw4tijOnIGLizJnKvfmk8a%2Fx%2Bs1RhuRsqmDQRtUptWZFQlrg%3D%3D';

// GET방식
// stationName에 데이터가 없는 경우도 있음 데이터가 없는 경우 참조 (원곡동은 2021.01.03 기준으로 측정 데이터 없음)
$parameter = [
    'ServiceKey' => urldecode($serviceKey),
    'numOfRows' => 10,
    'pageNo' => 1,
    'dataTerm' => 'daily',
    'ver' => 1.3,
    'stationName' => '원시동',
];

$queryString = http_build_query($parameter);

// url 에 파라미터 추가
$url .= $queryString;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 문자열로 반환?
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);

$response = curl_exec($ch);
curl_close($ch);

$xml = simplexml_load_string($response);

print_r($xml);