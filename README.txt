Mysqlを起動してPBL用のデータベースを作成（任意）
create database h000yama0;
use h000yama0;

 //ID | username | password の要素を持つテーブル（IDはオートインクリメント）
create table users (
id int not null auto_increment primary key,
username varchar(100) not null,
password varchar(255) not null);

insert into users values (1, 'sampleuser', 'samplepass');
↑これでデータを書き足せる。（signup.phpのページからも可能）