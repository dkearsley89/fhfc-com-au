<?php
$currentDate = date("Y-m-d");
$today = strtotime($currentDate);

$endOfRound1 = "2014-03-31";
$expiration_date1 = strtotime($endOfRound1);
$endOfRound2 = "2014-04-07";
$expiration_date2 = strtotime($endOfRound2);
$endOfRound3 = "2014-04-14";
$expiration_date3 = strtotime($endOfRound3);
$endOfRound4 = "2014-04-28";
$expiration_date4 = strtotime($endOfRound4);
$endOfRound5 = "2014-05-05";
$expiration_date5 = strtotime($endOfRound5);
$endOfRound6 = "2014-05-12";
$expiration_date6 = strtotime($endOfRound6);
$endOfRound7 = "2014-05-19";
$expiration_date7 = strtotime($endOfRound7);
$endOfRound8 = "2014-05-26";
$expiration_date8 = strtotime($endOfRound8);
$endOfRound9 = "2014-06-02";
$expiration_date9 = strtotime($endOfRound9);
$endOfRound10 = "2014-06-16";
$expiration_date10 = strtotime($endOfRound10);
$endOfRound11 = "2014-06-23";
$expiration_date11 = strtotime($endOfRound11);
$endOfRound12 = "2014-06-30";
$expiration_date12 = strtotime($endOfRound12);
$endOfRound13 = "2014-07-07";
$expiration_date13 = strtotime($endOfRound13);
$endOfRound14 = "2014-07-14";
$expiration_date14 = strtotime($endOfRound14);
$endOfRound15 = "2014-07-21";
$expiration_date15 = strtotime($endOfRound15);
$endOfRound16 = "2014-07-28";
$expiration_date16 = strtotime($endOfRound16);
$endOfRound17 = "2014-08-04";
$expiration_date17 = strtotime($endOfRound17);
$endOfRound18 = "2014-08-11";
$expiration_date18 = strtotime($endOfRound18);
$endOfRound19 = "2014-08-18";
$expiration_date19 = strtotime($endOfRound19);
$endOfRound20 = "2014-08-25";
$expiration_date20 = strtotime($endOfRound20);
$endOfFinals = "2015-01-01";
$expiration_finals = strtotime($endOfFinals);

$fixture = "<ul id=upcomingGames>";

