<?php

namespace App\Http\Controllers;

use App\Models\EventBooking;
use Illuminate\Http\Request;
use App\Mail\BookingSuccessfulMail;
use Illuminate\Support\Facades\Mail;

class EventBookingController extends Controller
{
    //

    public function createBooking(Request $request)
    {

        // return $request->all();
        $booking = EventBooking::create([
            'surname' => $request->surname,
            'fname' => $request->fname,
            'middlename' => $request->middlename,
            'phone' => $request->phone,
            'email' => $request->email,
            'institutionname' => $request->institutionname,
            'address' => $request->address,
            'currentposition' => $request->currentposition,
            'gender' => $request->gender,
            'reservation_code' => 'CNW-2023-' . rand(1000, 99999)
        ]);

        $data = [
            'fullname' => $booking->surname . ' ' . $booking->fname . ' ' . $booking->middlename,
            'reservation_code' => $booking->reservation_code,
            'phone' => $booking->phone,
            'email' => $booking->email,
            'institutionname' => $booking->institutionname,
            'address' => $booking->address,
            'currentposition' => $booking->currentposition,
            'gender' => $booking->gender,

        ];

        try {
            //code...

            Mail::to('diconconsult@gmail.com')->send(new BookingSuccessfulMail($data));

            // Mail::to($booking->email)->send(new BookingSuccessfulMail($data));
        } catch (\Throwable $th) {
            //throw $th;
        }

        return back()->with('msg', 'Booking successful');
    }
}
