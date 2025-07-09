<?php

namespace App\Livewire\Admin\Booking;

use App\Models\Booking;
use Livewire\Component;
use Livewire\WithPagination;

class ConfirmationTable extends Component
{
    use WithPagination;

    public function confirmBooking($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update([
            'status' => 'Sedang Dikerjakan'
        ]);

        return redirect()->route('booking.process')->with('success','Berhasil Konfirmasi Booking');
    }
     public function cancel($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update([
            'status' => 'Dibatalkan'
        ]);

        return redirect()->route('booking.cancel')->with('success','Berhasil Konfirmasi Booking');
    }
    public function render()
    {
        return view('livewire.admin.booking.confirmation-table',[
            'booking' => Booking::where('status','Menunggu Konfirmasi')->paginate()
        ])->layout('components.layouts.app');
    }
}
