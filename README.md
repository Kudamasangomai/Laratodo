## About LaraTodo

LaraTodo is a Todo  Web Wpplication 

Features and Conncept Implemented:
-  Build With laravel,Tailwind Css and Splade(A laravel tool for single page application)
-  User can  Login and Register too.
-  User can Create,Read ,Update ,Delete their Todo.
-  Admin can Create and Delete accounts on behalf of users.
-  Admin account is created via the console command(check instruction section).
-  A Policy was used to Authorise users on the Todo Model.
-  Gates were Used to Authorise Admins only on  User action(CRUD Functionalty).
-  Emails are send to user whose accounts are Created by Admins with their login creadentials(tested    with gmail and mailtrap).
-  Emails are Send daily using schedule task to Users with their total todo list and the todo list.
-  screenshots are in screenshots folder.


## Instructions 
(if you got this from my email as zip)


- Extract the zip file into your projects folder('C:\xampp\htdocs\laravel\) or where you install your projects
- create your database name it todo or your own name
- open the .env file and edit database credentials (or live it as todo)
- Run php artisan migrate 
- Run php artisan create:admin (to create admin account)
- then run php artisan serve
- open another command in your root folder and run npm run dev
- then go to http://localhost:8000/


## Instructions
(if you got this project from github)

- Clone the repository 
- create your database name it todo or your preference
- Copy .env.example file to .env and edit database credentials there
- open the .env file and edit database credentials (or live it as todo)
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate__
- Run __php artisan create:admin__
- then run __php artisan serve__
- open another command in your root folder and run __npm run dev__
- then go to http://localhost:8000/


## License

Feel free to use and re-use any way you want.