### written by Abd-Elrahman Mohamed 

# Laravel API Configuration Guide  

#### You gonna find Api Docs here : localhost:8000/docs

This guide provides a complete setup for this Laravel API using Docker, JWT authentication, and the Service-Repository pattern.  

---

## Tools I used 

- **Docker** 
- **Composer** 
- **Laravel 11**   
- **MySql 9**
- **JWT**
- **Postman**   
- **TablePlus** 

---
## techniques 
- **Repository Pattern**
- **Services Layers**
- **Dependency injection** 
- **NWIDART**  # A Modular Package for Laravel

### ERD :
<img width="1393" alt="Screenshot 2025-02-25 at 12 51 57 AM" src="https://github.com/user-attachments/assets/9a46aaac-6268-41a6-bf42-9ad56d93854d" />

<img width="1103" alt="admins, operators , entities" src="https://github.com/user-attachments/assets/09c8c0a0-04c3-4463-b6dd-67b96872fe80" />

<img width="1055" alt="customattrinutes , entityrecord" src="https://github.com/user-attachments/assets/e0994c9f-5b59-4ccc-816a-13b6eeaeaf7f" />

<img width="1013" alt="entityrecordvalue" src="https://github.com/user-attachments/assets/83b06a7e-84e1-490a-a22b-ab3e7917abe2" />

___
## Setting Up the API : 

  ### 1- Set it up Locally : 

- ### Clone the Repository  
- ### composer install
- ### cp .env.example .env
- ### Update the database settings in .env:
- **DB_CONNECTION=mysql**
- **DB_HOST=localhost**
- **DB_PORT=3306**
- **DB_DATABASE=your owun db name**
- **DB_USERNAME=root**
- **DB_PASSWORD=you db password if existing**
- **php artisan migrate --seed**

 ---


  #### 2- Via Docker:

- **DB_CONNECTION=mysql**
- **DB_HOST=db**
- **DB_PORT=3306**
- **DB_DATABASE=laravel**
- **DB_USERNAME=laravel**
- **DB_PASSWORD=laravel**
  
### docker-compose up -d
### docker exec -it laravel_app php artisan migrate --seed

### use Postman http://127.0.0.1:8000/api/admin/register 


## Project Structure :

<img width="235" alt="Screenshot 2025-02-25 at 12 48 49 AM" src="https://github.com/user-attachments/assets/0a4f082a-5071-427e-a923-a590e72a9df3" />

### Route List Sample :

<img width="1411" alt="Screenshot 2025-02-25 at 1 10 30 AM" src="https://github.com/user-attachments/assets/690ad343-de3d-4c1a-955a-dc2915e0b1f6" />
