<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Airline;
use App\Models\Hotel;
use App\Models\TravelDocument;

class ServiceController extends Controller
{
    /**
     * For Showing page Airline Ticket
     *
     * @return void
     */
    public function indexAirline()
    {
        $banner = Banner::where('slug', 'service-airline')->firstOrFail();
        $airlines = Airline::orderBy('sort_order')->get();

        return view('pages.services.airline-ticket', compact('banner', 'airlines'));
    }

    /**
     * For Showing page Hotel
     *
     * @return void
     */
    public function indexHotelVoucher()
    {
        $banner = Banner::where('slug', 'service-hotel')->firstOrFail();
        $hotels = Hotel::orderBy('sort_order')->get();

        return view('pages.services.hotel-voucher', compact('banner', 'hotels'));
    }

    /**
     * For Showing page Travel Document
     *
     * @return void
     */
    public function indexTravelDocument()
    {
        $banner = Banner::where('slug', 'service-hotel')->firstOrFail();
        $travel_document = TravelDocument::firstOrFail();

        return view('pages.services.travel-document', compact('banner', 'travel_document'));
    }
}
