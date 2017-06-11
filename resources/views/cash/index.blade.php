@extends('layouts.app')

@section('content')
  <div class="container">
    <br>
      <div class="modal-footer">
      <h1>Cashing</h1>
      <a href="cash/create" type="Text" class="btn btn-primary">create</a>
      </div>
    </br>
      <table class="table table-bordered">
        <tr>
          <td>ชื่อลูกค้า</th>
          <th>วิธีการโอน</th>
          <th>โอนจากธนาคาร</th>
          <th>โอนจากเลขบัญชี</th>
          <th>โอนจากชื่อบัญชี</th>
          <th>วันที่โอน</th>
          <th>เวลาโอน</th>
          <th>โอนเข้าธนาคาร</th>
          <th>โอนเข้าเลขบัญชี</th>
          <th>โอนเข้าชื่อบัญชี</th>
          <th>ยอดเงิน</th>
          <th>สถานะโอน</th>
        </tr>
        <tr>
          <td>id</td>
          <td>method</td>
          <td>fromBank</td>
          <td>fromAccountNumber</td>
          <td>fromAccountName</td>
          <td>transferDate</td>
          <td>transferTime</td>
          <td>toBank</td>
          <td>toAccountNumber</td>
          <td>toAccountName</td>
          <td>amount</td>
          <td>transferStatus</td>
        </tr>                            
      </table>      
  </div>
@endsection
