<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Ajax ile mesaj gönderme</title>
  </head>
  <body>

    <div class="container">

        <div class="row">

            <div class="col-xl-8 offset-xl-2 py-5">

                <h1>Ajax İle Mesaj Gönderme</h1>

                <p class="lead">Bu form, AJAX ile mesaj göndermeyi sağlamaktadır.</p>

                <div id="MesajSonucAlani" class="alert alert-success d-none" role="alert">
                </div>

                <form id="MesajGondermeFormu" method="post" action="mesaj.gonder.php">

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    Adınız *
                                    <input type="text" name="adi" class="form-control" placeholder="Adınızı giriniz *" requiredXX  oninvalid="this.setCustomValidity('Please Enter valid email')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    Soyadınız *
                                    <input type="text" name="soyadi" class="form-control" placeholder="Soyadınızı giriniz *" requiredXX >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    ePosta *
                                    <input type="email" name="eposta" class="form-control" placeholder="ePosta adresinizi giriniz *" requiredXX >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    Mesajınızın konusunu seçiniz *
                                    <select name="mesajkonusu" class="form-control" requiredXX >
                                        <option value=""></option>
                                        <option value="Öneri">Öneri</option>
                                        <option value="Şikayet">Şikayet</option>
                                        <option value="Teşekkür">Teşekkür</option>
                                        <option value="Diğer">Diğer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    Mesajınız
                                    <textarea name="mesajmetni" class="form-control" placeholder="Mesajınızı bu alana yazınız *" rows="4" requiredXX ></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="button" class="btn btn-success btn-send" value="Mesajımı Gönder!" onclick="MesajFormunuGonder()">
                            </div>
                        </div>
                    </div>

                </form>

            </div> <!-- /col-8 -->

        </div> <!-- /row -->

    </div> <!-- /container -->


<script type="text/javascript">
    function MesajFormunuGonder() {
        var url = "ajax.mesaj.gonder.php";

        $.ajax({
            method: "POST",
            dataType: "JSON", // veya HTML
            url: url,
            data: $("#MesajGondermeFormu").serialize() + "degisken1=deger",
            success: function (GelenCevap)
            {
                // GelenCevap = mesaj.gonder.php'den gelen cevabı saklar
                //$('#MesajSonucAlani').html("<h1>" + GelenCevap.ISLEM_SONUCU + "</h1><pre>" + GelenCevap.PARAMETRELER + "</pre>");
                $('#MesajSonucAlani').html( GelenCevap.ISLEM_SONUCU ).hide().removeClass("d-none").show(1000);

                $('#MesajGondermeFormu').hide(1000);
            }
        });

    } // MesajFormunuGonder()
</script>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