if ($expiration_date1 > $today) {
     $fixture = $fixture . "<li>2014 Season Yet To Commence</li>";
} else if ($expiration_date2 > $today) {
     $fixture = $fixture . "<li>A Grade v Reynella<br />@ Reynella 2:30pm</li>";
     $fixture = $fixture . "<li>B Grade v Reynella<br />@ Reynella 12:50pm</li>";
     $fixture = $fixture . "<li>Under 18 v Reynella<br />@ Reynella 11:10am</li>";
     $fixture = $fixture . "<li>Under 16 v Reynella<br />@ Reynella 9:35am</li>";
     $fixture = $fixture . "<li>Under 14 v Reynella<br />@ Reynella 8:15am</li>";
} else if ($expiration_date3 > $today) {
     $fixture = $fixture . "<li class=bold>Saturday Games</li>";
     $fixture = $fixture . "<li>A Grade v Noarlunga<br />@ FHFC 2:30pm</li>";
     $fixture = $fixture . "<li>B Grade v Noarlunga<br />@ FHFC 12:50pm</li>";
     $fixture = $fixture . "<li>Under 18 v Ald/Noar<br />@ FHFC 11:10am</li>";
     $fixture = $fixture . "<li>Under 16 v Noarlunga<br />@ FHFC 9:35am</li>";
     $fixture = $fixture . "<li>Under 14 v Noarlunga<br />@ FHFC 9:35am</li>";
     $fixture = $fixture . "<li class=bold>Sunday Games</li>";
     $fixture = $fixture . "<li>C Grade v Brighton<br />@ FHFC 1:00pm</li>";
     $fixture = $fixture . "<li>Under 14 v Morphett Vale<br />@ Morphett Vale 1:00pm</li>";
} else if ($expiration_date4 > $today) {
     $fixture = $fixture . "<li class=bold>Saturday Games</li>";
     $fixture = $fixture . "<li>A Grade v OSB/Lonsdale<br />@ FHFC 2:30pm</li>";
     $fixture = $fixture . "<li>B Grade v OSB/Lonsdale<br />@ FHFC 12:50pm</li>";
     $fixture = $fixture . "<li>Under 18 v Cove<br />@ FHFC 11:10am</li>";
     $fixture = $fixture . "<li>Under 16 v Aldinga<br />@ FHFC 9:35am</li>";
     $fixture = $fixture . "<li>Under 14 v Hackham<br />@ FHFC 8:15am</li>";
     $fixture = $fixture . "<li class=bold>Sunday Games</li>";
     $fixture = $fixture . "<li>C Grade v Christies Bch<br />@ Christies Bch 1:00pm</li>";
     $fixture = $fixture . "<li>Under 14 v Cove<br />@ FHFC 12:20pm</li>";
} else if ($expiration_date5 > $today) {
     $fixture = $fixture . "<li class=bold>Saturday Games</li>";
     $fixture = $fixture . "<li>A Grade v Christies Bch<br />@ Christies Bch 2:30pm</li>";
     $fixture = $fixture . "<li>B Grade v Christies Bch<br />@ Christies Bch 12:50pm</li>";
     $fixture = $fixture . "<li>Under 18 v Christies Bch<br />@ Christies Bch 11:10am</li>";
     $fixture = $fixture . "<li>Under 16 v Christies Bch<br />@ Christies Bch 9:35am</li>";
     $fixture = $fixture . "<li>Under 14 v Christies Bch<br />@ Christies Bch 8:15am</li>";
     $fixture = $fixture . "<li class=bold>Sunday Games</li>";
     $fixture = $fixture . "<li>C Grade v Edwardstown<br />@ Edwardstown 1:00pm</li>";
     $fixture = $fixture . "<li>Under 14 v Marion<br />@ FHFC 12:20pm</li>";
} else if ($expiration_date6 > $today) {
     $fixture = $fixture . "<li class=bold>Saturday Games</li>";
     $fixture = $fixture . "<li>A Grade v Cove<br />@ Cove 2:30pm</li>";
     $fixture = $fixture . "<li>B Grade v Cove<br />@ Cove 12:50pm</li>";
     $fixture = $fixture . "<li>Under 18 v Cove<br />@ Cove 11:10am</li>";
     $fixture = $fixture . "<li>Under 16 v Cove<br />@ Cove 9:35am</li>";
     $fixture = $fixture . "<li>Under 14 v Cove<br />@ Cove 8:15am</li>";
     $fixture = $fixture . "<li class=bold>Sunday Games</li>";
     $fixture = $fixture . "<li>C Grade v M.V Park<br />@ FHFC 1:00pm</li>";
     $fixture = $fixture . "<li>Under 14 v Reynella<br />@ Reynella 12:20pm</li>";
} else if ($expiration_date7 > $today) {
     $fixture = $fixture . "<li class=bold>Saturday Games</li>";
     $fixture = $fixture . "<li>A Grade v M.V Park<br />@ FHFC 2:30pm</li>";
     $fixture = $fixture . "<li>B Grade v M.V Park<br />@ FHFC 12:50pm</li>";
     $fixture = $fixture . "<li>Under 18 v M.V Park<br />@ FHFC 11:10am</li>";
     $fixture = $fixture . "<li>Under 16 v Cove<br />@ FHFC 9:35am</li>";
     $fixture = $fixture . "<li>Under 14 v Cove<br />@ FHFC 8:15am</li>";
     $fixture = $fixture . "<li class=bold>Sunday Games</li>";
     $fixture = $fixture . "<li>C Grade v Cove<br />@ Cove 1:00pm</li>";
     $fixture = $fixture . "<li>Under 14 v Brighton Blk<br />@ FHFC 12:20pm</li>";
} else if ($expiration_date8 > $today) {
     $fixture = $fixture . "<li>A Grade v Port Noarlunga<br />@ Port Noarlunga 2:30pm</li>";
     $fixture = $fixture . "<li>B Grade v Port Noarlunga<br />@ Port Noarlunga 12:50pm</li>";
     $fixture = $fixture . "<li>Under 18 v Port Noarlunga<br />@ Port Noarlunga 11:10am</li>";
     $fixture = $fixture . "<li>Under 16 v Port Noarlunga<br />@ Port Noarlunga 9:35am</li>";
     $fixture = $fixture . "<li>Under 14 v Port Noarlunga<br />@ Port Noarlunga 8:15am</li>";
     $fixture = $fixture . "<li class=bold>Sunday Games</li>";
     $fixture = $fixture . "<li>C Grade v Brighton<br />@ Brighton 1:00pm</li>";
     $fixture = $fixture . "<li>Under 14 v OSB/Lonsdale<br />@ FHFC 12:20pm</li>";
} else if ($expiration_date9 > $today) {
     $fixture = $fixture . "<li>A Grade v Hackham<br />@ FHFC 2:30pm</li>";
     $fixture = $fixture . "<li>B Grade v Hackham<br />@ FHFC 12:50pm</li>";
     $fixture = $fixture . "<li>Under 18 v Hackham<br />@ FHFC 11:10am</li>";
     $fixture = $fixture . "<li>Under 16 v Noarlunga<br />@ FHFC 9:35am</li>";
     $fixture = $fixture . "<li>Under 14 v Hackham<br />@ FHFC 8:15am</li>";
     $fixture = $fixture . "<li class=bold>Sunday Games</li>";
     $fixture = $fixture . "<li>C Grade v Christies Bch<br />@ FHFC 1:00pm</li>";
     $fixture = $fixture . "<li>Under 14 v Brighton Yel<br />@ Brighton 12:20pm</li>";
} else if ($expiration_date10 > $today) {
     $fixture = $fixture . "<li>A Grade - Bye</li>";
     $fixture = $fixture . "<li>B Grade - Bye</li>";
     $fixture = $fixture . "<li>Under 18 - Bye</li>";
     $fixture = $fixture . "<li>Under 16 v Brighton<br />@ Brighton 9:35am</li>";
     $fixture = $fixture . "<li>Under 14 v Brighton<br />@ Morphett Vale 8:15am</li>";
     $fixture = $fixture . "<li class=bold>Sunday Games</li>";
     $fixture = $fixture . "<li>C Grade v Edwardstown<br />@ FHFC 1:00pm</li>";
     $fixture = $fixture . "<li>Under 14 v Happy Valley<br />@ Happy Valley 12:20pm</li>";
} else if ($expiration_date11 > $today) {
     $fixture = $fixture . "<li>A Grade v Marion<br />@ FHFC 2:30pm</li>";
     $fixture = $fixture . "<li>B Grade v Marion<br />@ FHFC 12:50pm</li>";
     $fixture = $fixture . "<li>Under 18 v Marion<br />@ FHFC 11:10am</li>";
     $fixture = $fixture . "<li>Under 16 v Reynella<br />@ FHFC 9:35am</li>";
     $fixture = $fixture . "<li>Under 14 v Reynella<br />@ FHFC 8:15am</li>";
     $fixture = $fixture . "<li class=bold>Sunday Games</li>";
     $fixture = $fixture . "<li>C Grade v M.V Park<br />@ M.V Park 1:00pm</li>";
     $fixture = $fixture . "<li>Under 14 v M.V Park<br />@ FHFC 12:20pm</li>";
} else if ($expiration_date12 > $today) {
     $fixture = $fixture . "<li>A Grade v Aldinga<br />@ Aldinga 2:30pm</li>";
     $fixture = $fixture . "<li>B Grade v Aldinga<br />@ Aldinga 12:50pm</li>";
     $fixture = $fixture . "<li>Under 18 v Edwardstown<br />@ <span class=bold>OSB/Lonsdale</span> 11:10am</li>";
     $fixture = $fixture . "<li>Under 16 v Aldinga<br />@ Aldinga <span class=bold>11:10am</span></li>";
     $fixture = $fixture . "<li>Under 14 v Hackham<br />@ <span class=bold>Marion 9:35am</span></li>";
     $fixture = $fixture . "<li class=bold>Sunday Games</li>";
     $fixture = $fixture . "<li>C Grade v Cove<br />@ FHFC 1:00pm</li>";
     $fixture = $fixture . "<li>Under 14 - Bye</li>";
} else if ($expiration_date13 > $today) {
     $fixture = $fixture . "<li>A Grade v Happy Valley<br />@ Happy Valley 2:30pm</li>";
     $fixture = $fixture . "<li>B Grade v Happy Valley<br />@ Happy Valley 12:50pm</li>";
     $fixture = $fixture . "<li>Under 18 v Happy Valley<br />@ Happy Valley 11:10am</li>";
     $fixture = $fixture . "<li>Under 16 v Happy Valley<br />@ Happy Valley 9:35am</li>";
     $fixture = $fixture . "<li>Under 14 v Happy Valley<br />@ Happy Valley 8:15am</li>";
     $fixture = $fixture . "<li class=bold>Sunday Games</li>";
     $fixture = $fixture . "<li>C Grade v Brighton<br />@ Brighton 1:00pm</li>";
     $fixture = $fixture . "<li>Under 14 v Noarlunga<br />@ FHFC 12:20pm</li>";
} else if ($expiration_date14 > $today) {
     $fixture = $fixture . "<li>A Grade v Morphett Vale<br />@ FHFC 2:30pm</li>";
     $fixture = $fixture . "<li>B Grade v Morphett Vale<br />@ FHFC 12:50pm</li>";
     $fixture = $fixture . "<li>Under 18 v Morphett Vale<br />@ FHFC 11:10am</li>";
     $fixture = $fixture . "<li>Under 16 v Morphett Vale<br />@ FHFC 9:35am</li>";
     $fixture = $fixture . "<li>Under 14 v Morphett Vale<br />@ FHFC 8:15am</li>";
     $fixture = $fixture . "<li class=bold>Sunday Games</li>";
     $fixture = $fixture . "<li>C Grade - Bye</li>";
     $fixture = $fixture . "<li>Under 14 v Morphett Vale<br />@ Morphett Vale 12:20pm</li>";
} else if ($expiration_date15 > $today) {
     $fixture = $fixture . "<li>A Grade v Brighton<br />@ FHFC 2:30pm</li>";
     $fixture = $fixture . "<li>B Grade v Brighton<br />@ FHFC 12:50pm</li>";
     $fixture = $fixture . "<li>Under 18 v Brighton<br />@ FHFC 11:10am</li>";
     $fixture = $fixture . "<li>Under 16 v Brighton<br />@ FHFC 9:35am</li>";
     $fixture = $fixture . "<li>Under 14 v Brighton<br />@ FHFC 8:15am</li>";
     $fixture = $fixture . "<li class=bold>Sunday Games</li>";
     $fixture = $fixture . "<li>C Grade v Christies Bch<br />@ Christies Bch 1:00pm</li>";
     $fixture = $fixture . "<li>Under 14 v Happy Valley<br />@ Happy Valley 1:00pm</li>";
} else if ($expiration_date16 > $today) {
     $fixture = $fixture . "<li>A Grade v Edwardstown<br />@ Edwardstown 2:30pm</li>";
     $fixture = $fixture . "<li>B Grade v Edwardstown<br />@ Edwardstown 12:50pm</li>";
     $fixture = $fixture . "<li>Under 18 v Edwardstown<br />@ Edwardstown 11:10am</li>";
     $fixture = $fixture . "<li>Under 16 v Aldinga<br />@ <span class=bold>Aldinga</span> 9:35am</li>";
     $fixture = $fixture . "<li>Under 14 v Hackham<br />@ <span class=bold>Aldinga</span> 8:15am</li>";
     $fixture = $fixture . "<li class=bold>Sunday Games</li>";
     $fixture = $fixture . "<li>C Grade v Edwardstown<br />@ FHFC 1:00pm</li>";
     $fixture = $fixture . "<li>Under 14 v Marion<br />@ Marion 12:20pm</li>";
} else if ($expiration_date17 > $today) {
     $fixture = $fixture . "<li>A Grade v Port Noarlunga<br />@ FHFC 2:30pm</li>";
     $fixture = $fixture . "<li>B Grade v Port Noarlunga<br />@ FHFC 12:50pm</li>";
     $fixture = $fixture . "<li>Under 18 v Port Noarlunga<br />@ FHFC 11:10am</li>";
     $fixture = $fixture . "<li>Under 16 v Port Noarlunga<br />@ FHFC 9:35am</li>";
     $fixture = $fixture . "<li>Under 14 v Port Noarlunga<br />@ FHFC 8:15am</li>";
     $fixture = $fixture . "<li class=bold>Sunday Games</li>";
     $fixture = $fixture . "<li>C Grade v M.V Park<br />@ M.V Park 1:00pm</li>";
     $fixture = $fixture . "<li>Under 14 v Noarlunga<br />@ FHFC 12:20pm</li>";
} else if ($expiration_date18 > $today) {
     $fixture = $fixture . "<li>A Grade v OSB/Lonsdale<br />@ OSB/Lonsdale 2:30pm</li>";
     $fixture = $fixture . "<li>B Grade v OSB/Lonsdale<br />@ OSB/Lonsdale 12:50pm</li>";
     $fixture = $fixture . "<li>Under 18 - Bye</li>";
     $fixture = $fixture . "<li>Under 16 v Reynella<br />@ <span class=bold>M.V Park</span> 9:35am</li>";
     $fixture = $fixture . "<li>Under 14 v Reynella<br />@ <span class=bold>M.V Park</span> 8:15am</li>";
     $fixture = $fixture . "<li class=bold>Sunday Games</li>";
     $fixture = $fixture . "<li>C Grade v Cove<br />@ FHFC 1:00pm</li>";
     $fixture = $fixture . "<li>Under 14 - Bye</li>";
} else if ($expiration_date19 > $today) {
     $fixture = $fixture . "<li>A Grade v Marion<br />@ Marion 2:30pm</li>";
     $fixture = $fixture . "<li>B Grade v Marion<br />@ Marion 12:50pm</li>";
     $fixture = $fixture . "<li>Under 18 v Marion<br />@ Marion 11:10am</li>";
     $fixture = $fixture . "<li>Under 16 v Brighton<br />@ <span class=bold>Brighton</span> 9:35am</li>";
     $fixture = $fixture . "<li>Under 14 v Cove<br />@ Marion <span class=bold>9:35am</span></li>";
     $fixture = $fixture . "<li class=bold>Sunday Games</li>";
     $fixture = $fixture . "<li>C Grade v Christies Bch<br />@ FHFC 1:00pm</li>";
     $fixture = $fixture . "<li>Under 14 v Reynella<br />@ Reynella 12:20pm</li>";
} else if ($expiration_date20 > $today) {
     $fixture = $fixture . "<li>A Grade v Christies Bch<br />@ FHFC 2:30pm</li>";
     $fixture = $fixture . "<li>B Grade v Christies Bch<br />@ FHFC 12:50pm</li>";
     $fixture = $fixture . "<li>Under 18 v Christies Bch<br />@ FHFC 11:10am</li>";
     $fixture = $fixture . "<li>Under 16 v Christies Bch<br />@ FHFC 9:35am</li>";
     $fixture = $fixture . "<li>Under 14 v Christies Bch<br />@ FHFC 8:15am</li>";
     $fixture = $fixture . "<li class=bold>Sunday Games</li>";
     $fixture = $fixture . "<li>C Grade - Finals</li>";
     $fixture = $fixture . "<li>Under 14 - Finals</li>";
} else if ($expiration_finals > $today) {
     $fixture = $fixture . "<li>2014 Season Finished</li>";
}
$fixture = $fixture . "<li><a href=../program/program.htm>View Entire Program</a></li></ul>";
echo $fixture;
?>