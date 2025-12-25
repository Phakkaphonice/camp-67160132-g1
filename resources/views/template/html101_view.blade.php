@extends('template.default')
@section('header','Form')

@section('content')
<form>
    <div class="d-flex align-items-center gap-2 mt-3">
        <label style="width: 90px;">ชื่อ :</label>
        <input type="text" value="{{ $fname }}" readonly class="form-control">
    </div>

     <div class="d-flex align-items-center gap-2 mt-3">
        <label style="width: 90px;">นามสกุล :</label>
        <input type="text" value="{{ $lname }}" readonly class="form-control">
    </div>

    <div class="d-flex align-items-center gap-2 mt-3">
        <label style="width: 90px;">วันเกิด :</label>
        <input type="text" value="{{ $day }}" readonly class="form-control">
    </div>

    <div class="d-flex align-items-center gap-2 mt-3">
        <label style="width: 90px;">อายุ :</label>
        <input type="text" value="{{ $age }}" readonly class="form-control">
    </div>

    <div class="d-flex align-items-center gap-2 mt-3">
        <label style="width: 90px;">เพศ :</label>
        <input type="text" value="{{ $sex }}" readonly class="form-control">
    </div>
    
    <div class="d-flex align-items-center gap-2 mt-3">
        <label style="width: 90px;">ที่อยู่ :</label>
        <input type="text" value="{{ $w3review }}" readonly class="form-control">
    </div>

    <div class="d-flex align-items-center gap-2 mt-3">
        <label style="width: 90px;">สีที่ชอบ :</label>
        <input type="text" value="{{ $favoritecolo }}" readonly class="form-control">
    </div>

    <div class="d-flex align-items-center gap-2 mt-3">
        <label style="width: 90px;">เเนวเพลงที่ชอบ :</label>
        <input type="text" value="{{ $music }}" readonly class="form-control">
    </div>


</form>
@endsection
