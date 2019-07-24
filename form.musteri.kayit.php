<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Müşteri Kayıt Formu</title>
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
      margin: 15px 0;
      font-weight: 400;
      }
      .formbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 3.5em;
      }
      form {
      width: 50%;
      padding: 20px;
      background: #fff;
      box-shadow: 0 2px 5px #ccc;
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
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 6px);
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item:hover p, .item:hover i {
      color: #095484;
      }
      input:hover, select:hover, textarea:hover, .preferred-metod label:hover input {
      box-shadow: 0 0 5px 0 #095484;
      }
      .preferred-metod label {
      display: block;
      margin: 5px 0;
      }
      .preferred-metod:hover input {
      box-shadow: none;
      }
      .preferred-metod-item input, .preferred-metod-item span {
      width: auto;
      vertical-align: middle;
      }
      .preferred-metod-item input {
      margin: 0 5px 0 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      .btn-block {
      margin-top: 20px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      background-color: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background-color: #0666a3;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
    </style>
  </head>
<img src = "veganyemek.jpg">
  <body>
    <div class="formbox">
      <form action="/">
        <h1>Müşteri Kayıt</h1>
        <div class="item">
          <div class="name-item">
            <input type="text" name="name" placeholder="Ad" />
            <input type="text" name="name" placeholder="Soyad" />
          </div>
        </div>
        <div class="item">
          <input type="text" name="name"placeholder="E-posta" />
        </div>
        <div class="item">
          <input type="text" name="name"placeholder="Parola" />
        </div>
        <div class="item">
          <input type="text" name="name"placeholder="Telefon" />
        </div>
         <div class="preferred-metod-item"></label>
          <label> <span><a href="#">Sözleşme Şartları</a>nı okudum</span></label>
            <label><input type="checkbox" name="name"> <span>Kabul ediyorum.</span></label>
            <label><input type="checkbox" name="name"> <span>Kabul etmiyorum.</span></label>
          </div>

        <div class="item">
          <h3>Adres</h3>
          <div class="city-item">
            <select>
              <option value="">İl</option>
              <option value="1">Ankara</option>
              <option value="2">İstanbul</option>
              <option value="3">İzmir</option>
              <option value="4">Antalya</option>
              <option value="5">Bolu</option>
            </select>
            <select>
              <option value="">İlçe</option>
              <option value="1">Keçiören</option>
              <option value="2">Çankaya</option>
              <option value="3">Bostanlı</option>
              <option value="4">Şişli</option>
              <option value="5">Karşıyaka</option>
            </select>
            <select>
              <option value="">Mahalle</option>
              <option value="1">Meşrutiyet Mahallesi</option>
              <option value="2">Ayrancı Mahallesi</option>
              <option value="3">Yıldız Mahallesi</option>
              <option value="4">Toprak Mahallesi</option>
              <option value="5">Çiçek Mahallesi</option>
            </select>

          </div>
          <div class="name-item">
            <input type="text" name="name" placeholder="Cadde" />
            <input type="text" name="name" placeholder="Sokak" />
            <input type="text" name="name" placeholder="Bina No" />
            <input type="text" name="name" placeholder="Kapı No" />
          </div>
        </div>
        <div class="item">
          <input type="text" name="name"placeholder="Adres Tarifi" />
        </div>
       <div class="btn-block">
          <button type="submit" href="/">GÖNDER</button>
        </div>
      </form>
    </div>
  </body>
</html>
