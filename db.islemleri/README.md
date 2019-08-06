# Database İşlem Örnekleri İçeren Proje

## Kullanılan komutlar

| PHP KOMUTU  |KULLANIMI   |
|---|---|
| `isset();`  | Varlık Kontrolü yapmayı sağlar. |
| `sprintf`  |  Biçemli bir dizge döndürür. |
| `include();`  | Betiğe dahil edilecek dosyalar önce belirtilen dizinde aranır, eğer bir dizin belirtilmemişse include_path yönergesinde belirtilen yollarda aranır.  |
| `echo`  | Girdi olarak verilen yazıyı, ekranda veya gönderildiği dosyada parametrelerle belirtilen şekilde görüntüler.  |
| `die();` |  Php'de belirli bir yerden sonra php kodlarının çalışmaması için _die_ yada exit kullanılmaktadır. |
| `$_POST` | Bu metod URL’ de görünmesini istemediğimiz veriler olduğunda, dosya yükleyeceğimiz zaman, querystring’in çok büyük olduğu durumlarda kullanılır.  |
| `$_GET` | Bu metod ile yapılan istekler tarayıcının adres satırında görünür. Sadece belirli boyutta veri gönderileceği zaman kullanılır.  |

| SQL KOMUTU  |KULLANIMI   |
|---|---|
| `mysqli_query` |  SQL sorgusunu çalıştırma komutudur |
| `mysqli_fetch_assoc();`  | SQL sonucunu ilişkisel dizi olarak almak için kullanılır  |
| `UPDATE`  | Veritabanında bulunan verileri değiştirmek-güncellemek amacıyla kullanılan bir deyimdir.  |
| `DELETE `| Bu ifade tablomuzda bulunan kayıtları silmek için kullanılır.  |
| `mysqli_real_escape_string();` | SQL sorgusunda bulunacak tehlikeli karakterlerin kaçış karakterleri ile güvenlihale getirilmesini sağlar  |
| `INSERT INTO` | SQL'de veritabanına kayıt eklemek için bu deyimini kullanırız.  |


## insert.php *sayfası*
- Amacımız sayfadaki formdan gelen verileri veri tabanına aktarma
- insert.php sayfamız ilk gösterilecek sayfamızdır.
- ```<?php include("db.php"); ``` ile başlar. Db sayfamızın içinde veri tabanına bağlantı için komutlar bulunur. Bu sayfayı ayrı oluşturup çağırmamızın sebebi tamamen güvenliktir. **db.php** sayfasında veri tabanına bağlantı için parolamız bulunur.
- Bir sonraki adımda `İNSERT İNTO` komutu ile veritabanımıza kullanıcının formdan girdiği verileri ekliyoruz. Yalnız bunu kullanıcının formu doldurma şartı ile koşullandırıyoruz. `if (isset( $_POST["adi"] )) { ...}`komutu ile eğer kullanıcının adı post edilmişse içindekileri çalıştır komutu veriyoruz.

## delete.php *sayfası*

- Bu sayfada amacımız kullanıcın veritabanındaki bilgilerini silmek
- Öncelikle kullanıcın id'sine göre silinecek verileri gösteririz.
- Silme işlemini zorlaştırmamız gerekmektedir bunun sebebi istenmeyen veri kaybını önlemek. Bunun için bu sayfadaki şartımız kullanıcın **SİL** yazarak bunu onaylamasıdır.

## list.php *sayfası*

- Bu sayfada amacımız kayıtları listelemek ve kolayca kayıtlara ulaşmak,kayıtları güncelleme ve silme işlemleri sayfalarına ulaşabilmektir.
- Bunun için tüm kayıtları çekiyoruz.
- `<a href='show.php?id=%s'>Göster</a>` komutu ile bir link koyuyoruz bu link bizi seçilen kullanıcın detaylarını göreceğimiz sayfaya yönlendiriyor.
- ` <a href='update.php?id=%s'>Güncelle</a> `bu link ile seçilen kullanıcının verilerini güncelleyebileceğimiz sayfaya yönlendiriliyoruz.
- `<a href='delete.php?id=%s'>Sil</a>`bu link ile de seçilen kullanıcıyı siliyoruz.

## ornek-db.php *sayfası*
- Bu sayfa **db.php** sayfasının bir örneğidir.
- Projelerimizi paylaşırken güvenlik sorunu olmaması açısından veritabanına bağlantı parolamızın olduğu db.php sayfasını gizleyerek kullanacak diğer insanlar için örnek sayfa oluşturuyoruz.

## show.php *sayfası*

- Sayfanın amacı gelen id'ye göre seçilen kullanıcının bilgilerini göstermektir.
-
## update.php *sayfası*
- Sayfanın amacı formdan gelen verileri gösterip üzerinde değişiklik yapıp güncellemeye imkan vermesidir.
- Bunun için `UPDATE` komutu kullanılır.

## sql.injection.ornegi.php *sayfası*

- Sayfanın amacı sql injectionı anlamak.
- [Bunun ile ilgili detaylı bilgiyi burada bulabilirsiniz.](https://github.com/nuriakman/PHP-Egitimi/blob/master/konular/giris.konulari.mysql.md)
