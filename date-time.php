<?php

/*

Function DateTime

setTime($hour, $minute, $second)
Mengubah waktu DateTime

setDate($year, $month, $day)
Mengubah tanggal DateTime

setTimestamp($unixTimestamp)
Mengubah unix timestamp DateTime

biasanya dalam bahasa pemrograman sudah di sediakan cara untuk memanipulasi
data waktu termasuk di php, di PHP kita bisa menggunakan class DateTime untuk
memanipulasi data waktu.Ada banyak sekali function di class DateTime yang bisa kita gunakan
untuk memanipulasi data waktu.

ganti timezone di file php.ini kalau laragon di path laragon/bin/php/php-8.3.16-Win32-vs16-x64/php.ini
cari text :
[Date]
; Defines the default timezone used by the date functions
; https://php.net/date.timezone
date.timezone =Asia/Jakarta // UBAH DATE TIMEZONE BAGIAN INI SESUAIKAN TIMEZONE TEMPAT KITA BERADA
; https://php.net/date.default-latitude
;date.default_latitude = 31.7667
; https://php.net/date.default-longitude
;date.default_longitude = 35.2333
; https://php.net/date.sunrise-zenith
;date.sunrise_zenith = 90.833333
; https://php.net/date.sunset-zenith
;date.sunset_zenith = 90.833333

*/

$dateTime = new DateTime();
$dateTime->setDate(1988, 1, 20); // Ubah tanggal Date
$dateTime->setTime(10, 10, 10, 0); // mengubah waktu time

// Code DateInterval
$dateTime->add(new DateInterval("P1Y")); // menambah satu tahun

$minusOneMonth = new DateInterval(("P1M")); // mengurangi 1 bulan
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);


var_dump($dateTime);

// Code DateTimeZone
$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("Asia/Seoul"));
var_dump($now);

// Format DateTime
$string = $now->format("Y-m-d H:i:s");
echo "Waktu Saat Ini : $string" . PHP_EOL;

// Parse DateTime
$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10", new DateTimeZone("Asia/Jakarta"));
if ($date) {
    var_dump($date);
} else {
    echo "Format Salah" . PHP_EOL;
}
