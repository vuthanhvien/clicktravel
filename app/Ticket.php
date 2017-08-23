<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
   	protected $table = 'ticket';

   	public function get_ticket_info($id, $type, $count = 1, $muti = false){

        $tickets = DB::table('ticket')
        ->Where(function($query) use ($count, $type, $id, $muti){
            if($count == 1){
                    $query->where($type, $id);
            }else{
                for ($i=0; $i < $count; $i++) { 
                    $query->where($type[$i], $id[$i]);
                }
            }
        })->get();
        if($tickets){
            if($muti){
                $output = array();
                foreach ($tickets as $key => $value) {
                    $output[] = $this->format($value);
                }
                return $output;
            }else{
                if($tickets->count() > 0){
                    $ticket = $this->format($tickets[0]);
                    return $ticket;
                }else{
                    return false;
                }
            }
        }else{
            return false;
        }
    }
    private function format($ticket){
        $passengerStr = $ticket->passenger;
        $passengerArr = explode(',', $passengerStr);

        $passengers = array();
        $adult = 0;
        $children = 0;
        $baby = 0;
        foreach ($passengerArr as $id) {
            $passenger = DB::table('passenger')->where('id', $id)->first();
            if($passenger->type == 'adult'){
                $adult = $adult + 1;
            }
            if($passenger->type == 'children'){
                $children = $children + 1;
            }
            if($passenger->type == 'baby'){
                $baby = $baby + 1;
            }
            $passengers[] = $passenger;
        }   

        $flightStr = $ticket->flight_detail;
        $flightArr = explode(',', $flightStr);

        $type_flight = 'Một chiều';
        $flights = array();
        foreach ($flightArr as  $flight) {
            $flight = DB::table('flight')->where('id', $flight)->first();

            $flight->turn = json_decode($flight->turn);
            if(is_array($flight->turn->AvailFlt)){
            $flight->turn->AvailFlt = $flight->turn->AvailFlt;
            }else{
            $flight->turn->AvailFlt = array($flight->turn->AvailFlt);
            }
            $flights[] = $flight;

        } 
        $ticket->number = $adult + $children + $baby . ' hành khách';
        $ticket->passengers = $passengers;
        $ticket->flights = $flights;
        $ticket->type_flight = $type_flight;
        return $ticket;
    }
}
