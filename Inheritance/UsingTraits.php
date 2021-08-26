<?php
trait Theatre
{
    function theatres()
    {
        echo "Available Theatres:\n ";
        $theatreNames=array("PGR","PVR","PVP");
        print_r($theatreNames);
    }
}
trait Ticket
{
    function ticketPrice()
    {
        echo "Ticket Prices:\n ";
        $prices = array("PGR" => "115","PVR"=>"255","PVP"=>"300");
        print_r($prices);
    }
}

class Shows
{
    use Theatre;
    use Ticket;
    function numOfShows()
    {
        echo "Number of shows:\n ";
        $shows = array("PGR" => "5","PVR"=>"3","PVP"=>"4");
        print_r($shows);
    }
}

$testTrait = new Shows();
$testTrait -> theatres();
$testTrait -> ticketPrice();
$testTrait -> numOfShows();
?>
