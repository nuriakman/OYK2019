# ÇİFT KAYIT VAR MI?
Not: Sadece mükerrer olabilecek sahalar çekilmelidir.
```SQL
SELECT
  kelime1, kelime2
FROM
  esanlam
GROUP BY
  kelime1, kelime2
-- Normal çalışmada 124,652 kayıt geldi.
-- Grop by yapınca: 124,140 kayıt geldi.  512 Adet mükerrer kayıt var.
``` --

# MÜKERRER OLANLAR HANGİLERİ?
Not: Sadece mükerrer olabilecek sahalar çekilmelidir.
```SQL
SELECT
  kelime1, kelime2
FROM
  esanlam
GROUP BY
  kelime1, kelime2
HAVING
  COUNT(*) > 1
-- Bu sorgu sonucu 512 kayıt geldi
 ```

# ÇİFT KAYITLARIN ID BİLGİSİNİN ÇEKİLMESİ:
Not: birden fazla aynı kayıt varsa, bir tanesinin alınması gerekir.
Hangisinin alınacağını da MAX(id) veya MIN(id)'ye göre yapabiliriz

```SQL
SELECT
  MAX(id) as id
FROM
  esanlam
GROUP BY
  kelime1, kelime2
HAVING
  COUNT(*) > 1
```

# ÇİFT KAYITLARIN SİLİNMESİ
```SQL
DELETE FROM esanlam
  WHERE id IN (
    SELECT * FROM (
      SELECT MAX(id) AS id FROM esanlam
        GROUP BY kelime1, kelime2
        HAVING COUNT(*) > 1
    ) AS SILINECEKLER
 )
```
