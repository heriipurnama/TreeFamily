1. Buat rancangan 1 table saja <br>
```sql
mysql> desc tb_keluarga;
+---------------+-------------+------+-----+---------+-------+
| Field         | Type        | Null | Key | Default | Extra |
+---------------+-------------+------+-----+---------+-------+
| id_keluarga   | int(11)     | NO   | PRI | NULL    |       |
| nama          | varchar(45) | YES  |     | NULL    |       |
| jenis_kelamin | varchar(2)  | YES  |     | NULL    |       |
+---------------+-------------+------+-----+---------+-------+
3 rows in set (0.01 sec)
```
2. Input data sesuai dengan silsilah<br>
```sql
mysql> select * from tb_keluarga;
+-------------+-------+---------------+
| id_keluarga | nama  | jenis_kelamin |
+-------------+-------+---------------+
|           1 | Budi  | L             |
|           2 | Dedi  | L             |
|           3 | Dodi  | L             |
|           4 | Dede  | L             |
|           5 | Dewi  | P             |
|           6 | Feri  | L             |
|           7 | Farah | P             |
|           8 | Gugus | L             |
|           9 | Gandi | L             |
|          10 | Hani  | P             |
|          11 | Hana  | P             |
+-------------+-------+---------------+
11 rows in set (0.00 sec)
```
3. Buat query untuk mendapatkan semua anak Budi
```sql
mysql> select * from tb_keluarga where nama like 'D%';
+-------------+------+---------------+
| id_keluarga | nama | jenis_kelamin |
+-------------+------+---------------+
|           2 | Dedi | L             |
|           3 | Dodi | L             |
|           4 | Dede | L             |
|           5 | Dewi | P             |
+-------------+------+---------------+
4 rows in set (0.00 sec)
```
4. Buat query untuk mendapatkan cucu dari budi	
```sql
mysql> select * from tb_keluarga where nama like 'F%' OR nama like 'G%' Or nama like 'H%';
+-------------+-------+---------------+
| id_keluarga | nama  | jenis_kelamin |
+-------------+-------+---------------+
|           6 | Feri  | L             |
|           7 | Farah | P             |
|           8 | Gugus | L             |
|           9 | Gandi | L             |
|          10 | Hani  | P             |
|          11 | Hana  | P             |
+-------------+-------+---------------+
6 rows in set (0.00 sec)
```
5. Buat query untuk mendapatkan cucu perempuan dari budi
```sql
mysql> select * from tb_keluarga where nama like 'Fa%' or nama like 'H%';
+-------------+-------+---------------+
| id_keluarga | nama  | jenis_kelamin |
+-------------+-------+---------------+
|           7 | Farah | P             |
|          10 | Hani  | P             |
|          11 | Hana  | P             |
+-------------+-------+---------------+
3 rows in set (0.00 sec)
```
6. Buat query untuk mendapatkan bibi dari Farah
```sql
mysql> select * from tb_keluarga where nama like 'D%' and jenis_kelamin='P';
+-------------+------+---------------+
| id_keluarga | nama | jenis_kelamin |
+-------------+------+---------------+
|           5 | Dewi | P             |
+-------------+------+---------------+
1 row in set (0.00 sec)
```
7. Buat query untuk mendapatkan sepupu laki-laki dari Hani
```sql
mysql> select * from tb_keluarga where nama like 'Fe%' or nama like 'G%' and jenis_kelamin='L';
+-------------+-------+---------------+
| id_keluarga | nama  | jenis_kelamin |
+-------------+-------+---------------+
|           6 | Feri  | L             |
|           8 | Gugus | L             |
|           9 | Gandi | L             |
+-------------+-------+---------------+
3 rows in set (0.00 sec)
 ```