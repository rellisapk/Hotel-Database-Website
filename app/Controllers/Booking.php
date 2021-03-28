<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Booking_model;
use App\Models\BookviewModel;
use App\Models\Customer_model;
use App\Models\Employee_model;
use App\Models\Room_model;
use TCPDF;

class Booking extends Controller
{
    public function index()
    {
        $model = new BookviewModel();
        $data['Booking'] = $model->getBookview();
        $data['title'] = 'Booking Data';
        echo view('Admin/Booking/booking_view', $data);
    }

    public function add_new()
    {
        $customer = new Customer_model();
        $data['customer'] = $customer->getCustomer();
        $room = new Room_model();
        $data['room'] = $room->getRoom();
        $employee = new Employee_model();
        $data['employee'] = $employee->getEmployee();
        $data['title'] = 'Add New Booking';
        echo view('Admin/Booking/add_booking', $data);
    }

    public function save()
    {
        $model = new Booking_model();
        $data = array(
            'id_customer'  => $this->request->getPost('id_customer'),
            'id_kamar' => $this->request->getPost('id_kamar'),
            'tgl_checkin' => $this->request->getPost('tgl_checkin'),
            'tgl_checkout' => $this->request->getPost('tgl_checkout'),
            'id_pegawai' => $this->request->getPost('id_pegawai'),
        );
        $model->saveBooking($data);
        return redirect()->to(base_url("Booking"));
    }

    public function edit($id_Booking)
    {
        $model = new Booking_model();
        $data['Booking'] = $model->getBooking($id_Booking)->getRow();
        $customer = new Customer_model();
        $data['customer'] = $customer->getCustomer();
        $room = new Room_model();
        $data['room'] = $room->getRoom();
        $employee = new Employee_model();
        $data['employee'] = $employee->getEmployee();
        $data['title'] = 'Edit Booking';
        echo view('Admin/Booking/edit_booking', $data);
    }

    public function update()
    {
        $model = new Booking_model();
        $id_Booking = $this->request->getPost('id_reservasi');
        $data = array(
            'id_customer'  => $this->request->getPost('id_customer'),
            'id_kamar' => $this->request->getPost('id_kamar'),
            'tgl_checkin' => $this->request->getPost('tgl_checkin'),
            'tgl_checkout' => $this->request->getPost('tgl_checkout'),
            'id_pegawai' => $this->request->getPost('id_pegawai'),
        );
        $model->updateBooking($data, $id_Booking);
        return redirect()->to(base_url("booking"));
    }

    public function delete($id_Booking)
    {
        $model = new Booking_model();
        $data['Booking'] = $model->getBooking($id_Booking)->getRow();
        $model->deleteBooking($id_Booking);
        return redirect()->to(base_url("booking"));
    }

    public function invoice($id_Booking)
    {
        $booking = new BookviewModel();
        $data['Booking'] = $booking->getBookview($id_Booking)->getRow();
        $customer = new Customer_model();
        $data['customer'] = $customer->getCustomer($data['Booking']->id_customer)->getRow();
        $room = new Room_model();
        $data['room'] = $room->getRoom($data['Booking']->id_kamar)->getRow();

        $html = view ('Admin/Booking/invoice', $data);

        $pdf = new TCPDF ('L', PDF_UNIT, 'A5', true, 'UTF-8', false);

        $pdf->setCreator(PDF_CREATOR);
        $pdf->setAuthor('Saturnus Hotels');
        $pdf->setTitle('Transaction Payment');
        $pdf->setSubject('Transaction');

        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->addPage();

        $pdf->writeHTML ($html, true, false, true, false, '');

        $this->response->setContentType('application/pdf');

        $pdf->Output('transaksi.pdf', 'I');
    }
}
