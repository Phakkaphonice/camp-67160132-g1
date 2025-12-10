<!-- file : resources/views/html101.blade.php -->
 <!DOCTYPE html>
 <html>
    <head>
        <title>ส่วนหัว HTML</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Sarabun", sans-serif;
            }
        </style>
    </head>
    <body>
        <div class=" container mt-3">
            <h1>Workshop #HTML - FORM</h1>
            <form>
                <div class="row mt-5">
                    <div class="col-sm-12 col-md-4">
                        <label for="fname">ชื่อ</label>
                    </div>
                    <div class="col">
                        <input id="fname" class="form-control">
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
                        <select class="form-select">
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
                        <input type="reset" value="Reset"><br>
                    </div>
                    <div class="col">
                        <input type="submit" value="Submit" ><br>
                    </div>
                </div>
            </form>


    
        </div>
    
        <style>
            h1 {color: red;}
        </style>
    </body>
</html>