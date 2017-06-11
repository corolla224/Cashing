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
        @foreach($cashes as $cash)
        <tr>
          <td>{{ $cash->id }}</td>
          <td>{{ $cash->method }}</td>
          <td>{{ $cash->fromBank }}</td>
          <td>{{ $cash->fromAccountNumber }}</td>
          <td>{{ $cash->fromAccountName }}</td>
          <td>{{ $cash->transferDate }}</td>
          <td>{{ $cash->transferTime }}</td>
          <td>{{ $cash->toBank }}</td>
          <td>{{ $cash->toAccountNumber }}</td>
          <td>{{ $cash->toAccountName }}</td>
          <td>{{ $cash->amount }}</td>
          <td>{{ $cash->transferStatus }}</td>
        </tr>
        @endforeach                            
      </table>      
  </div>
@endsection
