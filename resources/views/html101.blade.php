@extends('template.default')
@section('content')

<h2 class="row mt-5 col-sm-12 " >Workshop #HTML - FORM </h2>

            <form>
                <div class="row mt-5">
                    <div class="col-sm-12 col-md-4">
                        <label for="fname">ชื่อ</label>
                    </div>
                    <div class="col">
                        <input id="fname" class="form-control ">
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดระบุชื่อ
                        </div>
                    </div>
                </div>


                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="lname">นามสกุล</label>
                    </div>
                    <div class="col">
                        <input id="lname" class="form-control" >
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดระบุนามสกุล
                        </div>
                    </div>
                </div>



                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="day">วัน/เดือน/ปีเกิด</label>
                    </div>
                    <div class="col">
                        <input id= "day" type="date" class="form-control">
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดระบุ วัน/เดือน/ปีเกิด
                        </div>
                    </div>
                </div>



                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="age">อายุ</label>
                    </div>
                    <div class="col">
                        <input id="age" class="form-control" >
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดระบุอายุ
                        </div>
                    </div>
                </div>



                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="date">เพศ</label>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-wrap gap-3">
                        <div class="form-check form-check-inline">
                        <input type="radio" id="man" name="sex" value="Man" class="form-check-input">
                        <label class="form-check-label" for="man">ชาย</label>
                        </div>

                        <div class="form-check form-check-inline">
                        <input type="radio" id="woman" name="sex" value="Woman" class="form-check-input" >
                        <label class="form-check-label" for="woman">หญิง</label>
                        </div>

                        <div class="form-check form-check-inline">
                        <input type="radio" id="lgbt" name="sex" value="LGBT" class="form-check-input" >
                        <label class="form-check-label" for="lgbt">ไม่ระบุ</label>
                        </div>
                    </div>

                        <div class="valid-feedback " id="sex-success">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback" id="sex-error">
                            โปรดเลือกเพศ
                        </div>
                    </div>
                </div>



                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4 ">
                        <label for="myfile">รูป</label>
                    </div>
                    <div class="col ">
                        <input type="file" id="myfile" name="myfile" class="form-control">
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดเลือกรูป
                        </div>
                    </div>
                </div>



                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="Map">ที่อยู่</label>
                    </div>
                    <div class="col">
                        <textarea id="home" name="w3review" rows="4" cols="95" class="form-control" ></textarea>
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดระบุที่อยู่
                        </div>
                    </div>
                </div>



                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="favoritecolor">สีที่ชอบ</label>
                    </div>
                    <div class="col">
                        <select id='favoritecolor'class="form-select col-sm-12 col-md- form-control">
                        <option value="">เลือกสีที่ชอบ</option>
                        <option value="red">เเดง</option>
                        <option value="blue">น้ำเงิน</option>
                        <option value="black">ดำ</option>
                        <option value="while">ขาว</option>
                        </select>
                        <div class="invalid-feedback">โปรดระบุสีที่ชอบ</div>
                    </div>
                </div>



                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label>แนวเพลงที่ชอบ</label>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-wrap gap-3">
                             <div class="form-check form-check-inline">
                            <input type="radio" id="mysong1" name="music" value="1" class="form-check-input">
                            <label class="form-check-label" for="mysong1">เพื่อชีวิต</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="radio" id="mysong2" name="music" value="2" class="form-check-input">
                            <label class="form-check-label" for="mysong2">สากล</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="radio" id="mysong3" name="music" value="3" class="form-check-input">
                            <label class="form-check-label" for="mysong3">จี๋หอย</label>
                        </div>
                        </div>

                        <div class="valid-feedback" id="music-success">ถูกต้อง</div>
                        <div class="invalid-feedback" id="music-error">โปรดเลือกแนวเพลง</div>
                    </div>
                </div>

                 <div class="row mt-3">
                     <div class="col-sm-12 col-md-4"><div class="form-check">
                        <input id="consent_check" type="checkbox" class="form-check-input">
                        <label for="consent_check"> ยินยอมให้เก็บข้อมูล </label>
                        <div class="valid-feedback">ขอบคุณ</div>
                        <div class="invalid-feedback">โปรดติ๊กยินยอมเพื่อดำเนินการต่อ</div>
                        </div>
                    </div>
                </div>



                 <div class="row mt-3" >
                    <div class="col-sm-12 col-md-4">
                        <button class="btn btn-light" type="reset">Reset</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-success" onclick="clickMe()" type="button">Submit</button>
                    </div>
                </div>
            </form>

        <style>
            h1 {color: white;}
        </style>
        <style>
            h2 {color: gray;}
        </style>

