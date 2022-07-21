@extends('layout')
@section('content')
<div class="container">
<h3 class="m-2 p-2">ระบบบริหารจัดการสินค้า (PMS:Product Management System)</h3>
</div>
<div class="card-group m-1">
  <div class="card mb-3 m-5 text-light bg-primary bg-gradient  border border-light rounder-5" style="max-width: 18rem;">
    <div class="card-body">
      <h5 class="card-header bg-transparent border-light">การจัดการสินค้า</h5>
      <p class="card-footer bg-transparent border-light"><button class="btn btn-light text-muted"><a href="/products">เข้าใช้งาน</a></button></p>
    </div>
  </div>
  <div class="card text-bg-secondary mb-3 m-5" style="max-width: 18rem;">
 
    <div class="card-body">
      <h5 class="card-title">การจัดการคลังสินค้า</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">เข้าใช้งานระบบ</small></p>
    </div>
  </div>
  <div class="card text-bg-danger mb-3 m-5" style="max-width: 18rem;">

    <div class="card-body">
      <h5 class="card-title">การจัดการขนส่ง</h5>
    <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">เข้าใช้งานระบบ</small></p>

    </div>
  </div>
  <div class="card text-bg-warning mb-3 m-5" style="max-width: 18rem;">

    <div class="card-body">
      <h5 class="card-title">การจัดการผู้ผลิต</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">เข้าใช้งานระบบ</small></p>
    </div>
  </div>
</div>
<div class="card-group m-1">
  <div class="card text-bg-primary mb-3 m-5 border border-light" style="max-width: 18rem;">
    <div class="card-body">
      <h5 class="card-header bg-transparent border-light">กำลังการผลิต</h5>
      <p class="card-text"><small class="text-muted">เข้าใช้งานระบบ</small></p>
    </div>
  </div>
  <div class="card text-bg-secondary mb-3 m-5" style="max-width: 18rem;">
 
    <div class="card-body">
      <h5 class="card-title">การจัดการบัญชีและการเงิน</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">เข้าใช้งานระบบ</small></p>
    </div>
  </div>
  <div class="card text-bg-danger mb-3 m-5" style="max-width: 18rem;">

    <div class="card-body">
      <h5 class="card-title">การจัดการการผลิต</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">เข้าใช้งานระบบ</small></p>
    </div>
  </div>
  <div class="card text-bg-warning mb-3 m-5" style="max-width: 18rem;">

    <div class="card-body">
      <h5 class="card-title">รายงานสรุป</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">เข้าใช้งานระบบ</small></p>
    </div>
  </div>
</div>
@endsection