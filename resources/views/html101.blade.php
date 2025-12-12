@extends('template.default')
@section('content')

<h2 class="row mt-5 col-sm-12 " >Workshop #HTML - FORM</h2>

            <form>
                <div class="row mt-5">
                    <div class="col-sm-12 col-md-4">
                        <label for="fname">ชื่อ</label>
                    </div>
                    <div class="col">
                        <input id="fname" class="form-control">
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดระบุชื่อ
                        </div>
                    </div>
                </div>
            </form>

            <form >
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="fname2">นามสกุล</label>
                    </div>
                    <div class="col">
                        <input id="fname2" class="form-control" >
                    </div>
                </div>
            </form>

            <form>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="date">วัน/เดือน/ปีเกิด</label>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control">
                    </div>
                </div>
            </form>

            <form >
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="age">อายุ</label>
                    </div>
                    <div class="col">
                        <input id="age" class="form-control" >
                    </div>
                </div>
            </form>

            <form>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="date">เพศ</label>
                    </div>
                    <div class="col">
                        <input type="radio" id="man" name="sex" value="Man">
                        <label for="sex">ชาย</label>

                        <input type="radio" id="woman" name="sex" value="Woman">
                        <label for="sex">หญิง</label>

                        <input type="radio" id="lgbt" name="sex" value="LGBT">
                        <label for="sex">ไม่ระบุ</label>
                    </div>
                </div>
            </form>

            <form>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="photo">รูป</label>
                    </div>
                    <div class="col">
                        <input type="file" id="myfile" name="myfile">
                    </div>
                </div>
            </form>

            <form >
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="Map">ที่อยู่</label>
                    </div>
                    <div class="col">
                        <textarea id="w3review" name="w3review" rows="4" cols="95" class="form-control" ></textarea>
                    </div>
                </div>
            </form>

            <form >
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="color">สีที่ชอบ</label>
                    </div>
                    <div class="col">
                        <select class="form-select" cla>
                        <option value="red">เเดง</option>
                        <option value="blue">น้ำเงิน</option>
                        <option value="black">ดำ</option>
                        <option value="while">ขาว</option>
                        </select>
                    </div>
                </div>
            </form>

             <form >
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="song">เเนวเพลงที่ชอบ</label>
                    </div>
                    <div class="col">
                        <input type="radio" id="mysong1" name="music" value="1">
                        <label for="sex">เพื่อชีวิต</label>

                        <input type="radio" id="mysong2" name="music" value="1">
                        <label for="sex">ลูกทุ่ง</label>

                        <input type="radio" id="mysong3" name="music" value="1">
                        <label for="sex">อื่นๆ</label>
                    </div>
                </div>
            </form>

            <form>
             <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
             <label for="vehicle1">ยินยอมให้เก็บข้อมูล</label><br>
            </form>


            <form>
                 <div class="row mt-3" >
                    <div class="col-sm-12 col-md-4">
                        <button class="btn btn-light" type="reset">Reset</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-success" type="button">Submit</button>
                    </div>
                </div>
            </form>

        <style>
            h1 {color: red;}
        </style>
        <style>
            h2 {color: gray;}
        </style>

@endsection

@push('scripts')
    <script>
        let clickMe = function(){
           let fname = document.getElementById('fname')
        //    fname.value = "from ClickMe"
        //    console.log(fname.value)

          if(fname.value == ""){
            fname.classList.remove('is-valid')
            fname.classList.add('is-invalid')
          } else{
            fname.classList.remove('is-invalid')
            fname.classList.add('is-valid')
          }
        }

        let myfunc = (callback)=>{
            callback("in callback")
        }

        callMe = (param)=>{
            console.log(param)
        }

        myfunc(callMe)



       let myvar1 = 1
       let myvar2 = "1"
       myvar2 = parseInt(myvar2)

       console.log(myvar2+myvar1+"\n\n\n\nทดสอบ")
       console.log(1=="1")
    </script>
@endpush