@endsection

@push('scripts')
    <script>

        let clickMe = function(){
            let fname = document.getElementById('fname')
            let lname = document.getElementById('lname')
            let day = document.getElementById('day')
            let age = document.getElementById('age')
            let home = document.getElementById('home')
            let sexInputs = document.getElementsByName('sex');
            let isSexChecked = document.querySelector('input[name="sex"]:checked');
            let sexError = document.getElementById('sex-error');
            let sexSuccess = document.getElementById('sex-success');
            let myfile = document.getElementById('myfile');
            let favoritecolor = document.getElementById('favoritecolor');
            let musicInputs = document.getElementsByName('music');
            let isMusicChecked = document.querySelector('input[name="music"]:checked');
            let musicError = document.getElementById('music-error');
            let musicSuccess = document.getElementById('music-success');
            let consent = document.getElementById('consent_check');





          if(fname.value == ""){
            fname.classList.remove('is-valid')
            fname.classList.add('is-invalid')
          } else{
            fname.classList.remove('is-invalid')
            fname.classList.add('is-valid')
          }

        //นามสกุล
          if(lname.value == ""){
            lname.classList.remove('is-valid')
            lname.classList.add('is-invalid')
          } else{
            lname.classList.remove('is-invalid')
            lname.classList.add('is-valid')
          }

        //วันเกิด
          if(day.value == ""){
            day.classList.remove('is-valid')
            day.classList.add('is-invalid')
          } else{
            day.classList.remove('is-invalid')
            day.classList.add('is-valid')
        }

        //อายุ
          if(age.value == ""){
            age.classList.remove('is-valid')
            age.classList.add('is-invalid')
          } else{
            age.classList.remove('is-invalid')
            age.classList.add('is-valid')
        }

        //ที่อยู่
          if(home.value == ""){
            home.classList.remove('is-valid')
            home.classList.add('is-invalid')
          } else{
            home.classList.remove('is-invalid')
            home.classList.add('is-valid')
        }

        //เพศ
       if (isSexChecked == null) {
        sexInputs.forEach(input => input.classList.add('is-invalid'));
        sexError.style.setProperty('display', 'block', 'important');
        sexSuccess.style.setProperty('display', 'none', 'important');
        } else {
        sexInputs.forEach(input => {
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
            });
        sexError.style.setProperty('display', 'none', 'important');
        sexSuccess.style.setProperty('display', 'block', 'important');
        }

        //รูป
        if (myfile.value == "") {
            myfile.classList.remove('is-valid');
            myfile.classList.add('is-invalid');
        } else {
            myfile.classList.remove('is-invalid');
            myfile.classList.add('is-valid');
        }

        //สี
        if (favoritecolor.value == "") {
            favoritecolor.classList.remove('is-valid');
            favoritecolor.classList.add('is-invalid');
        } else {
            favoritecolor.classList.remove('is-invalid');
            favoritecolor.classList.add('is-valid');
        }


        // เพลง
        if (isMusicChecked == null) {
            musicError.style.setProperty('display', 'block', 'important');
            musicSuccess.style.setProperty('display', 'none', 'important');
        } else {
            musicError.style.setProperty('display', 'none', 'important');
            musicSuccess.style.setProperty('display', 'block', 'important');
        }

        //เช็ค
        if (!consent.checked) {
            consent.classList.remove('is-valid');
            consent.classList.add('is-invalid');
        } else {
            consent.classList.remove('is-invalid');
            consent.classList.add('is-valid');
        }







        let myfunc = (callback)=>{
            callback("in callback")
        }

        callMe = (param)=>{
            console.log(param)
        }
    }



    </script>
@endpush
