    <style>
        .header {
            text-align: center;
        }
    </style>
    <div>
        <div class="container">
            <div class="header">
                <h3 class="h3">อุปกรณ์</h3>
            </div>
            <!-- <div class="image-container">
                <div>
                    <img src="../img/device/microphone.jpg" alt="table_U" width="450" height="450">
                    <div class="text-under-image">ไมค์อนุกรม</div>
                    <div class="text-under-image">
                    </div>
                </div>
                <div>
                    <img src="../img/device/เครื่องฉายภาพ.png" alt="table_study" alt="table_U" width="450" height="450">
                    <div class="text-under-image">เครื่องฉายภาพ</div>
                    <div class="text-under-image">
                    </div>
                </div>
                <div>
                    <img src="../img/device/ไมค์โครโฟนไร้สาย.jpg" alt="table_study" alt="table_U" width="450" height="450">
                    <div class="text-under-image">ไมค์โครโฟนไร้สาย</div>
                    <div class="text-under-image">
                    </div>
                </div>
                <div>
                    <img src="../img/device/โน้ตบุ๊ค.jpg" alt="table_study" alt="table_U" width="450" height="450">
                    <div class="text-under-image">โน้ตบุ๊ค</div>
                    <div class="text-under-image">
                    </div>
                </div>
            </div> -->
            <form>
                <div class="row">
                    <div class="col-3">
                        <img src="../img/device/microphone.jpg" alt="table_U" width="200" height="200">
                        <br>
                        <input type="checkbox" id="serial_mic" name="serial_mic" value="serial_mic">
                        <label for="vehicle1">ไมค์อนุกรม</label>
                    </div>
                    <div class="col-3">
                        <img src="../img/device/เครื่องฉายภาพ.png" alt="table_study" alt="table_U" width="200" height="200">
                        <br>
                        <input type="checkbox" id="Projector" name="Projector" value="Projector">
                        <label for="vehicle2">เครื่องฉายภาพ</label>
                    </div>
                    <div class="col-3">
                        <img src="../img/device/ไมค์โครโฟนไร้สาย.jpg" alt="table_study" alt="table_U" width="200" height="200">
                        <br>
                        <input type="checkbox" id="wireless_microphone" name="wireless_microphone" value="wireless_microphone">
                        <label for="vehicle3">ไมค์โครโฟนไร้สาย</label>
                    </div>
                    <div class="col-3">
                        <img src="../img/device/โน้ตบุ๊ค.jpg" alt="table_study" alt="table_U" width="200" height="200">
                        <br>
                        <input type="checkbox" id="computer_notebook" name="computer_notebook" value="computer_notebook">
                        <label for="vehicle3">โน้ตบุ๊ค</label>
                    </div>
                </div>
                <button type="button" class="btn-add btn-primary" data-bs-toggle="modal" data-bs-target="#myModal1">
                    ตกลง
                </button>
            </form>
        </div>
    </div>