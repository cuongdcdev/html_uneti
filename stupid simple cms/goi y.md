


- tạo 1 bảng tên là category trong db ( id, name, desc )  <--- desc : nó là cái giới thiệu chung về menu


- Sửa lại bảng `posts` trong db, thêm 1 cái cột tên menu ( cột này chứa id của menu mà post  thuộc về )


- nếu muốn biết menu này chứa những cái bài viết nào thì dùng lệnh :

	```
				SELECT * FROM posts WHERE menu = id_menu

	```	

- tạo trang list bài viết theo menu ( bấm vào menu -> trỏ về những bài viết thuộc cái menu đó )

- admin : tạo phần quản lí thêm sửa xóa menu 



---- T6 . 3/5/2017 --- 

- lam them phan category.php có tác dụng list toàn bộ các bài viết thuộc cùng 1 danh mục 

- tạo 1 bảng user chứa ít nhất id , username , password  , email 

- nếu còn tg thì tạo thử 1 cái hệ thống login ( dùng $_SESSION )