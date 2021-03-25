<!DOCTYPE html>
<html>
    <head>
        <title>Open Recruitment SEMA FTI 2020</title>
        <style>
            html, body {
                min-height: 100%;
            }
            body, div, form, input, select, p { 
                padding: 0;
                margin: 0;
                outline: none;
                font-family: Roboto, Arial, sans-serif;
                font-size: 14px;
                color: #666;
                line-height: 22px;
            }
            h1 {
                position: absolute;
                margin: 0;
                font-size: 50px;
                color: #fff;
                z-index: 2;
            }
            p.top-info {
                margin: 10px 0;
            }
            .testbox {
                display: flex;
                justify-content: center;
                align-items: center;
                height: inherit;
                padding: 20px;
            }
            .banner {
                position: relative;
                height: 250px;
                background-image: url("poster\ oprec\ sema\ v2.png");
                background-size: cover;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
            }
            .banner::after {
                content: "";
                background-color: rgba(36, 9, 9, 0.685); 
                position: absolute;
                width: 100%;
                height: 100%;
            }
            form {
                width: 100%;
                padding: 20px;
                border-radius: 6px;
                background: #fff;
                box-shadow: 0 0 10px 0 #e48269; 
            }
            input, select, textarea {
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 3px;
            }
            input {
                width: calc(100% - 10px);
                padding: 5px;
            }
            input[type="date"] {
                padding: 4px 5px;
            }
            select {
                width: 100%;
                padding: 7px 0;
                background: transparent;
            }
            .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
                color: #c9441c;
            }
            .item input:hover, .item select:hover {
                border: 1px solid transparent;
                box-shadow: 0 0 6px 0 #c9441c;
                color: #c9441c;
            }
            .item {
                position: relative;
                margin: 10px 0;
            }
            .item i {
                position: absolute;
                font-size: 20px;
                color: #a9a9a9;
                right: 2%;
                top: 30px;
                z-index: 1;
            }
            span.required {
                margin-left: 0;
                color: red;
            }
            .data-item, .contact-item {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }
            .name-item input {
                width: calc(100% - 20px);
            }  
            .contact-item .item, .data-item .item, .question {
                width: calc(50% - 8px);
            }
            .contact-item input, .data-item input, .question input[type=radio] {
                width: calc(100% - 12px);
            }
            .question span {
                margin-left: 30px;
            }
            input[type=radio] {
                display: none;
            }
            label.radio {
                position: relative;
                display: inline-block;
                margin: 5px 20px 15px 0;
                cursor: pointer;
            }
            input[type=radio]:checked + label:before, label.radio:hover:before {
                border: 2px solid #c9441c;
            }
            input[type=radio]:checked + label:after {
                opacity: 1;
                width: calc(100% - 12px);
            }
            label.radio:before {
                content: "";
                position: absolute;
                left: 0;
                width: 17px;
                height: 17px;
                border-radius: 50%;
                border: 2px solid #ccc;
            }
            label.radio:after {
                content: "";
                position: absolute;
                top: 6px;
                left: 5px;
                width: 8px;
                height: 4px;
                border: 3px solid #c9441c;
                border-top: none;
                border-right: none;
                transform: rotate(-45deg);
                opacity: 0;
            }
            .btnSubmit {
                margin-top: 10px;
                text-align: center;
            }
            button {
                width: auto;
                padding: 10px;
                border: none;
                border-radius: 5px; 
                background: #c9441c;
                font-size: 16px;
                font-weight: 700;
                color: #fff;
                cursor: pointer;
            }
            button:hover {
                background: #c9441c;
            }
        </style>
    </head>

    <body>
        <div class="testbox">
            <form action="/">
                <div class="banner">
                    <h1>Open Recruitment Anggota</h1>
                </div>
                <p class="top-info">Buat kalian Mahasiswa Fakultas Teknologi Informasi Universitas Yarsi yang berminat menambah wawasan dan pengalaman berorganisasi ada kabar gembira nih buat kalian!!</p>
                
                <div class="item">
                    <p>Nama Lengkap<span class="required">*</span></p>
                    <div class="name-item">
                        <input type="text" name="name" placeholder="Isi Nama Lengkap">
                    </div>
                </div>

                <div class="data-item">
                    <div class="item">
                        <p>NPM<span class="required">*</span></p>
                        <input type="number" name="name" required/>
                    </div>

                    <div class="item">
                        <p>Program Studi/Angkatan<span class="required">*</span></p>
                        <select required>
                            <option value="1">Teknik Informatika/18</option>
                            <option value="2">Ilmu Perpustakaan dan Sains Infromasi/18</option>
                            <option value="1">Teknik Informatika/19</option>
                            <option value="2">Ilmu Perpustakaan dan Sains Infromasi/19</option>
                        </select>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="item">
                        <p>Alamat Email<span class="required">*</span></p>
                        <input type="email" name="name" required/>
                    </div>

                    <div class="item">
                        <p>Nomor WhatsApp<span class="required">*</span></p>
                        <input type="number" name="name" required/>
                    </div>
                </div>

                <div class="question">
                    <p>Departemen Pilihan Pertama<span class="required">*</span></p>
                    <div class="question-answer">
                        <div>
                            <input type="radio" value="none" id="radio_1" name="status" required/>
                            <label for="radio_1" class="radio"><span>Departemen Pendidikan</span></label>
                        </div>
                        <div>
                            <input type="radio" value="none" id="radio_2" name="status" required/>
                            <label for="radio_2" class="radio"><span>Departemen Komunikasi</span></label>
                        </div>
                        <div>
                            <input type="radio" value="none" id="radio_3" name="status" required/>
                            <label for="radio_3" class="radio"><span>Departemen Olahraga</span></label>
                        </div>
                        <div>
                            <input type="radio" value="none" id="radio_4" name="status" required/>
                            <label for="radio_4" class="radio"><span>Departemen Agama</span></label>
                        </div>
                    </div>
                </div>

                <div class="question">
                    <p>Departemen Pilihan Kedua<span class="required">*</span></p>
                    <div class="question-answer">
                        <div>
                            <input type="radio" value="none" id="radio_1" name="status" required/>
                            <label for="radio_1" class="radio"><span>Departemen Pendidikan</span></label>
                        </div>
                        <div>
                            <input type="radio" value="none" id="radio_2" name="status" required/>
                            <label for="radio_2" class="radio"><span>Departemen Komunikasi</span></label>
                        </div>
                        <div>
                            <input type="radio" value="none" id="radio_3" name="status" required/>
                            <label for="radio_3" class="radio"><span>Departemen Olahraga</span></label>
                        </div>
                        <div>
                            <input type="radio" value="none" id="radio_4" name="status" required/>
                            <label for="radio_4" class="radio"><span>Departemen Agama</span></label>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <p>Alasan Bergabung SEMA FTI 2020<span class="required">*</span></p>
                    <div class="name-item">
                        <input type="text" name="name" placeholder="Ketikkan Alasan MindBlow kamu">
                    </div>
                </div>

                <div class="item">
                    <p>Pengalaman atau Kelebihan Bidang Tertentu</p>
                    <input type="text" name="providing" placeholder="Tuliskan jika ada dan serahkan tanda bukti (zip) jika ada"/>
                    <input type="file" name="file" accept="file/*">
                </div>

                <div class="btnSubmit">
                    <button type="submit" href="/">Daftarkan Diri Saya</button>
                </div>
            </form>
        </div>        
    </body>
</html>
