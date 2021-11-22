<body>

    Ikramullah Qayyumi<br>
    Ikram<br>
    05026201103<p><br>


    <span style="font-size:42px;">Form Input Peminjaman Buku</span>
    <form action="https://www.youtube.com/watch?v=dQw4w9WgXcQ" onsubmit="return validationForm();" class="form-horizontal"name="registration" method="post">
        <div class="form-group row">
            <label class="control-label col-sm-1" for="judul">Judul Buku:</label>

            <div class="col-sm-3" >
                <input class="form-control" name="judul" type="text" id="judul" minlength="10" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-1" for="no">No Buku:</label>
            <div class="col-sm-3">
                <input class="form-control" type="text" name="no" pattern="[0-9]{5}" minlength="5" size="5" maxlength="5"  id="no" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-1" for="jenis">Jenis Peminjaman:</label>
            <div class="col-sm-3">
                <input list="jenis" name="jenis"  required >
                 <datalist id="jenis">
                     <option value ="Biasa">
                     <option value ="Kilat">
                     <option value ="Lama">
                 </datalist>
                </input>
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-1" for="tanggal">Tanggal Peminjaman:</label>
            <div class="col-sm-3">
                <input class="form-control" name="dateControl" type="date" id="tanggal" required>
            </div>
        </div>


        <div class="button form-group">
            <div class="container">
            <button type="submit" class="btn btn-info" style="background-color:blue">Simpan</button>
            <button type="reset" class="btn btn-info" style="background-color:green">Reset</button>
        </div>
        </div>

    </form>


</body>
