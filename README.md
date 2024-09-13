# HR and Reservation Management System API

| | |
|-|-|
|![System Log](/images/log.png)|![Dashboard](/images/dashboard.png)|
|System Log|Dashboard|
|![Check Attendance History](/images/attendance-history.png)|![Create new Job Application](/images/job-application.png)|
|Check Attendance History|Create new Job Application|
|![Define new Role and set permissions](/images/new-role.png)|![Update Role Permissions](/images/update-role.png)|
|Define new Role and set permissions|Update Role Permissions|

## Overview

This API provides the backend and integrations for an HR and Consultation Management application used by QIAM Center. It handles user management, permissions, HR functions like recruitment and attendance tracking as well as a consultation booking system. 

The API is built using:
- Laravel
- MySQL
- Firebase Cloud Messaging
- Email APIs

The repo contains the full API code as well as documentation.

## Features

- User authentication and permissions management
- Recruitment and applicant tracking 
- Employee profiles, attendance, leave tracking
- Role-based access control
- Consultant schedules and availability
- Customer appointment booking system
- Push notifications and email integrations

## System Architecture

Our HR and Reservation Management System API follows a monolithic architecture, providing a unified and integrated solution for all functionalities. This approach offers simplicity in development, deployment, and maintenance, making it suitable for our current scale and requirements.

The monolithic architecture allows for:
- Centralized data management
- Simplified development and testing processes
- Easier deployment and scaling as a single unit
- Efficient inter-module communication

While this architecture serves our current needs effectively, it's designed with modularity in mind to allow for potential future migration to a microservices architecture if required.

![System Architecture](/images/architecture.png)

## Demo

You can access a live demo of the system at the following URL:

https://qiam-dashboard.vercel.app/login

To explore the system's functionality, you can use the following test credentials:

### Employee Login
- Username: hadi2
- Password: 12341234

### Consultant Login
- Username: tester
- Password: 12341234

Feel free to explore the different features and functionalities available to each user type.

## Documentation

The full API documentation can be found at:
- [HR Module Documentation][hr-docs]
- [Consultation Module Documentation][consult-docs]

[hr-docs]: https://documenter.getpostman.com/view/10175953/2s93eZyrzB
[consult-docs]: https://documenter.getpostman.com/view/27451041/2s9XxyQYSw

## Usage

To use the API:

1. Clone the repository
2. Configure your database credentials and API keys in `.env`
3. Run `composer install`
4. Run migrations:
   - Basic migrations:
    
       ```bash
       php artisan migrate
       ```
   - HR module migrations:
   
       ```bash  
       php artisan migrate --path=database/migrations/HR
       ```
       
   - CD module migrations:
   
       ```bash
       php artisan migrate --path=database/migrations/CD
       ```
5. Seed database:
   ```bash
   php artisan db:seed
   ```
6. Run `php artisan serve` to run the API locally

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)
