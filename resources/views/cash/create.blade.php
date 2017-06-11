@extends('layouts.app')

@section('content')
  <div class="container">
      <h1>My Create</h1>

      <form method="post" action="/cash">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="method">วิธีการโอน</label>
            <input type="text" class="form-control" name="method" id="method" placeholder="ATM, Internet Banking">
        </div>
        <div class="form-group">
            <label for="fromBank">โอนจากธนาคาร</label>
            <input type="text" class="form-control" name="fromBank" id="fromBank" placeholder="Bank">
        </div>
        <div class="form-group">
            <label for="fromAccountNumber">โอนจากเลขบัญชี</label>
            <input type="text" class="form-control" name="fromAccountNumber" id="fromAccountNumber" placeholder="AccountNumber">
        </div>
        <div class="form-group">
            <label for="fromAccountName">โอนจากชื่อบัญชี</label>
            <input type="text" class="form-control" name="fromAccountNumber" id="fromAccountNumber" placeholder="AccountName">
        </div>               
        <div class="form-group">
            <label for="dateadd">Date</label>
            <input class="form-control" type="text" id="datepicker" placeholder="date">
        </div>
        <div class="form-group">
            <label for="transferTime">เวลาโอน</label>
            <input class="form-control" type="text" id="transferTime" placeholder="Time">
        </div>
        <div class="form-group">
            <label for="toBank">โอนเข้าธนาคาร</label>
            <input class="form-control" type="text" id="toBank" placeholder="infoBank">
        </div>
        <div class="form-group">
            <label for="toAccountNumber">โอนเข้าเลขบัญชี</label>
            <input class="form-control" type="text" id="toAccountNumber" placeholder="infoNumber">
        </div>
        <div class="form-group">
            <label for="toAccountName">โอนเข้าชื่อบัญชี</label>
            <input class="form-control" type="text" id="toAccountName" placeholder="infotName">
        </div>
        <div class="form-group">
            <label for="amount">ยอดเงิน</label>
            <input class="form-control" type="text" id="amount" placeholder="momny">
        </div>
        <div class="form-group">
            <label for="transferStatus">สถานะโอน</label>
            <input class="form-control" type="text" id="transferStatus" placeholder="YES,NO">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

@endsection
