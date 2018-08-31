<?php
//Get the current date to compare later
$currentDate = date("Y-m-d");
$today = strtotime($currentDate);
//Setup the dates for all the events
$endOfFamilyFunDay = "2015-02-10";
$expiration_date1 = strtotime($endOfFamilyFunDay);
$endOfGolfDay = "2015-02-24";
$expiration_date2 = strtotime($endOfGolfDay);
$endOfSeasonLaunch = "2015-03-30";
$expiration_date3 = strtotime($endOfSeasonLaunch);
$endOfPlayerAuction = "2015-04-13";
$expiration_date4 = strtotime($endOfPlayerAuction);
$endOfAnzacNight = "2015-04-27";
$expiration_date5 = strtotime($endOfAnzacNight);
$endOfUnder16Meal = "2015-05-04";
$expiration_date6 = strtotime($endOfUnder16Meal);
$endOfU10sShowdown = "2015-05-18";
$expiration_date7 = strtotime($endOfU10sShowdown);
$endOfU8sShowdown = "2015-06-01";
$expiration_date8 = strtotime($endOfU8sShowdown);
$endOfFalconettes = "2015-06-22";
$expiration_date9 = strtotime($endOfFalconettes);
$endOfBall = "2015-06-29";
$expiration_date10 = strtotime($endOfBall);
$endOfBingo = "2015-07-13";
$expiration_date11 = strtotime($endOfBingo);
$endOf30Year = "2015-07-20";
$expiration_date12 = strtotime($endOf30Year);
$endOfFlaggyHotel = "2015-08-03";
$expiration_date13 = strtotime($endOfFlaggyHotel);
$endOfOnTheCouch = "2015-08-14";
$expiration_date14 = strtotime($endOfOnTheCouch);
$endOfMeal1 = "2015-08-17";
$expiration_date15 = strtotime($endOfMeal1);
$endOfMeal2 = "2015-08-24";
$expiration_date16 = strtotime($endOfMeal2);
$endOfCasinoNight = "2015-09-01";
$expiration_date17 = strtotime($endOfCasinoNight);
$endOfSeniorPrez = "2015-10-11";
$expiration_date18 = strtotime($endOfSeniorPrez);
$endOfClub125 = "2015-10-19";
$expiration_date19 = strtotime($endOfClub125);
$endOfFalconettesWine = "2015-11-02";
$expiration_date20 = strtotime($endOfFalconettesWine);
$endOfYear = "2016-02-01";
$expiration_endOfYear  = strtotime($endOfYear);
//Build the html to display on the News Page
$events = "<ul id=upcomingEvents>";
if ($expiration_date1 > $today) {
    $events = $events . "<li>Feb 08 - Rego Day</li>";
    $events = $events . "<li>Feb 22 - Golf Day</li>";
    $events = $events . "<li>Mar 28 - Season Launch</li>";
    $events = $events . "<li>Apr 11 - Past Player Day</li>";
    $events = $events . "<li>Apr 11 - Player Auction</li>";
    $events = $events . "<li>Apr 11 - B Grade Meal</li>";
    $events = $events . "<li>Apr 25 - Aussie Night</li>";
    $events = $events . "<li>May 02 - Under 16s Meal</li>";
    $events = $events . "<li>May 16 - GOLD Round</li>";
    $events = $events . "<li>May 16 - U10s Showdown</li>";
} else if ($expiration_date2 > $today) {
    $events = $events . "<li>Feb 22 - Golf Day</li>";
    $events = $events . "<li>Mar 28 - Season Launch</li>";
    $events = $events . "<li>Apr 11 - Past Player Day</li>";
    $events = $events . "<li>Apr 11 - Player Auction</li>";
    $events = $events . "<li>Apr 11 - B Grade Meal</li>";
    $events = $events . "<li>Apr 25 - Aussie Night</li>";
    $events = $events . "<li>May 02 - Under 16s Meal</li>";
    $events = $events . "<li>May 16 - GOLD Round</li>";
    $events = $events . "<li>May 16 - U10s Showdown</li>";
    $events = $events . "<li>May 16 - U18s Meal</li>";
} else if ($expiration_date3 > $today) {
    $events = $events . "<li>Mar 28 - Season Launch</li>";
    $events = $events . "<li>Apr 11 - Past Player Day</li>";
    $events = $events . "<li>Apr 11 - Player Auction</li>";
    $events = $events . "<li>Apr 11 - B Grade Meal</li>";
    $events = $events . "<li>Apr 25 - Aussie Night</li>";
    $events = $events . "<li>May 02 - Under 16s Meal</li>";
    $events = $events . "<li>May 16 - GOLD Round</li>";
    $events = $events . "<li>May 16 - U10s Showdown</li>";
    $events = $events . "<li>May 16 - U18s Meal</li>";
    $events = $events . "<li>May 30 - Falconians</li>";
} else if ($expiration_date4 > $today) {
    $events = $events . "<li>Apr 11 - Past Player Day</li>";
    $events = $events . "<li>Apr 11 - Player Auction</li>";
    $events = $events . "<li>Apr 11 - B Grade Meal</li>";
    $events = $events . "<li>Apr 25 - Aussie Night</li>";
    $events = $events . "<li>May 02 - Under 16s Meal</li>";
    $events = $events . "<li>May 16 - GOLD Round</li>";
    $events = $events . "<li>May 16 - U10s Showdown</li>";
    $events = $events . "<li>May 16 - U18s Meal</li>";
    $events = $events . "<li>May 30 - Falconians</li>";
    $events = $events . "<li>May 30 - U8s Showdown</li>";
} else if ($expiration_date5 > $today) {
    $events = $events . "<li>Apr 25 - Aussie Night</li>";
    $events = $events . "<li>May 02 - Under 16s Meal</li>";
    $events = $events . "<li>May 16 - GOLD Round</li>";
    $events = $events . "<li>May 16 - U10s Showdown</li>";
    $events = $events . "<li>May 16 - U18s Meal</li>";
    $events = $events . "<li>May 30 - Falconians</li>";
    $events = $events . "<li>May 30 - U8s Showdown</li>";
    $events = $events . "<li>May 30 - U14s Meal</li>";
    $events = $events . "<li>Jun 20 - Falconettes</li>";
    $events = $events . "<li>Jun 20 - Karaoke</li>";
} else if ($expiration_date6 > $today) {
    $events = $events . "<li>May 02 - Under 16s Meal</li>";
    $events = $events . "<li>May 16 - GOLD Round</li>";
    $events = $events . "<li>May 16 - U10s Showdown</li>";
    $events = $events . "<li>May 16 - U18s Meal</li>";
    $events = $events . "<li>May 30 - Falconians</li>";
    $events = $events . "<li>May 30 - U8s Showdown</li>";
    $events = $events . "<li>May 30 - U14s Meal</li>";
    $events = $events . "<li>Jun 20 - Falconettes</li>";
    $events = $events . "<li>Jun 20 - Karaoke</li>";
    $events = $events . "<li>Jun 20 - A Grade Meal</li>";
} else if ($expiration_date7 > $today) {
    $events = $events . "<li>May 16 - GOLD Round</li>";
    $events = $events . "<li>May 16 - U10s Showdown</li>";
    $events = $events . "<li>May 16 - U18s Meal</li>";
    $events = $events . "<li>May 30 - Falconians</li>";
    $events = $events . "<li>May 30 - U8s Showdown</li>";
    $events = $events . "<li>May 30 - U14s Meal</li>";
    $events = $events . "<li>Jun 20 - Falconettes</li>";
    $events = $events . "<li>Jun 20 - Karaoke</li>";
    $events = $events . "<li>Jun 20 - A Grade Meal</li>";
    $events = $events . "<li>Jun 27 - Flaggy Ball</li>";
} else if ($expiration_date8 > $today) {
    $events = $events . "<li>May 30 - Falconians</li>";
    $events = $events . "<li>May 30 - U8s Showdown</li>";
    $events = $events . "<li>May 30 - U14s Meal</li>";
    $events = $events . "<li>Jun 20 - Falconettes</li>";
    $events = $events . "<li>Jun 20 - Karaoke</li>";
    $events = $events . "<li>Jun 20 - A Grade Meal</li>";
    $events = $events . "<li>Jun 27 - Flaggy Ball</li>";
    $events = $events . "<li>Jun 28 - Sunday Pres.</li>";
    $events = $events . "<li>Jul 11 - Bingo Night</li>";
    $events = $events . "<li>Jul 11 - U12s Showdown</li>";
} else if ($expiration_date9 > $today) {
    $events = $events . "<li>Jun 20 - Falconettes</li>";
    $events = $events . "<li>Jun 20 - Karaoke</li>";
    $events = $events . "<li>Jun 20 - A Grade Meal</li>";
    $events = $events . "<li>Jun 27 - Flaggy Ball</li>";
    $events = $events . "<li>Jun 28 - Sunday Pres.</li>";
    $events = $events . "<li>Jul 11 - Bingo Night</li>";
    $events = $events . "<li>Jul 11 - U12s Showdown</li>";
    $events = $events . "<li>Jul 11 - Subbies Meal</li>";
    $events = $events . "<li>Jul 18 - Sponsors Day</li>";
    $events = $events . "<li>Jul 18 - 30 Yr Reunion</li>";
} else if ($expiration_date10 > $today) {
    $events = $events . "<li>Jun 27 - Flaggy Ball</li>";
    $events = $events . "<li>Jun 28 - Sunday Pres.</li>";
    $events = $events . "<li>Jul 11 - Bingo Night</li>";
    $events = $events . "<li>Jul 11 - U12s Showdown</li>";
    $events = $events . "<li>Jul 11 - Subbies Meal</li>";
    $events = $events . "<li>Jul 18 - Sponsors Day</li>";
    $events = $events . "<li>Jul 18 - 30 Yr Reunion</li>";
    $events = $events . "<li>Jul 18 - Meal (T.B.C)</li>";
    $events = $events . "<li>Aug 01 - Flaggy Hotel</li>";
    $events = $events . "<li>Aug 12 - On The Couch</li>";
} else if ($expiration_date11 > $today) {
    $events = $events . "<li>Jul 11 - Bingo Night</li>";
    $events = $events . "<li>Jul 11 - U12s Showdown</li>";
    $events = $events . "<li>Jul 11 - Subbies Meal</li>";
    $events = $events . "<li>Jul 18 - Sponsors Day</li>";
    $events = $events . "<li>Jul 18 - 30 Yr Reunion</li>";
    $events = $events . "<li>Jul 18 - Meal (T.B.C)</li>";
    $events = $events . "<li>Aug 01 - Flaggy Hotel</li>";
    $events = $events . "<li>Aug 12 - On The Couch</li>";
    $events = $events . "<li>Aug 15 - U16s Meal</li>";
    $events = $events . "<li>Aug 22 - U14s Meal</li>";
} else if ($expiration_date12 > $today) {
    $events = $events . "<li>Jul 18 - Sponsors Day</li>";
    $events = $events . "<li>Jul 18 - 30 Yr Reunion</li>";
    $events = $events . "<li>Jul 18 - Meal (T.B.C)</li>";
    $events = $events . "<li>Aug 01 - Flaggy Hotel</li>";
    $events = $events . "<li>Aug 12 - On The Couch</li>";
    $events = $events . "<li>Aug 15 - U16s Meal</li>";
    $events = $events . "<li>Aug 22 - U14s Meal</li>";
    $events = $events . "<li>Aug 29 - Casino Night</li>";
    $events = $events . "<li>Aug 29 - Falconettes Meal</li>";
    $events = $events . "<li>Oct 09 - Senior Pres.</li>";
} else if ($expiration_date13 > $today) {
    $events = $events . "<li>Aug 01 - Flaggy Hotel</li>";
    $events = $events . "<li>Aug 12 - On The Couch</li>";
    $events = $events . "<li>Aug 15 - U16s Meal</li>";
    $events = $events . "<li>Aug 22 - U14s Meal</li>";
    $events = $events . "<li>Aug 29 - Casino Night</li>";
    $events = $events . "<li>Aug 29 - Falconettes Meal</li>";
    $events = $events . "<li>Oct 09 - Senior Pres.</li>";
    $events = $events . "<li>Oct 17 - Club125</li>";
    $events = $events . "<li>Oct 31 - Falconettes Wine</li>";
} else if ($expiration_date14 > $today) {
    $events = $events . "<li>Aug 12 - On The Couch</li>";
    $events = $events . "<li>Aug 15 - U16s Meal</li>";
    $events = $events . "<li>Aug 22 - U14s Meal</li>";
    $events = $events . "<li>Aug 29 - Casino Night</li>";
    $events = $events . "<li>Aug 29 - Falconettes Meal</li>";
    $events = $events . "<li>Oct 09 - Senior Pres.</li>";
    $events = $events . "<li>Oct 17 - Club125</li>";
    $events = $events . "<li>Oct 31 - Falconettes Wine</li>";     
} else if ($expiration_date15 > $today) {
    $events = $events . "<li>Aug 15 - U16s Meal</li>";
    $events = $events . "<li>Aug 22 - U14s Meal</li>";
    $events = $events . "<li>Aug 29 - Casino Night</li>";
    $events = $events . "<li>Aug 29 - Falconettes Meal</li>";
    $events = $events . "<li>Oct 09 - Senior Pres.</li>";
    $events = $events . "<li>Oct 17 - Club125</li>";
    $events = $events . "<li>Oct 31 - Falconettes Wine</li>";
} else if ($expiration_date16 > $today) {
    $events = $events . "<li>Aug 22 - U14s Meal</li>";
    $events = $events . "<li>Aug 29 - Casino Night</li>";
    $events = $events . "<li>Aug 29 - Falconettes Meal</li>";
    $events = $events . "<li>Oct 09 - Senior Pres.</li>";
    $events = $events . "<li>Oct 17 - Club125</li>";
    $events = $events . "<li>Oct 31 - Falconettes Wine</li>";    
} else if ($expiration_date17 > $today) {
    $events = $events . "<li>Aug 29 - Casino Night</li>";
    $events = $events . "<li>Aug 29 - Falconettes Meal</li>";
    $events = $events . "<li>Oct 09 - Senior Pres.</li>";
    $events = $events . "<li>Oct 17 - Club125</li>";
    $events = $events . "<li>Oct 31 - Falconettes Wine</li>";     
} else if ($expiration_date18 > $today) {
    $events = $events . "<li>Oct 09 - Senior Pres.</li>";
    $events = $events . "<li>Oct 17 - Club125</li>";
    $events = $events . "<li>Oct 31 - Falconettes Wine</li>";     
} else if ($expiration_date19 > $today) {
    $events = $events . "<li>Oct 17 - Club125</li>";
    $events = $events . "<li>Oct 31 - Falconettes Wine</li>";  
} else if ($expiration_date20 > $today) {
    $events = $events . "<li>Oct 31 - Falconettes Wine</li>";    
} else if ($expiration_endOfYear > $today) {
     $events = $events . "<li>2015 Season Finished</li>";
}
//Print the html back to the News Page
$events = $events . "<li><a href=../news/calendar_of_events.htm>View Calendar Of Events</a></li></ul>";
echo $events;
?>