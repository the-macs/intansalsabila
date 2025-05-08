<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    /**
     * For Showing page Airline Ticket
     *
     * @return void
     */
    public function indexAirline()
    {
        $images = [
            'sriwijayaair.png',
            'airasia.png',
            'etihad.png',
            'garuda.png',
            'lionair.png',
            'oman.png',
            'qatar.png',
            'saudia.jpg',
        ];
        return view('pages.services.airline-ticket', compact('images'));
    }

    /**
     * For Showing page Hotel Voucher
     *
     * @return void
     */
    public function indexHotelVoucher()
    {
        $images = [
            'ibis.png',
            'accor.png',
            'crowne.png',
            'intercontinental.png',
            'marriott.png',
            'sheraton.png',
        ];
        return view('pages.services.hotel-voucher', compact('images'));
    }

    /**
     * For Showing page Travel Document
     *
     * @return void
     */
    public function indexTravelDocument()
    {
        return view('pages.services.travel-document');
    }
}
